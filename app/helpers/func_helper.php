<?php 

if(!function_exists('asset')){
	function asset($url = '')
	{
		return base_url(env('ASSETS_URL','asset/').$url);
	}
}

if(!function_exists('api_url')){
	function api_url($url = '')
	{
		return base_url(env('API_URL','api').$url);
	}
}

if(!function_exists('segment')){
	function segment($segment)
	{
		$ci =& get_instance();
		return $ci->uri->segment($segment);
	}
}

if(!function_exists('param_replace')){
	function param_replace($parameters){
		$url = real_url();
		$urlParts = parse_url($url);
		$url = "";
		if (isset($urlParts['scheme'])) {
			$url .= $urlParts['scheme'] . "://";
		}
		if (isset($urlParts['host'])) {
			$url .= $urlParts['host'];
		}
		if (isset($urlParts['path'])) {
			$url .= $urlParts['path'];
		}
		$query = isset($urlParts['query']) ? $urlParts['query'] : "";
		$urlParameters = explode("&", $query);
		$urlParameterValuesByKey = new stdClass();
		foreach ($urlParameters as $urlParameter) {
			$equalsIndex = strrpos($urlParameter, "=");
			if ($equalsIndex) {
				$urlParameterValuesByKey->{substr($urlParameter, 0, $equalsIndex)} = substr($urlParameter, $equalsIndex + 1);
			} else {
				$urlParameterValuesByKey->{$urlParameter} = null;
			}
		}
		foreach ($parameters as $key => $value) {
			if(!is_string($value)) {
				unset($urlParameterValuesByKey->{$key});
			} else {
				$urlParameterValuesByKey->{$key} = $value;
			}
		}
		$query = "";
		foreach ($urlParameterValuesByKey as $key => $value) {
			if (strlen($query) === 0) {
				$query .= "?";
			}
			if (strlen($query) > 1) {
				$query .= "&";
			}
			if (is_string($value)) {
				$query .= $key . "=" . $value;
			} else {
				$query .= $key;
			}
		}
		$url .= $query;
		return $url;
	}
}

if(!function_exists('get_params')){
	function get_params($param,$value = ''){
		$data = isset($_GET[$param])? $_GET[$param] : $value;
		if (empty($data)) {
			return $value;
		}
		return $data;
	}
}

if(!function_exists('set_version')){
	function set_version()
	{
		$version = random_string('numeric', 2);
		return $version;
	}
}

if(!function_exists('random_var')){
	function random_var()
	{
		$version = random_string('alpha', 7);
		return $version;
	}
}

if(!function_exists('user_key')){
	function user_key()
	{
		return env('USER_KEY','ebGPqjkdsWvoRA');
	}
}

if (!function_exists('csrf_token')) {
	function csrf_token(){
		$ci =& get_instance();
		return 'oke';
	}
}
