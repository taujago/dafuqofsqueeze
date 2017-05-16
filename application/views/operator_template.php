<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>SMARTDESA TOJO UNA-UNA</title>

  <link rel="icon"  type="image/png"   href="<?php echo base_url()."assets/images/favicon.png" ?>" />

	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/jseasyui/themes/default/easyui.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/jseasyui/themes/icon.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/theme.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/member_style.css">
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/jseasyui/jquery-1.8.0.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/jseasyui/jquery.easyui.min.js"></script>
	
<script type="text/javascript">
function tampilsurat() {
  	$("#kotaksurat").toggle('fast');

}
 

</script>

</head>
<body>
<div id="background">

	<div id="member-page" style="height:auto;">
		<div id="member-header" >
			 
		</div>
		
		<?php 
		$desa2 = $this->cm->data_desa();

			 		if($this->session->userdata("operator_login") == true ) { 
			 	 ?>
		<div id="statusbar"  >
			
			Selamat Datang Operator :  	<?php echo $this->session->userdata("operator_username"). " ".$desa2->bentuk_lembaga. " ".  $this->session->userdata("operator_desa") ; 
			// echo " ".anchor("op_login/logout"," [Logout]");
			?>
			<a href="#" class="easyui-linkbutton" iconCls="icon-logout_2" onclick="javascript:location.href=('<?php echo site_url("op_login/logout") ?>')">Log Out</a> 
		</div>
		<?php } ?>
 		<div id="navigasi" style="height:55px; margin:3px 0px 3px 0px; border:1px solid #ccc; padding : 3px;" >
			 
			 	<?php 
			 		if($this->session->userdata("operator_login") != true ) { 
			 	 ?>
			 	<a href="<?php echo base_url("op_login"); ?>" class="easyui-linkbutton" plain="true" iconCls="icon-login">Operator Login</a>  
			 	<?php }
			 	else {
			 		?>
			 	<a href="<?php echo site_url("operator_area"); ?>" class="easyui-linkbutton" plain="true" iconCls="icon-home">Home</a>  
			 	<a href="#" class="easyui-menubutton" plain="true" menu="#menu-master" iconCls="icon-products">Data Master</a>
			 	
			 	<!-- <a href="<?php echo site_url("operator_dusun"); ?>" class="easyui-linkbutton" plain="true" iconCls="icon-products">Data Dusun</a> -->
			 	<a href="#" class="easyui-menubutton" menu="#menu-penduduk" plain="true" iconCls="icon-members">Data Kependudukan</a>
			 	<!-- <a href="#" class="easyui-menubutton" menu="#menu-profil" plain="true" iconCls="icon-profil">Profil <?php echo $desa2->bentuk_lembaga ?></a> -->
                
			 	<a href="<?php echo site_url("surat") ?>" class="easyui-linkbutton" plain="true" iconCls="icon-surat">Surat Menyurat</a>  
			 	<a href="<?php echo site_url("formulir_master") ?>" class="easyui-linkbutton" plain="true" iconCls="icon-formulir">Formulir Kependudukan</a> 
                <a href="<?php echo site_url("profil_menu") ?>" class="easyui-menubutton" menu="#menu-profil" plain="true" iconCls="icon-profil">Profil Desa  </a> 
				<!-- <a href="<?php echo site_url("perkembangan_menu") ?>" class="easyui-linkbutton" menu="#menu-perkembangan" plain="true" iconCls="icon-statistics">Perkembangan Desa</a>  -->
                <a href="#" class="easyui-menubutton" menu="#menu-statistik" plain="true" iconCls="icon-statistics">Statistik dan Cetak Laporan  </a> 
                <a href="<?php echo site_url("admin_menu"); ?>" class="easyui-linkbutton"  menu="#menu-profil-lembaga"  plain="true" iconCls="icon-profil">Buku Administrasi Desa</a>  
			 	<a href="<?php echo site_url("operator_setting") ?>" class="easyui-linkbutton" plain="true" iconCls="icon-settings">Pengaturan Data Desa</a>
               <a href="#" class="easyui-menubutton" menu="#pemeliharaan" iconCls="icon-maintenance">Pemeliharaan</a>	
			 	<a href="<?php echo site_url("users/detail"); ?>" class="easyui-linkbutton" plain="true" iconCls="icon-key">Administrator</a>    
			<!--  	<a href="<?php echo site_url("operator_setting/info"); ?>" class="easyui-linkbutton" plain="true" iconCls="icon-info">Informasi Software</a>   -->
			 	<a href="#" class="easyui-menubutton" plain="true" menu="#menu-info" iconCls="icon-info">Informasi Software</a> 
			 	<?php 
			 	} ?>
		</div>
        
		<div id="menu-statistik" style="width:420px;">
        		<div href="<?php echo site_url("statistik_penduduk") ?>">Semua Penduduk </div>
                <div href="<?php echo site_url("statistik_penduduk_triwulan") ?>">Laporan Penduduk per Triwulan </div>
                <div href="<?php echo site_url("statistik_penduduk_bulanan") ?>">Laporan Penduduk per Bulan </div>
                <!-- <div href="<?php echo site_url("statistik_penduduk_tahunan") ?>">Laporan Penduduk per Tahun </div> -->
                <div href="<?php echo site_url("statistik_penduduk_perdusun") ?>">Laporan Penduduk per Dusun </div>
                <div href="<?php echo site_url("statistik_penduduk_perkk") ?>">Laporan Penduduk per KK </div>
                <div href="<?php echo site_url("statistik_penduduk_umur") ?>">Penduduk Berdasarkan Umur</div>
               <!--  <div href="<?php echo site_url("statistik_penduduk_kelompok_umur/u_1_5") ?>"> Penduduk Berdasarkan Batasan Umur </div> -->
