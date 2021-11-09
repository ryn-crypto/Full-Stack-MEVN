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
                  <li class="nav-item"><a class="nav-link active" href="<?= base_url('user')?>">Ringkasan</a></li>
                  <li class="nav-item"><a class="nav-link" href="<?= base_url('user/edit') ?>">Edit profile</a></li>
                </ul>
              </div>
              
              <!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="tab-pane active" id="activity">
                    <div class="row justify-content-md-center">
                      <div class="col-11">
                        <?= $this->session->flashdata('message') ?>
                      </div>
                    </div>
                    <!-- ringkasan -->
                      <div class="card-body pb-0">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-6 d-flex align-items-stretch flex-column">
                            <div class="card border border-secondary bg-dark d-flex flex-fill">
                                <div class="card-header border-bottom-0 text-muted"><?= $role['role']; ?></div>
                                <div class="card-body pt-0">
                                <div class="row">
                                    <div class="col-7">
                                      <h2 class="lead text-muted font-weight-bolder"><b><?= $user['nama']; ?></b></h2>
                                      <p class="text-muted text-sm"><b>About: </b> <?= $user['tentang'] ?> </p>
                                      <ul class="ml-4 mb-0 fa-ul text-muted">
                                          <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Alamat: <div><?= $user['tempat_tinggal'];?></div></li>
                                          <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> No Hp : <div><?= $user['no_hp'] ?></div></li>
                                          <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Bergabung sejak : <div><?= date('d F Y', $user['waktu_gabung']); ?></div></li>
                                      </ul>
                                    </div>
                                    <div class="col-4 text-center">
                                      <img src="<?= base_url('assets/images/profile/') . $user['gambar']; ?>" alt="user-avatar" class="img-circle img-fluid">
                                    </div>
                                </div>
                                </div> 
                            </div>
                            </div>
                            <div class="col d-flex align-items-stretch flex-column">
                                <div class="card border border-secondary bg-dark d-flex flex-fill">
                                    <div class="card-body">
                                        <strong><i class="fas fa-map-marker-alt mr-1"></i>Pekerjaan diselesaikan</strong>
                                        <p class="text-muted"><?= $user['tempat_tinggal'];?></p>

                                        <hr>

                                        <strong><i class="fas fa-lg fa-phone mr-1"></i>Jumlah client</strong>
                                        <p class="text-muted"><?= $user['no_hp'] ?></p>

                                        <hr>

                                        <div class="row">
                                            <div class="col">
                                                <!-- DONUT CHART -->
                                                <div class="card-body">
                                                    <canvas id="donutChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                                                </div>
                                                <!-- /.card-body -->                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                      </div>
                    <!-- /ringkasan -->
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
