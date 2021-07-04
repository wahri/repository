<?php
class Costume
{
    public function __construct()
    {
        $this->CI =& get_instance();
    }

    /*Ambil data child category*/
    public function get_child_kategory($id_kategory)
    {
        $this->CI->load->model('admin_kategori_model');
        $child = $this->CI->admin_kategori_model->get(array('induk' => $id_kategory))->result();
        return $child;
    }
	
	/*Ambil data foto*/
    public function get_foto_user($id_user)
    {
        $this->CI->load->model('public_home_model');
        $child = $this->CI->public_home_model->get(array('user_id'=>$id_user), 'my_user_profile')->row()->avatar;
        return $child;
    }
	
	/*cek data foto*/
    public function cek_foto_user($id_user)
    {
        $this->CI->load->model('public_home_model');
        $child = $this->CI->public_home_model->get(array('user_id'=>$id_user), 'my_user_profile')->num_rows();
        return $child;
    }
	
	public function get_full_name_user($id_user)
    {
        $this->CI->load->model('public_home_model');
        $child = $this->CI->public_home_model->get(array('id'=>$id_user), 'users')->row()->first_name;
        return $child;
    }
	
	public function get_user_profile($id_user)
    {
        $this->CI->load->model('public_home_model');
        $child = $this->CI->public_home_model->get(array('user_id'=>$id_user), 'my_user_profile')->result();
        return $child;
    }
	
	public function get_base_user($id_user)
    {
        $this->CI->load->model('public_home_model');
        $child = $this->CI->public_home_model->get(array('id'=>$id_user), 'users')->result();
        return $child;
    }
	
	public function get_name_dosen($id_user)
    {
        $this->CI->load->model('public_home_model');
        $child = $this->CI->public_home_model->get(array('id'=>$id_user), 'dosen')->row();
        return $child;
    }
	
	public function get_name_kosentrasi($id)
    {
        $this->CI->load->model('public_home_model');
        $child = $this->CI->public_home_model->get(array('id'=>$id), 'kosentrasi')->row()->nama;
        return $child;
    }
	
	/*Ambil data child user*/
    public function get_child_user($id_user)
    {
        $this->CI->load->model('admin_user_model');
        $child = $this->CI->admin_user_model->get_list(array('users_groups.parent_id' => $id_user))->result();
        return $child;
    }
	
	/*Ambil data child user*/
    public function get_profile_user($id_user)
    {
        $this->CI->load->model('admin_user_model');
        $child = $this->CI->admin_user_model->get_table(array('user_id'=> $id_user), 'my_user_profile')->result();
        return $child;
    }
	
	/*Ambil data child menu*/
    public function get_child_menu($id_menu)
    {
        $this->CI->load->model('admin_menu_model');
        $child = $this->CI->admin_menu_model->get(array('parent_menu' => $id_menu), null)->result();
        return $child;
    }
	
	/*Ambil data child menu*/
    public function get_child_menu_array($id_menu)
    {
        $this->CI->load->model('admin_menu_model');
        $child = $this->CI->admin_menu_model->get(array('parent_menu' => $id_menu), null)->result_array();
        return $child;
    }
	
	 /*Ambil data tubnail*/
    public function get_thumbnail($id_image,$size)
    {
        $this->CI->load->model('all_image_model');
        return $this->CI->all_image_model->get(array('parent' => $id_image, 'size' => $size));
    }
	
	 /*Ambil data original image*/
    public function get_original($id_image,$size)
    {
        $this->CI->load->model('all_image_model');
        return $this->CI->all_image_model->get(array('id' => $id_image, 'size' => $size));
    }
	
	 /*Ambil data*/
    public function get_file($id_file)
    {
        $this->CI->load->model('public_home_model');
        $child = $this->CI->public_home_model->get(array('id'=>$id_file), 'my_files')->row();
        return $child;
    }
	
	
	/*Ambil data username*/
	public function get_username($id)
    {
        $this->CI->load->model('admin_user_model');
		$user_name = $this->CI->admin_user_model->get(array('id' => $id))->row()->username;
        if (!empty($user_name))
        {
            return $user_name;
        }
        return null;
    }
	
	/*Ambil data kategori berita*/
	public function get_kategori_berita($id)
    {
        $this->CI->load->model('admin_berita_model');
		$child = $this->CI->admin_berita_model->get_berita_categori(array('my_berita_kategori.berita_id'=>$id))->result();
		return $child;
    }
	
	/*Buat gambar thumbnail*/
    public function create_image_thumbnail($data_image, $size, $id_parent, $type)
    {
        $this->CI->load->library('image_lib');

        $upload_data = $data_image;

        $last_name = $size['width'] . 'x' . $size['height'] . '.png';
        $thumb_name = $upload_data['raw_name'] . '_thumb_';
        $new_name = $upload_data['raw_name'].'_'.$last_name;
        $image_config["image_library"] = "gd2";
        $image_config["source_image"] = $upload_data["full_path"];
        $image_config['create_thumb'] = false;
        $image_config['maintain_ratio'] = true;
        $image_config['new_image'] = $upload_data["file_path"] . $new_name;
        $image_config['quality'] = "100%";
        $image_config['width'] = $size['width'];
        $image_config['height'] = $size['height'];
        $dim = (intval($upload_data["image_width"]) / intval($upload_data["image_height"])) - ($image_config['width'] / $image_config['height']);
        $image_config['master_dim'] = ($dim > 0) ? "height" : "width";

        $this->CI->image_lib->initialize($image_config);

        if (!$this->CI->image_lib->resize()) { //Resize image
            echo $this->CI->image_lib->display_errors();
        }

        $image_config['image_library'] = 'gd2';
        $image_config['source_image'] = $upload_data["file_path"] . $new_name;
        $image_config['new_image'] = $upload_data["file_path"] . $new_name;
        $image_config['quality'] = "100%";
        $image_config['maintain_ratio'] = FALSE;
        $image_config['width'] = $size['width'];
        $image_config['height'] = $size['height'];
        $image_config['x_axis'] = '0';
        $image_config['y_axis'] = '0';

        $this->CI->image_lib->clear();
        $this->CI->image_lib->initialize($image_config);

        if (!$this->CI->image_lib->crop()) {
            echo $this->CI->image_lib->display_errors();
        }

        /*Masukkan data kedalam database*/
        $this->CI->load->model('all_image_model');
        if ($type != null) {
            $url_image = 'upload/images/' . $new_name;
        } else {
           $url_image = 'upload/images/' . $new_name;
        }
        $data = array(
            'title' => str_replace('_', ' ', $thumb_name),
            'url' => $url_image,
            'size' => $size['width'] . 'x' . $size['height'],
            'image_name' => $new_name,
			'jenis' => $type,
			'parent' => $id_parent
        );
        $this->CI->all_image_model->insert($data);
    }
	
	public function clean($string) {
	   $string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.
	   $string = strtolower($string);
	   return preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
	}
	
	public function clean_url($string) {
	   $string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.
	   $string = strtolower($string);
	   return preg_replace('/[^A-Za-z0-9-]/', '', $string); // Removes special chars.
	}
	
	public function searchArrayKeyVal($sKey, $id, $array) {
	   foreach ($array as $key => $val) {
		   if ($val[$sKey] == $id) {
			   return $key;
		   }
	   }
	   return false;
	}

	
}

    