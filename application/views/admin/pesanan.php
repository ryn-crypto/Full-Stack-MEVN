  
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
            
            <div class="card-body">
                <div class="row justify-content-md-center mt-2">
                    <div class="col-11">
                    <?= $this->session->flashdata('message') ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Exercitationem, molestias.
                    </div>
                    <div class="col">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid excepturi praesentium dicta itaque velit sapiente deserunt voluptate corrupti id delectus autem animi aliquam, optio, quaerat ab impedit quod ex. Velit natus doloremque quo dolore totam nisi aperiam voluptatibus ut dolor!
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
