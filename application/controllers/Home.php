<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends Public_Controller
{
	protected $table_row = 3;
    function __construct()
    {
        parent::__construct();
		$this->load->library('costume');
		$this->load->library('pagination');
		$this->load->helper(array('url'));
		$this->load->helper('fungsidate');
        $this->load->model('public_home_model');
		$this->load->library('user_agent');
		$this->load->library('session');
    }

    public function index()
    {
    	$url = $this->uri->segment(1);
    	if($url == 'skripsi'){
			$slug = $this->uri->segment(2);
			$page = $this->public_home_model->get(array('id'=>$slug, 'status'=>3), 'skripsi');
			if($page->num_rows() > 0){
				$page_list = $page->row();
				$this->data['title'] 					= $page_list->judul;
				$this->data['abstrak'] 					= $page_list->abstrak;
				$this->data['penulis'] 					= $page_list->penulis;
				$this->data['tanggal'] 					= tgl_indo($page_list->tanggal_seminar);
				$this->data['pustaka'] 					= $page_list->daftar_pustaka;
				$this->data['cover'] 					= $page_list->cover;
				$this->data['bab_1'] 					= $page_list->bab_1;
				$this->data['jurnal'] 					= $page_list->jurnal;
				$this->load->view('public/skripsi', $this->data);
			}else{
				redirect('/', 'refresh');
			}
		}else if($url == 'kerja_praktek'){
			$slug = $this->uri->segment(2);
			$page = $this->public_home_model->get(array('id'=>$slug, 'status'=>3), 'kerja_praktek');
			if($page->num_rows() > 0){
				$page_list = $page->row();
				$this->data['title'] 					= $page_list->judul;
				$this->data['abstrak'] 					= $page_list->abstrak;
				$this->data['penulis'] 					= $page_list->penulis;
				$this->data['tanggal'] 					= tgl_indo($page_list->tanggal);
				$this->data['pustaka'] 					= $page_list->daftar_pustaka;
				$this->data['cover'] 					= $page_list->cover;
				$this->data['bab_1'] 					= $page_list->bab_1;
				//$this->data['jurnal'] 					= $page_list->jurnal;
				$this->load->view('public/kerja_praktek', $this->data);
			}else{
				redirect('/', 'refresh');
			}
		}else if($url == 'about'){
			$this->data['title'] 					= 'Tentang Kami';
			$this->load->view('public/abaut', $this->data);
			
		}else if($url == 'contact'){
			$this->data['title'] 					= 'Hubungi Kami';
			$this->load->view('public/contact', $this->data);
			
		}else{
			$this->data['title'] 					= 'UNIVERSITAS MUHAMMADIYAH RIAU';
			$this->data['banner'] 					= $this->public_home_model->get_list(null, 5, 0, array('id','desc'), 'banner')->result();
    		$this->load->view('public/home', $this->data);
		}
    	
    }


    public function search()
    {
    	
    	if (isset($_POST['cari'])) {
    		$string 					= $this->input->post('search');
    		$paper_select 				= $this->input->post('paper');
			$by_select					= $this->input->post('by_select');
			$this->session->set_userdata(array("string"=> $string , "paper_select"=> $paper_select, "by_select" => $by_select));
    	}else{
    		if($this->session->userdata('string') != NULL){
    			$string 				= $this->session->userdata('string');
    			$paper_select 			= $this->session->userdata('paper_select');
				$by_select				= $this->session->userdata('by_select');
    		}else{
    			redirect('/', 'refresh');
    		}
    	}
    	

    	$config['per_page'] 			= 10;
		$pagging 						= ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

		//memfilter pencarian dari character special
    	$stringin = str_replace(array('[\', \']'), '', $string);
    	$stringin = preg_replace('/\[.*\]/U', '', $stringin);
    	$stringin = preg_replace('/&(amp;)?#?[a-z0-9]+;/i', '-', $stringin);
    	$stringin = htmlentities($stringin, ENT_COMPAT, 'utf-8');
    	$stringin = preg_replace('/&([a-z])(acute|uml|circ|grave|ring|cedil|slash|tilde|caron|lig|quot|rsquo);/i', '\\1', $stringin );
    	$stringin = preg_replace(array('/[^a-z0-9]/i', '/[-]+/') , '-', $stringin);
    	
    	//memecah hasil filter menjadi array untuk spesifik pencarian data
    	$special_chr =  strtolower(trim($stringin, '-'));
		$arr = explode('-', $special_chr); //or preg_split
		//print_r($arr);

		
		$this->data['paper_result']			= $this->public_home_model->search(array('status'=>3), $arr, $by_select, $config['per_page'], 0, $order = null, $paper_select)->result();
		$this->data['paper_parent']			= $arr;

		$jumlah_data 						= $this->public_home_model->search_count(array('status'=>3), $arr, $by_select, $paper_select);
		
		$config['base_url'] 				= site_url('home/search/');
		$config['full_tag_open'] 			= '<ul class="pagination justify-content-center">';
		$config['full_tag_close'] 			= '</ul>';
		$config['prev_link'] 				= '&lt;';
		$config['prev_tag_open'] 			= '<li class="page-item"><span class="page-link">';
		$config['prev_tag_close'] 			= '</span></li>';
		$config['next_link'] 				= '&gt;';
		$config['next_tag_open'] 			= '<li class="page-item"><span class="page-link">';
		$config['next_tag_close'] 			= '</span></li>';
		$config['cur_tag_open'] 			= '<li class="page-item active"><a class="page-link" href="#">';
		$config['cur_tag_close'] 			= '</a></li>';
		$config['num_tag_open'] 			= '<li class="page-item"><span class="page-link">';
		$config['num_tag_close'] 			= '</span></a></li>';
		$config['first_tag_open'] 			= '<li class="page-item"><span class="page-link">';
		$config['first_tag_close'] 			= '</span></li>';
		$config['last_tag_open'] 			= '<li class="page-item"><span class="page-link">';
		$config['last_tag_close'] 			= '</span></li>';
		$config['first_link'] 				= '&lt;&lt; Previous';
		$config['last_link'] 				= 'Next &gt;&gt;';
		$config['total_rows'] 				= $jumlah_data;
		
		$this->pagination->initialize($config);	
		$start									= (int)$this->uri->segment(3) +1;
		if ($this->uri->segment(3) + $config['per_page'] > $config['total_rows']) {
			$end = $config['total_rows'];
		} else {
			$end = (int)$this->uri->segment(3) + $config['per_page'];
		}
		
		$this->data['result_count']				= "Showing ".$start." - ".$end." of ".$jumlah_data." Results";
						
		$this->data['paper_select']				= $paper_select;
		$this->data['by_select']				= $by_select;
		$this->data['search'] 					= $string;

		$this->data['title'] 					= 'search: '.$this->input->post('search');
    	$this->load->view('public/cari', $this->data);

		
    }

    


    public function search1(){
    	$pattern 		= $_POST['cari'];
		$sqlQuery		= mysql_query("select * from pasal where isi LIKE '%$pattern%'");
		$ketemu 		= false;
		$text[] 		= array();
		$arrayOutput[] 	= array();
		$x 				= 0;
		$y 				= 0;

		while($data=mysql_fetch_array($sqlQuery)){
			$text[$x] = $data;
			$x++;
		}

		$jumlah = count($text);
		echo "Jumlah = ",$jumlah;

		for($p=0; $p<$jumlah; $p++){
			$hasil = BoyerMoore($text[$p]['isi'], $pattern);
			if($hasil != -1){
				$ketemu = true;
				$arrayOutput[$y] = $text[$p];
				$y++;
			}
		}

		if($ketemu == true){
			echo "<br><br>KETEMU";
			$jumlahKetemu = count($arrayOutput);
			echo "<br>Jumlah Ketemu = ",$jumlahKetemu;
			echo "<br><br>HASIL:";
			for($q=0; $q<$jumlahKetemu;$q++){
				echo "<br>Nama Pasal = ",$arrayOutput[$q]['nama_pasal'];
				echo "<br>Ayat = ",$arrayOutput[$q]['ayat'];
				echo "<br>Isi = ",$arrayOutput[$q]['isi'];
			}
		}
		else {
			echo "<br><br>Tidak Ditemukan";
		}


    }



/**
* Returns the index of the first occurrence of the
* specified substring. If it's not found return -1.
*
* @param text The string to be scanned
* @param pattern The target string to search
* @return The start index of the substring
*/
function BoyerMoore($text, $pattern) {
$patlen = strlen($pattern);
$textlen = strlen($text);
$table = $this->makeCharTable($pattern);

for ($i=$patlen-1; $i < $textlen;) {
$t = $i;
for ($j=$patlen-1; $pattern[$j]==$text[$i]; $j--, $i--) {
if($j == 0) return $i;
}
$i = $t;
if(array_key_exists($text[$i], $table))
$i = $i + max($table[$text[$i]], 1);
else
$i += $patlen;
}
return -1;
}
function makeCharTable($string) {
$len = strlen($string);
$table = array();
for ($k=0; $k < $len; $k++) {
$table[$string[$k]] = $len - $k - 1;
}
return $table;
}
 




    function badCharHeuristic($str, $size, &$badchar)
	{
		for ($i = 0; $i < 256; $i++)
			$badchar[$i] = -1;

		for ($i = 0; $i < $size; $i++)
			$badchar[ord($str[$i])] = $i;
	}

	function SearchString($str, $pat) {
		$m = strlen($pat);
		$n = strlen($str);
		$i = 0;

		badCharHeuristic($pat, $m, $badchar);

		$s = 0;
		while ($s <= ($n - $m))
		{
			$j = $m - 1;

			while ($j >= 0 && $pat[$j] == $str[$s + $j])
				$j--;

			if ($j < 0)
			{
				$arr[$i++] = $s;
				$s += ($s + $m < $n) ? $m - $badchar[ord($str[$s + $m])] : 1;
			}
			else
				$s += max(1, $j - $badchar[ord($str[$s + $j])]);
		}

		for ($j = 0; $j < $i; $j++)
		{
			$result[$j] = $arr[$j];
		}

		return $result;
	}


    public function index_1()
    {
			$url = $this->uri->segment(1);
			$this->load->library(array('session','form_validation','ion_auth','postal','rat'));
			
			$this->data['top_menu'] 				= $this->public_home_model->get_menu(array('posisi_menu'=>4,'parent_menu'=>0), 'my_menu')->result();
			$this->data['main_menu'] 				= $this->public_home_model->get_menu(array('posisi_menu'=>2,'parent_menu'=>0), 'my_menu')->result();
			$this->data['sub_menu'] 				= $this->public_home_model->get_menu(array('posisi_menu'=>3,'parent_menu'=>0), 'my_menu')->result();
			//data sponsor
			$this->data['sponsor']					= $this->public_home_model->get_list(array('status'=>1), 6, 0, array('id','desc'), 'my_sponsor')->result();
			//data sponsor
			$this->data['commitee']					= $this->public_home_model->get_list(array('status'=>1), 20, 0, array('id','desc'), 'my_comite')->result();
			//data topik
			$this->data['topik']					= $this->public_home_model->get_list(array('induk'=>0), 1, 0, array('id','desc'), 'my_topik')->row();
			//data topik
			$this->data['important_updates']		= $this->public_home_model->get_list(null, 1, 0, array('id','desc'), 'my_important')->row();
			
			if($url == 'page')
			{
				$slug 		= $url.'/'.$this->uri->segment(2);
				$page 		= $this->public_home_model->get(array('url_page'=>$slug), "my_page");
				if($page->num_rows() > 0){
					$page_list 								= $page->row();
					$this->data['title'] 					= $page_list->judul_page;
					$this->data['image_og'] 				= base_url('upload/system/logo.png');
					$this->data['og_description'] 			= get_content_excerpt($page_list->content_page, 200);
					$this->data['berita_index'] 			= 'page';
					$this->data['url_berita'] 				= $page_list->url_page;
					$this->data['sidebar_name'] 			= "Page";
					$this->data['sidebar_description'] 		= "information page";
					
					$this->data['content'] 					= $page_list->content_page;
					$this->load->view('umri/page/index', $this->data);
				}else{
					redirect('/');
				}	
				
			}else if($url == 'berita'){
				$slug 		= $url.'/'.$this->uri->segment(2);
				$berita 	= $this->public_home_model->berita_detail(array('url_berita'=>$slug, 'status_terbit'=>'terbit'), "my_berita");
				if($berita->num_rows() > 0){
					$berita_list 							= $berita->row();
					$this->data['berita_index'] 			= 'berita';
					$this->data['lead_title'] 				= $berita_list->judul_lead_berita;
					$this->data['title'] 					= $berita_list->judul_berita;
					$this->data['sidebar_name'] 			= "News";
					$this->data['sidebar_description'] 		= "Detail News";
					if($berita_list->format_berita == 'video'){
						if($berita_list->gambar_berita > 0){
							$this->data['image_og'] 			= base_url($this->costume->get_original($berita_list->gambar_berita,'original')->row()->url);
						}else{
							$this->data['image_og'] 			= 'https://i.ytimg.com/vi/'.$berita_list->video_id.'/hqdefault.jpg';
						}
					}else if($berita_list->format_berita == 'share'){
						if($berita_list->gambar_berita > 0){
							$this->data['image_og'] 			= base_url($this->costume->get_original($berita_list->gambar_berita,'original')->row()->url);
						}else{
							$this->data['image_og'] 			= $berita_list->gambar_share;
						}
					}else{
						if($berita_list->gambar_berita > 0){
							$this->data['image_og'] 			= base_url($this->costume->get_original($berita_list->gambar_berita,'original')->row()->url);
						}else{
							$this->data['image_og'] 			= base_url('upload/system/blank_480_360.jpg');
						}
					}
					$this->data['og_description'] 			= get_content_excerpt($berita_list->isi_berita, 200);
					$this->data['format_berita'] 			= $berita_list->format_berita;
					$this->data['view_berita'] 				= $berita_list->viewer;
					$this->data['rating_berita'] 			= $berita_list->rating_vote;
					$this->data['value_rating_berita'] 		= $berita_list->rating_value;
					$this->data['tag_berita'] 				= $berita_list->tag_data;
					$this->data['share_berita'] 			= $berita_list->share;
					$this->data['like_berita'] 				= $berita_list->likers;
					$this->data['user_berita'] 				= $berita_list->first_name . $berita_list->last_name;
					$this->data['url_berita'] 				= $berita_list->url_berita;
					//add viewer count
					$real_viewer 							= $berita_list->real_viewer + 1;
					$info_viewer 							= $berita_list->viewer + 1;
					$this->public_home_model->update_table(array('id'=>$berita_list->id), array('real_viewer'=>$real_viewer), 'my_berita');
					$this->public_home_model->update_table(array('berita_id'=>$berita_list->id), array('viewer'=>$info_viewer), 'my_berita_info');
					//isi berita
					$this->data['gambar_berita'] 			= $berita_list->gambar_berita;
					$this->data['gambar_share'] 			= $berita_list->gambar_share;
					$this->data['ket_gambar'] 				= $berita_list->ket_gambar;
					$this->data['gambar'] 					= $berita_list->gambar;
					$this->data['video_id'] 				= $berita_list->video_id;
					$this->data['tanggal_berita'] 			= $berita_list->tanggal_terbit;
					$this->data['content'] 					= $berita_list->isi_berita;
					$this->data['id'] 						= $berita_list->id;
					
					$this->load->view('umri/news/index', $this->data);
				}else{
					redirect('/');
				}
			}else if($url == 'news'){
					//facebook
					$this->data['image_og'] 				= base_url('upload/system/logo.png');
					$this->data['og_description'] 			= $this->public_website_model->get(array('setting'=>'deskripsi'))->row()->value;
					
					$this->data['title'] 					= 'News Updates';
					$this->data['sidebar_name'] 			= "List News";
					$this->data['sidebar_description'] 		= "Click For Detail News";
					$this->data['berita_index'] 			= $url;
					
					//pagging
					$jumlah_data 							= $this->public_home_model->get_list(array('status_terbit'=>'terbit'), null, null, array('tanggal_terbit','desc'), 'my_berita')->num_rows();
					$config['full_tag_open'] 				= '<ul class="pagination">';
					$config['full_tag_close'] 				= '</ul>';
					$config['prev_link'] 					= '&lt;';
					$config['prev_tag_open'] 				= '<li>';
					$config['prev_tag_close'] 				= '</li>';
					$config['next_link'] 					= '&gt;';
					$config['next_tag_open'] 				= '<li>';
					$config['next_tag_close'] 				= '</li>';
					$config['cur_tag_open'] 				= '<li class="active"><a href="#">';
					$config['cur_tag_close'] 				= '</a></li>';
					$config['num_tag_open'] 				= '<li>';
					$config['num_tag_close'] 				= '</li>';
					$config['first_tag_open'] 				= '<li>';
					$config['first_tag_close'] 				= '</li>';
					$config['last_tag_open'] 				= '<li>';
					$config['last_tag_close'] 				= '</li>';
					$config['first_link'] 					= '&lt;&lt; Previous';
					$config['last_link'] 					= 'Next &gt;&gt;';
					$config['base_url'] 					= site_url($url);
					$config['total_rows'] 					= $jumlah_data;
					$config['per_page'] 					= 10;
					$pagging 								= ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;
					$this->pagination->initialize($config);	

					//load data
					$this->data['berita_kategori'] 			= $this->public_home_model->get_list(array('status_terbit'=>'terbit'), $config['per_page'], $pagging, array('tanggal_terbit','desc'), 'my_berita')->result();
					$this->load->view('umri/list_news/index', $this->data);
			}else if($url == 'download'){
					//facebook
					$this->data['image_og'] 				= base_url('upload/system/logo.png');
					$this->data['og_description'] 			= $this->public_website_model->get(array('setting'=>'deskripsi'))->row()->value;
					
					$this->data['title'] 					= 'File Download Updates';
					$this->data['sidebar_name'] 			= "List Download";
					$this->data['sidebar_description'] 		= "Click For download file";
					$this->data['berita_index'] 			= $url;
					//pagging
					$jumlah_data 							= $this->public_home_model->get_list(array('status'=>1), null, null, array('tanggal','desc'), 'my_download')->num_rows();
					$config['full_tag_open'] 				= '<ul class="pagination">';
					$config['full_tag_close'] 				= '</ul>';
					$config['prev_link'] 					= '&lt;';
					$config['prev_tag_open'] 				= '<li>';
					$config['prev_tag_close'] 				= '</li>';
					$config['next_link'] 					= '&gt;';
					$config['next_tag_open'] 				= '<li>';
					$config['next_tag_close'] 				= '</li>';
					$config['cur_tag_open'] 				= '<li class="active"><a href="#">';
					$config['cur_tag_close'] 				= '</a></li>';
					$config['num_tag_open'] 				= '<li>';
					$config['num_tag_close'] 				= '</li>';
					$config['first_tag_open'] 				= '<li>';
					$config['first_tag_close'] 				= '</li>';
					$config['last_tag_open'] 				= '<li>';
					$config['last_tag_close'] 				= '</li>';
					$config['first_link'] 					= '&lt;&lt; Previous';
					$config['last_link'] 					= 'Next &gt;&gt;';
					$config['base_url'] 					= site_url($url);
					$config['total_rows'] 					= $jumlah_data;
					$config['per_page'] 					= 10;
					$pagging 								= ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;
					$this->pagination->initialize($config);	

					//load data
					$this->data['berita_kategori'] 			= $this->public_home_model->get_list(array('status'=>1), $config['per_page'], $pagging, array('tanggal','desc'), 'my_download')->result();
					$this->load->view('umri/download/index', $this->data);
			
			} else if($url == 'register'){
				
					$this->data['image_og'] 				= base_url('upload/system/logo.png');
					$this->data['og_description'] 			= $this->public_website_model->get(array('setting'=>'deskripsi'))->row()->value;
					$this->data['country_list'] 			= $this->public_home_model->get(null, 'country')->result();
					$this->data['sidebar_name'] 			= "Please Sign Up.";
					$this->data['sidebar_description'] 		= "It's free and always will be.";
					$this->data['title'] 					= "Register";
					$this->data['sub_title'] 				= "Valid information is required to register.";
					
					$this->form_validation->set_rules('phone','Phone Number','required');
					$this->form_validation->set_rules('country','Country','required');
					$this->form_validation->set_rules('firstname','Firstname','required');
					$this->form_validation->set_rules('email','Email','trim|required|valid_email');
					$this->form_validation->set_rules('username','Username','trim|required');
					$this->form_validation->set_rules('password','Password','trim|required|min_length[8]');
					$this->form_validation->set_rules('password_confirm','Password confirmation','required|matches[password]');
					$this->form_validation->set_rules('confirm','terms and conditions','required|integer');
					
					$phone 			= $this->input->post('phone');
					$firstname		= $this->input->post('firstname');
					$lastname		= $this->input->post('lastname');
					$email			= $this->input->post('email');
					$username		= $this->input->post('username');
					$password		= $this->input->post('password');
					$confirm		= $this->input->post('confirm');
					$country		= $this->input->post('country');
					
					if ($this->form_validation->run() == true) {
						//cek username
						if($this->public_home_model->get(array('username'=>$username), "users")->num_rows() == 0){
							if($this->public_home_model->get(array('email'=>$email), "users")->num_rows() == 0){
								$additional_data = array(
									'first_name' 	=> $firstname,
									'last_name'  	=> $lastname,
									'company'    	=> "umri",
									'phone'      	=> $phone
								);
								$ids = $this->ion_auth->register($username, $password, $email, $additional_data);
								
								$additional_profile = array(
									'user_id' 		=> $ids,
									'avatar'  		=> 1,
									'country'  		=> $country
								);
								
								$this->public_home_model->insert_table($additional_profile, 'my_user_profile');
								
								$this->data['sidebar_name'] 			= "Registration Complete";
								$this->data['sidebar_description'] 		= "Registration successful.";
								$this->data['title'] 					= "Success";
								$this->data['sub_title'] 				= "Registration is successful. Please check your email for activate account";
								
								$this->data['your_name'] 				= $firstname." ".$lastname;
								$this->data['your_email'] 				= $email;
								$this->data['your_username'] 			= $username;
								$this->data['your_phone'] 				= $phone;
								
								$this->load->view('umri/register/success', $this->data);
							}else{
							
								$this->data['message'] 		= 'Sorry!! Email has been used';
								$this->data['cek_email'] 	= 'Sorry!! Email has been used';
								$this->data['cek_username'] = 'This will be your login user name *without space';
								$this->data['phone'] = array(
									'name' 			=> 'phone',
									'id' 			=> 'phone',
									'type' 			=> 'number',
									'class' 		=> 'form-control',
									'required' 		=> 'true',
									'value' 		=> $this->form_validation->set_value('phone', $phone),
								);
								$this->data['firstname'] = array(
									'name' 			=> 'firstname',
									'id' 			=> 'firstname',
									'type' 			=> 'text',
									'class' 		=> 'form-control',
									'required' 		=> 'true',
									'value' 		=> $this->form_validation->set_value('firstname', $firstname),
								);
								$this->data['lastname'] = array(
									'name' 			=> 'lastname',
									'id' 			=> 'lastname',
									'type' 			=> 'text',
									'class' 		=> 'form-control',
									'value' 		=> $this->form_validation->set_value('lastname', $lastname),
								);
								$this->data['email'] = array(
									'name' 			=> 'email',
									'id' 			=> 'email',
									'type' 			=> 'text',
									'class' 		=> 'form-control',
									'required' 		=> 'true',
									'value' 		=> $this->form_validation->set_value('email', $email),
								);
								$this->data['username'] = array(
									'name' 			=> 'username',
									'id' 			=> 'username',
									'type' 			=> 'text',
									'class' 		=> 'form-control',
									'required' 		=> 'true',
									'value' 		=> $this->form_validation->set_value('username', $username),
								);
								$this->data['password'] = array(
									'name' 			=> 'password',
									'id' 			=> 'password',
									'type' 			=> 'password',
									'class' 		=> 'form-control',
									'required' 		=> 'true',
									'value' 		=> $this->form_validation->set_value('password', ''),
								);
								$this->data['password_confirm'] = array(
									'name' 			=> 'password_confirm',
									'id' 			=> 'password_confirm',
									'type' 			=> 'password',
									'class' 		=> 'form-control',
									'required' 		=> 'true',
									'value' 		=> $this->form_validation->set_value('password_confirm', ''),
								);
								$this->data['confirm'] = $confirm;
								$this->data['country'] = $country;
								$this->load->view('umri/register/index', $this->data);
							
							}
						
						}else{
							$this->data['message'] 		= 'Sorry!! Your username has been used';
							$this->data['cek_email'] 	= 'Enter your valid email';
							$this->data['cek_username'] = 'Sorry!! Your username has been used';
							$this->data['phone'] = array(
								'name' 			=> 'phone',
								'id' 			=> 'phone',
								'type' 			=> 'number',
								'class' 		=> 'form-control',
								'required' 		=> 'true',
								'value' 		=> $this->form_validation->set_value('phone', $phone),
							);
							$this->data['firstname'] = array(
								'name' 			=> 'firstname',
								'id' 			=> 'firstname',
								'type' 			=> 'text',
								'class' 		=> 'form-control',
								'required' 		=> 'true',
								'value' 		=> $this->form_validation->set_value('firstname', $firstname),
							);
							$this->data['lastname'] = array(
								'name' 			=> 'lastname',
								'id' 			=> 'lastname',
								'type' 			=> 'text',
								'class' 		=> 'form-control',
								'value' 		=> $this->form_validation->set_value('lastname', $lastname),
							);
							$this->data['email'] = array(
								'name' 			=> 'email',
								'id' 			=> 'email',
								'type' 			=> 'text',
								'class' 		=> 'form-control',
								'required' 		=> 'true',
								'value' 		=> $this->form_validation->set_value('email', $email),
							);
							$this->data['username'] = array(
								'name' 			=> 'username',
								'id' 			=> 'username',
								'type' 			=> 'text',
								'class' 		=> 'form-control',
								'required' 		=> 'true',
								'value' 		=> $this->form_validation->set_value('username', $username),
							);
							$this->data['password'] = array(
								'name' 			=> 'password',
								'id' 			=> 'password',
								'type' 			=> 'password',
								'class' 		=> 'form-control',
								'required' 		=> 'true',
								'value' 		=> $this->form_validation->set_value('password', ''),
							);
							$this->data['password_confirm'] = array(
								'name' 			=> 'password_confirm',
								'id' 			=> 'password_confirm',
								'type' 			=> 'password',
								'class' 		=> 'form-control',
								'required' 		=> 'true',
								'value' 		=> $this->form_validation->set_value('password_confirm', ''),
							);
							$this->data['confirm'] = $confirm;
							$this->data['country'] = $country;
							$this->load->view('umri/register/index', $this->data);
						}
					}
					$this->data['message'] 		= (validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message')));
					$this->data['cek_email'] 	= 'Enter your valid email';
					$this->data['cek_username'] = 'This will be your login user name *without space';
					$this->data['phone'] = array(
						'name' 			=> 'phone',
						'id' 			=> 'phone',
						'type' 			=> 'number',
						'class' 		=> 'form-control',
						'required' 		=> 'true',
						'value' 		=> $this->form_validation->set_value('phone', $phone),
					);
					$this->data['firstname'] = array(
						'name' 			=> 'firstname',
						'id' 			=> 'firstname',
						'type' 			=> 'text',
						'class' 		=> 'form-control',
						'required' 		=> 'true',
						'value' 		=> $this->form_validation->set_value('firstname', $firstname),
					);
					$this->data['lastname'] = array(
						'name' 			=> 'lastname',
						'id' 			=> 'lastname',
						'type' 			=> 'text',
						'class' 		=> 'form-control',
						'value' 		=> $this->form_validation->set_value('lastname', $lastname),
					);
					$this->data['email'] = array(
						'name' 			=> 'email',
						'id' 			=> 'email',
						'type' 			=> 'text',
						'class' 		=> 'form-control',
						'required' 		=> 'true',
						'value' 		=> $this->form_validation->set_value('email', $email),
					);
					$this->data['username'] = array(
						'name' 			=> 'username',
						'id' 			=> 'username',
						'type' 			=> 'text',
						'class' 		=> 'form-control',
						'required' 		=> 'true',
						'value' 		=> $this->form_validation->set_value('username', $username),
					);
					$this->data['password'] = array(
						'name' 			=> 'password',
						'id' 			=> 'password',
						'type' 			=> 'password',
						'class' 		=> 'form-control',
						'required' 		=> 'true',
						'value' 		=> $this->form_validation->set_value('password', ''),
					);
					$this->data['password_confirm'] = array(
						'name' 			=> 'password_confirm',
						'id' 			=> 'password_confirm',
						'type' 			=> 'password',
						'class' 		=> 'form-control',
						'required' 		=> 'true',
						'value' 		=> $this->form_validation->set_value('password_confirm', ''),
					);
					$this->data['confirm'] = $confirm;
					$this->data['country'] = $country;
					$this->load->view('umri/register/index', $this->data);
				
			}else if($url == 'login'){
					if ($this->ion_auth->logged_in()) {
						if ($this->ion_auth->is_admin()) {
							$this->rat->log('The user logged in');
							redirect('admin/home', $this->data,'refresh');
							
						} else if ($this->ion_auth->is_ketua()) {
							$this->rat->log('The user logged in');
							redirect('ketua/home', $this->data);
						   
						} else if ($this->ion_auth->is_acounting()) {
							$this->rat->log('The user logged in');
							redirect('acounting/home', $this->data);
							
						} else if ($this->ion_auth->is_team()) {
							$this->rat->log('The user logged in');
							redirect('team/home', $this->data);
							
						} else if ($this->ion_auth->is_member()) {
							$this->rat->log('The user logged in');
							redirect('member/home', $this->data,'refresh');
							
						} else {
							redirect('/', 'refresh');
						}
					} else {
						
						$this->data['image_og'] 				= base_url('upload/system/logo.png');
						$this->data['og_description'] 			= $this->public_website_model->get(array('setting'=>'deskripsi'))->row()->value;
						$this->data['sidebar_name'] 			= "Log in";
						$this->data['sidebar_description'] 		= "Login to your account.";
						$this->data['title'] 					= "Sign in";
						$this->data['sub_title'] 				= "Please enter your valid email and password.";
						
						$this->form_validation->set_rules('identity','Username or Email','required');
						$this->form_validation->set_rules('password','Password','required|min_length[8]');
						$this->form_validation->set_rules('remember','Remember me','integer');
					
						$identity		= $this->input->post('identity');
						$password		= $this->input->post('password');
						
						if ($this->form_validation->run() == true) {
							$remember = (bool) $this->input->post('remember');
							// check for username
							$login = $this->ion_auth->login($this->input->post('identity'), $this->input->post('password'), $remember);
							if(! $login) { // username is not successful
								$this->ion_auth_model->identity_column = 'email';
								// check for email
								$login = $this->ion_auth->login($this->input->post('identity'), $this->input->post('password'), $remember);
							}

							if( $login ) {
								//$this->session->set_flashdata('message', $this->ion_auth->messages());
								if ($this->ion_auth->is_member()) {
									$this->rat->log('The user logged in');
									redirect('member/home', $this->data,'refresh');
								} else {
									redirect('/', 'refresh');
								}
							} else {
								$this->session->set_flashdata('message', $this->ion_auth->errors());
								redirect('login', 'refresh');
							}
						}
						$this->data['message'] = (validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message')));
						$this->data['identity'] = array(
							'name' 			=> 'identity',
							'id' 			=> 'identity',
							'type' 			=> 'text',
							'class' 		=> 'form-control',
							'required' 		=> 'true',
							'value' 		=> $this->form_validation->set_value('identity', $identity),
						);
						$this->data['password'] = array(
							'name' 			=> 'password',
							'id' 			=> 'password',
							'type' 			=> 'password',
							'class' 		=> 'form-control',
							'required' 		=> 'true',
							'value' 		=> $this->form_validation->set_value('password', ''),
						);
						
						$this->load->view('umri/login/index', $this->data);
					}
			}else if($url == 'logout'){
					$this->load->library('rat');
					$this->rat->log('The user logged out');
					$this->ion_auth->logout();
					$this->postal->add($this->ion_auth->messages(),'error');
					redirect('login');
			}else {
				
				$this->data['title'] 						= 'Home';
				$this->data['image_og'] 					= base_url('upload/system/logo.png');
				$this->data['og_description'] 				= $this->public_website_model->get(array('setting'=>'deskripsi'))->row()->value;
				//data banner
				$this->data['home_banner']					= $this->public_home_model->get_list(array('status'=>1), 1, 0, array('id','desc'), 'my_banner')->result();
				//data speaker
				$this->data['home_speakers']				= $this->public_home_model->get_list(null, 3, 0, array('id','desc'), 'my_speaker')->result();
				//data sponsor
				$this->data['commitee']						= $this->public_home_model->get_list(array('status'=>1), 20, 0, array('id','desc'), 'my_comite')->result();
				
				$this->load->view('umri/home/index', $this->data);
			}
	}
}