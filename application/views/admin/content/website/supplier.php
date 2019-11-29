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
                                            <a class="btn btn-primary" href="<?php echo site_url();?>website/supplier"><i class="fa fa-refresh"></i></a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <th width=80>No</th>
                                        <th width=120>Nama</th>
                                        <th width=150>Alamat</th>
                                        <th width=120>No Telp</th>
                                        <th width=270>Tanggal</th>
                            <?php if ($admin->admin_level_kode == 1) { ?>
                                        <th class="text-center">Aksi</th>
                            <?php } ?>
                                    </thead>
                                    <tbody>
                                        <?php 
	                            $i	= $page+1;
                                $like_supplier[$cari]			= $q;
	                        if ($jml_data > 0){
                                foreach ($this->ADM->grid_all_supplier('', 'nama_supplier', 'ASC', $batas, $page, '', $like_supplier) as $row){
	                            ?>
                                        <tr>
                                            <td>
                                                <?php echo $i; ?>
                                            </td>
                                            <td>
                                                <?php echo $row->nama_supplier;?>
                                            </td>
                                            <td>
                                                <?php echo $row->alamat_supplier;?>
                                            </td>
                                            <td>
                                                <?php echo $row->notelp_supplier;?>
                                            </td>
                                            <td>
                                                <b>Dibuat:</b> <?php echo dateIndo($row->supplier_created);?><br>
                                                <b>Terakhir diubah:</b> <?php echo dateIndo($row->supplier_updated);?>
                                </td>
                            <?php if ($admin->admin_level_kode == 1) { ?>
                                            <td class="text-center action">
                                                <a class="btn-update" href="<?php echo site_url();?>website/supplier/edit/<?php echo $row->id_supplier;?>">
													<i class="icon wb-pencil"></i>
												</a>
                                                <a class="btn-delete" href="javascript:;" data-id="<?php echo $row->id_supplier;?>" data-toggle="modal" data-target="#modal-konfirmasi"
                                                    title="<?php echo $row->nama_supplier;?>">
													<i class="icon wb-trash"></i>
												</a>
                                            </td>
                            <?php } ?>
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
                                                <?php if ($jml_halaman > 1) { echo pages($halaman, $jml_halaman, 'website/supplier/view', $id=""); }?>
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
                            <?php if ($admin->admin_level_kode == 1) { ?>
    <a href="<?php echo site_url();?>website/supplier/tambah">
		<button class="site-action btn-raised btn btn-sm btn-floating blue" type="button">
			<i class="icon wb-plus" aria-hidden="true"></i>
		</button>
    </a>
                            <?php } ?>
</div>
<!-- ========== Modal Konfirmasi ========== -->
<div id="modal-konfirmasi" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Konfirmasi</h4>
            </div>

            <div class="modal-body" style="background:#d9534f;color:#fff">
                Apakah Anda yakin ingin menghapus data ini?
            </div>
            <div class="modal-footer">
                <a href="javascript:;" class="btn btn-danger" id="hapus-supplier">Ya</a>
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
                        <h5 class="panel-title">Tambah <?php echo $breadcrumb; ?></h5>
                    </div>
                    <div class="panel-body container-fluid">
                        <form action="<?php echo site_url();?>website/supplier/tambah" method="post" id="exampleStandardForm" autocomplete="off">
                            <div class="form-group form-material">
                                <label class="control-label" for="inputText">Nama</label>
                                <input type="text" class="form-control input-sm" id="nama_supplier" name="nama_supplier" placeholder="Nama Supplier" required/>
                            </div>
                            <div class="form-group form-material">
                                <label class="control-label" for="inputText">Alamat</label>
                                <input type="text" class="form-control input-sm" id="alamat_supplier" name="alamat_supplier" placeholder="Alamat" required/>
                            </div>
                            <div class="form-group form-material">
                                <label class="control-label" for="inputText">No Telp</label>
                                <input type="text" class="form-control input-sm" id="notelp_supplier" name="notelp_supplier" placeholder="No Telp" required/>
                            </div>
                            <div class='button center'>
                                <input class="btn btn-primary btn-sm" type="submit" name="simpan" value="Simpan Data" id="validateButton2">
                                <input class="btn btn-default btn-sm" type="reset" name="batal" value="Batalkan" onclick="location.href='<?php echo site_url(); ?>website/supplier'"
                                />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a href="<?php echo site_url();?>website/supplier">
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
                        <h5 class="panel-title">Edit <?php echo $breadcrumb; ?></h5>
                    </div>
                    <div class="panel-body container-fluid">
                        <form action="<?php echo site_url();?>website/supplier/edit/<?php echo $id_supplier;?>" method="post" id="exampleStandardForm" autocomplete="off">
                            <input type="hidden" name="id_supplier" value="<?php echo $id_supplier;?>" />
                            <div class="form-group form-material">
                                <label class="control-label" for="inputText">Nama Supplier</label>
                                <input type="text" value="<?php echo $nama_supplier; ?>" class="form-control input-sm" id="nama_supplier" name="nama_supplier" placeholder="Nama Supplier"
                                    required/>
                            </div>
                            <div class="form-group form-material">
                                <label class="control-label" for="inputText">Alamat</label>
                                <input type="text" value="<?php echo $alamat_supplier; ?>" class="form-control input-sm" id="alamat_supplier" name="alamat_supplier"
                                    placeholder="Alamat" required/>
                            </div>
                            <div class="form-group form-material">
                                <label class="control-label" for="inputText">No Telp</label>
                                <input type="text" value="<?php echo $notelp_supplier; ?>" class="form-control input-sm" id="notelp_supplier" name="notelp_supplier"
                                    placeholder="No Telp" required/>
                            </div>
                            <div class='button center'>
                                <input class="btn btn-primary btn-sm" type="submit" name="simpan" value="Simpan Data" id="validateButton2">
                                <input class="btn btn-default btn-sm" type="reset" name="batal" value="Batalkan" onclick="location.href='<?php echo site_url(); ?>website/supplier'"
                                />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a href="<?php echo site_url();?>website/supplier">
		<button class="site-action btn-raised btn btn-sm btn-floating blue" type="button">
			<i class="icon wb-eye" aria-hidden="true"></i>
		</button>
	</a>
</div>
<!-- ================================================== END EDIT ================================================== -->
<?php } ?>