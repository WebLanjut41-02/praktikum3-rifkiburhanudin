<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class C_makanan extends CI_Controller {

	
		

/* End of file c_makanan.php */
/* Location: ./application/controllers/c_makanan.php */

public function __construct()
{
	parent::__construct();
	$this->load->helper(array('url','form'));
	// $this->load->library('form_validation');
	$this->load->model('m_makanan');
}
public function pesan()
{
	$data['value']=$this->m_makanan->get_data()->result();
	$this->load->view('pesan',$data);
}

public function tampilpesanan($value='pesan')
{
	$this->load->view($value);
}
public function konsumen($value='pelanggan')
{
	# code...
	$this->load->view($value);
}
public function createpesan()
{
	# code...
	$nama = $this->input->post('nama');
	$data = array(
		'nama' => $nama
	);
	$this->m_makanan->inputdata($data,'pelanggan');

	redirect('c_makanan/pesan');
}
}
?>