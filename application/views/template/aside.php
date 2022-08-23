<!-- Main Sidebar Container -->
		<aside class="main-sidebar sidebar-dark-primary elevation-4">
			<!-- Brand Logo -->
			<a href="index3.html" class="brand-link">
				<img src="<?php echo base_url(); ?>assets/img/logo.png" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
				<span class="brand-text font-weight-light">Nusantara Event</span>
			</a>

			<!-- Sidebar -->
			<div class="sidebar">
				<!-- Sidebar user panel (optional) -->
				<div class="user-panel mt-3 pb-3 mb-3 d-flex">
					<div class="image">
						<img src="<?php echo base_url(); ?>assets/img/logo.png" class="img-circle elevation-2" alt="User Image">
					</div>
					<div class="info">
						<a href="#" class="d-block"><?php echo $this->session->userdata("nama"); ?></a>
                              <span class="badge badge-success">
                                   Administrator
                              </span>
					</div>
				</div>

				<!-- Sidebar Menu -->
				<nav class="mt-2">
					<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
          	with font-awesome or any other icon font library -->
          	<li class="nav-item">
          		<a href="<?php echo base_url("c_data"); ?>" class="nav-link">
          			<i class="nav-icon fas fa-tachometer-alt"></i>
          			<p>
          				Dashboard
          			</p>
          		</a>
          	</li>
          	<li class="nav-item">
          		<a href="#" class="nav-link">
          			<i class="nav-icon fas fa-table"></i>
          			<p>
          				Data Event
          				<i class="fas fa-angle-left right"></i>
          			</p>
          		</a>
          		<ul class="nav nav-treeview">
          			<li class="nav-item">
          				<a href="pages/tables/simple.html" class="nav-link">
          					<i class="far fa-circle nav-icon"></i>
          					<p>Simple Tables</p>
          				</a>
          			</li>
          			<li class="nav-item">
          				<a href="pages/tables/data.html" class="nav-link">
          					<i class="far fa-circle nav-icon"></i>
          					<p>DataTables</p>
          				</a>
          			</li>
          			<li class="nav-item">
          				<a href="pages/tables/jsgrid.html" class="nav-link">
          					<i class="far fa-circle nav-icon"></i>
          					<p>jsGrid</p>
          				</a>
          			</li>
          		</ul>
          	</li>
          	<li class="nav-header">Setting</li>
          	<li class="nav-item">
          		<a href="<?php echo base_url("c_data/tampil_data_admin"); ?>" class="nav-link">
          			<i class="nav-icon fas fa-user"></i>
          			<p>
          				Pengguna Sistem
          			</p>
          		</a>
          	</li>
          	<li class="nav-item">
          		<a href="<?php echo base_url("c_login/logout"); ?>" class="nav-link">
          			<i class="nav-icon fas fa-arrow-circle-right"></i>
          			<p>
          				Logout
          			</p>
          		</a>
          	</li>
          </ul>
      </nav>
      <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>