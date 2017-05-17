<script src="<?php echo base_url('assets/highcharts/highcharts.js'); ?>"></script>
  
<div id="detail" style="min-height: 500px;" >
	 <div id="detail-head">
	 	<?php echo $title; ?>
	 </div>

<p></p>
<a href="#" class="easyui-linkbutton" iconCls="icon-back" onclick="javascript:location.href=('<?php echo site_url("operator_penduduk_ektp") ?>')">Kembali</a>


<div id="grafikdata">

</div>  

</div>

<p></p>
 
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
            text: 'GRAFIK KEPEMILIKAN E-KTP PENDUDUK '
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
            name: 'Status Kepemilikan ',
            colorByPoint: true,
            data: [{
                name: 'MEMILIKI E-KTP <?php echo $persen_sudah; ?>',
                y: <?php echo $persen_sudah; ?>
            }, {
                name: 'TIDAK MEMILIKI E-KTP <?php echo $persen_belum; ?>',
                y: <?php echo $persen_belum; ?>, 
                sliced: true,
                selected: true
            } ]
        }]
    });
});
</script>

