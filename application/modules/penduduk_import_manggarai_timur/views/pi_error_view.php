<style type="text/css">
    

    .button {
   border-top: 1px solid #96d1f8;
   background: #65a9d7;
   background: -webkit-gradient(linear, left top, left bottom, from(#3e779d), to(#65a9d7));
   background: -webkit-linear-gradient(top, #3e779d, #65a9d7);
   background: -moz-linear-gradient(top, #3e779d, #65a9d7);
   background: -ms-linear-gradient(top, #3e779d, #65a9d7);
   background: -o-linear-gradient(top, #3e779d, #65a9d7);
   padding: 5px 10px;
   -webkit-border-radius: 8px;
   -moz-border-radius: 8px;
   border-radius: 8px;
   -webkit-box-shadow: rgba(0,0,0,1) 0 1px 0;
   -moz-box-shadow: rgba(0,0,0,1) 0 1px 0;
   box-shadow: rgba(0,0,0,1) 0 1px 0;
   text-shadow: rgba(0,0,0,.4) 0 1px 0;
   color: white;
   font-size: 14px;
   font-family: Georgia, serif;
   text-decoration: none;
   vertical-align: middle;
   }
.button:hover {
   border-top-color: #28597a;
   background: #28597a;
   color: #ccc;
   }
.button:active {
   border-top-color: #1b435e;
   background: #1b435e;
   }

</style>

<div id="detail" style="min-height: 400px;" >
	 <div id="detail-head">
	 	<?php echo $title; ?>
	 </div>
	 <div style="padding : 100px">
	 <h2><?php echo $pesan; ?></h2><hr />
      <a href="<?php echo base_url("assets/contoh.xls") ?>">
	 Download contoh format data penduduk </a><BR /><br />
<br />
<br />
<br />
<br />

     <a href="<?php echo site_url("penduduk_import"); ?>" class="easyui-linkbutton" iconCls="icon-back" plain="true"  >Kembali</a>
     <div>
</div> 
 