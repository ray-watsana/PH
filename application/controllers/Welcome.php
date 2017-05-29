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
	public function insertform()
	{
		$pr = $this->modelwelcome->read_phonebrand();
		//$this->load->view('insertform');
		$value = array(
			'result' => array(
				'pr' => $pr
				//'data' => $query
			),
			'views' => 'insertform'
		);
		$this->load->view('insertform',$value['result']);
		//$this->loadpage($value);
	}
	public function insert()
	{
		$input = $this->input->post();
		$this->modelwelcome->insert($input);
		redirect('welcome');
		//print_r($value);

		);
		$this->loadpage($value);
	}
}
