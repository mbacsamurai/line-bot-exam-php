<?php



require "vendor/autoload.php";

$access_token = 'YeXxLICr94+ENA0R/DHH7QmdqRJPFqTzlDW+IjLdOjiH5cqI+M6wzWKkbnCVhLMrJXnPNQuWm+ueO0DMVXV7MWjvzEPVO20Q7tl3WXll9OOomizqXwg0e5Hqt+6Dm3ucAoeKKhCksu5jlJM2P2GwFQdB04t89/1O/w1cDnyilFU=';

$channelSecret = '8d4c20b0e8e9661750be1c0d6fe2d53e';

$pushID = 'Ua2b39bb7170191e0c26fb595d234bd28';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('ผลหวยยี่กี่ \n \n /n 354');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







