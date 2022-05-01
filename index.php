<?php
$tiempo_inicial = microtime(true);
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

sendMessage($website,$chat_id,"hola");

sendPhoto($website,$chat_id,"https://t-link.herokuapp.com/dl/0/_C%C3%93MO_OBTENER_VPS_GRATIS_para_SIEMPRE_ORACLE_CLOUD_2021_uBvZq_MhAB4.mkv","Hola");

sendAudio($website,$chat_id,"https://moodletech.000webhostapp.com/00%20Intro%20(WHITERECORDS).mp3", "hola");

sendDocument($website,$chat_id,"https://t-link.herokuapp.com/dl/0/_C%C3%93MO_OBTENER_VPS_GRATIS_para_SIEMPRE_ORACLE_CLOUD_2021_uBvZq_MhAB4.mkv","hola");

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
$tiempo_final = microtime(true);
sendMessage($website, $chat_id, $tiempo_final-$tiempo_inicial)
?>
