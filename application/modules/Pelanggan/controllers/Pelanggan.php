<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelanggan extends CI_Controller {

	function __construct(){
		parent::__construct();
	   $this->load->model('M_pelanggan');
	}

	public function index()
	{	
		$data['data_pelanggan'] = $this->M_pelanggan->tampil_dapel()->result();
		$this->load->view('dashboard/template/header');
		$this->load->view('v_pelanggan', $data);
		$this->load->view('dashboard/template/footer');
	}
	public function input(){
		$this->load->view('dashboard/template/header.php');
		$this->load->view('v_input');
		$this->load->view('dashboard/template/footer.php');
}
	public function save_data(){
		$id_pelanggan = $this->input->post('id_pelanggan');
		$nama_pelanggan = $this->input->post('nama_pelanggan');		
		$alamat_pelanggan = $this->input->post('alamat_pelanggan');		
		$no_kontak = $this->input->post('no_kontak');		
		$pekerjaan = $this->input->post('pekerjaan');




	 $data = array(
		 'id_pelanggan' => $id_pelanggan,
		 'nama_pelanggan' => $nama_pelanggan,		 
		 'alamat_pelanggan' => $alamat_pelanggan,		 
		 'no_kontak' => $no_kontak,		 
		 'pekerjaan' => $pekerjaan

		 );		
	 $this->M_pelanggan->input_data($data, 'data_pelanggan');
	 redirect('pelanggan');
	}
}