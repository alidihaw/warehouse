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
                            <?php if ($admin->admin_level_kode == 1) { ?>
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
                                            <a class="btn btn-primary" href="<?php echo site_url();?>pengaturan/pengguna">
                                                <i class="fa fa-refresh"></i>
                                            </a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <?php } ?>
                            <?php if ($admin->admin_level_kode == 1) { ?>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <th>No</th>
                                        <th>Nama Lengkap</th>
                                        <th>Username</th>
                                        <th>Kelompok</th>
                                        <th width=270>Tanggal</th>
                                        <th class="text-center">Aksi</th>
                                    </thead>
                                    <tbody>
                                        <?php 
	                            $i	= $page+1;
                                $like_admin[$cari]			= $q;
	                        if ($jml_data > 0){
                                foreach ($this->ADM->grid_all_admin('', 'admin_level_nama', 'ASC', $batas, $page, '', $like_admin) as $row){
	                            ?>
                                        <tr>
                                            <td>
                                                <?php echo $i; ?>
                                            </td>
                                            <td>
                                                <?php echo $row->admin_nama;?>
                                            </td>
                                            <td>
                                                <?php echo $row->admin_user;?>
                                            </td>
                                            <td>
                                                <?php echo $row->admin_level_nama;?>
                                            </td>
                                            <td>
                                                <b>Dibuat:</b>
                                                <?php echo dateIndo($row->admin_created);?>
                                                <br>
                                                <b>Terakhir diubah:</b>
                                                <?php echo dateIndo($row->admin_created);?>
                                            </td>
                                            <td class="text-center action">
                                                <?php if ($row->admin_status === 'H') { ?>
                                                <a class="btn-update" href="<?php echo site_url();?>pengaturan/pengguna/accept/<?php echo $row->admin_user;?>">
                                                    <i class="icon wb-check"></i>
                                                </a>
                                                <?php } else { ?>
                                                <a class="btn-update" href="<?php echo site_url();?>pengaturan/pengguna/reject/<?php echo $row->admin_user;?>">
                                                    <i class="icon wb-close"></i>
                                                </a>
                                                <?php } ?>
                                                <a class="btn-update" href="<?php echo site_url();?>pengaturan/pengguna/edit/<?php echo $row->admin_user;?>">
                                                    <i class="icon wb-pencil"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <?php
                                    $i++;
	                            } 
	                        } else {
                                ?>
                                            <tr>
                                                <td colspan="7">Belum ada data!.</td>
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
                                                <?php if ($jml_halaman > 1) { echo pages($halaman, $jml_halaman, 'pengaturan/pengguna/view', $id=""); }?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="total">Total :
                                    <?php echo $jml_data;?>
                                </div>
                            </div>
                            <?php } else { ?>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <th>No</th>
                                        <th>Nama Lengkap</th>
                                        <th>Username</th>
                                        <th>Kelompok</th>
                                        <th width=270>Tanggal</th>
                                        <th class="text-center">Aksi</th>
                                    </thead>
                                    <tbody>
                                        <?php 
	                            $i	= $page+1;
                                $where_admin['admin_user']	= $admin->admin_user;
                                $like_admin[$cari]			= $q;
	                        if ($jml_data > 0){
                                foreach ($this->ADM->grid_all_admin('', 'admin_level_nama', 'ASC', $batas, $page, $where_admin, $like_admin) as $row){
	                            ?>
                                        <tr>
                                            <td>
                                                <?php echo $i; ?>
                                            </td>
                                            <td>
                                                <?php echo $row->admin_nama;?>
                                            </td>
                                            <td>
                                                <?php echo $row->admin_user;?>
                                            </td>
                                            <td>
                                                <?php echo $row->admin_level_nama;?>
                                            </td>
                                            <td>
                                                <b>Dibuat:</b>
                                                <?php echo dateIndo($row->admin_created);?>
                                                <br>
                                                <b>Terakhir diubah:</b>
                                                <?php echo dateIndo($row->admin_created);?>
                                            </td>
                                            <td class="text-center action">
                                                <a class="btn-update" href="<?php echo site_url();?>pengaturan/pengguna/edit/<?php echo $row->admin_user;?>">
                                                    <i class="icon wb-pencil"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <?php
                                    $i++;
	                            } 
	                        } else {
                                ?>
                                            <tr>
                                                <td colspan="7">Belum ada data!.</td>
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
                                                <?php if ($jml_halaman > 1) { echo pages($halaman, $jml_halaman, 'pengaturan/pengguna/view', $id=""); }?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="total">Total :
                                    <?php echo $jml_data2;?>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php if ($admin->admin_level_kode == 1) { ?>
    <a href="<?php echo site_url();?>pengaturan/pengguna/tambah">
        <button class="site-action btn-raised btn btn-sm btn-floating blue" type="button">
            <i class="icon wb-plus" aria-hidden="true"></i>
        </button>
    </a>
    <?php }?>
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
                <a href="javascript:;" class="btn btn-danger" id="hapus-pengguna">Ya</a>
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
                        <h5 class="panel-title">Tambah Pengguna</h5>
                    </div>
                    <div class="panel-body container-fluid">
                        <form action="<?php echo site_url();?>pengaturan/pengguna/tambah" method="post" id="exampleStandardForm" autocomplete="off">
                            <div class="form-group form-material">
                                <label class="control-label" for="inputText">Username</label>
                                <input type="text" class="form-control input-sm" id="admin_user" name="admin_user" placeholder="Username" required/>
                            </div>
                            <div class="form-group form-material">
                                <label class="control-label" for="inputText">Password</label>
                                <input type="password" class="form-control input-sm" id="admin_pass" name="admin_pass" placeholder="Password" required/>
                            </div>
                            <div class="form-group form-material">
                                <label class="control-label" for="inputText">Nama Lengkap</label>
                                <input type="text" class="form-control input-sm" id="admin_nama" name="admin_nama" placeholder="Nama Lengkap" required/>
                            </div>
                            <div class="form-group form-material">
                                <label class="control-label" for="inputText">Alamat</label>
                                <input type="text" class="form-control input-sm" id="admin_alamat" name="admin_alamat" placeholder="Alamat" required/>
                            </div>
                            <div class="form-group form-material">
                                <label class="control-label" for="inputText">Telepon</label>
                                <input type="text" class="form-control input-sm" id="admin_telepon" name="admin_telepon" placeholder="Telepon" required/>
                            </div>
                            <div class="form-group form-material">
                                <label class="control-label" for="inputText">Kelompok</label>
                                <?php $this->ADM->combo_box("SELECT * FROM admin_level WHERE admin_level_status='A' AND admin_level_nama!='Public'", 'admin_level_kode', 'admin_level_kode', 'admin_level_nama', $admin_level_kode,'');?>
                            </div>
                            <div class='button center'>
                                <input class="btn btn-primary btn-sm" type="submit" name="simpan" value="Simpan Data" id="validateButton2">
                                <input class="btn btn-default btn-sm" type="reset" name="batal" value="Batalkan" onclick="location.href='<?php echo site_url(); ?>pengaturan/pengguna'"
                                />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a href="<?php echo site_url();?>pengaturan/pengguna">
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
                        <h5 class="panel-title">Edit Pengguna</h5>
                    </div>
                    <div class="panel-body container-fluid">
                        <form action="<?php echo site_url();?>pengaturan/pengguna/edit/<?php echo $admin_user;?>" method="post" id="exampleStandardForm"
                            autocomplete="off">
                            <input type="hidden" name="admin_user" value="<?php echo $admin_user;?>" />
                            <div class="form-group form-material">
                                <label class="control-label" for="inputText">Username</label>
                                <input type="text" value="<?php echo $admin_user; ?>" class="form-control input-sm" id="admin_user" name="admin_level_nama"
                                    placeholder="Masukan Kelompok" value="<?php echo $admin_user;?>" disabled required/>
                            </div>
                            <div class="form-group form-material">
                                <label class="control-label" for="inputText">Password</label>
                                <input type="password" class="form-control input-sm" id="admin_pass" name="admin_pass" placeholder="Masukan Password Bila diubah"
                                />
                            </div>
                            <div class="form-group form-material">
                                <label class="control-label" for="inputText">Nama Lengkap</label>
                                <input type="text" value="<?php echo $admin_nama; ?>" class="form-control input-sm" id="admin_nama" name="admin_nama" placeholder="Nama Lengkap"
                                    required/>
                            </div>
                            <div class="form-group form-material">
                                <label class="control-label" for="inputText">Alamat</label>
                                <input type="text" value="<?php echo $admin_alamat; ?>" class="form-control input-sm" id="admin_alamat" name="admin_alamat"
                                    placeholder="Alamat" required/>
                            </div>
                            <div class="form-group form-material">
                                <label class="control-label" for="inputText">Telepon</label>
                                <input type="text" value="<?php echo $admin_telepon; ?>" class="form-control input-sm" id="admin_telepon" name="admin_telepon"
                                    placeholder="Telepon" required/>
                            </div>
                            <div class="form-group form-material">
                                <label class="control-label" for="inputText">Kelompok</label>
                                <?php $this->ADM->combo_box("SELECT * FROM admin_level WHERE admin_level_status='A' AND admin_level_nama!='Public'", 'admin_level_kode', 'admin_level_kode', 'admin_level_nama', $admin_level_kode,'');?>
                            </div>
                            <div class='button center'>
                                <input class="btn btn-primary btn-sm" type="submit" name="simpan" value="Simpan Data" id="validateButton2">
                                <input class="btn btn-default btn-sm" type="reset" name="batal" value="Batalkan" onclick="location.href='<?php echo site_url(); ?>pengaturan/pengguna'"
                                />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a href="<?php echo site_url();?>pengaturan/pengguna">
        <button class="site-action btn-raised btn btn-sm btn-floating blue" type="button">
            <i class="icon wb-eye" aria-hidden="true"></i>
        </button>
    </a>
</div>
<!-- ================================================== END EDIT ================================================== -->
<?php } ?>