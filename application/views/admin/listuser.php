div  
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

    <div class="card card-solid">
        <div class="card-body mt-3 mb-3">
          <div class="row justify-content-md-center">
            <div class="col-11">
              <?= $this->session->flashdata('message') ?>
            </div>
          </div>
          <div class="row border-bottom border-secondary">

            <?php 
            foreach($daftar as $l) :
                if ($l['role_id'] == 1) :
            ?>
            <!-- Default box -->
            <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
              <div class="card bg-secondary d-flex flex-fill">
                <div class="card-header text-white border-bottom-0">Admin</div>
                <div class="card-body pt-0">
                  <div class="row">
                    <div class="col-7">
                      <h2 class="lead text-dark font-weight-bolder"><b><?= $l['nama']; ?></b></h2>
                      <p class="text-dark text-sm"><b>About: </b> <?= $l['tentang'] ?> </p>
                      <ul class="ml-4 mb-0 fa-ul text-dark">
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Alamat: <div><?= $l['tempat_tinggal'];?></div></li>
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> No Hp : <div><?= $l['no_hp'] ?></div></li>
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Bergabung sejak : <div><?= date('d F Y', $l['waktu_gabung']); ?></div></li>
                      </ul>
                    </div>
                    <div class="col-4 text-center">
                      <img src="<?= base_url('assets/images/profile/') . $l['gambar']; ?>" alt="user-avatar" class="img-circle img-fluid">
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="text-right text-dark">
                    <div class="dropdown mr-1">
                      <button type="button" class="btn btn-primary text-muted dropdown-toggle" id="dropdownMenuOffset" data-toggle="dropdown" aria-expanded="false" data-offset="5,10">
                        Kelola
                      </button>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuOffset">
                        <a class="dropdown-item" href="<?= base_url('admin/ubah/'. $l['id'])?>">Jadikan Worker</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <?php endif;
            endforeach;
            ?>
          </div>

          <div class="row mt-3 border-bottom border-secondary">

            <?php foreach($daftar as $l) :
                if ($l['role_id'] == 2) :?>

              <!-- Default box -->
              <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
                <div class="card bg-secondary d-flex flex-fill">
                  <div class="card-header text-light border-bottom-0">Worker</div>
                  <div class="card-body pt-0">
                    <div class="row">
                      <div class="col-7">
                        <h2 class="lead text-dark font-weight-bolder"><b><?= $l['nama']; ?></b></h2>
                        <p class="text-dark text-sm"><b>About: </b> <?= $l['tentang'] ?> </p>
                        <ul class="ml-4 mb-0 fa-ul text-dark">
                          <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Alamat: <div><?= $l['tempat_tinggal'];?></div></li>
                          <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> No Hp : <div><?= $l['no_hp'] ?></div></li>
                          <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Bergabung sejak : <div><?= date('d F Y', $l['waktu_gabung']); ?></div></li>
                        </ul>
                      </div>
                      <div class="col-4 text-center">
                        <img src="<?= base_url('assets/images/profile/') . $l['gambar']; ?>" alt="user-avatar" class="img-circle img-fluid">
                      </div>
                    </div>
                  </div>
                  <div class="card-footer">
                    <?php if ($l['aktif'] == 0) : ?>
                      <div class="col text-right text-dark">
                        <p class="text-warning"> Sedang di suspend </p>
                      </div>
                    <div class="col text-right text-dark">
                      <div class="dropdown mr-1">
                        <button type="button" class="btn btn-primary text-muted dropdown-toggle" id="dropdownMenuOffset" data-toggle="dropdown" aria-expanded="false" data-offset="5,10">
                          Kelola
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuOffset">
                          <a class="dropdown-item" href="<?= base_url('admin/ubah/' . $l['id'])?>">Jadikan Admin</a>
                          <a class="dropdown-item" href="<?= base_url('admin/suspend/' . $l['id'])?>">Buka Suspend</a>
                        </div>
                      </div>
                    </div>
                    <?php else :?>
                      <div class="text-right text-dark">
                        <div class="dropdown mr-1">
                          <button type="button" class="btn btn-primary text-muted dropdown-toggle" id="dropdownMenuOffset" data-toggle="dropdown" aria-expanded="false" data-offset="5,10">
                            Kelola
                          </button>
                          <div class="dropdown-menu" aria-labelledby="dropdownMenuOffset">
                            <a class="dropdown-item" href="<?= base_url('admin/ubah/' . $l['id'])?>">Jadikan Admin</a>
                            <a class="dropdown-item" href="<?= base_url('admin/suspend/' . $l['id'])?>">Suspend</a>
                          </div>
                        </div>
                      </div>
                    <?php endif;?>
                  </div>
                </div>
              </div>

            <?php 
            endif;
            endforeach;?>

          </div>
          <div class="row mt-3">

            <?php foreach($daftar as $l) :
                if ($l['role_id'] == 3) :?>

              <!-- Default box -->
              <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
                <div class="card bg-secondary d-flex flex-fill">
                  <div class="card-header text-light border-bottom-0">Customer</div>
                  <div class="card-body pt-0">
                    <div class="row">
                      <div class="col-7">
                        <h2 class="lead text-dark font-weight-bolder"><b><?= $l['nama']; ?></b></h2>
                        <p class="text-dark text-sm"><b>About: </b> <?= $l['tentang'] ?> </p>
                        <ul class="ml-4 mb-0 fa-ul text-dark">
                          <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Alamat: <div><?= $l['tempat_tinggal'];?></div></li>
                          <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> No Hp : <div><?= $l['no_hp'] ?></div></li>
                          <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Bergabung sejak : <div><?= date('d F Y', $l['waktu_gabung']); ?></div></li>
                        </ul>
                      </div>
                      <div class="col-4 text-center">
                        <img src="<?= base_url('assets/images/profile/') . $l['gambar']; ?>" alt="user-avatar" class="img-circle img-fluid">
                      </div>
                    </div>
                  </div>
                  <div class="card-footer">
                  <div class="text-right text-dark">
                    <div class="dropdown mr-1">
                      <button type="button" class="btn btn-primary text-muted dropdown-toggle" id="dropdownMenuOffset" data-toggle="dropdown" aria-expanded="false" data-offset="5,10">
                        Kelola
                      </button>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuOffset">
                        <a class="dropdown-item" href="<?= base_url('admin/ubah/' . $l['id'])?>">Jadikan Worker</a>
                      </div>
                    </div>
                  </div>
                  </div>
                </div>
              </div>

            <?php 
            endif;
            endforeach;?>

          </div>
        </div>
      </div>

    </section>

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->



