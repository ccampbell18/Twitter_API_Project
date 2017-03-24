<?php
echo 'test';
session_start();

require "twitteroauth-0.7.2/autoload.php";
use Abraham\TwitterOAuth\TwitterOAuth;

$consumerkey = "7q3Of5yBfWYjc0E6rGupF3r6Q";
$consumersecret = "gddWVH4aNabKFlgWzRmom47nvgZTOuIPfh1EY48EwNCD5tCTzv";
$accesstoken = "	44813481-GIhLL2AZ6kB1V538GtZDel5qcfm5Or5UqD29tDUhv";
$accesstokensecret = "QjEv0axtpkpiPgLsclix0VCmgr55SB2DVvwXn0btw2zCy";

$connection = new TwitterOAuth($consumerkey, $consumersecret, $accesstoken, $accesstokensecret);


$statuses = $connection->get("search/tweets", ["q" => "twitterapi"]);

var_dump($statuses);

?>
