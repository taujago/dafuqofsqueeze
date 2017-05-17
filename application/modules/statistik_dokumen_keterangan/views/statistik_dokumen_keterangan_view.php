<script src="<?php echo base_url('assets/highcharts/highcharts.js'); ?>"></script>
  
<div id="detail" style="min-height: 500px;" >
	 <div id="detail-head">
	 	<?php echo $title; ?>
	 </div>



<div style="margin-top: 50px;" > </div>

<p align="center">
    
  Tahun <input value="<?php echo date("Y"); ?>" type="text" name="tahun" id="tahun" placeholder="Tahun" />
  <a href="#" class="easyui-linkbutton" iconCls="icon-view" plain="true" onclick="cetak();">Tampilkan</a>
</p>



<div id="graphicbox">
</div>


</div>

<script type="text/javascript">
    
   function cetak(){
       vtahun = $("#tahun").val();
       if(vtahun==undefined || vtahun=="") {
            $.messager.alert('Error','Tahun harus diisi','error');
       }
       else {
            $.ajax({
                url : '<?php echo site_url("statistik_dokumen_keterangan/graphic") ?>',
                data : {tahun : vtahun},
                type : 'post',
                success : function(htmldata) {
                   $("#graphicbox").html(htmldata); 
                }

            });
       }
   }

</script>


