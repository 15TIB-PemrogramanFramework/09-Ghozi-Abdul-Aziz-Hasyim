<?php $this->load->view('templates/header');?>
        <div class="row" style="margin-bottom: 20px">
            <div class="col-md-12">
                <h2>Pelayanan Himpunan Mahasiswa</h2>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title></title>
    <style type="text/css">
        .auto-style1 {
            width: 100%;
        }
        .auto-style2 {
            color: #FF0000;
        }
    </style>
</head>
<body>
    <br/>

<!--Form aspirasi-->
    <form id="form1" action="<?php echo $aksi_tambah_akademik; ?>" method="POST" runat="server">
    <div>
        <table class="auto-style1">
            
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td>
                    <?php echo $nama; ?><br><p></p>
                </td>
            </tr>
            <tr>
                <td>NIM</td>
                <td>:</td>
                <td>
                    <?php echo $nim; ?><br><p></p>
                </td>
            </tr>
            <tr>
                <td>Program Studi</td>
                <td>:</td>
                <td>
                    <?php echo $prodi; ?><br><p></p>
                </td>
            </tr>
          
            
            <tr>
                <td>Handphone</td>
                <td>:</td>
                <td>
                    <input type="text" name="hp" class="" required value=""/> <br><p></p>
                </td>
            </tr>
            <tr>
                <td>Alamat saat ini</td>
                <td>:</td>
                <td>
                    <textarea id="TextArea1" cols="20" name="alamat" rows="2"></textarea><br><p></p>
                </td>
            </tr>
            <tr>
                <td>Aspirasi</td>
                <td>:</td>
                <td>
                    <textarea id="TextArea2" cols="20" name="aspirasi" rows="2"></textarea><br />
                    <span class="auto-style2">Gunakan bahasa Indonesia yang baik dan benar!</span><br><p></p>
                </td>
                <input type="hidden" name='nim' value='<?php echo $nim; ?>'>
                 <input type="hidden" name='jns_masalah' value='HIMA'>
            </tr>
            <tr><td>
                    <button class="btn btn-primary" type="submit"><?php echo $button; ?> </button>
            </td>
            </tr>
        </table><br/></div></form>
        </div>
            </div>

</body>
</html>
<?php $this->load->view('templates/footer'); ?>