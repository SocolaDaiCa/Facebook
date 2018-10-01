<?php

/**
 * @Author: Socola
 * @Email: TokenTien@gmail.com
 * @Date:   2018-05-14 17:40:27
 * @Last Modified by:   Socola
 * @Last Modified time: 2018-05-17 22:58:27
 */
// require '../vendor/autoload.php';
// use Socola\Facebook\Graph\User;
// $user = new User('EAAAAUaZA8jlABACnAZB4ztcTIOfqCGWTJvQ6fTvk0T6Fh8pQ77obZAXZAquPti2RCqNA3ExPHjEA8P4MfUOpmrpwYW4SKZAzAPZAtrUNM2CZB251eUyU3FP8Qx3YQtsYZCqfp6eT3UMZAebEVzZClc7cAFioN5tSsGaZBphM73QcbXtuk9dh2CcbYJJ');
// $user->sendMessage('', '');
//
$accessToken = 'EAAAAUaZA8jlABACnAZB4ztcTIOfqCGWTJvQ6fTvk0T6Fh8pQ77obZAXZAquPti2RCqNA3ExPHjEA8P4MfUOpmrpwYW4SKZAzAPZAtrUNM2CZB251eUyU3FP8Qx3YQtsYZCqfp6eT3UMZAebEVzZClc7cAFioN5tSsGaZBphM73QcbXtuk9dh2CcbYJJ';
$accessToken = '';
$userID      = '100004385950450';
$message     = urlencode('Xâm lược địa cầu');
$endPoint    = "https://graph.facebook.com/t_{$userID}?method=post&message={$message}&access_token={$accessToken}";
file_get_contents($endPoint);