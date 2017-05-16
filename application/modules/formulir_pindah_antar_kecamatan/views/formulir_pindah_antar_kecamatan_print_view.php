<html>
  <head>
    <title>
      <?php echo   $title; ?>
    </title>

<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/print_formulir.css">

  </head>

<body>
  
  <?php 
  $desa2 = $this->cm->data_desa();

  ?>

  <div align="right"><h2>F-1.29</h2></div>
  <font size="10">
  <table width="100%">
      <tr>
        <td width="19%">
          PROVINSI        </td>
        <td width="2%">
          :        </td>
        <td width="11%"> 
          <table class="tabel">
            <tr>
                <?php
                  $arr1 = str_split($desa2->id_provinsi);
                  foreach ($arr1 as $v) {
                    echo "<td>&nbsp;".$v."&nbsp;</td>";
                  }
                ?>
            </tr>
          </table>  
        </td>
        <td width="68%">
          <table width="50%" class="tabel">
            <tr>
                <td>
                <?php echo $desa2->provinsi; ?>
                </td>
            </tr>
          </table>  
        </td>
      </tr>
      <tr>
        <td>KABUPATEN/KOTA</td>
        <td>:</td>
          <td>  
            <table class="tabel">
            <tr>
        <?php
          $arr1 = str_split($desa2->kode_kabupaten);
          foreach ($arr1 as $v) {
           echo "<td>&nbsp;".$v."&nbsp;</td>";

          }
        ?>
         </tr>
          </table>  
          </td>
          <td> 
          <table width="50%" class="tabel">
            <tr>
                <td>
                <?php echo $desa2->kota; ?> 
                </td>
            </tr>
          </table>  

          </td>

    </tr>
      <tr>
        <td >KECAMATAN</td>
        <td>:</td>
          <td> 
            <table class="tabel">
              <tr>
      <?php

        $arr1 = str_split($desa2->kode_kecamatan);
        foreach ($arr1 as $v) {
           echo "<td>&nbsp;".$v."&nbsp;</td>";

        }
      ?>
        
      
            </tr>
          </table></td>
            <td> 
             <table width="50%" class="tabel">
            <tr>
                <td>
                 <?php echo $desa2->kecamatan; ?>  
                </td>
            </tr>
          </table>  


           </td></tr>
      <tr>
        <td>KELURAHAN/DESA</td>
        <td>:</td>

           
        <td> 
           <table class="tabel">
            <tr>
      <?php

        $arr1 = str_split($desa2->kode_surat);
        foreach ($arr1 as $v) {
           echo "<td>&nbsp;".$v."&nbsp;</td>";

        }
      ?>
        
      
            </tr>
          </table></td>
        <td> 
         <table width="50%" class="tabel">
            <tr>
                <td>
                <?php echo $desa2->desa ?>  
                </td>
            </tr>
          </table> 

        </td>
    </tr>
            </td></tr>
      <tr>
        <td>Dusun</td>
        <td>:</td>

        <td> 
         <table width="418%" class="tabel">
            <tr>
                <td>
                <?php echo $dusun ?>  
                </td>
            </tr>
          </table> 

        </td>
    </tr>
      
      
</table>

