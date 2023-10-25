  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Tables
        <small>advanced tables</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">

          <div class="box">
            <div class="box-header">
              <?php if($this->session->flashdata('success')){ ?>
              <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <i class="fa fa-close"></i>
                </button>
                <span style="text-align:left;">
                  <?php echo $this->session->flashdata('success') ?>
                </span>
              </div>
                <?php } ?>
                <?php if($this->session->flashdata('error')){ ?>
              <div class="alert alert-error">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <i class="fa fa-close"></i>
                </button>
                <span style="text-align:left;">
                <?php echo $this->session->flashdata('error') ?>
                </span>
              </div>
              <?php } ?>
              <h3 class="box-title">Data Pelajar SMK</h3>
            </div>
            <div class="box-body">
            <div class="pull-left">
          <a href="<?php echo base_url()?>Study/tambah" class="btn btn-primary"><i class="mdi mid-plus-circle mr-2 fa fa-plus"></i> Tambah Pelajar</a>
        </div>
        </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>NIS</th>
                  <th>Nama Siswa</th>
                  <th>Kelas</th>
                  <th>Jurusan</th>
                  <th>Email</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                  <?php foreach($pelajar->result_array() as $data){ ?>
                <tr>
                  <td><?php echo $data['nis']; ?></td>
                  <td><?php echo $data['nama_siswa']; ?></td>
                  <td><?php echo $data['kelas']; ?></td>
                  <td><?php echo $data['jurusan']; ?></td>
                  <td><?php echo $data['email']; ?></td>
                  <td><span data-toggle="tooltip" data-original-title="Edit Data" style="font-size:10;"><a class="btn btn-warning" href="<?php echo base_url()?>Study/edit/<?php echo $data['nis'] ?>"><i class="fa fa-edit"></i></a></span>
                  <span data-toggle="tooltip" data-original-title="Hapus Data" style="font-size:10;"><a class="btn btn-danger" href="<?php echo base_url()?>Study/hapus/<?php echo $data['nis'] ?>"><i class="fa fa-trash-o"></i></a></span>
                </td>
                  
                </tr>
                <?php } ?>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.13
    </div>
    <strong>Copyright &copy; 2014-2019 <a href="https://adminlte.io">AdminLTE</a>.</strong> All rights
    reserved.
  </footer>
      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
