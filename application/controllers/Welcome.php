<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function loadpage($value){
		$this->load->view('template/front/header');
		$this->load->view('template/front/sidebar');
		$this->load->view($value['view'],$value['result']);
		$this->load->view('template/front/footer');
	}

	public function index()
	{
		$query = $this->modelwelcome->read_db();

		$value = array(
			'result' => array(
				'data' => $query
			),
			'view' => 'phone'
		);
		$this->loadpage($value);
	}
}
