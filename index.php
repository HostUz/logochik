<?php

if (!file_exists('madeline.php')) {
    copy('https://phar.madelineproto.xyz/madeline.php', 'madeline.php');
}
include 'madeline.php';

$MadelineProto = new \danog\MadelineProto\API('session.madeline');
$MadelineProto->start();
$time=date("H:i",strtotime("2 hour"));
$hour = date("H",strtotime("2 hour"));
$kun=date("d-m-Y",strtotime("2 hour"));
 $nik = ["OnlineWolf","Xudoberdi"];
  $nikrand=array_rand($nik);
  $niktxt="$nik[$nikrand]";
$MadelineProto->account->updateProfile(['first_name'=>"$time $niktxt $time",'about'=>"📆$kun ▪️ ⏰$time Vaqt ko'rsatadi kimni kim ekanligini!"]);

$yil = date("Y", strtotime("2 hour"));

$logo = "https://promaster.xvest.ru/OnlineWolf/index.php?text=ferghana";

if($yil == "2020"){
header('Content-type: image/jpg');
file_put_contents("got.jpg",file_get_contents($logo));
$info = $MadelineProto->get_full_info('me');
$inputPhoto = ['_' => 'inputPhoto', 'id' => $info['User']['photo']['photo_id'], 'access_hash' => $info['User']['access_hash'], 'file_reference' => 'bytes'];
$deletePhoto = $MadelineProto->photos->deletePhotos(['id'=>[$inputPhoto]]);
}
$MadelineProto->photos->updateProfilePhoto(['file' => "got.jpg" ]);
?>
