<?php



require "vendor/autoload.php";

$access_token = 'YeXxLICr94+ENA0R/DHH7QmdqRJPFqTzlDW+IjLdOjiH5cqI+M6wzWKkbnCVhLMrJXnPNQuWm+ueO0DMVXV7MWjvzEPVO20Q7tl3WXll9OOomizqXwg0e5Hqt+6Dm3ucAoeKKhCksu5jlJM2P2GwFQdB04t89/1O/w1cDnyilFU=';

$channelSecret = '75c03f392f6e53d662d6f5a8db9e421f';

$pushID = 'U7ef7a449f2a5c2057eacfc02ba2eb286';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







