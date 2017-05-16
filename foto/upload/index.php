<?php error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
$host="localhost:4418";   //koneksi ke database
$user="root";
$pass="";
$db="simdeskel";
	//
$koneksi=mysql_connect($host,$user,$pass);
mysql_select_db($db,$koneksi);

if($koneksi){
	//echo "Berhasil koneksi";
}else{
	echo'KONEKSI GAGAL';
}
?>

<!DOCTYPE html><html lang="id">
<head>
<title>Ganti Foto </title>
<style>
input {width:95%;border:solid 1px #eeeeee;padding:6px 5px;}
input:hover {border:solid 1px #0099FF}
.group { margin:10px;}
.label2{  display:table}
.button {text-align:center;background:#0099FF;color:#ffffff; padding:5px; border:0px; width:100px; cursor:pointer; border: solid 3px #eeeeee;}
.button:hover{border: solid 3px #0099FF;}
.gambar-container { width:980px;margin:auto;}
.gambar-container h3 { text-align:center;font-family:Arial, Helvetica, sans-serif;font-size:20px;color:#999999}
.gambar {float:left;width:190px;height:200px; padding:1px;border: dotted 1px #eeeeee;}
.gambar h3 {text-align:center;font-family:Arial, Helvetica, sans-serif;font-size:14px;color:#333333; margin:0px; padding:4px;}
.gambar img { width:100%;height:170px;}
.img-thumbnail {border: solid 1px #eeeeee; padding:3px; margin:10px;}
#tampil {background:#eeeeee; padding:5px; color:#333333;left:0px;}

.edit{float:left; text-align:center;font-size:14px; color:#fff; font-family:Arial, Helvetica, sans-serif; background:#0066FF; padding:4px; display:block}
.hapus {float:right;text-align:center;font-size:14px; color:#ffffff; font-family:Arial, Helvetica, sans-serif; background:#FF0000; padding:4px; display:block; width:80px;}
a{text-decoration:none;}
.container {width:400px; margin:auto;padding:10px;border:dotted 1px #cccccc;}
</style>
<script language="javascript">
function toggle() {
var ele = document.getElementById("sembunyi");
var gmbr = document.getElementById("gmbr");
var text = document.getElementById("tampil");
if(ele.style.display == "block") {
ele.style.display = "none";
gmbr.style.display = "block";
text.innerHTML = "Ganti Foto";
}
else {
ele.style.display = "block";
gmbr.style.display = "none";
text.innerHTML = "Kembali";
}
}
</script>
</head>

<body>

<?PHP if (isset($_POST['uploadgambar'])) {//// UNTUK MENAMBAH 
	$nama=strip_tags($_POST['nama']);
	$gambar=$_FILES['gambar']['name'];
	$tgl=date("h:i:s-j-m-Y");
	$fileError = $_FILES['gambar']['error'];    
 $typeGambar = array('image/bmp', 'image/gif', 'image/jpg', 'image/jpeg', 'image/png');
if(!in_array($_FILES['gambar']['type'],$typeGambar)){ 
echo' <ecnter>FORMAT GAMBAR SALAH</center>';//gambar sallah
}elseif($fileSize=$_FILES['gambar']['size']< 20000 || $fileError < 20000){
$sql=mysql_query("insert into tb_upload values('','$nama','$gambar')");
			$move = move_uploaded_file($_FILES['gambar']['tmp_name'],'gambar/'.$gambar);
			if(!$sql) 
			  { echo '<script language="javascript" type="text/javascript">
alert("upload gambar gagal !");</script>';
	echo "<meta http-equiv='refresh' content='0; url=./'>";

			  } else 
			  {
			
echo '<script language="javascript" type="text/javascript">
alert("upload gambar berhasil !");</script>';
	echo "<meta http-equiv='refresh' content='0; url=./'>";
			   }
	}
	}
?>



<?PHP if (isset($_POST['edituploadgambar'])) {// UNTUK MENGEDIT
	$id=$_GET['id'];
	$nama=strip_tags($_POST['nama']);
	$gambar=$_FILES['gambar']['name'];
	$tgl=date("h:i:s-j-m-Y");
	if($gambar == ""){
	$edit=mysql_query("UPDATE tb_upload SET nama='$nama' WHERE id='$id'");

	if(!$edit-portofolio){ echo '<script language="javascript" type="text/javascript">
alert("Ganti Foto berhasil !");</script>';
	echo "<meta http-equiv='refresh' content='0; url=./'>";
			  } else 
			  { echo '<script language="javascript" type="text/javascript">
alert("Foto Tidak Dirubah");</script>';
	echo "<meta http-equiv='refresh' content='0; url=./'>";
	echo "<script>window.close();</script>";
}
}

else{
$cari=mysql_query("select * from tb_upload where id='$id'");
		$dt=mysql_fetch_array($cari);
		$gambar=$dt['gambar'];
		$tmpfile = "./gambar/$gambar";
		
$typeGambar = array('image/bmp', 'image/gif', 'image/jpg', 'image/jpeg', 'image/png');
if(!in_array($_FILES['gambar']['type'],$typeGambar)){ 
echo' FORMAT GAMBAR SALAH';
}elseif($fileSize=$_FILES['gambar']['size']< 20000 || $fileError < 20000){  
unlink ($tmpfile);
$edit2=mysql_query("UPDATE tb_upload SET nama='$nama',gambar='$gambar' WHERE id='$id'");
	$move = move_uploaded_file($_FILES['gambar']['tmp_name'],'./gambar/'.$gambar);
	if(!$edit2)
		 { echo '<script language="javascript" type="text/javascript">
alert("edit gambar gagal !");</script>';
	echo "<meta http-equiv='refresh' content='0; url=./'>";


			  } else 
			  { echo '<script language="javascript" type="text/javascript">
alert("Ganti gambar berhasil !");</script>';
	echo "<meta http-equiv='refresh' content='0; url=./'>";
echo "<script>window.close();</script>";
}
			   }
	}
	}

	?>
	

<?PHP $act=$_GET['act'];//UNTUK MENHAPUS
$id=abs((int)$_GET['id']);
	if ($act=='del'){
	$cari=mysql_query("select * from tb_upload where id='$id'");
	$dt=mysql_fetch_array($cari);
	$gmbr=$dt['gambar'];
	$tmpfile = "./gambar/$gmbr";
	$sql=mysql_query("delete from tb_upload where id='$id'");
	if(!$sql){
echo '<script language="javascript" type="text/javascript">
alert("delete gambar gagal !");</script>';
	echo "<meta http-equiv='refresh' content='0; url=./'>";
	}else{
			unlink ($tmpfile);
echo '<script language="javascript" type="text/javascript">
alert("delete gambar berhasil !");</script>';
	echo "<meta http-equiv='refresh' content='0; url=./'>";
	}
}
?>

<div class="container">
<?PHP $id=abs((int)$_GET['id']);if($id!= ''){
$sql=mysql_query("select * from tb_upload where id='$id'");
while($post=mysql_fetch_array($sql)){?>


<form name="form1" action="" method="post" enctype="multipart/form-data">

<div class="group">
<!-- <label class="label2">Nama Gambar :</label><input type="text" name="nama" value="<?PHP echo $post['nama'];?>" required> -->
  </div>
  <div class="group">
<label class="label2"></label>
<img id="gmbr" class="img-thumbnail" src="gambar/<?PHP echo $post['gambar'];?>" width="70" height="90"/>
<br>
<span><div id="sembunyi" style="display: yes;">
<!-- <label for="reg_input_name" class="req"></label> -->
<input name="gambar" type="file" id="gambar" accept="image/*" style="width:65%">
</div>
</span>
<input name="edituploadgambar" class="button" type="submit" value="UPDATE">
<!-- <span><a id="tampil" href="javascript:toggle();" rel="nofollow">Ganti Foto</a></span> -->

  </div>


</form>
<?PHP }} else { ?>
<!-- <form name="form1" action="" method="post" enctype="multipart/form-data">
<div class="group">
<label class="label2">Nama Gambar :</label><input type="text" name="nama" required>
  </div>
  <div class="group">
<label class="label2">Gambar :</label><input name="gambar" type="file" required>
  </div>
<div class="group">
  <input name="uploadgambar" class="button" type="submit" value="SIMPAN">
  </div>
</form> --><?PHP }?>
</div>

<!-- <div class="gambar-container"><h3>Foto Admin</h3> -->
<?php $sql=mysql_query("select * from tb_upload order by id desc");$no=0;
while($datapost=mysql_fetch_array($sql)){$no++?>
<!-- <center><div class="gambar"><h3><?PHP echo $datapost ['nama'];?></h3>
<img src="gambar/<?PHP echo $datapost['gambar'];?>"/> -->
<!-- <a class="edit" href="./?id=<?PHP echo $datapost['id'];?>">EDIT GAMBAR</a>
<a class="hapus" href="./?id=<?PHP echo $datapost['id'];?>&act=del">HAPUS</a> -->
</div></center>
<?php }?>
</body></html>

