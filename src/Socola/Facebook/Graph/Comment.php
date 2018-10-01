<?php

/**
 * @Author: Socola
 * @Email: TokenTien@gmail.com
 * @Date:   2018-05-14 17:26:02
 * @Last Modified by:   Socola
 * @Last Modified time: 2018-05-14 17:57:52
 */

namespace Socola\Facebook\Graph;

use Ixudra\Curl\Facades\Curl;


/**
 *
 */
class Comment
{
	use Socola\Facebook\Helper;

	public function post($targetID, $message)
	{
		return Curl::to("https://graph.facebook.com/{$postID}/comments?method=post&message={$message}&access_token={$this->accessToken}")->asJson()->get();
	}

	public function get($targetID)
	{
		// return $this->graph($pos)
	}

	public function put($commentID, $message)
	{

	}

	public function delete($commentID)
	{

	}
}