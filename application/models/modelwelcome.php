<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class modelwelcome extends CI_Model {


public function read_db()
{
$this->db->join('phonebrand','phonebrand.p_id = network.n_id','left');
$db = $this->db->get('phonebrand')->result_array();
return $db;
}
public function update($input)
{
  $this->db
  ->where('p_id',$input['p_id'])
  ->update('phonebrand',$input);
}
}