<center>
  <h2>FORMULIR PERMOHONAN PINDAH WNI<br>Antar Kecamatan Dalam Satu Kabupaten/Kota<br>No. <?php echo $no_formulir ?></h2>
   </p></center>
   <h2>DATA DAERAH ASAL</h2>

 <table width="100%">
      <tr>
        <td width="19%">
          <table width="95%" class="tabel">
                  <tr>
                    <td>
                      1. Nomor Kartu Keluarga
                    </td>
                  </tr>
          </table> 
        </td>
        <td>
          :        
        </td>
        <td> 
          <table class="tabel">
            <tr>
              <?php
                $arr1 = str_split($kepala_keluarga_kk);
                foreach ($arr1 as $v) {
                  echo "<td>&nbsp;".$v."&nbsp;</td>";

                }
              ?>
            </tr>
          </table>
        </td>
      </tr>

      <tr>
        <td>
          <table width="95%" class="tabel">
                  <tr>
                    <td>
                      2. Nama Kepala Keluarga
                    </td>
                  </tr>
          </table> 
        </td>
        <td>
          :
        </td>
        <td>  
          <table class="tabel">
            <tr>
              <?php
                $arr1 = str_split($kepala_keluarga_nama);
                foreach ($arr1 as $v) {
                  echo "<td>&nbsp;".$v."&nbsp;</td>";

                }
              ?>
            </tr>
          </table>  
        </td>
      </tr>

    
      <tr>
       <td>
          <table width="95%" class="tabel">
            <tr>
              <td>
                3. Alamat 
              </td>
            </tr>
          </table> 
        </td>
        <td>
          :
        </td>  
        <td> 
           <table width="58%" class="tabel">
           <tr>
              <td>
                <?php echo $alamat ?>
              </td>
            </tr>
          </table>
        </td>
        <table width="100%">
       <tr>
         <td width="203">&nbsp;</td>
         <td width="14">&nbsp;</td>
       <td width="125">
         Dusun       </td>  
        <td width="285"> 
           <table width="96%" class="tabel">
           <tr>
              <td>
               <?php echo $dusun ?>              </td>
            </tr>
          </table>
         <td width="120">
         </td>
        <td width="317"> 
         </tr>
     
</table>
</table>
     <table width="100%">
      <tr>
        <td width="7%"></td>
        <td width="13.5%">        </td>
        <td width="9%">
          RT        </td>
        <td width="15%"> 
          <table class="tabel">
            <tr>
              <?php
                $arr1 = str_split($rt);
                foreach ($arr1 as $v) {
                  echo "<td>&nbsp;".$v."&nbsp;</td>";

                }
              ?>
            </tr>
        </table>        
        <td width="7%">
          RW       </td>
        <td width="0%"> 
        <td width="49%"> 
          <table class="tabel">
            <tr>
              <?php
                $arr1 = str_split($rw);
                foreach ($arr1 as $v) {
                echo "<td>&nbsp;".$v."&nbsp;</td>";
                }
              ?>
        
      
            </tr>
          </table>
        </td>
      </tr>
</table>
      </tr>
</table>
      <table width="100%">
       <tr>
         <td width="203">&nbsp;</td>
         <td width="14">&nbsp;</td>
       <td width="125">
         a. Desa/Kelurahan        </td>  
        <td width="285"> 
           <table width="96%" class="tabel">
           <tr>
              <td>
                <?php echo $desa2->desa ?>             </td>
            </tr>
          </table>
         <td width="120">
          c. Kecamatan        </td>
        <td width="317"> 
           <table width="77%" class="tabel">
           <tr>
              <td>
               <?php echo $desa2->kecamatan ?>          </td>
            </tr>
        </table>      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
       <td>
         b. Kab/Kota        </td>  
        <td> 
           <table width="96%" class="tabel">
           <tr>
              <td>
                 <?php echo $desa2->kota ?>          </td>
            </tr>
          </table>        </td>
        <td>
          d. Provinsi        </td>
        <td> 
           <table width="77%" class="tabel">
           <tr>
              <td>
                <?php echo $desa2->provinsi ?>              </td>
            </tr>
          </table>        </td>
      </tr>
</table>
<table width="100%">
      <tr>
        <td width="7%"></td>
        <td width="13.5%">        </td>
        <td width="9%">
          Kode Pos        </td>
        <td width="15%"> 
          <table class="tabel">
            <tr>
              <?php
                $arr1 = str_split($desa2->kodepos);
                foreach ($arr1 as $v) {
                  echo "<td>&nbsp;".$v."&nbsp;</td>";

                }
              ?>
            </tr>
        </table>        
        <td width="7%">
          Telepon       </td>
        <td width="0%"> 
        <td width="49%"> 
          <table class="tabel">
            <tr>
              <?php
                $arr1 = str_split($telepon_pemohon);
                foreach ($arr1 as $v) {
                echo "<td>&nbsp;".$v."&nbsp;</td>";
                }
              ?>
        
      
            </tr>
          </table>
        </td>
      </tr>
