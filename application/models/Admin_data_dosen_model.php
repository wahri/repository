<?php

class Admin_data_dosen_model extends CI_Model
{
    function __construct()
    {

    }

    protected $table = 'dosen';
	
	public function get_list($where = null, $limit = null, $offset = null, $order = null)
    {
        if ($order != null) {
            $this->db->order_by($order[0], $order[1]);
        }
        return $this->db->get_where($this->table, $where, $limit, $offset);
    }

    public function get($where = null)
    {
        return $this->db->get_where($this->table, $where);
    }
	
	public function get_table($table, $where = null)
    {
        return $this->db->get_where($table, $where);
    }
	
    function insert($data = null)
    {
        return $this->db->insert($this->table, $data);
    }
    
	function update($where, $data)
    {
        $this->db->where($where);
        return $this->db->update($this->table, $data);
    }

    function delete($where)
    {
        $this->db->where($where);
        return $this->db->delete($this->table);
    }
	
    function count_all()
    {
        return $this->db->count_all_results($this->table);
    }
	
    function count_where($where = null)
    {
        $this->db->where($where);
        return $this->db->count_all_results($this->table);
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

}
