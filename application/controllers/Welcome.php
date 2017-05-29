<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$query = $this->modelwelcome->read_db();

		$value = array(
			'result' => array(
				'data' => $query
			),
			'views' => 'phone'
		);
		$this->load->view('phone');
	}
}
