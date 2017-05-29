<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class modelwelcome extends CI_Model {


public function read_db()
{
$this->db->join('network','phonebrand.n_id = network.n_id','left');
$db = $this->db->get('phonebrand')->result_array();
return $db;
}
public function del($p_id)
{
	$this->db
	->where('p_id',$p_id)
	->delete('phonebrand');
}
public function read_phonebrand()
{
	$db = $this->db
	->get('phonebrand')
	->result_array();
	return $db;
}

public function insert($input)
{
 $this->db->insert('phonebrand',$input);
}
public function read_one($input)
{
	$query = $this->db
	->where('p_id',$input)
	->get('phonebrand')
	->result_array();
	return $query;
}
public function update($input)
{
 $this->db
 ->where('p_id',$input['p_id'])
 ->update('phonebrand',$input);
}
}
