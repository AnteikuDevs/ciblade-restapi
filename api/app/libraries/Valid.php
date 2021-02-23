<?php 

/**
 * summary
 */
class Valid
{
    /**
     * summary
     */
    public function __construct()
    {
        
    }

    public function email($str)
    {
    	return filter_var($str, FILTER_VALIDATE_EMAIL)? $str : false;
    }

    public function num($str)
    {
    	return preg_match('/[^0-9]+$/', $str) ? $str : false;
    }

}