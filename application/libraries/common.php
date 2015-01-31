<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Common {
	public function parseurl($url)
	{    
		$url = rawurlencode(mb_convert_encoding($url, 'gb2312', 'utf-8')); 
		$a = array("%3A", "%2F", "%40"); 
		$b = array(":", "/", "@"); 
		$url = str_replace($a, $b, $url); 
		return $url; 
	}
}
?>