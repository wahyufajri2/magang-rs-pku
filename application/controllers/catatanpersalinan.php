<?php
defined('BASEPATH') or exit('No direct script access allowed');

class catatanpersalinan extends CI_Controller
{


	public function __construct() //fungsi yg dijalakan dicontroiler
	{
		parent::__construct();
		$this->load->model('catatanpersalinan_model');
		$this->load->database();


		//Do your magic here
	}

	public function index()
	{
		$data['title'] = 'catatanpersalinan';
		$data['catatanpersalinan'] = $this->catatanpersalinan_model->get_data();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('catatanpersalinan', $data);
		$this->load->view('templates/footer');
	}

	public function tambah()
	{
		$data['title'] = 'Tambah Pasien';

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('tambah_pasien');
		$this->load->view('templates/footer');
	}

	public function tambah_aksi()
	{
		/*$this-> _rules();
		
		if ($this->form_validation->run() == FALSE){  //jika salah dikembalikan tambah()
			$this->tambah();
		} else { //jika benar kriteria rules maka lanjut */
			$data = array(
				'no_antrian' => $no_antrian,
				'no_rm' => $this->input->post('no_rm'),
				'status' => $this->input->post('status'),
				'periksa_tgl' => $this->input->post('periksa_tgl'),
				'dokter_id' => $this->input->post('dokter_id'),
				'date_created' => $this->input->post('data_created'),
			);
		//}
		$this->catatanpersalinan_model->insert_data($data, 'tb_kunjungan');
		
		redirect('index.php/pasien');
	}
	
	public function edit($id_pasien)
	
	{
		// $this ->_rules();
		
		// if ($this->form_validation->run() == FALSE){
		// 	$this->index();
		// }else{
			$data = array(
				'id_pasien' => $id_pasien,
				'no_mr' => $this->input->post('no_mr'),
				'nama_pasien' => $this->input->post('nama_pasien'),
				'tgl_lahir' => $this->input->post('tgl_lahir'),
			);
			$this -> catatanpersalinan_model->update_data($data, 'tb_pasien');
			redirect('index.php/pasien');
		}
		
	
// 	public function _rules()
// 	{
// 		$this->form_validation->set_rules('no_mr', 'No mr', 'required', array(
// 			'required' => '$s Harus disi!' 
// 		));
// 		$this->form_validation->set_rules('nama_pasien', 'Nama Pasien', 'required', array(
// 			'required' => '$s Harus disi!' 
// 		));
// 		$this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required', array(
// 			'required' => '$s Harus disi!' 
// 		));
		
// 	}
// }
public function delete($id)
{
	$where = array('id_pasien' => $id);

	$this -> catatanpersalinan_model->delete($where, 'tb_pasien');
			redirect('index.php/pasien');
}
}
