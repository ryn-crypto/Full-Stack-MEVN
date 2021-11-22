  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 mt-2"><?= $title ?></h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <!-- Main content -->
    
    <section class="content">
      <div class="container-fluid">
        <div class="row justify-content-md-center">
          <div class="col-md-9">

              <div class="card-body card-primary">
                <div class="card-body">

                    <div class="row">
                      <div class="col-sm-8">
                        <?= $this->session->flashdata('message') ?>
                      </div>
                    </div>

                    <?= form_open_multipart('user/ubahpassword');?>
                      <div class="form-group row">
                        <label for="passwordawal" class="col-sm-2 col-form-label text-white-50">password Awal</label>
                        <div class="col-sm-6">
                          <input type="password" class="form-control" id="passwordawal" name="passwordawal">
                          <?= form_error('passwordawal', '<small class="text-warning pl-1">', '</small>') ?>
                        </div>
                      </div>
                      <div class="form-group row mt-3">
                        <label for="passwordbaru" class="col-sm-2 col-form-label text-white-50">Password Baru</label>
                        <div class="col-sm-6">
                          <input type="password" class="form-control" id="passwordbaru" name="passwordbaru">
                          <?= form_error('passwordbaru', '<small class="text-warning pl-1">', '</small>') ?>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="konfirmasi" class="col-sm-2 col-form-label text-white-50">Konfirmasi Password</label>
                        <div class="col-sm-6">
                          <input type="password" class="form-control" id="konfirmasi" name="konfirmasi">
                          <?= form_error('konfirmasi', '<small class="text-warning pl-1">', '</small>') ?>
                        </div>
                      </div>
                      <div class="form-group row mt-4">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" class="btn btn-warning">Ubah password</button>
                        </div>
                      </div>
                    </form>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->

          </div>
        </div>
      </div>
    </section>

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
