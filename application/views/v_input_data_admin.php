<?php  $this->load->view('template/header_admin');?>
<?php  $this->load->view('template/aside');?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0"></h1>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	<!-- /.content-header -->

	<!-- Main content -->
	<section class="content">
		<div class="container-fluid">
			
				<!-- general form elements -->
				<div class="card card-primary">
					<div class="card-header">
						<h3 class="card-title">Tambah Data Admin</h3>
					</div>
					<!-- /.card-header -->
					<!-- form start -->
					<form method="post" action="<?php echo base_url('c_data/tambah_admin'); ?>">
						<div class="card-body">
							<div class="form-group">
								<label for="exampleInputEmail1">Username</label>
								<input type="text" class="form-control" id="username" name = "username" placeholder="Masukkan Username">
							</div>
							<div class="form-group">
								<label for="exampleInputEmail1">Nama Admin</label>
								<input type="text" class="form-control" id="nama_user" name = "nama_user" placeholder="Masukkan Nama">
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">Password</label>
								<input type="password" class="form-control" id="password" name = "password" placeholder="Password">
							</div>
							
						</div>
						<!-- /.card-body -->

						<div class="card-footer">
							<button type="submit" class="btn btn-primary">Submit</button>
						</div>
					</form>
				</div>
				<!-- /.card -->
			
		</div><!-- /.container-fluid -->
	</section>
	<!-- /.content -->
</div>
<?php  $this->load->view('template/footer_admin');?>