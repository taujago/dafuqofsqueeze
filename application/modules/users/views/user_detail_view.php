<div id="detail" style="height: 500px;" >
	 <div id="detail-head">
	 	<?php echo $title; ?>
	 </div>
	 


 	
  <table width="40%" border="0" align="center" class="spesialmenu">
 



    <tr>

   <div style="padding : 20px">
	  <script type="text/javascript">

function newPopup(url) {
    popupWindow = window.open(
        url,'popUpWindow','height=250,width=250,left=600,top=200,resizable=no,scrollbars=no,toolbar=no,menubar=no,location=no,directories=no,status=no')
}
</script>


	<td> <a style="text-decoration:none;color:000" href="JavaScript:newPopup('<?php echo site_url("foto/upload/?id=2"); ?>');">
	 	<center>
	  <img class="foto" src="<?php echo base_url()."foto/upload/gambar/admin.jpg" ?>" width="100"
height="150" /> <Br />	<b>GANTI FOTO</b><br><br>
<form method="link" action="javascript:document.location.reload()"><input type="submit" value="Refresh Foto" onClick="this.value = 'refreshing...'"></form>
</center>

	 	</td>	
	    <td> <a style="text-decoration:none;color:000" href="#" onClick="login();">
	 	<center>
	 	<img src="<?php echo base_url()."assets/images/msecure.png" ?>" /> <Br />
	 	<b>GANTI PASSWORD</b><br><br><br></center>
	  </a></td>
    </tr>

	
  </table>


<script>
function myFunction() {
    location.reload();
}
</script>

<div id="dlg" class="easyui-dialog" style="width:600px;height:300px;padding:10px 20px"
				closed="true" buttons="#dlg-buttons">
		<div class="ftitle">Ganti Password</div>
		<form id="fm" method="post" novalidate>
			
			<table>
	 			 
	 			<tr><td>Password Lama </td>
	 				<td> <input type="password" name="pass_lama" id="pass_lama"  >  </td>
	 			</tr>
	 			<tr><td>Password Baru </td>
	 				<td> <input type="password" name="pass" id="pass"  value="" >  </td>
	 			</tr>
	 			<tr><td>Password Baru  (lagi) </td>
	 				<td> <input type="password" name="pass2" id="pass2" value="" >  </td>
	 			</tr>
	 		

		 </table>
			 <input type="hidden" name="id_user" value="id_user" />
		 
			
		</form>
		
	</div>
	<div id="dlg-buttons">
		<a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-ok" onclick="simpan()">Save</a>
 	</div>

</div>

<script type="text/javascript">
$(document).ready(function(){

	// $('#dlg').dialog('open').dialog('setTitle','Profile user');

});

function login(){
				$('#dlg').dialog('open').dialog('setTitle','Ganti Password');
				$('#fm').form('clear');
				 
				 
	}
function simpan(){
	console.log('hallo..');
			$('#fm').form('submit',{
				url: '<?php echo site_url("users/save_detail") ?>',
				onSubmit: function(){
					return $(this).form('validate');
				},
				success: function(result){
					//var result = eval('('+result+')');
					console.log(result);
					//return false; 
					result = result.replace(/\s+/g, " ");
					obj = $.parseJSON(result);
					console.log(obj.pesan);
					if (obj.success == false ){
						$.messager.alert('Error',obj.pesan,'error');
					} else {
						$.messager.alert('Information',obj.pesan,'info');						 
					}
				}
			});
		}

</script>