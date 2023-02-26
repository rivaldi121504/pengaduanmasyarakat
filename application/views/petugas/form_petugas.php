<?= validation_errors()?>
        <form class="row g-3" method="post" action="<?=base_url('petugas/registrasi_petugas') ?>">
  <div class="col-md-12">
    <label for="nama" class="form-label">Nama</label>
    <input type="text" class="form-control" id="nama" name="nama" required>
  </div>
  <div class="col-md-12">
    <label for="username" class="form-label">Username</label>
    <input type="text" class="form-control" id="username" name="username" required>
  </div>
  <div class="col-md-12">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password"name="password" required>
  </div>
  <div class="col-md-12">
    <label for="telepon" class="form-label">Telepon</label>
    <input type="text" class="form-control" id="telepon" name="telepon" required>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Daftar</button>
  </div>
</form>

