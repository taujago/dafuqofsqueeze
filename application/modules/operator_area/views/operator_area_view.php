<style>
 .spesialmenu {
 	border-collapse:collapse;
	border-spacing:1px;
	margin: 50px auto;
 }
 .spesialmenu td {
 	/*display:block;*/
	text-align:center;
	border:#CCC solid 1px;
 }
 
 .spesialmenu td  a {
 	padding:20px;
	display:block;
	color:#000;
	background-color:#C7D8FB;
	text-decoration:none;
	font-weight:bold;
	font-size:14px;
 }
 .spesialmenu td  a:hover {
	 transition: all 500ms linear 0s;
 	color:#FFF;
	background-color:#666;
 }

</style>

<div id="detail" style="min-height: 600px; /*width:1032px;*/ " >
	 <div id="detail-head">
	 	<?php echo $title; ?>
	 </div>


<div>
  <table width="80%" border="0" align="center" class="spesialmenu">
 
<h1><center>Selamat Datang di Operator Area SMARTDESA</center></h1>


    <tr>
	<td> <a style="text-decoration:none;color:000" href="<?php echo site_url("surat_kelahiran") ?>">
	 	<center>
	 	<img src="<?php echo base_url()."assets/images/kelahiran2.png" ?>" /> <Br />
	 	<b>KELAHIRAN</b></center>
	  </a></td>
	  <td> <a style="text-decoration:none;color:000" href="<?php echo site_url("operator_penduduk/tambah") ?>">
	 	<center>
	 	<img width="128px" height="128px" src="<?php echo base_url()."assets/images/slmt.gif" ?>" / > <Br />
	 	<b>KEDATANGAN</b></center>
	  </a></td>
	    <td> <a style="text-decoration:none;color:000" href="<?php echo site_url("surat_pindah") ?>">
	 	<center>
	 	<img src="<?php echo base_url()."assets/images/pindah2.png" ?>" /> <Br />
	 	<b>PINDAH</b></center>
	  </a></td>
	    <td> <a style="text-decoration:none;color:000" href="<?php echo site_url("surat_kematian") ?>">
	 	<center>
	 	<img src="<?php echo base_url()."assets/images/mati2.png" ?>" /> <Br />
	 	<b>KEMATIAN</b></center>
	  </a></td>
	  
	  
	  
	
   
    </tr>
	
  </table>
</div>

<div>
	 
 