<!-- 
                
                <div href="<?php echo site_url("statistik_penduduk_pekerjaan/index_statistik") ?>">Statistik Pekerjaan Penduduk </div>
                
                <div href="<?php echo site_url("statistik_penduduk_pekerjaan") ?>"> Penduduk Berdasarkan Pekerjaan</div>

                 <div href="<?php echo site_url("statistik_penduduk_pekerjaan/index_15") ?>"> Penduduk Berumur 15 Tahun Ke Atas Menurut Pekerjaan </div>

                  <div href="<?php echo site_url("statistik_penduduk_pekerjaan/petani") ?>"> Penduduk Bekerja Pada Sektor Pertanian dan Non Pertanian </div> -->
                    <div href="<?php echo site_url("statistik_penduduk_pendidikan/index_utama") ?>"> Penduduk Berdasarkan Pendidikan </div>
                   <div href="<?php echo site_url("statistik_penduduk_pekerjaan/index_utama") ?>"> Penduduk Berdasarkan Pekerjaan </div>
              

                <div href="<?php echo site_url("statistik_penduduk_penyakit") ?>"> Penduduk Berdasarkan Penyakit</div>
                <div href="<?php echo site_url("statistik_penduduk_tetap") ?>"> Penduduk Tetap </div>
                <div href="<?php echo site_url("statistik_kelahiran") ?>"> Penduduk Lahir </div>
                <div href="<?php echo site_url("statistik_penduduk_datang") ?>"> Penduduk Datang </div>
                <div href="<?php echo site_url("statistik_kematian") ?>"> Penduduk Mati </div>
                <div href="<?php echo site_url("statistik_penduduk_pindah") ?>"> Penduduk Pindah </div>
                <div href="<?php echo site_url("statistik_penduduk_sementara") ?>"> Penduduk Sementara </div>
                 <div href="<?php echo site_url("statistik_penduduk_janda/index_utama") ?>"> Penduduk Duda Janda </div>
                 <div href="<?php echo site_url("operator_penduduk_miskin") ?>"> Penduduk Miskin </div>

                  <div href="<?php echo site_url("operator_penduduk_ektp") ?>"> Penduduk Pemilik E-KTP </div>
                <div href="<?php echo site_url("statistik_penduduk_beragama") ?>"> Penduduk Beragama </div>
                <div href="<?php echo site_url("statistik_penduduk_balita") ?>"> Penduduk Balita </div>
                <div href="<?php echo site_url("statistik_penduduk_pemilu") ?>"> Penduduk Memiliki Hak Pilih </div>
                <div href="<?php echo site_url("statistik_penduduk_produktif") ?>"> Penduduk Usia Produktif </div>
               
                <div href="<?php echo site_url("statistik_penduduk_lansia") ?>"> Penduduk Usia Lanjut </div>
               <div href="<?php echo site_url("statistik_penduduk_yatim") ?>"> Penduduk Yatim Piatu </div>

				
				 
		</div>



	 <div id="menu-profil" style="width:300px;">
    	 
    		<div href="<?php echo site_url("profil_menu") ?>"> Potensi Desa </div>
            <div href="<?php echo site_url("perkembangan_menu") ?>"> Perkembangan Desa  </div>
            <div href="<?php echo site_url("cetak_monografi") ?>"> Monografi  Desa  </div>
            <div href="<?php echo site_url("indeks_desa_membangun") ?>"> Indeks Desa Membangun  </div>
              
				 
		 </div> 

		 	 <div id="menu-info" style="width:300px;">
    	 
    		<div href="<?php echo site_url("operator_setting/info") ?>"> Informasi Software </div>
    		<div href="<?php echo site_url("operator_setting/update") ?>"> Cek Update </div>
            <div href="<?php echo site_url("operator_setting/chat") ?>"> Live Chat  </div>
          
				 
		 </div> 
		<div id="menu-master" style="width:200px;">
