<!-- ================================================== VIEW ================================================== -->
<?php if ($action == 'view' || empty($action)){ ?>
<div class="page">
	<div class="page-title blue">
		<h3>
			<?php echo $breadcrumb; ?>
		</h3>
		<p>Informasi Mengenai
			<?php echo $breadcrumb; ?>
		</p>
	</div>
	<div class="page-content container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="panel">
					<div class="panel-heading">
						<h5 class="panel-title">View Data
							<?php echo $breadcrumb; ?>
						</h5>
					</div>
					<!-- ========== Flashdata ========== -->
					<?php if ($this->session->flashdata('success') || $this->session->flashdata('warning') || $this->session->flashdata('error')) { ?>
					<?php if ($this->session->flashdata('success')) { ?>
					<div class="alert alert-success">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<i class="fa fa-check sign"></i>
						<?php echo $this->session->flashdata('success'); ?>
					</div>
					<?php } else if ($this->session->flashdata('warning')) { ?>
					<div class="alert alert-warning">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<i class="fa fa-check sign"></i>
						<?php echo $this->session->flashdata('warning'); ?>
					</div>
					<?php } else { ?>
					<div class="alert alert-danger">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<i class="fa fa-warning sign"></i>
						<?php echo $this->session->flashdata('error'); ?>
					</div>
					<?php } ?>
					<?php } ?>
					<!-- ========== End Flashdata ========== -->
					<div class="panel-body container-fluid table-detail">
						<div class="table-full table-view">
							<div class="navigation-btn">
								<form action="" method="post" id="form">
									<div class='row margin-bottom'>
										<div class='btn-search'>Cari Berdasarkan :</div>
										<div class='col-md-3 col-sm-12'>
											<div class='button-search'>
												<?php array_pilihan('cari', $berdasarkan, $cari);?>
											</div>
										</div>
										<div class='col-md-3 col-sm-12 select-search'>
											<div class="input-group">
												<input type="text" name="q" class="form-control" value="<?php echo $q;?>" />
												<span class="input-group-btn">
													<button type="submit" name="kirim" class="btn btn-primary" type="button">
														<i class="fa fa-search"></i>
													</button>
												</span>
											</div>
										</div>
									</div>
									<div class='btn-navigation'>
										<div class='pull-right'>
											<a class="btn btn-primary" href="<?php echo site_url();?>akun/user">
												<i class="fa fa-refresh"></i>
											</a>
										</div>
									</div>
								</form>
							</div>
							<div class="table-responsive">
								<table class="table table-hover">
									<thead>
										<th>No</th>
										<th>Nama</th>
										<th>Username</th>
										<th>Role</th>
										<th class="text-center">Aksi</th>
									</thead>
									<tbody>
										<?php 
									$i	= $page+1;
									$like_admin[$cari]			= $q;
								if ($jml_data > 0){
									foreach ($this->ADM->grid_all_admin('', 'admin_level', 'ASC', $batas, $page, '', $like_admin) as $row){
									?>
										<tr>
											<td>
												<?php echo $i; ?>
											</td>
											<td>
												<?php echo $row->admin_nama;?>
											</td>
											<td>
												<?php echo $row->username;?>
											</td>
											<td>
												<?php echo $row->admin_level;?>
											</td>
											<td class="text-center action">
												
											<?php if ($row->admin_level === 'user') { ?>
											
												<a class="btn-detail" href="<?php echo site_url();?>master/masyarakat/detail/<?php echo $row->username;?>">
													<i class="icon wb-info"></i>
												</a>
												<?php } else { ?>
													<a class="btn-update" href="<?php echo site_url();?>akun/user/edit/<?php echo $row->username;?>">
													<i class="icon wb-pencil"></i>
												</a>
												<a class="btn-detail" href="<?php echo site_url();?>akun/user/detail/<?php echo $row->username;?>">
													<i class="icon wb-info"></i>
												</a>
													<?php } ?>

													
											<?php if ($row->admin_level === 'pejabat') { ?>
												<a class="btn-delete" href="javascript:;" data-id="<?php echo $row->username;?>" data-toggle="modal" data-target="#modal-konfirmasi"
												title="<?php echo $row->admin_nama;?>">
													<i class="icon wb-trash"></i>
												</a>
											<?php } ?>

											</td>
										</tr>
										<?php
										$i++;
									} 
								} else {
									?>
											<tr>
												<td class="text-center" colspan="7">Belum ada data!.</td>
											</tr>
											<?php } ?>
									</tbody>
								</table>
							</div>
							<div class="wrapper">
								<div class="paging">
									<div id='pagination'>
										<div class='pagination-right'>
											<ul class="pagination">
												<?php if ($jml_halaman > 1) { echo pages($halaman, $jml_halaman, 'akun/user/view', $id=""); }?>
											</ul>
										</div>
									</div>
								</div>
								<div class="total">Total :
									<?php echo $jml_data;?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<a href="<?php echo site_url();?>akun/user/tambah">
		<button class="site-action btn-raised btn btn-sm btn-floating blue" type="button">
			<i class="icon wb-plus" aria-hidden="true"></i>
		</button>
	</a>
</div>
<!-- ========== Modal Konfirmasi ========== -->
<div id="modal-konfirmasi" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h4 class="modal-title">Konfirmasi</h4>
			</div>

			<div class="modal-body" style="background:#d9534f;color:#fff">
				Apakah Anda yakin ingin menghapus data ini?
			</div>
			<div class="modal-footer">
				<a href="javascript:;" class="btn btn-danger" id="hapus-user">Ya</a>
				<button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
			</div>
		</div>
	</div>
</div>
<!-- ========== End Modal Konfirmasi ========== -->
<!-- ================================================== END VIEW ================================================== -->

<!-- ================================================== TAMBAH ================================================== -->
<?php } elseif ($action == 'tambah') { ?>
<div class="page">
	<div class="page-title blue">
		<h3>
			<?php echo $breadcrumb; ?>
		</h3>
		<p>Informasi Mengenai
			<?php echo $breadcrumb; ?>
		</p>
	</div>
	<div class="page-content container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="panel">
					<div class="panel-heading">
						<h5 class="panel-title">Tambah User</h5>
					</div>
					<div class="panel-body container-fluid">
						<form action="<?php echo site_url();?>akun/user/tambah" method="post" id="exampleStandardForm" autocomplete="off">
							<div class="form-group form-material">
								<label class="control-label" for="inputText">Username</label>
								<input type="text" class="form-control input-sm" id="username" name="username" placeholder="Username" required/>
							</div>
							<div class="form-group form-material">
								<label class="control-label" for="inputText">Password</label>
								<input type="password" class="form-control input-sm" id="password" name="password" placeholder="Password" required/>
							</div>
							<div class="form-group form-material">
								<label class="control-label" for="inputText">Nama</label>
								<input type="text" class="form-control input-sm" id="admin_nama" name="admin_nama" placeholder="Nama" required/>
							</div>
							<div class='button center'>
								<input class="btn btn-primary btn-sm" type="submit" name="simpan" value="Simpan Data" id="validateButton2">
								<input class="btn btn-default btn-sm" type="reset" name="batal" value="Batalkan" onclick="location.href='<?php echo site_url(); ?>akun/user'"
								/>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<a href="<?php echo site_url();?>akun/user">
		<button class="site-action btn-raised btn btn-sm btn-floating blue" type="button">
			<i class="icon wb-eye" aria-hidden="true"></i>
		</button>
	</a>
</div>
<!-- ================================================== END TAMBAH ================================================== -->

<!-- ================================================== EDIT ================================================== -->
<?php } elseif ($action == 'edit') { ?>
<div class="page">
	<div class="page-title blue">
		<h3>
			<?php echo $breadcrumb; ?>
		</h3>
		<p>Informasi Mengenai
			<?php echo $breadcrumb; ?>
		</p>
	</div>
	<div class="page-content container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="panel">
					<div class="panel-heading">
						<h5 class="panel-title">Edit user</h5>
					</div>
					<div class="panel-body container-fluid">
						<form action="<?php echo site_url();?>akun/user/edit/<?php echo $username;?>" method="post" id="exampleStandardForm"
						autocomplete="off">
							<input type="hidden" name="username" value="<?php echo $username;?>" />
							<div class="form-group form-material">
								<label class="control-label" for="inputText">Username</label>
								<input type="text" value="<?php echo $username; ?>" class="form-control input-sm" id="username" name="admin_level"
								placeholder="Masukan Username" value="<?php echo $username;?>" disabled required/>
							</div>
							<div class="form-group form-material">
								<label class="control-label" for="inputText">Password</label>
								<input type="password" class="form-control input-sm" id="password" name="password" placeholder="Masukan Password Bila diubah"
								/>
							</div>
							<div class="form-group form-material">
								<label class="control-label" for="inputText">Nama</label>
								<input type="text" value="<?php echo $admin_nama; ?>" class="form-control input-sm" id="admin_nama" name="admin_nama" placeholder="Nama"
								required/>
							</div>
							<div class='button center'>
								<input class="btn btn-primary btn-sm" type="submit" name="simpan" value="Simpan Data" id="validateButton2">
								<input class="btn btn-default btn-sm" type="reset" name="batal" value="Batalkan" onclick="location.href='<?php echo site_url(); ?>akun/user'"
								/>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<a href="<?php echo site_url();?>akun/user">
		<button class="site-action btn-raised btn btn-sm btn-floating blue" type="button">
			<i class="icon wb-eye" aria-hidden="true"></i>
		</button>
	</a>
</div>
<!-- ================================================== END EDIT ================================================== -->

<!-- ================================================== DETAIL ================================================== -->
<?php } elseif ($action == 'detail') { ?>
<div class="page">
	<div class="page-title blue">
		<h3>
			<?php echo $breadcrumb; ?>
		</h3>
		<p>Informasi Mengenai
			<?php echo $breadcrumb; ?>
		</p>
	</div>
	<div class="page-content container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="panel">
					<div class="panel-heading">
						<h5 class="panel-title">Detail
							<?php echo $breadcrumb; ?>
						</h5>
					</div>
					<div class="panel-body container-fluid table-detail">
						<div class="table-full table-detail">
							<div class="table-responsive">
								<table class="table table-hover">
									<tbody>
										<tr>
											<td class="title">
												<strong>Username</strong>
											</td>
											<td>:
												<strong>
													<?php echo $admins->username;?>
												</strong>
											</td>
										</tr>
										<tr>
											<td class="title" width="150">Nama</td>
											<td>:
												<?php echo $admins->admin_nama;?>
											</td>
										</tr>
										<tr>
											<td class="title">Role</td>
											<td>:
												<?php echo $admins->admin_level;?>
											</td>
										</tr>
										<tr>
											<td class="title">Dibuat</td>
											<td>:
												<?php echo dateIndo($admins->user_created);?>
											</td>
										</tr>
										<tr>
											<td class="title">Terakhir di Ubah </td>
											<td>:
												<?php echo dateIndo($admins->user_updated);?>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<a href="<?php echo site_url();?>akun/user/">
		<button class="site-action btn-raised btn btn-sm btn-floating blue" type="button">
			<i class="icon wb-eye" aria-hidden="true"></i>
		</button>
	</a>
</div>
<?php }  ?>
<!-- ================================================== END DETAIL ================================================== -->
