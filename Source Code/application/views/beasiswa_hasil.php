<?php $this->load->view('templates/bea_header');?>
        <div class="row" style="margin-bottom: 20px">
            <div class="col-md-12">
                <h2>Data Aspirasi Anda</h2>

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
<!--Tabel proses aspirasi -->
        <table id="example" class="table table-striped table-bordered">
            <tr>
                <thead>
                    <th>ID</th>
                    <th>JENIS MASALAH</th>
                    <th>PERTANYAAN</th>
                    <th>AKSI</th>
                </thead>
                <tbody>
                     <?php foreach ($aspirasi as $key => $value) { ?>
                    <td><?php echo $value->id_aspirasi; ?></td>
                    <td><?php echo $value->jns_masalah; ?></td>
                    <td><?php echo $value->aspirasi; ?></td>
                    <td>
                      <button class="btn fa fa-hourglass-half btn-warning">Proses</button>  
                    </td>
                </tbody>
                <?php } ?>
            </tr>
        </table><br>

<!--Tabel solusi -->
        <table id="example" class="table table-striped table-bordered">
            <tr>
                <thead>
                    <th>ID</th>
                    <th>JAWABAN</th>
                </thead>
                <tbody>
                    <?php foreach ($solusi as $key => $value) { ?>
                    <td><?php echo $value->id_solusi; ?></td>
                    <td><?php echo $value->solusi; ?></td>
                </tbody>
                <?php } ?>
            </tr>
        </table><br>
    </div>
    </div>

</body>
</html>
<?php $this->load->view('templates/bea_footer'); ?>