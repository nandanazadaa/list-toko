<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->model('M_Barang');
	}

	public function index()
	{
		$data['admin'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = 'Dashboard';

		$this->load->view('Templates/header',$data);
		$this->load->view('Templates/topbar',$data);
		$this->load->view('Templates/sidebar',$data);
		$this->load->view('Admin/dashboard',$data);
		$this->load->view('Templates/footer',$data);
	}

	public function viewAdd_barang()
	{
		$data['admin'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = 'Dashboard';

		$this->load->view('Templates/header',$data);
		$this->load->view('Templates/topbar',$data);
		$this->load->view('Templates/sidebar',$data);
		$this->load->view('Admin/add_barang',$data);
		$this->load->view('Templates/footer',$data);
	}

	public function makanan()
	{
		$data['admin'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = 'Dashboard';

		$this->load->view('Templates/header',$data);
		$this->load->view('Templates/topbar',$data);
		$this->load->view('Templates/sidebar',$data);
		$this->load->view('Category/makanan',$data);
		$this->load->view('Templates/footer',$data);
	}

	public function obat()
	{
		$data['admin'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = 'Dashboard';

		$this->load->view('Templates/header',$data);
		$this->load->view('Templates/topbar',$data);
		$this->load->view('Templates/sidebar',$data);
		$this->load->view('Category/obat',$data);
		$this->load->view('Templates/footer',$data);
	}

	public function minuman()
	{
		$data['admin'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = 'Dashboard';

		$this->load->view('Templates/header',$data);
		$this->load->view('Templates/topbar',$data);
		$this->load->view('Templates/sidebar',$data);
		$this->load->view('Category/minuman',$data);
		$this->load->view('Templates/footer',$data);
	}

	public function sembako()
	{
		$data['admin'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = 'Dashboard';

		$this->load->view('Templates/header',$data);
		$this->load->view('Templates/topbar',$data);
		$this->load->view('Templates/sidebar',$data);
		$this->load->view('Category/sembako',$data);
		$this->load->view('Templates/footer',$data);
	}

	public function perabot()
	{
		$data['admin'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = 'Dashboard';

		$this->load->view('Templates/header',$data);
		$this->load->view('Templates/topbar',$data);
		$this->load->view('Templates/sidebar',$data);
		$this->load->view('Category/perabot',$data);
		$this->load->view('Templates/footer',$data);
	}

	public function kebersihan()
	{
		$data['admin'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = 'Dashboard';

		$this->load->view('Templates/header',$data);
		$this->load->view('Templates/topbar',$data);
		$this->load->view('Templates/sidebar',$data);
		$this->load->view('Category/perabot',$data);
		$this->load->view('Templates/footer',$data);
	}

	public function addBarang()
	{
		
		$this->load->helper('file', 'form');

		$config['upload_path']          =  './assets/images/';
		$config['allowed_types']        = 'jpg|png|jpeg';
		$config['max_size']             = 10000;

		$this->load->library('upload', $config);

		$this->upload->initialize($config);

		$this->upload->do_upload('images');
		$upload_foto = $this->upload->data('file_name');

		$add_files = [
			'nama_barang' => htmlspecialchars($this->input->post('nama_barang', true)),
			'harga_barang' => htmlspecialchars($this->input->post('harga_barang', true)),
			'tipe_barang' => htmlspecialchars($this->input->post('tipe_barang', true)),
			'gambar_barang' => $upload_foto,
		];
		$this->db->insert('add_barang', $add_files);
		$this->session->set_flashdata('file_update', '<div class="alert alert-success" role="alert"> Data berhasil ditambahkan! </div>');
		redirect('Admin/viewAdd_barang');
	}

	public function daftarBarang()
	{
		$data['title'] = 'Dashboard';
		
		$data['admin'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['produk'] = $this->db->get('add_barang')->result_array();

		

		$this->load->view('Templates/header',$data);
		$this->load->view('Templates/topbar',$data);
		$this->load->view('Templates/sidebar',$data);
		$this->load->view('Admin/daftar_barang',$data);
		$this->load->view('Templates/footer',$data);
	}

	public function searchProduk() {
		$data['admin'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['produk'] = $this->db->get('add_barang')->result_array();

		$keyword = $this->input->post('keyword');
		$data['search'] = $this->M_Barang->get_keyword($keyword);

		$this->load->view('Templates/header',$data);
		$this->load->view('Templates/topbar',$data);
		$this->load->view('Templates/sidebar',$data);
		$this->load->view('Admin/daftar_barang',$data);
		$this->load->view('Templates/footer',$data);
    }
}
