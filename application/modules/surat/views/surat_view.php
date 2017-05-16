
<div id="detail" style="min-height: 600px; width:100%; " >
	 <div id="detail-head">
	 	<?php echo $title; ?>
	 </div>

<div>
	 
 
<script>
$(document).ready(function() {
    load_menu();
	
	$("#search_menu").keyup(function(){
			load_menu();
	});
	
	("#search_menu").keydown(function(){
			load_menu();
	});
	
});

function load_menu() {
	$.ajax({
		url :'<?php echo site_url("$controller/menu"); ?>/'+$("#search_menu").val(),
		success: function(result){
			$("#menuitem").html(result);
		}
		});
}

</script>
<style>
 .spesialmenu {
 	/*border-collapse:collapse;*/
	border-spacing:1px;
	margin: 10px auto;
 }
 .spesialmenu td {
 	/*display:block;*/
	text-align:center;
	border:#CCC solid 1px;
 }
 
 .spesialmenu td  a {
 	padding:10px;
	display:block;
	color:#000;
	background-color:#C7D8FB;
	text-decoration:none;
	font-weight:bold;
	/*font-size:14px;*/
 }
 .spesialmenu td  a:hover {
	 transition: all 500ms linear 0s;
 	color:#FFF;
	background-color:#666;
 }
</style>


<div class="menu-profil" style="padding:5px;">


<div>
  <table width="70%" border="0" align="center" class="spesialmenu">
     <tr>
	<td> <a style="text-decoration:none;color:000" href="<?php echo site_url("surat_kelahiran") ?>">
	 	<center>
	 	<img width="80px" height="50px" src="<?php echo base_url()."assets/images/kelahiran2.png" ?>" /> <Br />
	 	<b>KELAHIRAN</b></center>
	  </a></td>
	  <td> <a style="text-decoration:none;color:000" href="<?php echo site_url("operator_penduduk/tambah") ?>">
	 	<center>
	 	<img width="80px" height="50px" src="<?php echo base_url()."assets/images/slmt.gif" ?>" /> <Br />
	 	<b>KEDATANGAN</b></center>
	  </a></td>
	    <td> <a style="text-decoration:none;color:000" href="<?php echo site_url("surat_pindah") ?>">
	 	<center>
	 	<img width="80px" height="50px" src="<?php echo base_url()."assets/images/pindah2.png" ?>" /> <Br />
	 	<b>PINDAH</b></center>
	  </a></td>
	    <td> <a style="text-decoration:none;color:000" href="<?php echo site_url("surat_kematian") ?>">
	 	<center>
	 	<img width="80px" height="50px" src="<?php echo base_url()."assets/images/mati2.png" ?>" /> <Br />
	 	<b>KEMATIAN</b></center>
	  </a></td>
	  
	  
	  
	
   
    </tr>
  </table>

</div>
<form> 
<center>
<input size="50" name="search_menu" id="search_menu"  class="search_menu" placeholder="Cari menu" />
</center></form>
<br>
<div id="menuitem">
  
</div>
 
 
 
</div>