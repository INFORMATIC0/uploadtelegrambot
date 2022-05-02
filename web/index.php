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

switch ($text) {
    case "/start" :
sendMessage($website,$chat_id,"Bienvenido ".$first_name." a FileManager.");
mkdir("./".$user_id);
break;
deafult :
    $ruta = "https://api.telegram.org/bot".$token."/getFile?file_id=".$updates;
    $json = getRemoteFile($ruta);
    $json = json_decode($json,true);
    $file = $json['result']['file_path'];
    $url  = "https://api.telegram.org/bot/file/bot".$token."/".$file;
    sendMessage($website,$chat_id,$url);
break;
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
