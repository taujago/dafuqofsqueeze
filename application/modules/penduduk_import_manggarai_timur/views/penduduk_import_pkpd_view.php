<div id="detail" style="height: 400px;" >
	 <div id="detail-head">
	 	<?php echo $title; ?>
	 </div>
	  

	  <div style="padding : 50px">
	 	<center>
	 		<form action="<?php echo site_url("penduduk_import/import2") ?>" id="restoreform" enctype="multipart/form-data" method="post"  >
	 		<strong>IMPORT FILE DATA PENDUDUK  </strong> <br /><br /><br />
<!-- <p>
<strong>Silahkan download file untuk melihat contoh formatnya  <a href="
<?php echo site_url("file/pkpd/pkpd.xlsx") ?>">Di Sini !!!</a> </strong>
			

</p>
	 	 -->	

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
