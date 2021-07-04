<?php

class Admin_skripsi_model extends CI_Model
{
    function __construct()
    {

    }

    protected $table = 'skripsi';

    public function get($where = null)
    {
        return $this->db->get_where($this->table, $where);
    }
	
	public function get_table($where = null, $table)
    {
        if ($where != null) {
            $this->db->where($where);
        }			
		return $this->db->get($table);
    }
	
	public function get_list($where = null, $limit = null, $offset = null, $order = null, $table)
    {
        if ($where != null) {
            $this->db->where($where);
        }
		if ($order != null) {
            $this->db->order_by($order[0], $order[1]);
        }
        return $this->db->get($table, $limit, $offset);
    }
	
	public function get_search($search = null, $where = null, $limit = null, $offset = null, $order = null, $table)
    {
        if ($search != null) {
            $this->db->like($search);
        }
		if ($where != null) {
            $this->db->where($where);
        }
		if ($order != null) {
            $this->db->order_by($order[0], $order[1]);
        }
        return $this->db->get($table, $limit, $offset);
    }
	
    //Tambah Data
    function insert($data = null)
    {
        return $this->db->insert($this->table, $data);
    }
	
	//Tambah Data table
    function insert_table($data = null, $table)
    {
        return $this->db->insert($table, $data);
    }

    //Update Data
    function update($where, $data)
    {
        $this->db->where($where);
        return $this->db->update($this->table, $data);
    }
	
	//Update Data Table
    function update_table($where, $data, $table)
    {
        $this->db->where($where);
        return $this->db->update($table, $data);
    }

    //Delete Data
    function delete($where)
    {
        $this->db->where($where);
        return $this->db->delete($this->table);
    }
	
	//Hitung semua row
    function count_all()
    {
        return $this->db->count_all_results($this->table);
    }
	
	//Hitung dengan where
    function count_where($where = null)
    {
        if ($where != null) {
            $this->db->where($where);
        }
        return $this->db->count_all_results($this->table);
    }

}
