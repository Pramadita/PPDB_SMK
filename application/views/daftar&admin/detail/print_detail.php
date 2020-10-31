<!DOCTYPE html>
<html>

<head>
    <title>Detail Siswa <?= $siswa["Nama_Siswa"]; ?></title>
</head>
<table align="center">
    <tr>
        <td><img src="<?= base_url('assets/'); ?>images/logo fix.png" width="70" height="70"></td>
        <td width="500">
            <center>
                <font size="4">YAYASAN AULIYA MURSYIDI</font></br>
                <font size="5"><b>SMK AULIYA TELADAN MANDIRI (ATM) LEMAHSUGIH</b></font></br>
                <font size="2">Jl.Babakan Randu No.1 RT/RW:005/002 Desa Lemah Sugih Kec.Lemahsugih Kab.Majalengka Prov. Jawa Barat-4565</font>
            </center>
        </td>
    </tr>
    <tr>
        <td colspan="2">
            <hr>
        </td>
    </tr>
</table>
<br>
<table align="center">
    <tr>
        <td width="575">
            <center> <b>DATA SISWA</b><br>
                <img src="<?= base_url(); ?>pendaftar/Foto_Siswa/<?= $siswa["Foto"]; ?>" width="90" height="120">
                <center>
        </td>
    </tr>
</table>
<br>
<table align="center">
    <tr>
        <td width="75">Tingkat</td>
        <td width="205">: <?= $siswa["Tingkat"]; ?></td>
        <td width="75">Prodi</td>
        <td width="205">: <?= $siswa["Prodi"]; ?></td>
    </tr>
</table>
<table align="center">
    <tr>
        <td width="75">Nama</td>
        <td width="490">: <?= $siswa["Nama_Siswa"]; ?></td>
    </tr>
    <tr>
        <td width="75">Gender</td>
        <td width="490">: <?= $siswa["Jenis_Kelamin"]; ?></td>
    </tr>
</table>
<table align="center">
    <tr>
        <td width="75">Asal Sekolah</td>
        <td width="205">: <?= $siswa["Asal_Sekolah"]; ?></td>
        <td width="75">NISN</td>
        <td width="205">: <?= $siswa["NISN"]; ?></td>
    </tr>
    <tr>
        <td width="75">NO IJAZAH SMP/MTs</td>
        <td width="205">: <?= $siswa["No_Ijazah"]; ?></td>
        <td width="75">NO SKHUN SMP/MTs</td>
        <td width="205">: <?= $siswa["No_SKHUN"]; ?></td>
    </tr>
    <tr>
        <td width="75">NO UN SMP/MTs</td>
        <td width="205">: <?= $siswa["No_UN"]; ?></td>
    </tr>
</table>
<table align="center">
    <tr>
        <td width="75">NIK</td>
        <td width=" 490">: <?= $siswa["NIK"]; ?></td>
    </tr>
    <tr>
        <td width="75">TTL</td>
        <td width=" 490">: <?= $siswa["TTL"]; ?></td>
    </tr>
    <tr>
        <td width="75">Alamat Tinggal</td>
        <td width=" 490">: <?= $siswa["Alamat_Tinggal"]; ?></td>
    </tr>
</table>
<table align="center">
    <tr>
        <td width="75">Alat Transportasi</td>
        <td width="205">: <?= $siswa["Transportasi"]; ?></td>
        <td width="75">Ukuran Pakaian</td>
        <td width="205">: <?= $siswa["Ukuran_Pakaian"]; ?></td>
    </tr>
    <tr>
        <td width="75">Jenis Tinggal</td>
        <td width="205">: <?= $siswa["Jenis_Tinggal"]; ?></td>
        <td width="75">Rencana Tinggal</td>
        <td width="205">: <?= $siswa["Rencana_Tinggal"]; ?></td>
    </tr>
    <tr>
        <td width="75">No Hp</td>
        <td width="205">: <?= $siswa["No_HP"]; ?></td>
        <td width="75">Email</td>
        <td width="205">: <?= $siswa["Email"]; ?></td>
    </tr>
    <tr>
        <td width="75">Jenis Bantuan</td>
        <td width="205">: <?= $siswa["Jenis_Bantuan"]; ?></td>
        <td width="75">No KKS</td>
        <td width="205">: <?= $siswa["No_KKS"]; ?></td>
    </tr>
