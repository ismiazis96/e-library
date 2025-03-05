<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Buku extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		//date_default_timezone_set('Asia/Jakarta'); // Atur timezone di sini
		// $this->load->model('Buku_model');
	}

	public function index()
	{

		$data['title'] = 'Home Perpustakaan';
		$tmp['content'] = $this->load->view('global/home', $data, TRUE);
		$this->load->view('global/layout', $tmp);
	}


	public function profile()
	{

		$data['title'] = 'Profile Sekolah';
		$tmp['content'] = $this->load->view('global/profile', $data, TRUE);
		$this->load->view('global/layout', $tmp);
	}

	//menampilkan daftar buku
	public function list_buku($category_id = null, $rack_id = null)
	{
		$data['title'] = 'Daftar buku';
		$category_id = $this->input->get('category');
		$rack_id = $this->input->get('rack');

		/*data yang ditampilkan*/
		$data['data_buku'] = $this->Buku_model->get_filtered_books($category_id, $rack_id);
		$data['selected_category'] = $category_id;
		$data['selected_rack'] = $rack_id;

		// $data['data_buku'] = $this->Buku_model->getAllData("tb_buku");
		$data['data_kategori'] = $this->Buku_model->getAllData("tb_kategori");
		$data['data_penerbit'] = $this->Buku_model->getAllData("tb_penerbit");
		$data['data_pengarang'] = $this->Buku_model->getAllData("tb_pengarang");
		$data['data_rak'] = $this->Buku_model->getAllData("tb_rak");
		$data['model'] = $this->Buku_model;

		/*masukan data kedalam view */
		//$data['js']=$this->load->view('admin/buku/js');
		$tmp['content'] = $this->load->view('global/R_buku', $data, TRUE);
		$this->load->view('global/layout', $tmp);
	}

	public function list_buku_all($category_id = null, $rack_id = null)
	{
		$data['title'] = 'Daftar buku';
		$category_id = $this->input->get('category');
		$rack_id = $this->input->get('rack');

		/*data yang ditampilkan*/
		$data['data_buku'] = $this->Buku_model->get_filtered_books($category_id, $rack_id);
		$data['selected_category'] = $category_id;
		$data['selected_rack'] = $rack_id;

		// $data['data_buku'] = $this->Buku_model->getAllData("tb_buku");
		// $data['data_kategori'] = $this->Buku_model->getAllData("tb_kategori");
		$data['data_kategori'] = $this->db->order_by('kategori', 'ASC')->get('tb_kategori');
		$data['data_penerbit'] = $this->Buku_model->getAllData("tb_penerbit");
		$data['data_pengarang'] = $this->Buku_model->getAllData("tb_pengarang");
		$data['data_rak'] = $this->Buku_model->getAllData("tb_rak");
		$data['model'] = $this->Buku_model;

		/*masukan data kedalam view */
		//$data['js']=$this->load->view('admin/buku/js');
		$tmp['content'] = $this->load->view('global/v_home', $data, TRUE);
		$this->load->view('global/layout', $tmp);
	}

	public function list_buku_ajax()
	{
		$data['title'] = 'Daftar buku';

		// $data['data_buku'] = $this->Buku_model->getAllData("tb_buku");
		$data['data_kategori'] = $this->Buku_model->getAllData("tb_kategori");
		$data['data_penerbit'] = $this->Buku_model->getAllData("tb_penerbit");
		$data['data_pengarang'] = $this->Buku_model->getAllData("tb_pengarang");
		$data['data_rak'] = $this->Buku_model->getAllData("tb_rak");
		$data['model'] = $this->Buku_model;

		/*masukan data kedalam view */
		//$data['js']=$this->load->view('admin/buku/js');
		$tmp['content'] = $this->load->view('global/v_home_ajax', $data, TRUE);
		$this->load->view('global/layout', $tmp);
	}

	public function filter()
	{
		$rack_id = $this->input->post('rack');
		$category_id = $this->input->post('category');

		$data = $this->Buku_model->get_filtered_books($category_id, $rack_id);
		echo json_encode($data);
	}



	//menampilkan daftar detail stock buku
	public function detail_stok()
	{

		$id_buku = $this->input->get('id_buku', TRUE);
		/*layout*/
		$data['title'] = 'Daftar Detail Stock Buku';
		$data['pointer'] = "buku/buku/";
		$data['classicon'] = "fa fa-book";
		$data['main_bread'] = "Data Buku";
		$data['sub_bread'] = "Detail Stock Buku";
		$data['desc'] = "Data Detail Stock, Menampilkan Detail Stock Buku Perpustakaan";

		/*data yang ditampilkan*/
		$data['data_stok_buku'] = $this->Buku_model->get_detail("tb_detail_buku", 'id_buku', $id_buku);
		$data['data_kategori'] = $this->Buku_model->getAllData("tb_kategori");
		$data['data_penerbit'] = $this->Buku_model->getAllData("tb_penerbit");
		$data['data_pengarang'] = $this->Buku_model->getAllData("tb_pengarang");
		$data['data_rak'] = $this->Buku_model->getAllData("tb_rak");
		$data['id'] = $id_buku;
		$data['error'] = "";

		/*masukan data kedalam view */
		$tmp['content'] = $this->load->view('global/R_detail_stok', $data, TRUE);
		$this->load->view('global/layout', $tmp);	//}
	}
}
