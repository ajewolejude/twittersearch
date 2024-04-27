<?php
require "lib/twitteroauth/autoload.php";

use Abraham\TwitterOAuth\TwitterOAuth;
 
define('CONSUMER_KEY', '');
define('CONSUMER_SECRET', '');
define('ACCESS_TOKEN', '');
define('ACCESS_TOKEN_SECRET', '');
 
 //change count to chnage number of tweet to return
$toa = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, ACCESS_TOKEN, ACCESS_TOKEN_SECRET);
$hash = '#'.$_POST["name"];
$query = array(
  "q" => $hash,
  "count" => 50,
);
 
$results = $toa->get('search/tweets', $query);
 
foreach ($results->statuses as $result) {
  echo $result->user->screen_name . ": " . $result->text . "\r\n\r\n\r\n\n\n";
}

