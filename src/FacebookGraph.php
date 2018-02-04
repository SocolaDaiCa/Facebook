<?php
	namespace Socola\FacebookGraph;
	/**
	* 
	*/
	class FacebookGraph
	{
		protected $token;
		function __construct($token = '')
		{
			$this->token = $token ?? $this->token;
		}
		public function setAccessToken($token)
		{
			$this->token = $token;
		}
	}
?>