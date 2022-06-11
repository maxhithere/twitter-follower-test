$url = 'https://api.twitter.com/1.1/followers/list.json';
$getfield = '?username=user';
$requestMethod = 'GET';
$twitter = new TwitterAPIExchange($settings);
echo $twitter->setGetfield($getfield)
             ->buildOauth($url, $requestMethod)
             ->performRequest();  
