<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pendaftaran extends CI_Controller
{


	public function __construct() //fungsi yg dijalakan dicontroiler
	{
		parent::__construct();
		$this->load->model('pendaftaran_model');
		$this->load->database();


		//Do your magic here
	}
    public function index()
	{
		$data['title'] = 'Pendaftaran';
		$data['pendaftaran'] = $this->pendaftaran_model->get_data();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('pendaftaran', $data);
		$this->load->view('templates/footer');
	}
}