</table>


  <table width="100%">
      <tr>
        <td width="19%">
         <!--  <table width="95%" class="tabel">
                  <tr>
                    <td>
                      1. Nama Pemohon 
                    </td>
                  </tr>
          </table>  -->
        </td>
        
        <td> 
          <!-- <table class="tabel">
            <tr>
              <?php
                $arr1 = str_split($pemohon_nama);
                foreach ($arr1 as $v) {
                  echo "<td>&nbsp;".$v."&nbsp;</td>";

                }
              ?>
            </tr>
          </table> -->
        </td>
      </tr>

      <tr>
        <td>
          <table width="95%" class="tabel">
                 <!--  <tr>
                    <td>
                      2. NIK Pemohon 
                    </td>
                  </tr> -->
          </table> 
        </td>
        <td>
          :
        </td>
        <td>  
        <!--   <table class="tabel">
            <tr>
              <?php
                $arr1 = str_split($pemohon_nik);
                foreach ($arr1 as $v) {
                  echo "<td>&nbsp;".$v."&nbsp;</td>";

                }
              ?>
            </tr>
          </table>   -->
        </td>
      </tr>

      <tr>
        <td>
          <table width="95%" class="tabel">
            <tr>
              <td>
                4. Nik Pemohon
              </td>
            </tr>
          </table> 
        </td>
        <td>
          :
        </td>
          <td> 
          <table class="tabel">
            <tr>
              <?php
                $arr1 = str_split($nik);
                foreach ($arr1 as $v) {
                echo "<td>&nbsp;".$v."&nbsp;</td>";
                }
              ?>
        
      
            </tr>
          </table>
          </td>
      </tr>

        <tr>
        <td>
          <table width="95%" class="tabel">
            <tr>
              <td>
                5. Nama Pemohon
              </td>
            </tr>
          </table> 
        </td>
        <td>
          :
        </td>
          <td> 
          <table class="tabel">
            <tr>
              <?php
                $arr1 = str_split($nama);
                foreach ($arr1 as $v) {
                echo "<td>&nbsp;".$v."&nbsp;</td>";
                }
              ?>
        
      
            </tr>
          </table>
          </td>
      </tr>

      
       <td>
          <table width="400%"  border='0'">
            <tr>
              <td>
               <h2>DATA KEPINDAHAN</h2>
              </td>
            </tr>
          </table> 
        </td>
<table width="100%">
<tr>
        <td><table width="95%" class="tabel">
                  <tr>
                    <td>
                      1. Alasan Pindah                  </td>
                  </tr>
          </table>  </td>
        <td>:</td>
        <td><table class="tabel">
            <tr>
              <?php
                $arr1 = str_split($alasan_pindah);
                foreach ($arr1 as $v) {
                  echo "<td>&nbsp;".$v."&nbsp;</td>";

                }
              ?>

            </tr>
          </table>   </td>

      </tr>
       <tr>
        <td></td>
        <td>&nbsp;</td>
        <td>1. Pekerjaan &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        	3. Keamanan &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        	5. Perumahan &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        	7. Lainnya (Sebutkan) &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
        	2. Pendidikan &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        	4. Kesehatan &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        	
        	6. Keluarga &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        	<?php 
  					$alacang_pindah = $this->cm->alacang_pindah;
  						if($alasan_pindah==7) 
                                    echo $alasan_lainnya;
                                 ;?> 
        	
       	 </td>
      </tr>
  
      <tr>
        <td width="19%">                </td>
        <td width="2%">&nbsp;</td>
        <td width="79%"></td>
      </tr>
	  
      <tr>
       <td>
          <table width="95%" class="tabel">
            <tr>
              <td>
                2. Alamat 
              </td>
            </tr>
          </table> 
        </td>
        <td>
          :
        </td>  
        <td> 
           <table width="58%" class="tabel">
           <tr>
              <td>
                <?php echo $alamat_pindah ?>
              </td>
            </tr>
          </table>
        </td>
        <table width="100%">
       <tr>
         <td width="203">&nbsp;</td>
         <td width="14">&nbsp;</td>
       <td width="125">
         Dusun       </td>  
        <td width="285"> 
           <table width="96%" class="tabel">
           <tr>
              <td>
               <?php echo $dusun_pindah ?>              </td>
            </tr>
          </table>
         <td width="120">
            </td>
        <td width="317"> 
          </tr>
     