</table>
<br>
<table align="center">
    <tr>
        <td width="575">
            <center> <b>DATA ORTU/WALI</b><br>
                <center>
        </td>
    </tr>
</table>
<table align="center">
    <tr>
        <td width="287">
            <center> <b>DATA AYAH KANDUNG</b><br>
                <center>
        </td>
        <td width="287">
            <center> <b>DATA IBU KANDUNG</b><br>
                <center>
        </td>
    </tr>
</table>
<table align="center">
    <tr>
        <td width="75">Nama Ayah</td>
        <td width="205">: <?= $siswa["Nama_Ayah"]; ?></td>
        <td width="75">Nama Ibu</td>
        <td width="205">: <?= $siswa["Nama_Ibu"]; ?></td>
    </tr>
    <tr>
        <td width="75">Lahir</td>
        <td width="205">: <?= $siswa["Lahir_Ayah"]; ?></td>
        <td width="75">Lahir</td>
        <td width="205">: <?= $siswa["Lahir_Ibu"]; ?></td>
    </tr>
    <tr>
        <td width="75">Pekerjaan</td>
        <td width="205">: <?= $siswa["Pekerjaan_Ayah"]; ?></td>
        <td width="75">Pekerjaan</td>
        <td width="205">: <?= $siswa["Pekerjaan_Ibu"]; ?></td>
    </tr>
    <tr>
        <td width="75">Pendidikan</td>
        <td width="205">: <?= $siswa["Pendidikan_Ayah"]; ?></td>
        <td width="75">Pendidikan</td>
        <td width="205">: <?= $siswa["Pendidikan_Ibu"]; ?></td>
    </tr>
    <tr>
        <td width="75">Penghasilan Bulanan</td>
        <td width="205">: <?= $siswa["Penghasilan_Ayah"]; ?></td>
        <td width="75">Penghasilan Bulanan</td>
        <td width="205">: <?= $siswa["Penghasilan_Ibu"]; ?></td>
    </tr>
</table>

<table align="center">
    <tr>
        <td width="287">
            <center> <b>DATA WALI</b><br>
                <center>
        </td>
    </tr>
</table>
<table align="center">
    <tr>
        <td width="75">Nama Wali</td>
        <td width="205">: <?= $siswa["Nama_Wali"]; ?></td>
    </tr>
    <tr>
        <td width="75">Lahir</td>
        <td width="205">: <?= $siswa["Lahir_Wali"]; ?></td>
    </tr>
    <tr>
        <td width="75">Pekerjaan</td>
        <td width="205">: <?= $siswa["Pekerjaan_Wali"]; ?></td>
    </tr>
    <tr>
        <td width="75">Pendidikan</td>
        <td width="205">: <?= $siswa["Pendidikan_Wali"]; ?></td>
    </tr>
    <tr>
        <td width="75">Penghasilan Bulanan</td>
        <td width="205">: <?= $siswa["Penghasilan_Wali"]; ?></td>
    </tr>
</table>
<br>
<table align="center">
    <tr>
        <td width="287">
            <center> <b>DATA PERIODIK</b><br>
                <center>
        </td>
    </tr>
</table>
<table align="center">
    <tr>
        <td width="75">Tinggi Badan</td>
        <td width="50">: <?= $siswa["Tinggi_Badan"]; ?></td>
    </tr>
    <tr>
        <td width="75">Berat Badan</td>
        <td width="">: <?= $siswa["Berat_Badan"]; ?></td>
    </tr>
    <tr>
        <td width="70">Jarak Ke Sekolah</td>
        <td width="">: <?= $siswa["Jarak_Sekolah"]; ?></td>
    </tr>
    <tr>
        <td width="180">Waktu Tempuh Ke Sekolah</td>
        <td width="">: <?= $siswa["Waktu_Tempuh"]; ?></td>
    </tr>
    <tr>
        <td width="160">Jumlah Sudara Kandung</td>
        <td width="">: <?= $siswa["Saudara_Kandung"]; ?></td>
    </tr>
</table>
<script type="text/javascript">
    window.print();
</script>

</html>