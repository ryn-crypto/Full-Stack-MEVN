  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 mt-2"><?= $title; ?></h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="<?= base_url('assets/images/profile/') . $user['gambar']; ?>" alt="User profile picture">
                </div>
                <h3 class="profile-username text-center"><?= $user['nama']; ?></h3>
                <p class="text-muted text-center"><?= $role['role']; ?></p>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tentang</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>
                <p class="text-muted"><?= $user['tempat_tinggal'];?></p>

                <hr class="bg-light">

                <strong><i class="fas fa-lg fa-phone mr-1"></i>No telfon</strong>
                <p class="text-muted"><?= $user['no_hp'] ?></p>

                <hr class="bg-light">

                <strong><i class="far fa-file-alt mr-1"></i>Catatan kaki</strong>
                <p class="text-muted"><?= $user['tentang'] ?></p>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>

          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link" href="<?= base_url('user')?>">Ringkasan</a></li>
                  <li class="nav-item"><a class="nav-link active" href="<?= base_url('user/edit')?>">Edit profile</a></li>
                </ul>
              </div>
              
              <!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">

                  <div class="tab-pane active" id="settings">

                    <div class="row justify-content-md-center">
                      <div class="col-11">
                        <?= $this->session->flashdata('message') ?>
                      </div>
                    </div>

                    <?= form_open_multipart('user/edit');?>
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputEmail" name="email" value="<?= $user['email']; ?>" readonly>
                        </div>
                      </div>
                      <div class="form-group row mt-3">
                        <label for="inputNama" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputNama" name="nama" value="<?= $user['nama']; ?>">
                          <?= form_error('nama', '<small class="text-warning pl-1">', '</small>') ?>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $user['tempat_tinggal']; ?>">
                          <?= form_error('alamat', '<small class="text-warning pl-1">', '</small>') ?>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="no_hp" class="col-sm-2 col-form-label">No Hp</label>
                        <div class="col-sm-10">
                          <input class="form-control" id="no_hp" name="no_hp" value="<?= $user['no_hp']; ?>">
                          <?= form_error('no_hp', '<small class="text-warning pl-1">', '</small>') ?>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="catatan" class="col-sm-2 col-form-label">Catatan</label>
                        <div class="col-sm-10">
                          <textarea class="form-control" id="catatan" name="catatan"> <?= $user['tentang']; ?> </textarea>
                          <?= form_error('catatan', '<small class="text-warning pl-1">', '</small>') ?>
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="col-sm-2">Foto</div>
                        <div class="col-sm-10">
                            <div class="row">
                                <div class="col-sm-3">
                                    <img src="<?= base_url('assets/images/profile/') . $user['gambar']; ?>" class="img-thumbnail">
                                </div>
                                <div class="col-sm-9">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="foto" name="gambar">
                                        <label class="custom-file-label" for="foto">Pilih file</label>
                                        </div>
                                    </div>
                            </div>
                        </div>
                      </div>
                      <div class="form-group row mt-4">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" class="btn btn-success">Ubah data</button>
                        </div>
                      </div>
                    </form>
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
