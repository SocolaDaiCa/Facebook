<?php

/**
 * @Author: Socola
 * @Email: TokenTien@gmail.com
 * @Date:   2018-05-14 17:45:28
 * @Last Modified by:   Socola
 * @Last Modified time: 2018-05-14 17:47:42
 */

namespace Socola\Facebook\Graph;

use Ixudra\Curl\Facades\Curl;



/**
 *
 */
class Member
{
	use Socola\Facebook\Helper;

	public function add($groupID, $userID)
	{
		return Curl::to("https://graph.facebook.com/{$groupID}/members?method=post&member={$userID}&access_token={$this->accessToken}")->asJson()->get();
	}

	public function delete($groupID, $userID)
	{
		return Curl::getJSON("https://graph.facebook.com/{$groupID}/members?method=delete&member={$userID}&access_token={$this->accessToken}");
	}
}