</table>
     <table width="100%">
      <tr>
        <td width="7%"></td>
        <td width="13.5%">        </td>
        <td width="9%">
          RT        </td>
        <td width="15%"> 
          <table class="tabel">
            <tr>
              <?php
                $arr1 = str_split($rt_pindah);
                foreach ($arr1 as $v) {
                  echo "<td>&nbsp;".$v."&nbsp;</td>";

                }
              ?>
            </tr>
        </table>        
        <td width="7%">
          RW       </td>
        <td width="0%"> 
        <td width="49%"> 
          <table class="tabel">
            <tr>
              <?php
                $arr1 = str_split($rw_pindah);
                foreach ($arr1 as $v) {
                echo "<td>&nbsp;".$v."&nbsp;</td>";
                }
              ?>
        
      
            </tr>
          </table>
        </td>
      </tr>
</table>
      </tr>
</table>
      <table width="100%">
       <tr>
         <td width="203">&nbsp;</td>
         <td width="14">&nbsp;</td>
       <td width="125">
         a. Desa/Kelurahan        </td>  
        <td width="285"> 
           <table width="96%" class="tabel">
           <tr>
              <td>
                <?php echo $pindah_desa ?>             </td>
            </tr>
          </table>
         <td width="120">
          c. Kecamatan        </td>
        <td width="317"> 
           <table width="77%" class="tabel">
           <tr>
              <td>
               <?php echo $pindah_kecamatan ?>          </td>
            </tr>
        </table>      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
       <td>
         b. Kab/Kota        </td>  
        <td> 
           <table width="96%" class="tabel">
           <tr>
              <td>
                 <?php echo $pindah_kota ?>          </td>
            </tr>
          </table>        </td>
        <td>
          d. Provinsi        </td>
        <td> 
           <table width="77%" class="tabel">
           <tr>
              <td>
                <?php echo $pindah_provinsi ?>              </td>
            </tr>
          </table>        </td>
      </tr>
</table>
<table width="100%">
      <tr>
        <td width="7%"></td>
        <td width="13.5%">        </td>
        <td width="9%">
          Kode Pos        </td>
        <td width="15%"> 
          <table class="tabel">
            <tr>
              <?php
                $arr1 = str_split($desa2->kodepos);
                foreach ($arr1 as $v) {
                  echo "<td>&nbsp;".$v."&nbsp;</td>";

                }
              ?>
            </tr>
        </table>        
        <td width="7%">
          Telepon       </td>
        <td width="0%"> 
        <td width="49%"> 
          <table class="tabel">
            <tr>
              <?php
                $arr1 = str_split($telepon_pindah);
                foreach ($arr1 as $v) {
                echo "<td>&nbsp;".$v."&nbsp;</td>";
                }
              ?>
        
      
            </tr>
          </table>
        </td>
      </tr>
</table>
</table>
<table width="100%">
	    <tr>
        <td><table width="95%" class="tabel">
                  <tr>
                    <td>
                      3. Jenis Kepindahan                 </td>
                  </tr>
          </table>  </td>
        <td>:</td>
        <td><table class="tabel">
            <tr>
              <?php
                $arr1 = str_split($jenis_kepindahan);
                foreach ($arr1 as $v) {
                  echo "<td>&nbsp;".$v."&nbsp;</td>";

                }
              ?>

            </tr>
          </table>   </td>

      </tr>
      <tr>
        <td></td>
        <td>&nbsp;</td>
        <td>1. Kep. Keluarga &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        	3. Kep. Keluarga dan Sbg. Angg. Keluarga &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        	
        	<br>
        	2. Kep. Keluarga dan Seluruh Anggota Kelurga &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        	4. Angg. Keluarga &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        	
       	</td>
      </tr>
        <tr>
        <td width="19%">                </td>
        <td width="2%">&nbsp;</td>
        <td width="79%"></td>
      </tr>
      <tr>
        <td><table width="95%" class="tabel">
                  <tr>
                    <td>
                      4. Status KK Bagi Yang Tidak Pindah                </td>
                  </tr>
          </table>  </td>
        <td>:</td>
        <td><table class="tabel">
            <tr>
              <?php
                $arr1 = str_split($status_tidak_pindah);
                foreach ($arr1 as $v) {
                  echo "<td>&nbsp;".$v."&nbsp;</td>";

                }
              ?>

            </tr>
          </table>   </td>

      </tr>
      <tr>
        <td></td>
        <td>&nbsp;</td>
        <td>1. Numpang KK &nbsp;&nbsp;&nbsp;&nbsp;
        	2. Membuat KK Baru  &nbsp;&nbsp;&nbsp;
        	
        	
        	3. Nomor KK Tetap &nbsp;&nbsp;&nbsp;
        
        	
       	</td>
      </tr>
        <tr>
        <td width="19%">                </td>
        <td width="2%">&nbsp;</td>
        <td width="79%"></td>
      </tr>
       <tr>
        <td><table width="95%" class="tabel">
                  <tr>
                    <td>
                      5. Status KK Bagi Yang Pindah                </td>
                  </tr>
          </table>  </td>
        <td>:</td>
        <td><table class="tabel">
            <tr>
              <?php
                $arr1 = str_split($status_pindah);
                foreach ($arr1 as $v) {
                  echo "<td>&nbsp;".$v."&nbsp;</td>";

                }
              ?>

            </tr>
          </table>   </td>

      </tr>
      <tr>
        <td></td>
        <td>&nbsp;</td>
        <td>1. Numpang KK &nbsp;&nbsp;&nbsp;&nbsp;
        	2. Membuat KK Baru  &nbsp;&nbsp;&nbsp;
        	
        	
        	3. Nomor KK Tetap &nbsp;&nbsp;&nbsp;
        
        	
       	</td>
      </tr>
        <tr>
        <td width="19%">                </td>
        <td width="2%">&nbsp;</td>
        <td width="79%"></td>
      </tr>
