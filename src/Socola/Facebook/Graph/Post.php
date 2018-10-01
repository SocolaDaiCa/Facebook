<?php

/**
 * @Author: Socola
 * @Email: TokenTien@gmail.com
 * @Date:   2018-05-14 17:15:43
 * @Last Modified by:   Socola
 * @Last Modified time: 2018-05-14 17:55:58
 */

namespace Socola\Facebook\Graph;

use Ixudra\Curl\Facades\Curl;

/**
 *
 */
class Post
{
	private $accessToken;

	public function setAccessToken($accessToken)
	{
		$this->accessToken = $accessToken;
	}

	public function post($targetID, $message)
	{
		return Curl::to("https://graph.facebook.com/{targetID}/feed?method=post&message={$message}&access_token={$this->accessToken}")->asJson()->get();
	}

	public function postImage($targetID, $message, $imageURL)
	{
		$endPoint = "https://graph.facebook.com/{$targetID}/photos?method=post&url={$imageURL}&message={$message}&access_token={$this->accessToken}";
	}

	public function delete($postID)
	{
		return Curl::to("https://graph.facebook.com/{$postID}?method=delete&access_token={$this->accessToken}")->asJson()->get();
	}
}