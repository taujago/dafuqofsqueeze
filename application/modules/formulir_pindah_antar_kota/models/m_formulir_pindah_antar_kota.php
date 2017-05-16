<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

class m_formulir_pindah_antar_kota extends CI_Model 
{

  function __construct()
  {
    parent::__construct();
       // $this->_table = 'country';
  }
    
  
   function get_data($param)
  {   
    
 
    //print_r($param);

    // $this->db->select('sp.*,
  //   `v_penduduk2`.`id_penduduk`
  //   , `v_penduduk2`.`nik`
  //   , v_penduduk2.tmp_lahir
  //   , `v_penduduk2`.`nama`
  //   , `v_penduduk2`.`jk`
  //   , `v_penduduk2`.`tgl_lahir`
  //   , `v_penduduk2`.`tgl_lahir2`
  //   , `v_penduduk2`.`golongan_darah`
  //   , `v_penduduk2`.`id_agama`
  //   , `v_penduduk2`.`agama`
  //   , `v_penduduk2`.`pekerjaan`
  //   , `v_penduduk2`.`status_kawin`
  //   , `v_penduduk2`.`status`
  //   , `v_penduduk2`.`alamat`
  //   , `v_penduduk2`.`rt`
  //   , `v_penduduk2`.`rw`
  //   , `v_penduduk2`.`id_desa`
  //   , `v_penduduk2`.`desa`
  //   , `v_penduduk2`.`id_kecamatan`
  //   , `v_penduduk2`.`kecamatan`
  //   , `v_penduduk2`.`id_kota`
  //   , `v_penduduk2`.`kota`
  //   , `v_penduduk2`.`dusun`
  //   , `v_penduduk2`.`id_dusun`
  //   , `v_penduduk2`.`id_provinsi`
  //   , `v_penduduk2`.`no_paspor`
  //   , `v_penduduk2`.`provinsi`
  //   , `lokasi`.`desa` AS pindah_desa
  //   , `lokasi`.`id_kecamatan` AS  pindah_id_kecamatan
  //   , `lokasi`.`kecamatan` AS pindah_kecamatan
  //   , `lokasi`.`id_kota` AS pindah_id_kota
  //   , `lokasi`.`kota` AS pindah_kota
  //   , `lokasi`.`id_provinsi` AS pindah_id_provinsi
  //   , `lokasi`.`provinsi` AS pindah_provinsi')->from('surat_pindah sp ') 
        $this->db->select('sp.*, p.*, 
                l.`id_kecamatan` AS  pindah_id_kecamatan,
                l.id_kota AS  pindah_id_kota,
                l.`id_provinsi` AS  pindah_id_provinsi,
                l.provinsi AS pindah_provinsi,
                l.kota AS pindah_kota,
                l.kecamatan AS pindah_kecamatan,
                l.desa AS pindah_desa')->from('surat_pindah sp ') 

    ->join("v_penduduk p",'p.id_penduduk=sp.id_penduduk') 
    ->join("lokasi l",'l.id_desa=sp.pindah_id_desa','left')
    ->where("sp.deleted",0)->where("sp.jenis_formulir",3);

   
    if($param['nama']<> 'x') {
      $this->db->like('nama',$param['nama']);
    }

    if($param['tgl_awal'] <> 'x' and $param['tgl_akhir'] <> 'x') {
      $awal = flipdate($param['tgl_awal']);
      $akhir = flipdate($param['tgl_akhir']);
      $this->db->where(" tanggal between '$awal' and '$akhir'",null,false);
    } 

 
 
     
    ($param['limit'] != null ? $this->db->limit($param['limit']['end'], $param['limit']['start']) : '');
    //$this->db->limit($param['limit']['end'], $param['limit']['start']) ;
       
        ($param['sort_by'] != null) ? $this->db->order_by($param['sort_by'], $param['sort_direction']) :'';
        
    $res = $this->db->get();
    // echo $this->db->last_query(); 
    return $res;
  }

  
  
}
