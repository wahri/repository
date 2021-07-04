<?php

class Public_home_model extends CI_Model
{
    function __construct()
    {
		parent::__construct();
         //$this->db2 = $this->load->database('faktariau', TRUE);
    }

    //protected $table = 'my_image';
	
	//Ambil data
	
    public function get_menu($where = null, $table)
    {
        if ($where != null) {
            $this->db->where($where);
        }			
		return $this->db->get($table);
    }
	
	public function get($where = null, $table)
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
	
	public function get_cari($where = null, $cari= null, $limit = null, $offset = null, $order = null, $table)
    {
        if ($where != null) {
            $this->db->where($where);
        }
		if ($cari != null) {
            $this->db->like('judul_berita',$cari);
        }
		if ($order != null) {
            $this->db->order_by($order[0], $order[1]);
        }
        return $this->db->get($table, $limit, $offset);
    }
	
	public function get_one_list($where = null, $limit = null, $order = null, $table)
    {
        if ($where != null) {
            $this->db->where($where);
        }
		if ($order != null) {
            $this->db->order_by($order[0], $order[1]);
        }
        return $this->db->get($table, $where, $limit);
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
    function count_where($where = null, $table)
    {
        if ($where != null) {
            $this->db->where($where);
        }
        return $this->db->count_all_results($table);
    }
	
	public function get_list_member($where = null, $limit = null, $offset = null, $order = null)
    {
		$this->db->select('users.id, users.first_name, users.last_name,  users.company, users.phone, users.username, users.email, users.active, groups.name');
		$this->db->join('users_groups', 'users_groups.user_id = users.id');
		$this->db->join('groups', 'groups.id = users_groups.group_id');
		$this->db->from('users');
        if ($where != null) {
            $this->db->where($where);
        }			
        if ($order != null) {
            $this->db->order_by($order[0], $order[1]);
        }
		$this->db->limit($limit, $offset);
        return $this->db->get();
    }

    public function search_count($where = null, $search= null, $like= null, $table)
    {
        
        if ($where != null) {
            $this->db->where($where);
        }   
        if ($search != null) {
            foreach ($search as $key => $value) {
                $this->db->like($like, $value);
            }
        }           
        
        return $this->db->count_all_results($table);
    }

    public function search($where = null, $search= null, $like= null, $limit = null, $offset = null, $order = null, $table)
    {
        
        if ($where != null) {
            $this->db->where($where);
        }   
        if ($search != null) {
            foreach ($search as $key => $value) {
                $this->db->like($like, $value);
            }
        }           
        if ($order != null) {
            $this->db->order_by($order[0], $order[1]);
        }
        $this->db->limit($limit, $offset);
        return $this->db->get($table);
    }
	
}
