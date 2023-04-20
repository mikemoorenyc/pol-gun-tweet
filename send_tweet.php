<?php


$settings = array(
    'oauth_access_token' => $config["twitter_token"],
    'oauth_access_token_secret' => $config["twitter_token_secret"],
    'consumer_key' => $config["twitter_consumer_key"],
    'consumer_secret' => $config["twitter_secret"]
);
$twitterNew = new TwitterAPIExchange($settings);
			$postfields = array(
				'status' => $tweet_body
);

$postedTweet = $twitterNew->buildOauth('https://api.twitter.com/1.1/statuses/update.json', 'POST')->setPostfields($postfields)->performRequest();


?>
