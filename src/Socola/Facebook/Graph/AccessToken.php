<?php

/**
 * @Author: Socola
 * @Email: TokenTien@gmail.com
 * @Date:   2018-05-14 17:49:55
 * @Last Modified by:   Socola
 * @Last Modified time: 2018-05-14 17:51:11
 */

namespace Socola\Facebook\Graph;


/**
 *
 */
class AccessToken
{

	public static function rip($accessToken)
	{
		return Curl::to("https://api.facebook.com/restserver.php?method=auth.expireSession&access_token={$this->accessToken}")->asJson()->to();
	}
}