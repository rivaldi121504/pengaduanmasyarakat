<?= validation_errors()?>
        <form class="row g-3" method="POST" action="<?=base_url('masyarakat/login')?>">
  <div class="col-md-12">
    <label for="username" class="form-label">Username</label>
    <input type="text" class="form-control" id="username" name="username" required>
  </div>
  <div class="col-md-12">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password"name="password" required>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Login</button>
  </div>
</form>

