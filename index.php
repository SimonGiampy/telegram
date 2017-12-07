<?php
$mytoken = "487626617:AAFKwEN6EikkZlNveOi7Rb1qdiReOYDQOqg";
$request = "https://api.telegram.org/bot".$mytoken ."/getupdates";

$content = file_get_contents($request);
$update = json_decode($content, true);

print_r($update);
echo "<br />";
$text = $update["result"][2]["message"]["text"];
echo $text;

//http://jsonviewer.stack.hu/
//https://github.com/php-telegram-bot/core#getupdates-installation
//https://www.youtube.com/watch?v=hJBYojK7DO4


//https://api.telegram.org/bot487626617:AAFKwEN6EikkZlNveOi7Rb1qdiReOYDQOqg/setWebhook?url=https://boiling-shore-60433.herokuapp.com/
