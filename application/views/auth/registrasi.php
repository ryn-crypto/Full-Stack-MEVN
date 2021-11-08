<div class="register-box">
  <div class="register-logo">
    <a class="text-white" href="<?= base_url('auth/registrasi') ?>"><b>Registrasi</b></a>
  </div>

  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Daftar Pengguna Baru</p>

      <form action="<?= base_url('auth/registrasi') ?>" method="post">
        <div class="input-group">
          <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap" value="<?= set_value('nama'); ?>">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <?= form_error('nama', '<small class="text-danger pl-1">', '</small>') ?>
        <div class="input-group mt-3">
          <input type="text" class="form-control" id="email" name="email" placeholder="Email" value="<?= set_value('email'); ?>">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <?= form_error('email', '<small class="text-danger pl-1">', '</small>') ?>
        <div class="input-group mt-3">
          <input type="password" class="form-control" id="password1" name="password1" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <?= form_error('password1', '<small class="text-danger pl-1">', '</small>') ?>
        <div class="input-group mt-3">
          <input type="password" class="form-control" id="password2" name="password2" placeholder="Ulangi password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row mt-3">
          <!-- /.col -->
          <div class="col-lg">
            <button type="submit" class="btn btn-primary btn-block">Daftar</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <hr>

      <a href="<?= base_url('auth') ?>" class="text-center"><small>Sudah punya akun</small></a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->
