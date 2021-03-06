<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function loadpage($value){
		$this->load->view('template/front/header');
		$this->load->view('template/front/sidebar');
		$this->load->view($value['views'],$value['result']);
		$this->load->view('template/front/footer');
	}

	public function index()
	{
		$query = $this->modelwelcome->read_db();

		$value = array(
			'result' => array(
				'data' => $query
			),
			'views' => 'phone'
		);
		$this->loadpage($value);
	}
	public function insertform()
	{
		$network = $this->modelwelcome->read_network();
		//$this->load->views('insertform');
		$value = array(
			'result' => array(
				'network' => $network
				//'data' => $query
			),
			'views' => 'insertform'
		);
		//$this->load->views('insertform',$value['result']);
		$this->loadpage($value);
	}
	public function updateform()
	{
		$network = $this->modelwelcome->read_network();
		$p_id = $this->uri->segment(3);
		$query = $this->modelwelcome->read_one($p_id);
		$value = array(
			'result' => array(
				'data' => $query,
				'network' => $network
			),
			'views' => 'updateform'
		);
		$this->loadpage($value);
	}
	public function del()
	{
		$p_id = $this->uri->segment(3);
		$this->modelwelcome->del($p_id);
		redirect('welcome');
	}
	public function insert()
	{
		$input = $this->input->post();
		$this->modelwelcome->insert($input);
		redirect('welcome');

		$this->loadpage($value);
	}
	public function update()
	{
		$input = $this->input->post();
		$this->modelwelcome->update($input);
		redirect('welcome');
		//print_r($value);
	}
}
