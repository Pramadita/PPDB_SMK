<?php

class login_model extends CI_model
{
    private $_table = "admin";

    public function doLogin()
    {
        $post = $this->input->post();

        // cari user berdasarkan email dan username
        $this->db->where('email', $post["email"])
            ->or_where('username', $post["email"]);
        $user = $this->db->get($this->_table)->row();

        // jika user terdaftar
        if ($user) {
            // periksa password-nya
            $isPasswordTrue = password_verify($post["password"], $user->password);

            // jika password benar dan dia admin
            if ($isPasswordTrue) {
                // login sukses yay!
                $this->session->set_userdata(['user_logged' => $user]);
                $this->_updateLastLogin($user->admin_id);
                return true;
            }
        }

        // login gagal
        return false;
    }

    public function isNotLogin()
    {
        return $this->session->userdata('user_logged') === null;
    }

    private function _updateLastLogin($admin_id)
    {
        $sql = "UPDATE {$this->_table} SET last_login=now() WHERE admin_id={$admin_id}";
        $this->db->query($sql);
    }
}
