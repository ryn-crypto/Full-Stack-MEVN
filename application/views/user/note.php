  
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

      <!-- Default box -->
      <div class="card card-solid">
        <div class="card-body pb-0">
          <div class="row">
            <div class="col-12 col-sm-12 col-md-6 d-flex align-items-stretch flex-column">
              <div class="card bg-secondary d-flex flex-fill">
                <div class="card-header text-dark border-bottom-0"><?= $role['role']; ?></div>
                <div class="card-body pt-0">
                  <div class="row">
                    <div class="col-7">
                      <h2 class="lead text-dark font-weight-bolder"><b><?= $user['nama']; ?></b></h2>
                      <p class="text-dark text-sm"><b>About: </b> <?= $user['tentang'] ?> </p>
                      <ul class="ml-4 mb-0 fa-ul text-dark">
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
                <div class="card-footer">
                  <div class="text-right text-dark">
                    <a href="#" class="btn btn-sm btn-primary text-muted">
                      <i class="fas fa-user"></i> View Profile
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
