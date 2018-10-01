<?php

/**
 * @Author: Socola
 * @Email: TokenTien@gmail.com
 * @Date:   2018-05-14 17:32:58
 * @Last Modified by:   Socola
 * @Last Modified time: 2018-05-14 17:35:55
 */

namespace Socola\Facebook\Graph;

/**
 *
 */
class Page
{
	use Socola\Facebook\Helper;

	public function getAccessTokens()
	{
		return Curl::to("https://graph.facebook.com/me/accounts?access_token={$this->accessToken}")->asJson()->get();
	}

	public function unLike($pageID)
	{
		return Curl::to("https://graph.facebook.com/{$pageID}/likes?method=delete&access_token={$this->accessToken}")->asJson()->get();
	}
}