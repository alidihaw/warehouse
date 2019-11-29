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
                    <script src="<?php echo base_url();?>templates/backend/js/highchart.js"></script>
					<script src="<?php echo base_url();?>templates/backend/js/exporting.js"></script>

<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
<script>
	Highcharts.chart('container', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Laporan Barang Masuk'
    },
    subtitle: {
        text: 'Statistik Barang Masuk'
    },
    xAxis: {
        categories: [
			<?php 
			$where_transaksi['status_pergerakan'] 	= 1;
			foreach ($this->ADM->grid_all_transaksi('', 'id_transaksi', 'DESC', 1000, '', $where_transaksi, '') as $row){ ?>
				<?php 
									$where_barang['id_barang'] 	= $row->id_barang;
									foreach ($this->ADM->grid_all_barang('', 'id_barang', 'DESC', 100, '', $where_barang, '') as $row2){ ?>
									'<?php echo $row2->nama_barang;?>',
									<?php } ?>
			<?php } ?>
        ],
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Jumlah Barang Masuk (pcs)'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y} pcs</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [{
        name: 'Jumlah Barang Masuk',
        data: [
			<?php 
			$where_transaksi['status_pergerakan'] 	= 1;
			foreach ($this->ADM->grid_all_transaksi('', 'id_transaksi', 'DESC', 1000, '', $where_transaksi, '') as $row){ ?>
									<?php echo $row->jumlah;?>,
			<?php } ?>
		]

    }]
});
</script>

                    </div>
						<a href="<?php echo base_url();?>website/laporanmasukpdf" class="btn btn-primary btn-block btn-lg" style="margin-top: 30px !important;">Download Laporan Barang Masuk PDF</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php } ?>