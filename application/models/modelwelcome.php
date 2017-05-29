<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class modelwelcome extends CI_Model {


public function read_db()
{
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
