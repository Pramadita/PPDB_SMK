<page backtop="7mm" backbottom="7mm" backleft="10mm" backright="10mm">
    <page_header>
        Detail Siswa <?= $siswa["Nama_Siswa"]; ?>
    </page_header>
    <page_footer>
        Detail Siswa <?= $siswa["Nama_Siswa"]; ?>
    </page_footer>
    <style>
        ul {
            list-style-type: none;
            margin: 0;
            padding: -10;
            text-align: center;
        }

        .kop-surat {
            width: 100vh
        }

        table.kop-surat td.konten {
            height: 110px;
        }

        table.kop-surat td.smk {
            height: 110px;
        }

        td.smk h4 {
            padding: 0px;
        }
    </style>
    <table class="kop-surat" align="center">
        <tr class="konten">
            <td style="padding-right:5px;"><img src="<?php echo base_url('assets/images/logosmk.png') ?>" alt="" style="width:80px;height:80px;"></td>
            <td class="smk" align="center" style="height:110px;">
                <font size="8pt" style=" text-align:center; font-weight: bold;">YAYASAN AULIYA MURSYIDI</font><BR>
                <h4 style="padding:none;">
                    <font size="10pt" style=" text-align:center; font-weight: bold;">SMK AULIYA TELADAN MANDIRI (ATM) LEMAHSUGIH</font><BR>
                </h4>
                <font size="2pt" style=" text-align:center;">Jl.Babakan Randu No.1 RT/RW:005/002 Desa Lemah Sugih Kec.Lemahsugih</font><BR>
                <font size="2pt" style=" text-align:center; "> Kab.Majalengka Prov. Jawa Barat-4565</font><BR>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <hr>
            </td>
        </tr>
        <br>
    </table>

    <table align="center">
        <tr>
            <td align="center" width="575">
                <h4 style="padding:none;"><b>DATA SISWA</b><BR></h4>
                <img src="<?= base_url(); ?>pendaftar/Foto_Siswa/<?= $siswa["Foto"]; ?>" width="90" height="120">
            </td>
        </tr>
    </table>
    <br>
    <table align="center">
        <tr>
            <td width="80">
                <font size="2">Tingkat</font>
            </td>
            <td width="200">
                <font size="2">: <?= $siswa["Tingkat"]; ?></font>
            </td>
            <td width="80">
                <font size="2">Prodi</font>
            </td>
            <td width="200">
                <font size="2">: <?= $siswa["Prodi"]; ?></font>
            </td>
        </tr>
    </table>
    <table align="center">
        <tr>
            <td width="80">Nama</td>
            <td width="490">: <?= $siswa["Nama_Siswa"]; ?></td>
        </tr>
        <tr>
            <td width="80">Gender</td>
            <td width="490">: <?= $siswa["Jenis_Kelamin"]; ?></td>
        </tr>
    </table>
    <table align="center">
        <tr>
            <td width="80">Asal Sekolah</td>
            <td width="200">: <?= $siswa["Asal_Sekolah"]; ?></td>
            <td width="80">NISN</td>
            <td width="200">: <?= $siswa["NISN"]; ?></td>
        </tr>
        <tr>
            <td width="80">No Ijazah</td>
            <td width="200">: <?= $siswa["No_Ijazah"]; ?></td>
            <td width="80">No SKHUN</td>
            <td width="200">: <?= $siswa["No_SKHUN"]; ?></td>
        </tr>
        <tr>
            <td width="80">No UN</td>
            <td width="200">: <?= $siswa["No_UN"]; ?></td>
        </tr>
    </table>
    <table align="center">
        <tr>
            <td width="80">NIK</td>
            <td width="490">: <?= $siswa["NIK"]; ?></td>
        </tr>
        <tr>
            <td width="80">TTL</td>
            <td width="490">: <?= $siswa["TTL"]; ?></td>
        </tr>
        <tr>
            <td width="80">Alamat Tinggal</td>
            <td width="490">: <?= $siswa["Alamat_Tinggal"]; ?></td>
        </tr>
    </table>
    <table align="center">
        <tr>
            <td width="80">Alat Transportasi</td>
            <td width="200">: <?= $siswa["Transportasi"]; ?></td>
            <td width="80">Ukuran Pakaian</td>
            <td width="200">: <?= $siswa["Ukuran_Pakaian"]; ?></td>
        </tr>
        <tr>
            <td width="80">Jenis Tinggal</td>
            <td width="200">: <?= $siswa["Jenis_Tinggal"]; ?></td>
            <td width="80">Rencana Tinggal</td>
            <td width="200">: <?= $siswa["Rencana_Tinggal"]; ?></td>
        </tr>
        <tr>
            <td width="80">No Hp</td>
            <td width="200">: <?= $siswa["No_HP"]; ?></td>
            <td width="80">Email</td>
            <td width="200">: <?= $siswa["Email"]; ?></td>
        </tr>
        <tr>
            <td width="80">Jenis Bantuan</td>
            <td width="200">: <?= $siswa["Jenis_Bantuan"]; ?></td>
            <td width="80">No KKS</td>
            <td width="200">: <?= $siswa["No_KKS"]; ?></td>
        </tr>
    </table>
    <BR>
    <table align="center">
        <tr>
            <td align="center" width="580">
                <h4 style="padding:none;"><b>DATA ORTU/WALI</b><BR></h4>
            </td>
        </tr>
    </table>
    <table align="center">
        <tr>
            <td width="290">
                <b>DATA AYAH KANDUNG</b>
            </td>
            <td width="290">
                <b>DATA IBU KANDUNG</b><br>
            </td>
        </tr>
    </table>
    <table align="center">
        <tr>
            <td width="80">Nama Ayah</td>
            <td width="200">: <?= $siswa["Nama_Ayah"]; ?></td>
            <td width="80">Nama Ibu</td>
            <td width="200">: <?= $siswa["Nama_Ibu"]; ?></td>
        </tr>
        <tr>
            <td width="80">Lahir</td>
            <td width="200">: <?= $siswa["Lahir_Ayah"]; ?></td>
            <td width="80">Lahir</td>
            <td width="200">: <?= $siswa["Lahir_Ibu"]; ?></td>
        </tr>
        <tr>
            <td width="80">Pekerjaan</td>
            <td width="200">: <?= $siswa["Pekerjaan_Ayah"]; ?></td>
            <td width="80">Pekerjaan</td>
            <td width="200">: <?= $siswa["Pekerjaan_Ibu"]; ?></td>
        </tr>
        <tr>
            <td width="80">Pendidikan</td>
            <td width="200">: <?= $siswa["Pendidikan_Ayah"]; ?></td>
            <td width="80">Pendidikan</td>
            <td width="200">: <?= $siswa["Pendidikan_Ibu"]; ?></td>
        </tr>
        <tr>
            <td width="80">Penghasilan Bulanan</td>
            <td width="200">: <?= $siswa["Penghasilan_Ayah"]; ?></td>
            <td width="80">Penghasilan Bulanan</td>
            <td width="200">: <?= $siswa["Penghasilan_Ibu"]; ?></td>
        </tr>
    </table>
    <BR>
    <table align="center">
        <tr>
            <td width="290">
                <b>DATA WALI</b><br>
            </td>
        </tr>
    </table>
    <table align="center">
        <tr>
            <td width="80">Nama Wali</td>
            <td width="200">: <?= $siswa["Nama_Wali"]; ?></td>
        </tr>
        <tr>
            <td width="80">Lahir</td>
            <td width="200">: <?= $siswa["Lahir_Wali"]; ?></td>
        </tr>
        <tr>
            <td width="80">Pekerjaan</td>
            <td width="200">: <?= $siswa["Pekerjaan_Wali"]; ?></td>
        </tr>
        <tr>
            <td width="80">Pendidikan</td>
            <td width="200">: <?= $siswa["Pendidikan_Wali"]; ?></td>
        </tr>
        <tr>
            <td width="80">Penghasilan Bulanan</td>
            <td width="200">: <?= $siswa["Penghasilan_Wali"]; ?></td>
        </tr>
    </table>
    <BR> <BR> <BR> <BR>
    <table align="center">
        <tr>
            <td align="center" width="290">
                <h4 style="padding:none;"><b>DATA PERIODIK</b><BR></h4>
            </td>
        </tr>
    </table>
    <table align="center">
        <tr>
            <td width="180">Tinggi Badan</td>
            <td width="110">: <?= $siswa["Tinggi_Badan"]; ?></td>
        </tr>
        <tr>
            <td width="180">Berat Badan</td>
            <td width="">: <?= $siswa["Berat_Badan"]; ?></td>
        </tr>
        <tr>
            <td width="180">Jarak Ke Sekolah</td>
            <td width="">: <?= $siswa["Jarak_Sekolah"]; ?></td>
        </tr>
        <tr>
            <td width="180">Waktu Tempuh Ke Sekolah</td>
            <td width="">: <?= $siswa["Waktu_Tempuh"]; ?></td>
        </tr>
        <tr>
            <td width="180">Jumlah Sudara Kandung</td>
            <td width="">: <?= $siswa["Saudara_Kandung"]; ?></td>
        </tr>
    </table>
    <!--<script type="text/javascript">
    window.print();
</script>-->

</page>