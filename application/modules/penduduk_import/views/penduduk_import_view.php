<div id="detail" style="height: 400px;" >
	 <div id="detail-head">
	 	<?php echo $title; ?>
	 </div>
	 

	  <div style="padding : 50px">
	 	<center>
	 		<form action="<?php echo site_url("penduduk_import/import") ?>" id="restoreform" enctype="multipart/form-data" method="post"  >
	 		<strong>IMPORT FILE DATA PENDUDUK </strong> 
<p></p>
<!-- <a style="text-decoration:none;color:000" href="#" onClick="login();">
	 	<center>
	 	<b>KLIK DISINI CARA DOWNLOAD DATA PENDUDUK DI WEB PRODESKEL</b></center>
	  </a>
	 		<p>
<strong>Atau silahkan download contoh file excel prodeskel  <a href="
<?php echo site_url("file/pkpd/grid_agtkeluarga.xlsx") ?>">Di Sini !!!</a> (Offline) </strong>
			 -->

</p>
	 	
	 		<input type="file" name="xlsfile" /><input type="submit" value="IMPORT">
	 	</form>

	<!--  <a style="text-decoration:none;color:000" href="#" onclick="restoredb();">
	 	
	 	<img src="<?php echo base_url()."assets/images/import.png" ?>" /> <Br />
	 	<b>RESTORE</b>

	 	<div id="loading" style="display:none;" ><center> Proses Restore ..... </center></div>
	 </center>
	  </a> -->
	 <div>
</div>
<div class="modal">


</div>
</script>

<!-- <div id="dlg" class="easyui-dialog" style="width:600px;height:300px;padding:10px 20px"
				closed="true" buttons="#dlg-buttons">
		<div class="ftitle">Petunjuk :</div>
		<form id="fm" method="post" novalidate>
			
			<table>
	 			 
	 			<tr><td>1. Pastikan perangkat terkoneksi dengan internet. </td>
	 			</tr>
	 			<tr><td>2. Buka Web Prodeskel atau <a href="http://prodeskel.binapemdes.kemendagri.go.id/mpublik/ " target="_blank">Klik disini</a> </td>
	 			</tr>
	 			<tr><td>3. Klik menu <strong>Masuk</strong> dan <strong>silahkan login</strong></td>
	 				
	 			</tr>
	 			<tr><td>4. Pilih Menu <strong>KK</strong> dan <strong>AK</strong></td>
	 				
	 			</tr>
	 			<tr><td>5. Klik <strong>XLS</strong>, kemudian klik <strong>Download</strong></td>
	 				
	 			</tr>
	 		</form>

		 </table>
	
	</div>
	
</div> -->

<!-- <script type="text/javascript">
$(document).ready(function(){

	// $('#dlg').dialog('open').dialog('setTitle','Profile user');

});

function login(){
				$('#dlg').dialog('open').dialog('setTitle','Cara Download Data Penduduk Prodeskel');
				$('#fm').form('clear');
				 
				 
	}


</script> -->