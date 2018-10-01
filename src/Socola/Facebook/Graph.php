<?php

/**
 * @Author: Socola
 * @Email: TokenTien@gmail.com
 * @Date:   2018-05-14 17:01:11
 * @Last Modified by:   Socola
 * @Last Modified time: 2018-05-14 17:53:01
 */

namespace Socola\Facebook;

use Socola\Facebook\Graph\Group;
use Socola\Facebook\Graph\User;

/**
 *
 */
class Graph
{
	private $accessToken = '';

	public $user;
	public $post;
	public $comment;
	public $group;

	function __construct($accessToken = '')
	{
		$user    = new User;
		$post    = new Post;
		$comment = new Comment;
		$group   = new Group;
		$member  = new Member;
		$this->setAccessToken($accessToken);
	}

	public function setAccessToken($accessToken)
	{
		$this->accessToken = $accessToken;
		$this->user->setAccessToken($accessToken);
		$this->post->setAccessToken($accessToken);
	}
}