<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Model extends CI_Model
{
	/**
	* @author          Masteguh
	* @link            https://github.com/AnteikuDevs
	*/

	protected $result_key = '';

	public function __construct()
	{
	    parent::__construct();
	    $this->load->library([
	    	'Upload_Image' => 'upload_image',
	    	'Midtrans' => 'midtrans'
	    ]);
	    $this->result_key = env('RESULT_KEY');
	}

	public function generate_pagination($jml_data,$limit = 10,$page = 1)
	{
		$limit = !empty($limit) ? (int)$limit : 10;
		$page = !empty($page) ? (int)$page : 1;

		$jumlah_data = floatval($jml_data);
		$limit = floatval($limit);
		$jumlah_halaman = @ceil($jumlah_data/$limit);

		$start = ($limit * $page) - $limit;

		$start_plus = $start + 1;

		$show = "$start_plus - $limit";

		if ($start >= $limit || $jumlah_data < $limit) {
			$show = "$start_plus - $jumlah_data";
		}

		$page = (int)$page;

		$result['status'] = true;
		$result['mulai'] = $start;
		$result['limit'] = $limit;
		$result['halaman_aktif'] = $page;
		$result['jml_data'] = $jumlah_data;
		$result['jml_halaman'] = $jumlah_halaman;
		if ($page > $jumlah_halaman) {
			$result['info_halaman'] = "Menampilkan 0 - 0 dari $jumlah_halaman Halaman";
		}else{
			$result['info_halaman'] = "Menampilkan $show dari $jumlah_halaman Halaman";
		}

		if ($jumlah_data == 0) {
			$result['halaman_aktif'] = 0;
			$result['status'] = false;
			$result['info_halaman'] = "Tidak ada info";
		}

		if (empty($limit) || empty($page)) {
			$result['halaman_aktif'] = 0;
			$result['status'] = false;
			$result['info_halaman'] = "Tidak ada info";
		}
		return $result;
	}

	public function member_token()
	{
		return $this->Auth_app->options['member_token'];
	}

	public function generate_slug($tabel,$kolom,$str)
	{
		$slug = slugify($str);
		$data = $this->db->query("SELECT
									$kolom
									FROM
										$tabel
									WHERE
										$kolom = '$slug'")->num_rows();
		$result = $slug;
		$num = $data + 1;
		if ($data > 1) {
			$result = $slug.'-'.$num;
		}
		return $result;
	}

	public function result_output($bool = false,$message = '')
	{
		$result[$this->result_key] = $bool;
		$result['message'] = $message;
		return $result;
	}
}