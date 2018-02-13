<?php
	namespace Socola;

	use Socola\Curl;

	class Graph
	{
		protected $accessToken;
		/* User */
		public static function getAvatar($userID)
		{
			return "https://graph.facebook.com/{$userID}/picture?type=large&redirect=true&width=40&height=40";
		}
		public function unFriend($targeID)
		{
			$endPoint = "https://graph.facebook.com/me/friends?uid={$targeID}&method=delete&access_token={$this->accessToken}";
			return Curl::getJSON($endPoint);
		}
		// public function isDefaultAvatar($userID)
		// {
		// 	$endpoint = "Check avatar defalt https://graph.facebook.com/<USER_ID>/picture?redirect=false s_silhouette == TRUE thì đó là avatar mặc định Kiểm tra";
		// 	return Curl::getJSON($endpoint);
		// }
		/* Post */
		public function deletePost($postID)
		{
			$endPoint = "https://graph.facebook.com/{$postID}?method=delete&access_token={$this->accessToken}";
			return Curl::getJSON($endPoint);
		}
		public function comment($postID, $message)
		{
			$endPoint = "https://graph.facebook.com/{$postID}/comments?method=post&message={$message}&access_token={$this->accessToken}";
			return Curl::getJSON($endPoint);
		}
		/* Group */
		public function removeFromGroup($groupID, $targetID)
		{
			$endPoint = "https://graph.facebook.com/{$groupID}/members?method=delete&member={$targetID}&access_token={$this->accessToken}";
			return Curl::getJSON($endPoint);
		}
		public function addMembers($groupID, $targetID)
		{
			$endPoint = "https://graph.facebook.com/{$groupID}/members?method=post&member={$targetID}&access_token={$this->accessToken}";
			return Curl::getJSON($endPoint);
		}
		/* page */
		public function unLikePage($pageID)
		{
			$endPoint = "https://graph.facebook.com/{$pageID}/likes?method=delete&access_token={$this->accessToken}";
			return Curl::getJSON($endPoint);
		}

	}
?>