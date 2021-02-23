<?php

if (!function_exists('app_url')) {
  function app_url($url = '')
  {
    return env('APP_URL').$url;
  }
}

if (!function_exists('__str_esc')) {
  function __str_esc($text)
  {
    $ci =& get_instance();
    return $ci->db->escape_str($text);
  }
}

if (!function_exists('__params_esc')) {
  function __params_esc($array = '')
  {
    if (is_array($array)) {
      $no = 0;
      $result = [];
      foreach ($array as $key => $value) {
        $result[$key] = __str_esc($value);
      }
      return $result;
    }else{

      return __str_esc($array);
    }
  }
}

if(!function_exists('slugify')) {
    function slugify($text)
    {
      $text = preg_replace('~[^\pL\d]+~u', '-', $text);
    
      $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
    
      $text = preg_replace('~[^-\w]+~', '', $text);
    
      $text = trim($text, '-');
    
      $text = preg_replace('~-+~', '-', $text);
      
      $text = strtolower($text);
      
      return $text;
    }
}

if(!function_exists('unslugify')) {
    function unslugify($text)
    {
      $text = preg_replace('~[^\pL\d]+~u', '-', $text);
    
      $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
    
      $text = preg_replace('~[^-\w]+~', '', $text);
    
      $text = trim($text, '-');
    
      $text = preg_replace('~-+~', ' ', $text);
      
      $text = strtolower($text);
      
      return $text;
    }
}



if (!function_exists('prefix_chat')) {
    function prefix_chat($tipe = 'chat')
    {
      $prefix = env('PREFIX_CHAT');
      if ($tipe == 'cloter') {
        $prefix = env('PREFIX_CHAT_CLOTER');
      }
      return $prefix;
    }
}

if (!function_exists('get_param')) {
    function get_param($data)
    {
      $result = isset($data)? $data : '';
      $result = empty($result)? "" : $result;
      return $result;
    }
}

if (!function_exists('toDatetime')) {
    function toDatetime($date,$format = '')
    {
      if ($date !== null) {
        if ($format) {
          $date = date($format,strtotime($date));
        }else{
          $date = date('Y-m-d H:i:s',strtotime($date));
        }
        return $date;
      }
    }
}

if (!function_exists('toDate')) {
    function toDate($date,$format = '')
    {
      if ($date !== null) {
        if ($format) {
          $date = date($format,strtotime($date));
        }else{
          $date = date('Y-m-d',strtotime($date));
        }
        return $date;
      }
    }
}

if (!function_exists('toTime')) {
    function toTIme($date,$format = '')
    {
      if ($date !== null) {
        if ($format) {
          $date = date($format,strtotime($date));
        }else{
          $date = date('H:i',strtotime($date));
        }
        return $date;
      }
    }
}

if (!function_exists('handle_html')) {
    function handle_html($string)
    {
      return htmlspecialchars($string);
    }
}


if (!function_exists('get_empty_image')) {
    function get_empty_image($str,$tipe = 'avatar')
    {
      $nama = str_replace(' ', '+', $str);
      $url = "avatar/$nama";
      if ($tipe == 'kategori') {
        $url = "avatar/kategori/$nama";
      }
      return app_url($url);
    }
}
if (!function_exists('date_indo')) {
  function date_indo($date){
    if ($date == null) {
      return null;
    }
    $tanggal = date('Y-m-d',strtotime($date));
    $bulan = array (
      1 =>   'Januari',
      'Februari',
      'Maret',
      'April',
      'Mei',
      'Juni',
      'Juli',
      'Agustus',
      'September',
      'Oktober',
      'November',
      'Desember'
    );
    $pecahkan = explode('-', $tanggal);
    // variabel pecahkan 0 = tanggal
    // variabel pecahkan 1 = bulan
    // variabel pecahkan 2 = tahun
    return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
  }
}

if (!function_exists('lastCreatedTime')) {
  function lastCreatedTime($time)
  {
    if ($time == null) {
        $result = '';
        goto output;
    }
    $time = strtotime($time);
    $chunks = [ 
        [60 * 60 * 24 * 365, 'tahun'], 
        [60 * 60 * 24 * 30, 'bulan'], 
        [60 * 60 * 24 * 7, 'minggu'], 
        [60 * 60 * 24, 'hari'], 
        [60 * 60, 'jam'], 
        [60, 'menit'], 
    ]; 
  
    $today = time(); 
    $since = $today - $time; 

    if ($since > 604800) 
    { 
        $print = date_indo(date("Y-m-d", $time)); 
        if ($since > 31536000) 
        { 
          $print .= ", " . date("Y", $time); 
        } 
        return $print; 
    } 

    for ($i = 0, $j = count($chunks); $i < $j; $i++) 
    { 
        $seconds = $chunks[$i][0]; 
        $name = $chunks[$i][1]; 

    if (($count = floor($since / $seconds)) != 0) 
      break; 
    } 

    $print = ($count == 0) ? 'Baru Saja' : "$count {$name} yang lalu"; 

    $result = $print;

    goto output;

    output:
    return $result ; 
  }
}