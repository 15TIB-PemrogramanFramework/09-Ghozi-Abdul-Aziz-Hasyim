<?php $this->load->view('templates/admin_header');?>
        <div class="row" style="margin-bottom: 20px">
            <div class="col-md-12">
                <h2>Admin</h2>
                <!--Tabel proses aspirasi -->
        <table id="example" class="table table-striped table-bordered">
            <tr>
                <thead>
                    <th>ID</th>
                    <th>JENIS PELAYANAN</th>
                    <th>ASPIRASI</th>
                    <th>NIM</th>
                    <th>HANDPHONE</th>
                    <th>AKSI</th>
                </thead>
                <tbody>
                    <?php foreach ($table_aspirasi as $key => $value) { ?> 
                    <td><?php echo $value->id_aspirasi; ?> </td>
                    <td><?php echo $value->jns_masalah; ?> </td>
                    <td><?php echo $value->aspirasi; ?> </td>
                    <td><?php echo $value->nim; ?> </td>
                    <td><?php echo $value->hp; ?> </td>
                    <td>
                      <a class="btn btn-primary" href="<?php echo site_url('admin/Home/form_solusi/'.$value->id_aspirasi);?>">Solusi</a>  
                    </td>
                </tbody>
 <?php } ?>
         </tr>
        </table><br>
            </div>
        </div>
<?php $this->load->view('templates/admin_footer'); ?>