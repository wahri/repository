<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

	//untuk mengetahui bulan bulan
	if ( ! function_exists('bulan'))
	{
		function bulan($bln)
		{
			switch ($bln)
			{
				case 1:
					return "Januari";
					break;
				case 2:
					return "Februari";
					break;
				case 3:
					return "Maret";
					break;
				case 4:
					return "April";
					break;
				case 5:
					return "Mei";
					break;
				case 6:
					return "Juni";
					break;
				case 7:
					return "Juli";
					break;
				case 8:
					return "Agustus";
					break;
				case 9:
					return "September";
					break;
				case 10:
					return "Oktober";
					break;
				case 11:
					return "November";
					break;
				case 12:
					return "Desember";
					break;
			}
		}
	}
	 
	//format tanggal yyyy-mm-dd
	if ( ! function_exists('tgl_indo'))
	{
		function tgl_indo($tgl)
		{
			$ubah = gmdate($tgl, time()+60*60*8);
			$pecah = explode("-",$ubah);  //memecah variabel berdasarkan -
			$tanggal = $pecah[2];
			$bulan = bulan($pecah[1]);
			$tahun = $pecah[0];
			return $tanggal.' '.$bulan.' '.$tahun; //hasil akhir
		}
	}


	if( ! function_exists('BoyerMoore_algo')){

		function BoyerMoore_algo($text, $pattern) {
			$pat_len 	= strlen($pattern);
			$text_len 	= strlen($text);
			$table 		= makeCharTable_algo($pattern);

			for ($i=$pat_len-1; $i < $text_len;) {
				$t = $i;
				for ($j=$pat_len-1; $pattern[$j]==$text[$i]; $j--, $i--) {
					if($j == 0) return $i;
				}
				$i = $t;
				if(array_key_exists($text[$i], $table))
					$i = $i + max($table[$text[$i]], 1);
				else
					$i += $pat_len;
			}
			return -1;
		}
	}

	if( ! function_exists('makeCharTable_algo')){

		function makeCharTable_algo($string) {
			$len 	= strlen($string);
			$table 	= array();
			for ($k=0; $k < $len; $k++) {
				$table[$string[$k]] = $len - $k - 1;
			}
			return $table;
		}
	}
	

	//format tanggal timestamp
	if( ! function_exists('bln_indo_timestamp')){
	 
		function bln_indo_timestamp($tgl)
		{
			$inttime=$tgl; //mengubah format menjadi tanggal biasa
			$tglBaru=explode(" ",$inttime); //memecah berdasarkan spaasi
			 
			$tglBaru1=$tglBaru[0]; //mendapatkan variabel format yyyy-mm-dd
			$tglBaru2=$tglBaru[1]; //mendapatkan fotmat hh:ii:ss
			$tglBarua=explode("-",$tglBaru1); //lalu memecah variabel berdasarkan -
		 
			$tgl=$tglBarua[2];
			$bln=$tglBarua[1];
			$thn=$tglBarua[0];
		 
			$bln=bulan($bln); //mengganti bulan angka menjadi text dari fungsi bulan
			$ubahTanggal="$bln"; //hasil akhir tanggal
		 
			return $ubahTanggal;
		}
	}
	 
	//format tanggal timestamp
	if( ! function_exists('tgl_indo_timestamp')){
	 
		function tgl_indo_timestamp($tgl)
		{
			$inttime=$tgl; //mengubah format menjadi tanggal biasa
			$tglBaru=explode(" ",$inttime); //memecah berdasarkan spaasi
			 
			$tglBaru1=$tglBaru[0]; //mendapatkan variabel format yyyy-mm-dd
			$tglBaru2=$tglBaru[1]; //mendapatkan fotmat hh:ii:ss
			$tglBarua=explode("-",$tglBaru1); //lalu memecah variabel berdasarkan -
		 
			$tgl=$tglBarua[2];
			$bln=$tglBarua[1];
			$thn=$tglBarua[0];
		 
			$bln=bulan($bln); //mengganti bulan angka menjadi text dari fungsi bulan
			$ubahTanggal="$tgl $bln $thn | $tglBaru2 "; //hasil akhir tanggal
		 
			return $ubahTanggal;
		}
	}
	
	//format tanggal timestamp
	if( ! function_exists('tgl_indo_ku')){
	 
		function tgl_indo_ku($tgl)
		{
			$inttime=$tgl; //mengubah format menjadi tanggal biasa
			$tglBaru=explode(" ",$inttime); //memecah berdasarkan spaasi
			 
			$tglBaru1=$tglBaru[0]; //mendapatkan variabel format yyyy-mm-dd
			$tglBaru2=$tglBaru[1]; //mendapatkan fotmat hh:ii:ss
			$tglBarua=explode("-",$tglBaru1); //lalu memecah variabel berdasarkan -
		 
			$tgl=$tglBarua[2];
			$bln=$tglBarua[1];
			$thn=$tglBarua[0];
		 
			$bln=bulan($bln); //mengganti bulan angka menjadi text dari fungsi bulan
			$ubahTanggal="$tgl $bln $thn"; //hasil akhir tanggal
		 
			return $ubahTanggal;
		}
	}
	
	
	/*Get content excerpt*/
	if (!function_exists('get_content_excerpt')) {
		function get_content_excerpt($content, $length)
		{
			$title = (($content));
			$title = strip_tags($title);

			// cari last space
			$last_space = strrpos(substr($title, 0, $length), ' ');

			// Trim
			$content = substr($title, 0, $last_space);

			$content .= '...';
			return $content;
		}
	}
	
	