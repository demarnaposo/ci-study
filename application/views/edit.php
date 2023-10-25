
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Form Edit
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">Edit Data Pelajar</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Data Pelajar</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="<?php echo base_url()?>Study/update" method="POST">
              <div class="box-body">
                <div class="form-group">
                <label>NIS</label>
                  <input type="number" class="form-control" name="nis" placeholder="Masukkan NIS" value="<?php echo $pelajar->nis ?>" readonly>
                </div>
                <div class="form-group">
                  <label>Nama Siswa</label>
                  <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Siswa" value="<?php echo $pelajar->nama_siswa ?>"> 
                </div>
                <div class="form-group">
                  <label>Kelas</label>
                  <input type="text" class="form-control" name="kelas" placeholder="Masukkan Kelas" value="<?php echo $pelajar->kelas ?>"> 
                </div>
                <div class="form-group">
                  <label>Jurusan</label>
                  <input type="text" class="form-control" name="jurusan" placeholder="Masukkan Jurusan" value="<?php echo $pelajar->jurusan ?>"> 
                </div>
                <div class="form-group">
                  <label>Email</label>
                  <input type="email" class="form-control" name="email" placeholder="Masukkan Email" value="<?php echo $pelajar->email ?>"> 
                </div>
                
                
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.box -->

        </div>
        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-6">
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

  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->


