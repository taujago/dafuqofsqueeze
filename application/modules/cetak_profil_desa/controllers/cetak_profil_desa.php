<?php 
class cetak_profil_desa extends  op_controller {
 	function __construct() {
		parent::__construct();
 		$this->load->model("cetak_profil","cp");
		$this->load->model("core_model","cm");
	}

	function index(){
		$data['title'] = "EXPORT DATA DASAR KELUARGA (EXCEL) ";
		 
	   	$content = $this->load->view("ddk_view",$data,true);
		$this->set_title($data['title']);
		$this->set_content($content);
		$this->render();
		//$this->load->view("");
	}

	public function excel()
	{
		$dat = $this->cp->get_data_1();
		//$this->load->view("cetak_profil_1",$data);
		
		$this->load->library('Excel');
        $this->excel->setActiveSheetIndex(0);
        $this->excel->getActiveSheet()->setTitle('DDK');
		
		//data tabel 1
        $this->excel->getActiveSheet()->getColumnDimension('A')->setWidth(3);
        $this->excel->getActiveSheet()->getColumnDimension('B')->setWidth(6);
        $this->excel->getActiveSheet()->getColumnDimension('C')->setWidth(31);
        $this->excel->getActiveSheet()->getColumnDimension('D')->setWidth(6);
        $this->excel->getActiveSheet()->getColumnDimension('E')->setWidth(18);
        $this->excel->getActiveSheet()->getColumnDimension('F')->setWidth(6);
        $this->excel->getActiveSheet()->getColumnDimension('G')->setWidth(6);
        $this->excel->getActiveSheet()->getColumnDimension('H')->setWidth(6);
        $this->excel->getActiveSheet()->getColumnDimension('I')->setWidth(18);
        $this->excel->getActiveSheet()->getColumnDimension('J')->setWidth(6);
        $this->excel->getActiveSheet()->getColumnDimension('K')->setWidth(12);
        $this->excel->getActiveSheet()->getColumnDimension('L')->setWidth(12);
        $this->excel->getActiveSheet()->getColumnDimension('M')->setWidth(6);
        $this->excel->getActiveSheet()->getColumnDimension('N')->setWidth(18);
         
        $this->excel->getActiveSheet()->getColumnDimension('o')->setWidth(3);
        $this->excel->getActiveSheet()->getColumnDimension('p')->setWidth(6);
        $this->excel->getActiveSheet()->getColumnDimension('q')->setWidth(18);
        $this->excel->getActiveSheet()->getColumnDimension('r')->setWidth(18);
        $this->excel->getActiveSheet()->getColumnDimension('s')->setWidth(18);
        $this->excel->getActiveSheet()->getColumnDimension('t')->setWidth(34);
        $this->excel->getActiveSheet()->getColumnDimension('u')->setWidth(18);
        $this->excel->getActiveSheet()->getColumnDimension('v')->setWidth(21);
        $this->excel->getActiveSheet()->getColumnDimension('w')->setWidth(17);
        $this->excel->getActiveSheet()->getColumnDimension('x')->setWidth(11);
        $this->excel->getActiveSheet()->getColumnDimension('y')->setWidth(14);
        $this->excel->getActiveSheet()->getColumnDimension('z')->setWidth(15);
        $this->excel->getActiveSheet()->getColumnDimension('aa')->setWidth(15);


        $this->excel->getActiveSheet()->getColumnDimension('ab')->setWidth(3);
		$this->excel->getActiveSheet()->getColumnDimension('ac')->setWidth(6);
        $this->excel->getActiveSheet()->getColumnDimension('ad')->setWidth(17);
        $this->excel->getActiveSheet()->getColumnDimension('ae')->setWidth(17);
        $this->excel->getActiveSheet()->getColumnDimension('af')->setWidth(17);
        $this->excel->getActiveSheet()->getColumnDimension('ag')->setWidth(20);
        $this->excel->getActiveSheet()->getColumnDimension('ah')->setWidth(17);
        $this->excel->getActiveSheet()->getColumnDimension('ai')->setWidth(17);
        $this->excel->getActiveSheet()->getColumnDimension('aj')->setWidth(17);
        $this->excel->getActiveSheet()->getColumnDimension('ak')->setWidth(17);
        $this->excel->getActiveSheet()->getColumnDimension('al')->setWidth(17);
        $this->excel->getActiveSheet()->getColumnDimension('am')->setWidth(17);


        $this->excel->getActiveSheet()->getColumnDimension('an')->setWidth(3);
		$this->excel->getActiveSheet()->getColumnDimension('ao')->setWidth(6);
        $this->excel->getActiveSheet()->getColumnDimension('ap')->setWidth(14);
        $this->excel->getActiveSheet()->getColumnDimension('ar')->setWidth(14);
        $this->excel->getActiveSheet()->getColumnDimension('as')->setWidth(14);
        $this->excel->getActiveSheet()->getColumnDimension('at')->setWidth(14);
        $this->excel->getActiveSheet()->getColumnDimension('au')->setWidth(14);
        $this->excel->getActiveSheet()->getColumnDimension('av')->setWidth(14);
        $this->excel->getActiveSheet()->getColumnDimension('aw')->setWidth(14);
        $this->excel->getActiveSheet()->getColumnDimension('ax')->setWidth(14);
        $this->excel->getActiveSheet()->getColumnDimension('ay')->setWidth(14);
        $this->excel->getActiveSheet()->getColumnDimension('az')->setWidth(14);
        $this->excel->getActiveSheet()->getColumnDimension('ba')->setWidth(14);
        $this->excel->getActiveSheet()->getColumnDimension('bb')->setWidth(14);


        $this->excel->getActiveSheet()->getColumnDimension('bc')->setWidth(3);
		$this->excel->getActiveSheet()->getColumnDimension('bd')->setWidth(5);
        $this->excel->getActiveSheet()->getColumnDimension('be')->setWidth(15);
        $this->excel->getActiveSheet()->getColumnDimension('bf')->setWidth(17);
        $this->excel->getActiveSheet()->getColumnDimension('bg')->setWidth(17);
        $this->excel->getActiveSheet()->getColumnDimension('bh')->setWidth(17);
        $this->excel->getActiveSheet()->getColumnDimension('bi')->setWidth(17);
        $this->excel->getActiveSheet()->getColumnDimension('bj')->setWidth(17);
        $this->excel->getActiveSheet()->getColumnDimension('bk')->setWidth(17);
        $this->excel->getActiveSheet()->getColumnDimension('bl')->setWidth(15);
        $this->excel->getActiveSheet()->getColumnDimension('bm')->setWidth(15);
        $this->excel->getActiveSheet()->getColumnDimension('bn')->setWidth(15);
        $this->excel->getActiveSheet()->getColumnDimension('bo')->setWidth(15); 

		$this->excel->getActiveSheet()->getColumnDimension('bp')->setWidth(3);
		$this->excel->getActiveSheet()->getColumnDimension('bq')->setWidth(5);
        $this->excel->getActiveSheet()->getColumnDimension('br')->setWidth(15);
        $this->excel->getActiveSheet()->getColumnDimension('bs')->setWidth(15);
        $this->excel->getActiveSheet()->getColumnDimension('bt')->setWidth(15);
        $this->excel->getActiveSheet()->getColumnDimension('bu')->setWidth(15);
        $this->excel->getActiveSheet()->getColumnDimension('bv')->setWidth(18);
        $this->excel->getActiveSheet()->getColumnDimension('bw')->setWidth(16);
        $this->excel->getActiveSheet()->getColumnDimension('bx')->setWidth(15);
        $this->excel->getActiveSheet()->getColumnDimension('by')->setWidth(15);
        $this->excel->getActiveSheet()->getColumnDimension('bz')->setWidth(15);
        $this->excel->getActiveSheet()->getColumnDimension('ca')->setWidth(15);

        $this->excel->getActiveSheet()->getColumnDimension('cb')->setWidth(3);
		$this->excel->getActiveSheet()->getColumnDimension('cc')->setWidth(5);
        $this->excel->getActiveSheet()->getColumnDimension('cd')->setWidth(15);
        $this->excel->getActiveSheet()->getColumnDimension('ce')->setWidth(15);
        $this->excel->getActiveSheet()->getColumnDimension('cf')->setWidth(15);
        $this->excel->getActiveSheet()->getColumnDimension('cg')->setWidth(15);
        $this->excel->getActiveSheet()->getColumnDimension('ch')->setWidth(15);
        $this->excel->getActiveSheet()->getColumnDimension('ci')->setWidth(15);
        $this->excel->getActiveSheet()->getColumnDimension('cj')->setWidth(15);
        $this->excel->getActiveSheet()->getColumnDimension('ck')->setWidth(15);
        $this->excel->getActiveSheet()->getColumnDimension('cl')->setWidth(15);
        $this->excel->getActiveSheet()->getColumnDimension('cm')->setWidth(15);
        $this->excel->getActiveSheet()->getColumnDimension('cn')->setWidth(20);
        $this->excel->getActiveSheet()->getColumnDimension('co')->setWidth(17);









        $this->excel->getActiveSheet()->mergeCells('A2:N2');
        $baris=2;
        $this->excel->getActiveSheet()->getStyle('A' . $baris)->applyFromArray(
            array(
            'font' => array(
            'name'         => 'Arial Narrow',
            'bold'         => true,
            'italic'    => false,
            'size'        => 12
            ),
            'alignment' => array(
            'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
            'vertical'   => PHPExcel_Style_Alignment::VERTICAL_CENTER,
            'wrap'       => true
            ) ) );
        $this->excel->getActiveSheet()
        ->setCellValue('A' . $baris,"DAFTAR ISIAN");
        $baris++;
        
        $this->excel->getActiveSheet()->mergeCells('A'.$baris.':N'.$baris);

        $this->excel->getActiveSheet()->getStyle('A' . $baris)->applyFromArray(
            array(
            'font' => array(
            'name'         => 'Arial Narrow',
            'bold'         => true,
            'italic'    => false,
            'size'        => 12
            ),
            'alignment' => array(
            'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
            'vertical'   => PHPExcel_Style_Alignment::VERTICAL_CENTER,
            'wrap'       => true
            ) ) );
        $this->excel->getActiveSheet()
        ->setCellValue('A' . $baris,"DATA DASAR KELUARGA TAHUN ".date("Y"));  
       
        $baris +=2;  // baris = 5 
		$b = $baris+1; // b = 6 
		$bb = $baris+2;  // bb = 7 
		$this->excel->getActiveSheet()->mergeCells('B'.$baris.':B'.$bb);
		$this->excel->getActiveSheet()->mergeCells('C'.$baris.':C'.$bb);
		$this->excel->getActiveSheet()->mergeCells('D'.$baris.':D'.$bb);
		$this->excel->getActiveSheet()->mergeCells('E'.$baris.':E'.$bb);
		$this->excel->getActiveSheet()->mergeCells('F'.$baris.':J'.$baris);
		$this->excel->getActiveSheet()->mergeCells('K'.$baris.':K'.$bb);
		$this->excel->getActiveSheet()->mergeCells('L'.$baris.':L'.$bb);
		$this->excel->getActiveSheet()->mergeCells('M'.$baris.':M'.$bb);
		$this->excel->getActiveSheet()->mergeCells('N'.$baris.':N'.$bb);
		
	 
		$this->excel->getActiveSheet()->mergeCells('F'.$b.':H'.$bb);
		$this->excel->getActiveSheet()->mergeCells('I'.$b.':I'.$bb);
		$this->excel->getActiveSheet()->mergeCells('J'.$b.':J'.$bb);
		
		$this->excel->getActiveSheet()
				->setCellValue('B' . $baris, "No. Urut")
				->setCellValue('C' . $baris, "Nama Lengkap (Nama Besar, Marga dan Nama Kecil)")
				->setCellValue('D' . $baris, "Jenis Kelamin (L/P)")
				->setCellValue('E' . $baris, "Hubungan dengan Kepala Keluarga")
				->setCellValue('F' . $baris, "Kelahiran")      
				->setCellValue('K' . $baris, "Status Perkawinan")
				->setCellValue('L' . $baris, "Agama")
				->setCellValue('M' . $baris, "Gol. Darah")
				->setCellValue('N' . $baris, "Kewarganegaraan / Etnis / Suku");     
				
		$this->excel->getActiveSheet()
				->setCellValue('F' . $b, "Tanngal/Bulan/Tahun")
				->setCellValue('I' . $b, "Tempat")
				->setCellValue('J' . $b, "Umur");  
 

		// kedua 
		$this->excel->getActiveSheet()->mergeCells('p'.$baris.':p'.$bb);
		$this->excel->getActiveSheet()->mergeCells('q'.$baris.':q'.$bb);
		$this->excel->getActiveSheet()->mergeCells('t'.$baris.':t'.$bb);
		$this->excel->getActiveSheet()->mergeCells('u'.$baris.':u'.$bb);
		$this->excel->getActiveSheet()->mergeCells('v'.$baris.':v'.$bb);
		$this->excel->getActiveSheet()->mergeCells('w'.$baris.':w'.$bb);
		$this->excel->getActiveSheet()->mergeCells('x'.$baris.':x'.$bb);
		$this->excel->getActiveSheet()->mergeCells('y'.$baris.':y'.$bb);
		$this->excel->getActiveSheet()->mergeCells('z'.$baris.':z'.$bb);
		$this->excel->getActiveSheet()->mergeCells('aa'.$baris.':aa'.$bb);
		$this->excel->getActiveSheet()->mergeCells('r'.$baris.':s'.$baris);

		$this->excel->getActiveSheet()->mergeCells('r'.$b.':r'.$bb);
		$this->excel->getActiveSheet()->mergeCells('s'.$b.':s'.$bb);


		$this->excel->getActiveSheet()
				->setCellValue('p' . $baris, "No. Urut")
				->setCellValue('q' . $baris, "Pendidikan Umum Terakhir")
				->setCellValue('r' . $baris, "PEKERJAAN")
				->setCellValue('t' . $baris, "Nama Orang Tua Kandung (Ayah/Ibu)")
				->setCellValue('u' . $baris, "Akta Kelahiran (Nomor & Tanggal )")    
				->setCellValue('v' . $baris, "Nomor Induk Kependudukan (NIK)")      
				->setCellValue('w' . $baris, "Akseptor KB ( Pil / Kondom / Suntik / dll )")      
				->setCellValue('x' . $baris, "Cacat Menurut Jenis")      
				->setCellValue('y' . $baris, "Status Kepemilikan Rumah")
				->setCellValue('z' . $baris, "Jumlah Penghasilan Perbulan")
				->setCellValue('aa' . $baris, "Jumlah Pengeluaran Perbulan");
		
		$this->excel->getActiveSheet()
				->setCellValue('r' . $b, "Mata Pencaharian / Pekerjaan Pokok")
				->setCellValue('s' . $b, "Pekerjaan Tambahan");

				

	 // ketiga 
		$this->excel->getActiveSheet()->mergeCells('ac'.$baris.':ac'.$bb);
		$this->excel->getActiveSheet()->mergeCells('ad'.$baris.':ad'.$bb);
		$this->excel->getActiveSheet()->mergeCells('af'.$baris.':af'.$bb);
		$this->excel->getActiveSheet()->mergeCells('ah'.$baris.':ah'.$bb);
		$this->excel->getActiveSheet()->mergeCells('ai'.$baris.':ai'.$bb);
		$this->excel->getActiveSheet()->mergeCells('aj'.$baris.':aj'.$bb);
		$this->excel->getActiveSheet()->mergeCells('ak'.$baris.':ak'.$bb);
		$this->excel->getActiveSheet()->mergeCells('al'.$baris.':al'.$bb);
		$this->excel->getActiveSheet()->mergeCells('am'.$baris.':am'.$bb);



		$this->excel->getActiveSheet()
				->setCellValue('ac' . $baris, "No. Urut")
				->setCellValue('ad' . $baris, "Kepemilikan Lahan Pertanian Tanaman Pangan")
				->setCellValue('ae' . $baris, "Produksi Komoditas")
				->setCellValue('af' . $baris, "Pemasaran Hasil Tanaman Pangan")
				->setCellValue('ag' . $baris, "Produksi Tanaman")
				->setCellValue('ah' . $baris, "Pemasaran Hasil Buah-buahan")
				->setCellValue('ai' . $baris, "Produksi Tanaman Obat ( Nama / are / Kg )")    
				->setCellValue('aj' . $baris, "Pemasaran Hasil Tanaman Obat")      
				->setCellValue('ak' . $baris, "Kepemilikan Perkebunan")      
				->setCellValue('al' . $baris, "Produksi Komoditas Perkebunan ( Jenis/ Pohon / Bh/Kg/Ton )")      
				->setCellValue('am' . $baris, "Pemasaran Hasil Perkebunan");
		 
		$this->excel->getActiveSheet()
				->setCellValue('ae' . $b, "Tanaman Pangan")
				->setCellValue('ag' . $b, "Buah-buahan");
		$bb = $baris+2;
		$this->excel->getActiveSheet()
				->setCellValue('ae' . $bb, "(Nama / are / Kg )")
				->setCellValue('ag' . $bb, "(Nama / pohon / Kg )");
		

		// keempat 

		$this->excel->getActiveSheet()->mergeCells('ao'.$baris.':ao'.$bb);
		$this->excel->getActiveSheet()->mergeCells('ap'.$baris.':ap'.$bb);
		$this->excel->getActiveSheet()->mergeCells('aq'.$baris.':aq'.$bb);
		$this->excel->getActiveSheet()->mergeCells('ar'.$baris.':ar'.$bb);
		$this->excel->getActiveSheet()->mergeCells('aw'.$baris.':aw'.$bb);
		$this->excel->getActiveSheet()->mergeCells('ax'.$baris.':ax'.$bb);
		$this->excel->getActiveSheet()->mergeCells('ay'.$baris.':ay'.$bb);
		$this->excel->getActiveSheet()->mergeCells('as'.$b.':as'.$bb);
		$this->excel->getActiveSheet()->mergeCells('at'.$b.':at'.$bb);
		$this->excel->getActiveSheet()->mergeCells('au'.$b.':au'.$bb);
		$this->excel->getActiveSheet()->mergeCells('av'.$b.':av'.$bb);
		$this->excel->getActiveSheet()->mergeCells('az'.$b.':az'.$bb);
		$this->excel->getActiveSheet()->mergeCells('ba'.$b.':ba'.$bb);
		$this->excel->getActiveSheet()->mergeCells('bb'.$b.':bb'.$bb);



		$this->excel->getActiveSheet()
				->setCellValue('ao' . $baris, "No. Urut")
				->setCellValue('ap' . $baris, "Kepemilikan Lahan Hutan")
				->setCellValue('aq' . $baris, "Produksi Hasil Hutan")
				->setCellValue('ar' . $baris, "Pemasaran Hasil Hutan")
				->setCellValue('as' . $baris, "Kepemilikan Jenis")
				->setCellValue('at' . $baris, "Usaha Pengolahan")    
				->setCellValue('au' . $baris, "Pemasaran Hasil")      
				->setCellValue('av' . $baris, "Alat Produksi")      
				->setCellValue('aw' . $baris, "Produksi Perikanan")      
				->setCellValue('ax' . $baris, "Pemasaran Hasil")
				->setCellValue('ay' . $baris, "Produksi Bahan Galian")
				->setCellValue('az' . $baris, "Pemasaran Hasil")
				->setCellValue('ba' . $baris, "Sumber Air Minum")
				->setCellValue('bb' . $baris, "Kualitas Air Minum");
	 
		$this->excel->getActiveSheet()
				->setCellValue('as' . $b, "Tenak")
				->setCellValue('at' . $b, "Hasil Ternak")
				->setCellValue('au' . $b, "Ternak")
				->setCellValue('av' . $b, "Budidaya Ikan")
				->setCellValue('az' . $b, "Galian")
				->setCellValue('ba' . $b, "Yang Digunakan")
				->setCellValue('bb' . $b, "Yang Digunakan");



				/// kelima 
		$this->excel->getActiveSheet()->mergeCells('bd'.$baris.':bd'.$bb);
		$this->excel->getActiveSheet()->mergeCells('bn'.$baris.':bn'.$bb);

		$this->excel->getActiveSheet()->mergeCells('be'.$b.':be'.$bb);
		$this->excel->getActiveSheet()->mergeCells('bf'.$b.':bf'.$bb);
		$this->excel->getActiveSheet()->mergeCells('bg'.$b.':bg'.$bb);
		$this->excel->getActiveSheet()->mergeCells('bh'.$b.':bh'.$bb);
		$this->excel->getActiveSheet()->mergeCells('bi'.$b.':bi'.$bb);
		$this->excel->getActiveSheet()->mergeCells('bj'.$b.':bj'.$bb);
		$this->excel->getActiveSheet()->mergeCells('bk'.$b.':bk'.$bb);
		$this->excel->getActiveSheet()->mergeCells('bl'.$b.':bl'.$bb);
		$this->excel->getActiveSheet()->mergeCells('bm'.$b.':bm'.$bb);
		$this->excel->getActiveSheet()->mergeCells('bo'.$b.':bo'.$bb);

		$this->excel->getActiveSheet()
				->setCellValue('bd' . $baris, "No. Urut")
				->setCellValue('be' . $baris, "Pemanfaat Danau/")
				->setCellValue('bf' . $baris, "Lembaga Pemerintahan")
				->setCellValue('bg' . $baris, "Lembaga Kemasyarakatan")
				->setCellValue('bh' . $baris, "Lembaga Politik")
				->setCellValue('bi' . $baris, "Lembaga Ekonomi")    
				->setCellValue('bj' . $baris, "Lembaga Pendidikan")      
				->setCellValue('bk' . $baris, "Penguasaaan Aset")      
				->setCellValue('bl' . $baris, "Aset Sarana")      
				->setCellValue('bm' . $baris, "Aset Sarana")
				->setCellValue('bn' . $baris, "Aset Perumahan")
				->setCellValue('bo' . $baris, "Aset Lainnya");
		$this->excel->getActiveSheet()
				->setCellValue('be' . $b, "Sungai/Waduk/Situ")
				->setCellValue('bf' . $b, "yang Diikuti")
				->setCellValue('bg' . $b, "yang Diikuti")
				->setCellValue('bh' . $b, "yang Diikuti")
				->setCellValue('bi' . $b, "yang Dimiliki")
				->setCellValue('bj' . $b, "yang Dimiliki")
				->setCellValue('bk' . $b, "Tanah")
				->setCellValue('bl' . $b, "Transportasi Umum")
				->setCellValue('bm' . $b, "Produksi")
				->setCellValue('bo' . $b, "dalam Keluarga");


		$this->excel->getActiveSheet()->mergeCells('bq'.$baris.':bq'.$bb);
		$this->excel->getActiveSheet()->mergeCells('br'.$b.':br'.$bb);
		$this->excel->getActiveSheet()->mergeCells('bs'.$b.':bs'.$bb);
		$this->excel->getActiveSheet()->mergeCells('bt'.$b.':bt'.$bb);
		$this->excel->getActiveSheet()->mergeCells('bu'.$baris.':bu'.$bb);
		$this->excel->getActiveSheet()->mergeCells('bv'.$b.':bv'.$bb);
		$this->excel->getActiveSheet()->mergeCells('bw'.$b.':bw'.$bb);
		$this->excel->getActiveSheet()->mergeCells('bx'.$baris.':bx'.$bb);
		$this->excel->getActiveSheet()->mergeCells('by'.$b.':by'.$bb);
		$this->excel->getActiveSheet()->mergeCells('bz'.$baris.':bz'.$bb);
		$this->excel->getActiveSheet()->mergeCells('ca'.$b.':ca'.$bb);		


		$this->excel->getActiveSheet()
				->setCellValue('bq' . $baris, "No. Urut")
				->setCellValue('br' . $baris, "Kualitas Ibu Hamil")
				->setCellValue('bs' . $baris, "Kualitas Bayi")
				->setCellValue('bt' . $baris, "Kualitas Persalinan")
				->setCellValue('bu' . $baris, "Cakupan Immunisasi")
				->setCellValue('bv' . $baris, "Penderita Sakit dan")    
				->setCellValue('bw' . $baris, "Perilaku Hidup Bersih")      
				->setCellValue('bx' . $baris, "Pola Makan Keluarga")      
				->setCellValue('by' . $baris, "Kebiasaan Berobat")      
				->setCellValue('bz' . $baris, "Status Gizi Balita")      
				->setCellValue('ca' . $baris, "Jenis Penyakit");
		$this->excel->getActiveSheet()
				->setCellValue('br' . $b, "dalam Keluarga")
				->setCellValue('bs' . $b, "dalam Keluarga")
				->setCellValue('bt' . $b, "dalam Keluarga")
				->setCellValue('bv' . $b, "Kelainan dalam Keluarga")
				->setCellValue('bw' . $b, "dan Sehat")
				->setCellValue('by' . $b, "bila Sakit")
				->setCellValue('ca' . $b, "yang Diderita");


		$this->excel->getActiveSheet()->mergeCells('cc'.$baris.':cc'.$bb);
		$this->excel->getActiveSheet()->mergeCells('cd'.$baris.':cd'.$bb);
		$this->excel->getActiveSheet()->mergeCells('ce'.$baris.':ce'.$bb);
		$this->excel->getActiveSheet()->mergeCells('cf'.$baris.':cf'.$bb);
		$this->excel->getActiveSheet()->mergeCells('cg'.$baris.':cg'.$bb);
		$this->excel->getActiveSheet()->mergeCells('ch'.$baris.':ch'.$bb);
		$this->excel->getActiveSheet()->mergeCells('ci'.$baris.':ci'.$bb);
		$this->excel->getActiveSheet()->mergeCells('cj'.$baris.':cj'.$bb);
		$this->excel->getActiveSheet()->mergeCells('ck'.$baris.':ck'.$bb);
		$this->excel->getActiveSheet()->mergeCells('cl'.$baris.':cl'.$bb);
		$this->excel->getActiveSheet()->mergeCells('cm'.$b.':cm'.$bb);
		$this->excel->getActiveSheet()->mergeCells('cn'.$b.':cn'.$bb);
		$this->excel->getActiveSheet()->mergeCells('co'.$b.':co'.$bb);


		$this->excel->getActiveSheet()
				->setCellValue('cc' . $baris, "No. Urut")
				->setCellValue('cd' . $baris, "Kerukunan")
				->setCellValue('ce' . $baris, "Perkelahian")
				->setCellValue('cf' . $baris, "Pencurian")
				->setCellValue('cg' . $baris, "Penjarahan")
				->setCellValue('ch' . $baris, "Perjudian")    
				->setCellValue('ci' . $baris, "Pemakaian Miras")      
				->setCellValue('cj' . $baris, "Pembunuhan")      
				->setCellValue('ck' . $baris, "Penculikan")      
				->setCellValue('cl' . $baris, "Kejahatan Seksual")      
				->setCellValue('cm' . $baris, "Kekerasan dalam")
				->setCellValue('cn' . $baris, "Kedudukan Anggota Keluarga")
				->setCellValue('co' . $baris, "Masalah Kesejahteraan");

		$this->excel->getActiveSheet()
				->setCellValue('cm' . $b, "Keluarga")
				->setCellValue('cn' . $b, "Sebagai Wajib Pajak")
				->setCellValue('co' . $b, "Keluarga");




		$arr_kolom = array('b','c','d','e','f','g','h','i','j','k','l','m','n',
'p','q','r','s','t','u','v','w','x','y','z','aa',
'ac','ad','ae','af','ag','ah','ai','aj','ak','al','am',
'ao','ap','aq','ar','as','at','au','av','aw','ax','ay','az','ba','bb',
'bd','be','bf','bg','bh','bi','bj','bk','bl','bm','bn','bo',
'bq','br','bs','bt','bu','bv','bw','bx','by','bz','ca',
'cc','cd','ce','cf','cg','ch','ci','cj','ck','cl','cm','cn','co'

			);



		$this->format_header($arr_kolom,$baris);
		$this->format_header($arr_kolom,$baris+1);
		$this->format_header($arr_kolom,$baris+2);
		$baris+=3;
		$b = $baris + 1;
		$this->excel->getActiveSheet()->getStyle('A5:CO6')->applyFromArray(
            array(
            'font' => array(
            'name'         => 'Arial Narrow',
            'bold'         => false,
            'italic'    => false,
            'size'        => 10
            )) );
		
	

		$this->excel->getActiveSheet()
				->setCellValue('B' . $baris, "1")
				->setCellValue('C' . $baris, "2")
				->setCellValue('D' . $baris, "3")
				->setCellValue('E' . $baris, "4")
				->setCellValue('F' . $baris, "5")  
				->setCellValue('I' . $baris, "6")  
				->setCellValue('J' . $baris, "7")  
				->setCellValue('K' . $baris, "8")  
				->setCellValue('L' . $baris, "9")  
				->setCellValue('M' . $baris, "10")  
				->setCellValue('N' . $baris, "11") 	 
				->setCellValue('p' . $baris, "12")
				->setCellValue('q' . $baris, "13")
				->setCellValue('r' . $baris, "14")
				->setCellValue('s' . $baris, "15")
				->setCellValue('t' . $baris, "16")
				->setCellValue('u' . $baris, "17")  
				->setCellValue('v' . $baris, "18")  
				->setCellValue('w' . $baris, "19")  
				->setCellValue('x' . $baris, "20")  
				->setCellValue('y' . $baris, "21")  
				->setCellValue('z' . $baris, "22")  
				->setCellValue('aa' . $baris, "23")
				->setCellValue('ac' . $baris, "24")
				->setCellValue('ad' . $baris, "25")
				->setCellValue('ae' . $baris, "26")
				->setCellValue('af' . $baris, "27")
				->setCellValue('ag' . $baris, "28")
				->setCellValue('ah' . $baris, "29")  
				->setCellValue('ai' . $baris, "30")  
				->setCellValue('aj' . $baris, "31")  
				->setCellValue('ak' . $baris, "32")  
				->setCellValue('al' . $baris, "33")  
				->setCellValue('am' . $baris, "34")

				->setCellValue('ao' . $baris, "35")
				->setCellValue('ap' . $baris, "36")
				->setCellValue('aq' . $baris, "37")
				->setCellValue('ar' . $baris, "38")
				->setCellValue('as' . $baris, "39")
				->setCellValue('at' . $baris, "40")  
				->setCellValue('au' . $baris, "41")  
				->setCellValue('av' . $baris, "42")  
				->setCellValue('aw' . $baris, "43")  
				->setCellValue('ax' . $baris, "44")  
				->setCellValue('ay' . $baris, "45")
				->setCellValue('az' . $baris, "46")
				->setCellValue('ba' . $baris, "47")
				->setCellValue('bb' . $baris, "48")

				->setCellValue('bd' . $baris, "49")
				->setCellValue('be' . $baris, "50")
				->setCellValue('bf' . $baris, "51")
				->setCellValue('bg' . $baris, "52")
				->setCellValue('bh' . $baris, "53")
				->setCellValue('bi' . $baris, "54")    
				->setCellValue('bj' . $baris, "55")      
				->setCellValue('bk' . $baris, "56")      
				->setCellValue('bl' . $baris, "57")      
				->setCellValue('bm' . $baris, "58")
				->setCellValue('bn' . $baris, "59")
				->setCellValue('bo' . $baris, "60")


				->setCellValue('bq' . $baris, "61")
				->setCellValue('br' . $baris, "62")
				->setCellValue('bs' . $baris, "63")
				->setCellValue('bt' . $baris, "64")
				->setCellValue('bu' . $baris, "65")
				->setCellValue('bv' . $baris, "66")
				->setCellValue('bw' . $baris, "67")
				->setCellValue('bx' . $baris, "68")
				->setCellValue('by' . $baris, "69")
				->setCellValue('bz' . $baris, "70")
				->setCellValue('ca' . $baris, "71")

				->setCellValue('cc' . $baris, "72")
				->setCellValue('cd' . $baris, "73")
				->setCellValue('ce' . $baris, "74")
				->setCellValue('cf' . $baris, "75")
				->setCellValue('cg' . $baris, "76")
				->setCellValue('ch' . $baris, "77")
				->setCellValue('ci' . $baris, "78")
				->setCellValue('cj' . $baris, "79")
				->setCellValue('ck' . $baris, "80")
				->setCellValue('cl' . $baris, "81")
				->setCellValue('cm' . $baris, "82")
				->setCellValue('cn' . $baris, "83")
				->setCellValue('co' . $baris, "84")
				;


	$this->excel->getActiveSheet()->getStyle('A'.$baris.':CO'.$baris)->applyFromArray(
            array(
            'fill' => array(
                        'type' => PHPExcel_Style_Fill::FILL_SOLID,
                        'color' => array('rgb'=>'BFBFBF'),
                ) ) );





		$this->excel->getActiveSheet()->mergeCells('F'.$baris.':H'.$baris);
		$this->format_baris($arr_kolom,$baris);
		$baris++;
		
		$n = 0;
		$nn = '';
		$arr_sebagai = $this->cm->arr_sebagai;

		foreach($dat as $val) : 
			if($val['urutan'] == '0')
			{
				if($n != 0)
				{
					$this->format_baris($arr_kolom,$baris);
					$baris++;
				}
				$n++;
				$nn = $n;
			}
			else $nn = '';
			
			if($val["status_kawin"] == "1") $s = "KAWIN";
			else if($val["status_kawin"] == "2") $s = "BELUM KAWIN";
			else if($val["status_kawin"] == "3") $s = "CERAI HIDUP";
			else $s = "CERAI MATI";

			$d = explode("-",$val["tgl_lahir"]);
			$date1 = new DateTime($val["tgl_lahir"]);
			$date2 = new DateTime(date("Y-m-d"));
			$interval = $date1->diff($date2);
			$this->excel->getActiveSheet()
				->setCellValue('B' . $baris, $nn)
				->setCellValue('P' . $baris, $nn)
				->setCellValue('AC' . $baris, $nn)
				->setCellValue('AO' . $baris, $nn)
				->setCellValue('BD' . $baris, $nn)
				->setCellValue('BQ' . $baris, $nn)
				->setCellValue('CC' . $baris, $nn)


				->setCellValue('C' . $baris, strtoupper($val['nama']))
				->setCellValue('D' . $baris, strtoupper($val['jk']))
				->setCellValue('E' . $baris, strtoupper($val['hubungan_dlm_keluarga']))
				->setCellValue('F' . $baris, strtoupper($d[0]))
				->setCellValue('G' . $baris, strtoupper($d[1]))
				->setCellValue('H' . $baris, strtoupper($d[2]))
				->setCellValue('I' . $baris, strtoupper($val["tmp_lahir"]))
				->setCellValue('J' . $baris, strtoupper($interval->y))
				->setCellValue('K' . $baris, strtoupper($val["status_kawin"]))
				->setCellValue('L' . $baris, strtoupper($val["agama"]))
				->setCellValue('M' . $baris, strtoupper($val["golongan_darah"]))
				->setCellValue('N' . $baris, strtoupper($val["warga_negara"]))


				->setCellValue('q' . $baris, strtoupper($val['pendidikan']))
				->setCellValue('r' . $baris, strtoupper($val['pekerjaan']))
				->setCellValue('s' . $baris, $this->cp->get_pekerjaan($val['id_penduduk']))
				->setCellValue('t' . $baris, strtoupper($val['nama_ayah'])."/".strtoupper($val['nama_ibu']))
				->setCellValue('u' . $baris, (!empty($val['no_akte']))?strtoupper($val['no_akte']).", ".$val['tanggal_akte']:"")

				// ->setCellValue('v' . $baris, strtoupper($val['nik']))

				->setCellValueExplicit('v' . $baris, strtoupper($val['']).strtoupper($val['nik']))
				
				->setCellValue('w' . $baris, strtoupper($val['akseptor_kb']))
				->setCellValue('x' . $baris, $this->cp->get_cacat($val['id_penduduk']))
				->setCellValue('y' . $baris, strtoupper($val['status_kepemilikan_rumah']))
				->setCellValue('z' . $baris, strtoupper($val['penghasilan']))
				->setCellValue('aa' . $baris, strtoupper($val['pengeluaran']))


				// tiga 

				->setCellValue('ad' . $baris, strtoupper($val['m1']))
				->setCellValue('ae' . $baris, $this->cp->get_tanaman_pangan($val['id_penduduk']))
				->setCellValue('af' . $baris, $this->cp->get_hasil_tanaman_pangan($val['id_penduduk']))
				->setCellValue('ag' . $baris, $this->cp->get_buah($val['id_penduduk']))
				->setCellValue('ah' . $baris, $this->cp->get_hasil_buah($val['id_penduduk']))
				->setCellValue('ai' . $baris, $this->cp->get_obat($val['id_penduduk']))
				->setCellValue('aj' . $baris, $this->cp->get_hasil_obat($val['id_penduduk']))
				->setCellValue('ak' . $baris, strtoupper($val['m2']))
				->setCellValue('al' . $baris, $this->cp->get_kebun($val['id_penduduk']))
				->setCellValue('am' . $baris, $this->cp->get_hasil_kebun($val['id_penduduk']))



				// empat 


				 
				->setCellValue('ap' . $baris, $val['kepemilikan_lahan'])
				->setCellValue('aq' . $baris, $this->cp->get_produksi_hutan($val['id_penduduk']))
				->setCellValue('ar' . $baris, $this->cp->get_hasil_hutan($val['id_penduduk']))
				->setCellValue('as' . $baris, $this->cp->get_kepemilikan_ternak($val['id_penduduk']))
				->setCellValue('at' . $baris, $this->cp->get_pengolahan_ternak($val['id_penduduk']))  
				->setCellValue('au' . $baris, $this->cp->get_hasil_ternak($val['id_penduduk']))  
				->setCellValue('av' . $baris, $val['alat_produksi_ikan'])  
				->setCellValue('aw' . $baris, $this->cp->get_produksi_perikanan($val['id_penduduk']))  
				->setCellValue('ax' . $baris, $this->cp->get_hasil_ikan($val['id_penduduk']))  
				->setCellValue('ay' . $baris, $this->cp->get_produksi_galian($val['id_penduduk']))
				->setCellValue('az' . $baris, $this->cp->get_hasil_galian($val['id_penduduk']))
				->setCellValue('ba' . $baris, $val['sumber_air'])
				->setCellValue('bb' . $baris, $val['kualitas_air'])


				/// lima 

				->setCellValue('be' . $baris, $this->cp->get_pemanfaatan_danau($val['id_penduduk']))
				->setCellValue('bf' . $baris, $val['lembaga_diikuti'])
				->setCellValue('bg' . $baris, $val['lembaga'])
				->setCellValue('bh' . $baris, $val['partai_politik'])
				->setCellValue('bi' . $baris, $this->cp->get_lembaga_ekonomi($val['id_penduduk']))    
				->setCellValue('bj' . $baris, $this->cp->get_lembaga_pendidikan($val['id_penduduk']))      
				->setCellValue('bk' . $baris, $val['aset_tanah'])      
				->setCellValue('bl' . $baris, $this->cp->get_aset_transportasi($val['id_penduduk']))      
				->setCellValue('bm' . $baris, $this->cp->get_aset_produksi($val['id_penduduk']))
				->setCellValue('bn' . $baris, $this->cp->get_aset_perumahan($val['id_penduduk']))
				->setCellValue('bo' . $baris, $this->cp->get_aset_lainnya($val['id_penduduk']))


				// enam 

				 
				->setCellValue('br' . $baris, $this->cp->get_kualitas_hamil($val['id_penduduk']))
				->setCellValue('bs' . $baris, $this->cp->get_kualitas_bayi($val['id_penduduk']))
				->setCellValue('bt' . $baris, $this->cp->get_kualitas_persalinan($val['id_penduduk']))
				->setCellValue('bu' . $baris, $this->cp->get_cakupan_immunisasi($val['id_penduduk']))
				->setCellValue('bv' . $baris, $this->cp->get_penderita_sakit($val['id_penduduk']))
				->setCellValue('bw' . $baris, $val['hidup_sehat'])
				->setCellValue('bx' . $baris, $val['pola_makan'])
				->setCellValue('by' . $baris, $val['kebiasaan_berobat'])
				->setCellValue('bz' . $baris, $val['status_gizi'])
				->setCellValue('ca' . $baris, $this->cp->get_jenis_penyakit($val['id_penduduk']))

				->setCellValue('cd' . $baris, $this->cp->get_kerukunan($val['id_penduduk']))
				->setCellValue('ce' . $baris, $this->cp->get_perkelahian($val['id_penduduk']))
				->setCellValue('cf' . $baris, $this->cp->get_pencurian($val['id_penduduk']))
				->setCellValue('cg' . $baris, $this->cp->get_penjarahan($val['id_penduduk']))
				->setCellValue('ch' . $baris, $this->cp->get_perjudian($val['id_penduduk']))
				->setCellValue('ci' . $baris, $this->cp->get_miras($val['id_penduduk']))
				->setCellValue('cj' . $baris, $this->cp->get_pembunuhan($val['id_penduduk']))
				->setCellValue('ck' . $baris, $this->cp->get_penculikan($val['id_penduduk']))
				->setCellValue('cl' . $baris, $this->cp->get_kejahatan_seks($val['id_penduduk']))
				->setCellValue('cm' . $baris, $this->cp->get_kekerasan($val['id_penduduk']))
				->setCellValue('cn' . $baris, $this->cp->get_pajak($val['id_penduduk']))
				->setCellValue('co' . $baris, $this->cp->get_kesejahteraan($val['id_penduduk']));


				;


				
				 $this->format_baris($arr_kolom,$baris);
				$baris++;
		endforeach;


		
		$this->excel->getActiveSheet()->getStyle('A9:CO'.$baris)->applyFromArray(
            array(
            'font' => array(
            'name'         => 'Arial Narrow',
            'bold'         => false,
            'italic'    => false,
            'size'        => 11
            ),
            'alignment' => array(
            'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
            'vertical'   => PHPExcel_Style_Alignment::VERTICAL_CENTER,
            'wrap'       => true
            ) ) );
		
        $filename = "FORMULIR DATA DASAR KELUARGA.xls";

		//exit;

        header('Content-Type: application/vnd.ms-excel'); //mime type
        header('Content-Disposition: attachment;filename="'.$filename.'"'); //tell browser what's the file name
        header('Cache-Control: max-age=0'); //no cache
                     
        //save it to Excel5 format (excel 2003 .XLS file), change this to 'Excel2007' (and adjust the filename extension, also the header mime type)
        //if you want to save it as .XLSX Excel 2007 format
        $objWriter = PHPExcel_IOFactory::createWriter($this->excel, 'Excel2007');  
        //force user to download the Excel file without writing it to server's HD
        $objWriter->save('php://output');
	}
	
	
}


?>
