<?php $this->load->view('templates/admin_header');?>
<div class="row" style="margin-bottom: 20px">
    <div class="col-md-12">
                <h2>Form Solusi</h2>
		<form action="<?php echo site_url('admin/Home/aksi_update')?>" method="POST">
				<div class="form">
				<label>SOLUSI</label>
				<textarea name="solusi" class="form-control" placeholder="Solusi masalah anda" value="<?php echo $solusi?>"></textarea>
				</div><br>
				<div align="right">
					<input type="hidden" name="id_solusi" value="<?php echo $id_solusi?>">
					<input type="hidden" name="id_aspirasi" value="<?php echo $id_solusi?>">
				<button class="btn btn-primary" id="button" value=""><?php echo $button?></button> 
				</div>
		</form>
	</div>
</div>
<?php $this->load->view('templates/admin_footer'); ?>