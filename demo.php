<?php
	require_once 'vendor/autoload.php';
	use Socola\Curl;
	use Socola\FacebookGraph;
	$fb = new FacebookGraph;
	// $res = $fb->getToken('TokenTien@gmail.com', 'lask90(Zuo1i290i()Zik239)');
	echo json_encode($res);
	// $json = $fb->graph('me', ['fields'=> 'groups.limit(250)']);
	// $json = $fb->graph('me', ['fields' => 'groups.limit(2)'], null, 'groups');
	// echo json_encode($json);
	// $x = ['y' => 'y', 'x' => 'x'];
	// $x = json_decode(json_encode($x));
	// $x = (array) $x;
	// echo key($x);
	// print_r($json{0});
	// echo html_entity_decode(Curl::get('http://socolaworld.ga'));
	// // FacebookGraph::test();
	// $fb = new FacebookGraph;
	// // echo(Curl::get(""))
	// Curl::test();
	// print_r($fb->graph('me'));
?>