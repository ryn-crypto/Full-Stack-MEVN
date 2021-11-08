<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <div class="brand-link">
      <img src="<?= base_url('assets/') ?>dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light"><b>Game Center</b></span>
    </div>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          
        <?php foreach ($menu as $m) : ?>
          
          <li class="nav-header"><?= $m['nama_menu']; ?></li>

            <?php foreach ($sub_menu as $sub) : ?>
              
              <?php if( $m['menu_id'] == $sub['menu_id'] ) :?>
                <?php if( $title == $sub['judul']) :?>
                  <li class="nav-item menu-open">
                    <a href="<?= $sub['url'] ?>" class="nav-link active">
                      <i class="nav-icon <?= $sub['icon'] ?>"></i>
                      <p><?= $sub['judul'] ?></p>
                    </a>
                  </li>
                <?php else :?>
                  <li class="nav-item menu-open">
                    <a href="<?= $sub['url'] ?>" class="nav-link">
                      <i class="nav-icon <?= $sub['icon'] ?>"></i>
                      <p><?= $sub['judul'] ?></p>
                    </a>
                  </li>
                <?php endif;?>
              <?php endif;?>

            <?php endforeach; ?>
            
        <?php endforeach; ?>
          

          <li class="nav-header"></li>
          <li class="nav-item menu-open">
            <a href="<?= base_url('auth/logout') ?>" class="nav-link" data-toggle="modal" data-target="#exampleModal">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>Log Out</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>