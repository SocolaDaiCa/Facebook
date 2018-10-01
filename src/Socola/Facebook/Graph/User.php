<?php

/**
 * @Author: Socola
 * @Email: TokenTien@gmail.com
 * @Date:   2018-05-14 17:08:13
 * @Last Modified by:   Socola
 * @Last Modified time: 2018-05-17 22:52:47
 */

namespace Socola\Facebook\Graph;

use Ixudra\Curl\Facades\Curl;
use Socola\Facebook\Helper;

/**
 *
 */
class User extends Helper
{
	public function getAvatar($userID)
	{
		return "https://graph.facebook.com/{$userID}/picture?type=large&redirect=true&width=40&height=40";
	}

	public function unfollow($userID, $accessToken)
	{
		return Curl::to("https://graph.facebook.com/{$userID}/subscribers?method=delete&access_token={$this->accessToken}")->asJson()->get();
	}

	public function getFriends($fields = 'id,gender')
	{
		return Curl::to("https://graph.facebook.com/me/friends?limit=5000&fields={$fields}&access_token={$this->accessToken}")->asJson()->get();
	}

	public function unFriend($friendID)
	{
		return Curl::to("https://graph.facebook.com/me/friends?uid={$friendID}&method=delete&access_token={$this->accessToken}")->asJson()->get();
	}

	public function block($userID)
	{
		return Curl::to("https://graph.facebook.com/v2.8/me/blocked?uid={$userID}&method=post&access_token={$this->accessToken}")->asJson()->get();
	}

	public function getBlocks()
	{
		return Curl::to("https://graph.facebook.com/v2.8/me/blocked?access_token={$this->accessToken}")->asJson()->get();
	}

	public function sendMessage($userID, $message)
	{
		return Curl::to("https://graph.facebook.com/t_{$userID}?method=post&message={$message}&access_token={$this->accessToken}")->asJson()->get();
	}
}