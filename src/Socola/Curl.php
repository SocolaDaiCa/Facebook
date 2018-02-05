<?php
	namespace Socola;
	define('TIME_OUT', 15);
	define('BROWSER_DEFAULT', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.69 Safari/537.36');
	class Curl
	{
		function __construct()
		{

		}
		public static function get($url, $browser = BROWSER_DEFAULT)
		{
			$ch	  = curl_init();
			$timeout = 15;
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_USERAGENT, $browser);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
			curl_setopt($ch, CURLOPT_MAXREDIRS, 10);
			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
			curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, TIME_OUT);
			$data = curl_exec($ch);
			curl_close($ch);
			return $data;
		}
		public static function getUrl($url, $param = null){
			if ($param==null)
				return $url;
			$url .= '?'.http_build_query($param);
			return $url;
		}
		public static function getJSON($url, $param = null, $browser = BROWSER_DEFAULT){
			$res = self::get(self::getUrl($url, $param));
			$res = json_decode($res);
			$res = json_encode($res);
			$res = json_decode($res);
			return $res;
		}
		public static function post($url, $param, $browser = BROWSER_DEFAULT)
		{
			$ch	  = curl_init();
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_USERAGENT, $browser);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
			curl_setopt($ch, CURLOPT_MAXREDIRS, 10);
			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
			curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, TIME_OUT);
			curl_setopt($ch, CURLOPT_POST, count($param));
			curl_setopt($ch, CURLOPT_POSTFIELDS, $param);
			$data = curl_exec($ch);
			curl_close($ch);
			return $data;
		}
	}
?>