<!-- 				<div href="<?php echo site_url("operator_dusun") ?>">Data Dusun / Lingkungan </div>
 -->                <div href="<?php echo site_url("master") ?>">Data Dasar Keluarga</div>
				<!-- <div href="<?php echo site_url("operator_dusun") ?>">Pekerjaan</div>
				<div href="<?php echo site_url("operator_dusun") ?>">Agama</div>
				<div href="<?php echo site_url("operator_dusun") ?>">Suku</div>
				<div href="<?php echo site_url("operator_dusun") ?>">Keturunan/Kebangsaan</div>
				-->
		</div>

		<div id="menu-penduduk" style="width:350px;">
<!--  			<div href="<?php echo base_url("data/FORMULIR_DATA_PENDUDUK.docx") ?>">Download Formulir Data Penduduk </div>
 -->			
			
			<!-- <div href="<?php echo site_url("penduduk_import/index_pkpd") ?>">Import Data Penduduk</div> -->
			<div href="<?php echo site_url("penduduk_import") ?>">Import Data Penduduk </div> 
			<div href="<?php echo site_url("operator_penduduk") ?>">Data Penduduk</div>
		    <div href="<?php echo site_url("operator_kk") ?>">Permohonan Kartu Keluarga</div>
            <!--<div href="<?php echo site_url("silsilah") ?>">Silsilah Keluarga</div>-->
           <div href="<?php echo site_url("cetak_profil_desa") ?>">Export Data Dasar Keluarga </div>
		</div>

 			<div id="pemeliharaan" style="width: 250px;" >
		   		<div iconCls="icon-backup" href="<?php echo site_url("maintenance/backup") ?>" >Backup</div>
				<div iconCls="icon-restore"  href="<?php echo site_url("maintenance/restore") ?>" >Restore</div>
				<div iconCls="icon-export"  href="<?php echo site_url("maintenance/export_index") ?>" >Export Data</div>
				<div iconCls="icon-export"  href="<?php echo site_url("maintenance/reset_data_penduduk_index") ?>" >Reset Data Penduduk</div>
                <div iconCls="icon-contact"  href="<?php echo site_url("maintenance/contact") ?>" >SMS Center</div>
  	        	
	    	
		    	
		    </div>

            
<!--<div id="menu-profil-lembaga" style="width:200px;">
        		<div href="<?php echo site_url("profil_keputusan") ?>">Buku Keputusan <?php echo $desa2->bentuk_lembaga ?> </div>
         		<div href="<?php echo site_url("profil_peraturan") ?>">Peraturan <?php echo $desa2->bentuk_lembaga ?> </div>
				<div href="<?php echo site_url("profil_inventaris") ?>">Inventaris <?php echo $desa2->bentuk_lembaga ?></div>
				<div href="<?php echo site_url("profil_aparat") ?>">Aparat <?php echo $desa2->bentuk_lembaga ?></div>
				<div href="<?php echo site_url("profil_tanah") ?>">Tanah <?php echo $desa2->bentuk_lembaga ?></div>
				<div href="<?php echo site_url("lembaga_tanah_desa") ?>">Tanah di <?php echo $desa2->bentuk_lembaga ?></div>
				 
				 
                </div>-->


<div style="clear:both"></div>
       
 		<div id="member_content">
			<?php echo $content ?>
		</div>


	</div>

</div>
</div>
    
    
</body>
</html>
