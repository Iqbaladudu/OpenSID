<div class="form-group">
	<label for="nik"  class="col-sm-3 control-label">NIK / Nama</label>
	<div class="col-sm-6 col-lg-4">
    	<select class="form-control required input-sm select2-nik" id="nik" name="nik" style ="width:100%;" onchange="formAction('main')">
			<option value="">--  Cari NIK / Nama Penduduk --</option>
				<?php foreach ($penduduk as $data): ?>
					<option value="<?= $data['id']?>" <?php if ($individu['nik']==$data['nik']): ?>selected<?php endif; ?>>NIK : <?= $data['nik']." - ".$data['nama']."\n".$data['alamat']?></option>
				<?php endforeach;?>
		</select>
	</div>
</div>