<?php

class Admin_user_model extends CI_Model
{
    function __construct()
    {

    }

    protected $table = 'users';
	
	public function get_list($where = null, $limit = null, $offset = null, $order = null)
    {
		$this->db->select('users.id, users.first_name, users.last_name,  users.company, users.phone, users.username, users.email, users.active, groups.name');
		$this->db->join('users_groups', 'users_groups.user_id = users.id');
		$this->db->join('groups', 'groups.id = users_groups.group_id');
		$this->db->from($this->table);
        if ($where != null) {
            $this->db->where($where);
        }			
        if ($order != null) {
            $this->db->order_by($order[0], $order[1]);
        }
		$this->db->limit($limit, $offset);
        return $this->db->get();
    }
	
	public function get_user($where = null)
    {
		$this->db->select('users.id, users.first_name, users.last_name,  users.company, users.phone, users.username, users.email');
        $this->db->join('tabel_karyawan', 'tabel_karyawan.user_id = users.id');
		$this->db->join('tabel_company', 'tabel_company.id = tabel_karyawan.company_id');
		
		$this->db->join('users_groups', 'users_groups.user_id = users.id');
		$this->db->join('groups', 'groups.id = users_groups.group_id');
		$this->db->from($this->table);
        if ($where != null) {
            $this->db->where($where);
        }			
        if ($order != null) {
            $this->db->order_by($order[0], $order[1]);
        }
        return $this->db->get();
    }

    public function get($where = null)
    {
        return $this->db->get_where($this->table, $where);
    }
	
	public function get_table($where = null, $table)
    {
        return $this->db->get_where($table, $where);
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
	
	//Delete Data
    function delete_table($where = null,$table)
    {
        $this->db->where($where);
        return $this->db->delete($table);
    }
	
	//Hitung semua row
    function count_all()
    {
        return $this->db->count_all_results($this->table);
    }
	
	//Hitung dengan where
    function count_where($where = null)
    {
        $this->db->where($where);
        return $this->db->count_all_results($this->table);
    }
	
	//Untuk mencari
    function search($search = null, $limit = null, $offset = null, $where = null, $order = null)
    {
        $this->db->select('users.id, users.first_name, users.last_name,  users.company, users.phone, users.username, users.email, users.active, groups.name');
		$this->db->join('users_groups', 'users_groups.user_id = users.id');
		$this->db->join('groups', 'groups.id = users_groups.group_id');
		$this->db->from($this->table);
		if ($search != null) {
            $this->db->like($search);
        }
        if ($where != null) {
            $this->db->where($where);
        }
		if ($order != null) {
            $this->db->order_by($order[0], $order[1]);
        }
        $this->db->limit($limit, $offset);
        return $this->db->get();

    }

}
