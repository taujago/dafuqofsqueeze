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
 
<!-- <h1><center>Selamat Datang di Operator Area Sistem Informasi Desa</center></h1>
 -->

    <tr>
	
	  <td> <a style="text-decoration:none;color:000" href="<?php echo site_url("statistik_penduduk_janda/index_duda") ?>" >
	 	<center>
	 	<img src="<?php echo base_url()."assets/images/laki.png" ?>" /> <Br />
	 	<b>Data Penduduk Duda </b></center>
	  </a></td>
	    <td> <a style="text-decoration:none;color:000" href="<?php echo site_url("statistik_penduduk_janda") ?>">
	 	<center>
	 	<img src="<?php echo base_url()."assets/images/cewek.png" ?>" /> <Br />
	 	<b>Data Penduduk Janda</b></center>
	  </a></td>

	   <td> <a style="text-decoration:none;color:000" href="<?php echo site_url("statistik_penduduk_janda/diag") ?>" target="_blank">
	 	<center>
	 	<img src="<?php echo base_url()."assets/images/diag.png" ?>" /> <Br />
	 	<b>Statistik Diagram Duda dan Janda</b></center>
	  </a></td>

	   
	  
	  
	  
	
   
    </tr>
	
  </table>
</div>

<div>
	 
 