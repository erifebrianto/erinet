<?php

class M_pelanggan extends CI_Model{

  function tampil_dapel(){
  		return $this->db->get('data_pelanggan');
  	}
      function input_data($data,$table){
		$this->db->insert($table,$data);
	}
}