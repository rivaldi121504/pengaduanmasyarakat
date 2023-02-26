<?= validation_errors()?>
<?php
    if(!empty($error)){
    echo $error;  
    }
    
?>
        <form class="row g-3" method="POST" action="<?=base_url('masyarakat/simpan_aduan')?> "
        enctype="multipart/form-data">

        <input type="hidden" value="<?= $this->session->nik ?>" id="nik" name="nik">

  <div class="col-md-12">
    <label for="isilaporan" class="form-label">Isi laporan</label>
    <textarea class="form-control" id="isilaporan" name="isilaporan" required></textarea>
  </div>
  <div class="col-md-12">
    <label for="foto" class="form-label">Foto</label>
    <input type="file" class="form-control" id="foto"name="foto" required>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Tambah Aduan</button>
  </div>
</form>

