<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class modelwelcome extends CI_Model {


public function read_db()
{
$db = $this->db->get('member')->result_array();
return $db;
}
public function del($mem_id)
{
$this->db
->where('mem_id',$mem_id)
->delete('member');
}
public function insert($input)
{
$this->db->insert('member',$input);
}

public function read_one($input)
{
$query = $this->db
->where('mem_id',$input)
->get('member')
->result_array();
return $query;
}
public function update($input)
{
$this->db
->where('mem_id',$input['mem_id'])
->update('member',$input);
}

}
