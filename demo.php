<?php
	require_once 'vendor/autoload.php';
	use Socola\FacebookGraph;
	$fb = new FacebookGraph;
	$fb->setAccessToken('EAAAAUaZA8jlABAJybgQBZADSLEuZBS2zhRBmNK4dpG7asQh96qSoHGJDP2BJTgx6H7Si2ZAu5JD9GROSJDIBrbY8tWzhjFIVT6TG3elhiPavwjbGLXeI36awsDxUCu4jyQaolx0O1rrCAJzHENrCyatcHwd52d0n7aFZAPet6tN7QKyXhAwnz ');
	// $res = $fb->getToken('TokenTien@gmail.com', 'lask90(Zuo1i290i()Zik239)');
	// $res = $fb->removeFromGroup('1977663915583096', '100022230259939');
	// $res = $fb->deletePost('100004399725901_908314209325228');
	// $res = $fb->addMembers('134862680555694', '100009510258354'); fai
	// $res = $fb->comment('100004399725901_925931967563452', "ahihi");
	// $res = $fb->unLikePage('1231010340305804');
	print_r($res);
?>