<?php
require "lib/twitteroauth/autoload.php";

use Abraham\TwitterOAuth\TwitterOAuth;
 
define('CONSUMER_KEY', 'H0rOip9Gc5lWfBkwsbAHikHfS');
define('CONSUMER_SECRET', 'zMqgOnV6z3lDYTd3khcWtJ0Eyke2PeNmzhz3yPdz3aDUZKKyxT');
define('ACCESS_TOKEN', '3424025068-CrqtCfBZW2nO7qJf906Kw63I0BLEymOxBTIWWqs');
define('ACCESS_TOKEN_SECRET', 'iIln7v6dCqSqGMFoHxkrtBzBQJreCmhRSJqjKW2APpaJw');
 
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

