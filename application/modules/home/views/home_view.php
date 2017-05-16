<html>
<head>
	<title>
		SmartDesa
	</title>
  <link rel="icon"  type="image/png"   href="<?php echo base_url()."assets/images/favicon.png" ?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/jseasyui/themes/default/easyui.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/jseasyui/themes/icon.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/login-style.css">
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/jseasyui/jquery-1.8.0.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/jseasyui/jquery.easyui.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url()."assets/js/jquery.md5.js" ?>" ></script>

</head>

<body>
<?php 
$desa = $this->cm->data_desa();
  ?>

<div id="wrapper">
 <table>
 <tr>
 <td>
  <img class="foto" src="<?php echo base_url()."foto/upload/gambar/admin.jpg" ?>" width="200" height="278" />
 </td>
 </tr>
 </table>

 <div id="right">
 <table>
 <tr>
 <td>
 <!-- settting margin di login-style.css untuk menyesuaikan balance -->
  <img class="foto2" src="<?php echo base_url()."foto/logo.png" ?>" width="auto" height="280" />
 </td>
 </tr>
 </table>

  <center>
  <H1> <a class="judul" ><font size="7">S M A R T D E S A</font></H1></a> </center>
  <center>
  <H2> <a class="judul2" ><font size="6">SISTEM INFORMASI MANAJEMEN DESA  </font></H2></a> </center>

 <div class="informasi_desa">
  <center>  <table width="100%">  
       <tr><td class="kiri" width="200px"> <?php echo $desa->bentuk_lembaga ?>   </td><td class="kanan">
    : <?php echo $desa->desa ?> </td></tr>

      <tr><td class="kiri" width="200px"> Kecamatan   </td><td class="kanan">: <?php echo $desa->kecamatan ?>  </td></tr>
      <tr><td class="kiri" width="200px"> Kab / Kota   </td><td class="kanan">: <?php echo $desa->kota ?>  </td></tr>
      <tr><td class="kiri" width="200px"> Provinsi  </td><td class="kanan">: <?php echo $desa->provinsi ?>  </td>
      </tr>
      <tr>
      
      </tr>
      
      
    </table></center>
    <br> <br> 
   <center> <table>
      <td width="100%"> <br>
      <a href="#" class="myButton" onClick="login();" > &#10003; LOG IN </a> </td>
      </table></center>
 </div>
<H1> <center><a class="judul" ><font size="7"><?php echo $desa->kota ?> </font></H1></a> </center>
 <H4> <center><a href="http://lpkpd.org" target="_blank" class="judul2 " ><font size="3">www.lpkpd.org </font></H4></a> </center> 
 
<div id="dlg" class="easyui-dialog" style="width:600;height:200px;padding:65px 0px"
			closed="true" buttons="#dlg-buttons">
 		<form id="frm" method="post" >
 			<center>
				<table>
					<tr>
						<td class="label">Username Operator </td>
						<td><input type="text" name="member"  id="member"/>
					</tr>
					<tr>
						<td class="label">Password </td>
						<td><input type="password" name="password" id="password" />
					</tr>
				</table>
			</center>
				<input type="hidden" name="password2" id="password2" />
			</form>
	</div>

	<div id="dlg-buttons">
		<a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-ok" onClick="go_login()">Login</a>
		<a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-cancel" onClick="javascript:$('#dlg').dialog('close')">Batal</a>
	</div>
 
<?php echo $this->load->view("home_js"); ?>
</body>

</html>

