<script src="<?php echo base_url('assets/highcharts/highcharts.js'); ?>"></script>
  
<div id="detail" style="min-height: 500px;" >
	 <div id="detail-head">
	 	<?php echo $title; ?>
	 </div>

<p></p>


<div id="grafikdata">

</div>  

</div>


<script type="text/javascript">
	
$(document).ready(function () {

    // Build the chart

    $('#grafikdata').highcharts(
    // Highcharts.chart('container', 
    {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: 'GRAFIK KELENGKAPAN DOKUMEN KEPEMILIKAN TANAH '
        },
        tooltip: {
            pointFormat: 'Persentase : <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: false
                },
                showInLegend: true
            }
        },
        series: [{
            name: 'KELENGKAPAN DOKUMEN',
            colorByPoint: true,
            data: [{
                name: 'LENGKAP <?php echo $persen_sudah; ?>',
                y: <?php echo $persen_sudah; ?>
            }, {
                name: 'TIDAK LENGKAP  <?php echo $persen_belum; ?>',
                y: <?php echo $persen_belum; ?>, 
                sliced: true,
                selected: true
            } ]
        }]
    });
});
</script>
