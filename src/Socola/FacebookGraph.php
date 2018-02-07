<?php
	namespace Socola;
	use Socola\Curl;
	/**
	*
	*/
	class FacebookGraph
	{
		protected $accessToken = 'EAACW5Fg5N2IBAJpXwY48e0HdCItU86PjMnP8zFhR6203BTonwgOKjmRjMZCKZCjhCemcNHKDPLaUdMMfqHUJhgZBoj3fU9R9hpse30H362R2FiN5hzXOI2qbObu5Y3EZB5lZBoruqo0RUfiZByvKKy6Nob8Kgv11rSUdxfEJNVjEFnPjBdEQMSaMu6BDfU8akZD';
		protected $endPoint = 'https://graph.facebook.com/';
		protected $version = 'v2.3';
		protected $json;
		function __construct($accessToken = null)
		{
			$this->setAccessToken($accessToken);
		}

		public function setAccessToken($accessToken = null)
		{
			$this->accessToken = $accessToken ?? $this->accessToken;
		}

		public function graph($target = 'me', $param = [], $version = null){
			$param["access_token"] = $this->accessToken;
			$endPoint = $this->endPoint . ($version ?? $this->version);
			$json = Curl::getJSON($endPoint . '/' . $target, $param);
			$key = key((array)$json);
			if(empty($json->{$key}->paging->next)){
				return $json;
			}
			$data = $json->{$key}->data;
			$url = $json->{$key}->paging->next;
			do{
				$json = Curl::getJSON($url);
				$data = array_merge($data, $json->data);
				$url = $json->paging->next ?? null;
			}while(!empty($url));
			return $data;
		}

		public function isTokenLive($token = "")
		{
			$this->setToken($token);
			$this->json = $this->graph("me", ['fields' => 'name,id']);
			return empty($this->json->error);
		}

		public static function getToken($email, $password, $type = 'android'){
			$key = [
				'android' => [
					'api_key' => '882a8490361da98702bf97a021ddc14d',
					'secretkey' => '62f8ce9f74b12f84c123cc23437a4a32'
				],
				'iphone' => [
					'api_key' => '3e7c78e35a76a9299309885393b02d97',
					'secretkey' => 'c1e620fa708a1d5696fb991c1bde5662'
				],
				'iosforpage' => [
					'api_key' => '',
					'secretkey' => ''
				]
			];

			$api_key = $key[$type]['api_key'];
			$secretkey = $key[$type]['secretkey'];
			$postdata = array(
				"api_key" => $api_key,
				"email" => $email,
				"format" => "JSON",
				"locale" => "vi_vn",
				"method" => "auth.login",
				"password" => $password,
				"return_ssl_resources" => "0",
				"v" => "1.0"
			);
			// tạo chuỗi kết nối
			$postdata['sig'] = http_build_query($postdata, '', '') . $secretkey;
			$postdata['sig'] = md5(urldecode($postdata['sig']));
			$data = Curl::post("https://api.facebook.com/restserver.php", $postdata);
			$data = json_decode($data);
			return $data;
		}
		public function codeToToken($code, $clienID = CLIENT_ID, $redirectUri = REDIRECT_URI, $clientSecret = CLIENT_SECRET){
			$param = array(
				'client_id'     => $clienID,
				'redirect_uri'  => $redirectUri,
				'client_secret' => $clientSecret,
				'code'          => $code,
			);
			$url  = 'https://graph.facebook.com/v2.3/oauth/access_token';
			$json = getJSON($url, $param);
			if(isset($json->error)){
				print_r($json->error);
				exit();
			}
			return $json->access_token;
		}
		public function login($permission = [], $clienID = '', $redirectUri){
			$scope = [];
			foreach ($permission as $key => $value) {
				if($value){
					$scope[] = $key;
				}
			}
			$scope = implode($scope, ',');
			$param = [
				'client_id' => $clienID,
				'redirect_uri' => $redirectUri,
				'scope' => $scope,
			];
			$url = 'https://www.facebook.com/dialog/oauth';
			header('Location: ' . getUrl($url, $param));
		}
		public static function getAvatar($userID)
		{
			// return "";
		}
	}
	/*---------------*/
	$permission = array(
	/*public*/
		'public_profile'                 => 1,
		'user_friends'                   => 1,
		'email'                          => 1,
	/*user*/
		'user_about_me'                  => 0,
		'user_actions.books'             => 0,
		'user_actions.fitness'           => 0,
		'user_actions.music'             => 0,
		'user_actions.news'              => 0,
		'user_actions.video'             => 0,
		'user_actions:{app_namespace}'   => 0,
		'user_birthday'                  => 0,
		'user_education_history'         => 0,
		'user_events'                    => 0,
		'user_games_activity'            => 0,
		'user_hometown'                  => 0,
		'user_likes'                     => 0,
		'user_location'                  => 0,
		'user_managed_groups'            => 1,
		'user_photos'                    => 0,
		'user_posts'                     => 0,
		'user_relationships'             => 0,
		'user_relationship_details'      => 0,
		'user_religion_politics'         => 0,
		'user_tagged_places'             => 0,
		'user_videos'                    => 0,
		'user_website'                   => 0,
		'user_work_history'              => 0,
	/*read*/
		'read_custom_friendlists'        => 0,
		'read_insights'                  => 0,
		'read_audience_network_insights' => 0,
		'read_page_mailboxes'            => 0,

		'publish_actions'                => 0,
		'rsvp_event'                     => 0,
		'ads_read'                       => 0,
		'ads_management'                 => 0,
		'business_management'            => 0,
	/*page*/
		'manage_pages'                   => 1,
		'publish_pages'                  => 0,
		'pages_show_list'                => 0,
		'pages_manage_cta'               => 0,
		'pages_manage_instant_articles'  => 0,
		'pages_messaging'                => 0,
		'pages_messaging_subscriptions'  => 0,
		'pages_messaging_payments'       => 0,
		'pages_messaging_phone_number'   => 0
	);
?>