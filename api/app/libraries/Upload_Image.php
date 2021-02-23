<?php 

class Upload_Image
{
    public function generate($file_base64,$path,$prefix = '',$old_image = '')
    {
        $tipe = explode(';base64,',$file_base64);
        $format = explode('data:image/',$tipe[0]);
        $file_base64 = str_replace('data:image/'.$format[1].';base64,', '', $file_base64);
        $file_base64 = str_replace(' ', '+', $file_base64);
        $decode_data = base64_decode($file_base64);

        $nama_file_baru = $this->generate_name($prefix).'.'.$format[1];

        $storage = env('STORAGE_URL','storages/');

        $lokasi_upload = FCPATH . "/$storage$path/";

        $lokasi_file_upload = str_replace("\\api",'',str_replace('/api','',$lokasi_upload));

        if (!file_exists($lokasi_file_upload)) {
            mkdir($lokasi_file_upload, 0777);
        }

        $lokasi_file_baru = "$storage$path/$nama_file_baru";

        $lokasi_baru = $lokasi_file_upload.$nama_file_baru;

        $upload = file_put_contents($lokasi_baru, $decode_data);

        if ($upload) {
            $result = [
                'status' => true,
                'message' => "Success.",
                'url' => $lokasi_file_baru
            ];
        }else{
            $result = [
                'status' => false,
                'message' => "Gagal mengunggah file"
            ];
        }
        if (!empty($old_image)) {
            $this->remove($old_image);
        }
        return $result;
    }

    function remove($file_url)
    {
        $src = str_replace(app_url(), '', $file_url);
        $lokasi_upload = FCPATH . "/$src";
        $lokasi_file_upload = str_replace("\\api",'',str_replace('/api','',$lokasi_upload));
        @unlink($lokasi_file_upload);
    }

    public function generate_name($prefix = '')
    {
    	$code = sha1(md5(date("Y-m-d H:i:s").microtime()));
    	$name = substr($code, 0, 21);
    	if (!empty($prefix)) {
    		$name = $prefix.'-'.$name;
    	}
    	return strtolower($name);
    }
}