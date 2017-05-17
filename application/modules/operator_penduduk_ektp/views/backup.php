<!-- <script src="<?php echo base_url('assets/highcharts/highcharts.js'); ?>"></script>
 -->
<div id="detail" style="min-height: 500px;" >
	 <div id="detail-head">
	 	<?php echo $title; ?>
	 </div>

<p></p>
<a href="#" class="easyui-linkbutton" iconCls="icon-back" onclick="javascript:location.href=('<?php echo site_url("operator_penduduk_ektp") ?>')">Kembali</a>

</div>

<p></p>
<!-- 
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
            text: 'Browser market shares January, 2015 to May, 2015'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
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
            name: 'Brands',
            colorByPoint: true,
            data: [{
                name: 'Microsoft Internet Explorer',
                y: 56.33
            }, {
                name: 'Chrome',
                y: 24.03,
                sliced: true,
                selected: true
            }, {
                name: 'Firefox',
                y: 10.38
            }, {
                name: 'Safari',
                y: 4.77
            }, {
                name: 'Opera',
                y: 0.91
            }, {
                name: 'Proprietary or Undetectable',
                y: 0.2
            }]
        }]
    });
});
</script>

<div id="grafikdata">

</div> --> 