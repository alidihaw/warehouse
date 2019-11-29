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
                        <h3 class="panel-title">Selamat datang di Halaman Administrator</h3>
                    </div>
                    <div class="panel-body container-fluid">
                        <div class="blockquote gray">
                            <h3>Hallo,
                                <?php echo $admin->admin_nama; ?>
                            </h3>
                            <p>Sistem informasi ini untuk administrator atau staff menjalankan data yang akan dibuat</p>
	<div style="margin-top: 20px;" class='onesignal-customlink-container'></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-sm-6 col-xs-12">
                        <div class="small-box bg-aqua">
                            <div class="inner">
                                <h3>
                                    <?php echo $jml_data_transaksi_masuk ?>
                                </h3>
                                <p>Barang Masuk</p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-archive"></i>
                            </div>
                            <a href="<?php echo site_url();?>website/masuk" class="small-box-footer">
                                Lihat Barang Masuk
                                <i class="fa fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-xs-12">
                        <div class="small-box bg-green">
                            <div class="inner">
                                <h3>
                                    <?php echo $jml_data_transaksi_keluar ?>
                                </h3>
                                <p>Barang Keluar</p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-archive"></i>
                            </div>
                            <a href="<?php echo site_url();?>website/keluar" class="small-box-footer">
                                Lihat Barang Keluar
                                <i class="fa fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>