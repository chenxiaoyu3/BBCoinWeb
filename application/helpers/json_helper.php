<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


/**
* json string with utf-8 bom
*/
if ( ! function_exists('my_json_decode'))
{
	function my_json_decode($str)
	{
        if(preg_match('/^\xEF\xBB\xBF/',$str))
        {
             $str = substr($str,3);
        }
        $str = trim($str);
        // echo $str;
        return json_decode($str);
	}
}