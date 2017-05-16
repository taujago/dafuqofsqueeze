<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<script>
$(document).ready(function(){
	
	$("#halo").click(function(){
		halo();						  
	});

});

var x = '<?php echo isset($_GET['x'])?$_GET['x']:""; ?>';


if(x!="") {
	halo();
}

function halo(){
	alert('hello');
}
</script>
<body>
<?php print_r($_GET); ?>
<a href="#" id="halo" >Halo </a>
</body>
</html>