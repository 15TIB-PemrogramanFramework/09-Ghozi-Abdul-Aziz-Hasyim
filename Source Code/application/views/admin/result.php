<?php $this->load->view('templates/admin_header');?>
        <div class="row" style="margin-bottom: 20px">
            <div class="col-md-12">
                <h2>Result</h2>
                <!--Tabel proses aspirasi -->
        <table id="example" class="table table-striped table-bordered">
            <tr>
                <thead>
                    <th>ID</th>
                    <th>JENIS PELAYANAN</th>
                    <th>ASPIRASI</th>
                    <th>SOLUSI</th>
                </thead>
                <tbody>
                    <?php foreach ($table_solusi as $key => $value) { ?> 
                    <td><?php echo $value->id_solusi; ?> </td>
                    <td><?php echo $value->jns_masalah; ?> </td>
                    <td><?php echo $value->aspirasi; ?> </td>
                    <td><?php echo $value->solusi; ?> </td>
                </tbody>
 <?php } ?>
         </tr>
        </table><br>
            </div>
        </div>
<?php $this->load->view('templates/admin_footer'); ?>