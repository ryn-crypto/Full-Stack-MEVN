<!-- Preloader -->
<div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__wobble" src="<?= base_url('assets/') ?>dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

        <li class="nav-item dropdown"> 
            <div role="button" class="user-panel pb-3 d-flex pt-2 pr-lg-5 pr-md-2" data-toggle="dropdown">
                <div class="image">
                    <img src="<?= base_url('assets/images/profile/') . $user['gambar'] ?>" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <span class="d-block"><?= $user['nama']; ?></span>
                </div>
            </div>
            <div class="dropdown-menu dropdown-menu dropdown-menu-right">
            <a href="<?= base_url('user') ?>" class="dropdown-item">
                <h5 class="text-sm"><i class="fas fa-user pr-2"></i>Profile</h5>
            </a>
            <a href="<?= base_url('auth/logout') ?>" class="dropdown-item" data-toggle="modal" data-target="#exampleModal">
                <h5 class="text-sm"><i class="fas fa-sign-out-alt pr-2"></i>Logout</h5>
            </a>
        </li>
    </ul>
  </nav>
  <!-- /.navbar -->