</table>
<p>6. Keluarga Yang Pindah </p>
<table width="100%" border="0.5" cellpadding="3" class="tabel">
<tr><th width="5%"  align="center">No.</th>
  <th width="30%" align="center">NIK</th>
  <th width="30%"  align="center">Nama </th>
  <th width="30%"  align="center">Masa Berlaku KTP S/D </th>
<th width="15%" align="center">SHDK</th>

</tr>
<?php 
  
	 
$baris = 0; $i=0;
if($record->num_rows() > 0 ) {	
 
	foreach($record->result() as $row) :
		$baris--;

		$i++;
		echo "<tr>
		<td><center>$i.</center></td> 
    <td>$row->nik </td> 
    <td>$row->nama </td>
    <td>$row->masa_berlaku_ktp </td> 
    <td>$row->hubungan</td>


		
		</tr>";
	endforeach;	
}
for($x=0; $x<$baris; $x++) {
	$i++;
	echo "<tr>
		<td>$i</td> <td> </td><td> </td> <td> </td> <td> </td> <td> </td> <td> </td> 
		

		</tr>";
}
 
?>
</table>

<?php 
  $desa2 = $this->cm->data_desa();

  ?>
  <?php  if($desa2->bentuk_lembaga=="Kelurahan")  {  ?>
</p>

<?php }  else { ?>
<table width="100%" border="0" cellpadding="0">
 
  <tr>
    <td width="24%" align="center">&nbsp;</td>
	
    <td width="27%" align="center"></td>
	
    <td align="center"></td>
    <td width="21%" align="center"><font size="10"></td>
	  <td width="28%" align="center"><?php echo $desa2->desa.", ". tgl_indo(flipdate($tanggal)); ?></td>
  </tr>
  
  <tr>
    <td align="center">PETUGAS REGISTRASI </td>
    <td align="center">&nbsp;</td>
    <td>&nbsp;</td>
    <td align="center"><font size="10"></td>
	   <td><div align="center">PEMOHON</div></td>
  </tr>
  <tr>
    <td><div align="center"></div></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td align="left">&nbsp;</td>
	<td align="left">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td align="left">&nbsp;</td>
	<td align="left">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td align="left">&nbsp;</td>
	<td align="left">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td align="left">&nbsp;</td>
	<td align="left">&nbsp;</td>
  </tr>
  <tr>
    <td align="center"><?php echo $petugas; ?><br></td>
    <td align="center">&nbsp;</td>
    <td>&nbsp;</td>
    <td align="center"><font size="10"><br></td>
	 
 <td align="center"><?php echo $nama; ?> </td>
  </tr>
</table>


<?php }  ?>
<br /> <br /><br />
</body>

</html>