<?php
$token = "5321906055:AAEEjFuyO7IsFZQJTLGy41ZFHtvbn_dq52A";

$website = "https://api.telegram.org/bot".$token;

$updates = file_get_contents("php://input");

$updates = json_decode($updates , TRUE);

$chat_id = $updates["message"]["chat"]["id"];
$text = $updates["message"]["text"];
$user_id = $updates["message"]["chat"]["id"];
$first_name = $updates["message"]["chat"]["first_name"];
$last_name = $updates["message"]["chat"]["last_name"];
$username = $updates["message"]["chat"]["username"];

if ($text==="/start") {
sendMessage($website,$chat_id,"Bienvenido ".$first_name." a FileManager.");
mkdir("./".$user_id);
} else {
if (str_contains($updates, "document")) {
$file_id = $updates["message"]["document"]["file_id"];
$file_name = $updates["message"]["document"]["file_name"];
if (str_contains($filename, ".php")) {} else {
if(copy(file_get_contetns($website."/GetFile?file_id=".$file_id),"./".$userid."/".$file_name);) {
sendMessage($website,$chat_id,"FileManager: https://botphp.herokuapp.com/".$userid."/".$file_name);
}
}
}
}

function sendMessage($website, $chatId, $text) {
$url = $website."/sendmessage?chat_id=".$chatId."&text=".urlencode($text)."&parse_mode=HTML";
file_get_contents($url);
}
function sendPhoto($website, $chatId, $photourl, $text) {
$url = $website."/sendphoto?chat_id=".$chatId."&photo=".$photourl."&caption=".$text;
file_get_contents($url);
}
function sendAudio($website, $chatId, $audiourl, $text) {
$url = $website."/sendaudio?chat_id=".$chatId."&audio=".$audiourl."&caption=".$anwser;
file_get_contents($url);
}
function sendDocument($website, $chatId, $documenturl, $text) {
$url = $website."/senddocument?chat_id=".$chatId."&document=".$documenturl."&caption=".$text;
file_get_contents($url);
}
?>
