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
		public static function test()
		{
			echo "test facebook gra[jh";
		}
	}
	/* mot hau ba*/
?>