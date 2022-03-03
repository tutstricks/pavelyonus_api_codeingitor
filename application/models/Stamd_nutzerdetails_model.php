<?php

/**
 * This is for api keys table
 */
class Stamd_nutzerdetails_model extends CI_Model
{
	protected $table_name = "stamd_nutzerdetails";
	protected $id = "nutzerdetails_id";
	
	function __construct()
	{
		parent::__construct();
	}

	public function get()
	{
		return $this->db->get($this->table_name);
	}

	public function get_single($id)
	{
		$this->db->where($this->id,$id);
		return $this->db->get($this->table_name);
	}

	public function insert($data)
	{
		return $this->db->insert($this->table_name, $data);
	}

	public function delete($id)
	{
		$this->db->where($this->id,$id);
		return $this->db->delete($this->table_name);
	}

	public function update($data, $id)
	{
		$this->db->where($this->id,$id);
		return $this->db->update($this->table_name, $data);
	}





}