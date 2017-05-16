<div id="detail" style="min-height: 500px;" >
	 <div id="detail-head">
	 	<?php echo $title; ?>
	 </div>
	 

	 <div style="padding:5px;">

	 	<a class="easyui-linkbutton"  iconCls="icon-back" href="<?php echo site_url("surat_kelahiran"); ?>" > Kembali </a>

	 	<fieldset>
	 		<legend><strong>Biodata Kelahiran</strong> </legend>
	 	<table>
	 		<tr>
	 			<td width="200px">Nama  </td><td>: <?php echo $nama; ?></td>
	 		</tr>
	 		<tr>
	 			<td >Jenis Kelamin </td><td>: <?php echo $jk; ?></td>
	 		</tr>
	 		<tr>
	 			<td >Tempat Lahir  </td><td>: <?php echo $tmp_lahir; ?></td>
	 		</tr>
	 		<tr>
	 			<td >Tanggal Lahir  </td><td>: <?php echo $tgl_lahir; ?></td>
	 		</tr>
	 		<tr>
	 			<td >Jam Lahir  </td><td>: <?php echo $jam_lahir; ?></td>
	 		</tr>
	 		<tr>
	 			<td >Berat  </td><td>: <?php echo $berat; ?> Kg</td>
	 		</tr>
	 		<tr>
	 			<td >Anak ke  </td>
	 			<td>: <?php echo $anak_ke; ?> </td>
	 		</tr>

	 	</table>
	 	</fieldset>

	 	<fieldset>
	 		<legend><strong>Biodata Orangtua</strong></legend>
	 		<table>
	 		<tr>
	 			<td width="200px">Nama Bapak  </td><td>: <?php echo $bapak_nama; ?></td>
	 		</tr>
	 		<tr>
	 			<td >NIK Bapak </td><td>: <?php echo $bapak_nik; ?></td>
	 		</tr>
	 			<tr>
	 			<td >Umur Bapak </td><td>: <?php echo $this->am->umur($bapak_tgl_lahir); ?> Tahun </td>
	 		</tr>
	 		<tr>
	 			<td >Pekerjaan Bapak </td><td>: <?php echo $bapak_pekerjaan; ?></td>
	 		</tr>
	 		<tr>
	 			<td >Alamat  </td><td>: <?php echo $bapak_alamat; ?></td>
	 		</tr>
	 		<tr>
	 			<td >Nama Ibu  </td><td>: <?php echo $ibu_nama; ?></td>
	 		</tr>
	 		<tr>
	 			<td >NIK Ibu  </td><td>: <?php echo $ibu_nik; ?></td>
	 		</tr>
	 		</tr>
	 			<tr>
	 			<td >Umur Ibu </td><td>: <?php echo $this->am->umur($ibu_tgl_lahir); ?> Tahun </td>
	 		</tr>
	 		<tr>
	 			<td >Pekerjaan Ibu  </td><td>: <?php echo $ibu_pekerjaan; ?> </td>
	 		</tr>
	 		<tr>
	 			<td >Alamat </td><td>: <?php echo $ibu_alamat; ?> </td>
	 		</tr>
	 		<tr>
	 			<td >Tanggal Pernikahan </td><td>: <?php echo flipdate($tgl_pernikahan); ?> </td>
	 		</tr>

	 	</table>
	 	</fieldset>
	 	<fieldset>
	 		<legend><strong>Data Pelapor</strong></legend>
	 		<table>
	 		<tr>
	 			<td width="200px">Nama    </td><td>: <?php echo $pelapor_nama; ?></td>
	 		</tr>
	 		<tr>
	 			<td >NIK  </td><td>: <?php echo $pelapor_nik; ?></td>
	 		</tr>
	 		<tr>
	 			<td >Pekerjaan  </td><td>: <?php echo $pelapor_pekerjaan; ?></td>
	 		</tr>
	 		<tr>
	 			<td >Alamat  </td><td>: <?php echo $pelapor_alamat; ?></td>
	 		</tr>
	 		<tr>
	 			<td >Hubungan dengan Bayi  </td><td>: <?php 
	 			$arr_hubungan  = $this->cm->arr_hubungan;
	 			echo $arr_hubungan[$hubungan_pelapor]; ?></td>
	 		</tr> 

	 	</table>
	 	</fieldset>
	 	<fieldset>
	 		<legend><strong>Saksi - Saksi </strong></legend>
	 		<table>
	 		<tr>
	 			<td width="200px">Nama Saksi 1   </td><td>: <?php echo $saksi1_nama; ?></td>
	 		</tr>
	 		<tr>
	 			<td >NIK Saksi 1  </td><td>: <?php echo $saksi1_nik; ?></td>
	 		</tr>
	 		<tr>
	 			<td >Nama Saksi 2  </td><td>: <?php echo $saksi2_nama; ?></td>
	 		</tr>
	 		<tr>
	 			<td >NIK Saksi 2  </td><td>: <?php echo $saksi2_nik; ?></td>
	 		</tr>
	 		 
	 	</table>
	 	</fieldset>
	 </di>
</div>
 