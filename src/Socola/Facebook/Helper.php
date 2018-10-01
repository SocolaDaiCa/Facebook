<?php

/**
 * @Author: Socola
 * @Email: TokenTien@gmail.com
 * @Date:   2018-05-14 17:18:24
 * @Last Modified by:   Socola
 * @Last Modified time: 2018-05-17 22:52:52
 */

namespace Socola\Facebook;

use Ixudra\Curl\Facades\Curl;

/**
 *
 */
class Helper
{
	protected $accessToken;

	function __construct($accessToken = null)
	{
		$this->accessToken = $accessToken;
	}

	public function setAccessToken($accessToken)
	{
		$this->accessToken = $accessToken;
	}

	public function reaction($targetID, $type)
	{
		$types = ['LIKE', 'LOVE', 'WOW', 'HAHA', 'SAD', 'ANGRY'];
		if(!in_array($type, $types)){
			return false;
		}
		return Curl::to("https://graph.facebook.com/{$targetID}/reactions?type={$type}&method=post&access_token={$this->accessToken}")->asJson()->get();
	}
}