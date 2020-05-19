<?php
$get = file_get_contents("https://islom.uz/");
$ex = explode("\n", $get);
$time=date("H:i",strtotime("2 hour"));

$tong1 = str_replace("<div id='tc1' class='p_clock '><b>", "", $ex[397]);
$tong1 = str_replace("</b></div>","",$tong1);

$quyosh1 = str_replace("<div id='tc2' class='p_clock '><b>", "", $ex[405]);
$quyosh1 = str_replace("</b></div>","",$quyosh1);

$peshin1 = str_replace("<div id='tc3' class='p_clock '><b>", "", $ex[412]);
$peshin1 = str_replace("</b></div>","",$peshin1);

$asr1 = str_replace("<div id='tc4' class='p_clock '><b>", "", $ex[419]);
$asr1 = str_replace("</b></div>", "", $asr1);

$shom1 = str_replace("<div id='tc5' class='p_clock '><b>", "", $ex[426]);
$shom1 = str_replace("</b></div>", "", $shom1);

$xufton1 = str_replace("<div id='tc6' class='p_clock '><b>", "", $ex[433]);
$xufton1 = str_replace("</b></div>", "", $xufton1);

if(($time >= "00:00") and ($time <= "04:00")){
$code = "<div id='tc1' class='p_clock c_active'><b>";
}else{
$code = "<div id='tc1' class='p_clock '><b>";
}
if(($time >= "04:00") and ($time <= "07:00")){
$codet = "<div id='tc2' class='p_clock c_active'><b>";
}else{
$codet = "<div id='tc2' class='p_clock '><b>";
}
if(($time >= "07:00") and ($time <= "16:00")){
$codee = "<div id='tc3' class='p_clock c_active'><b>";
}else{
$codee = "<div id='tc3' class='p_clock '><b>";
}
if(($time >= "16:00") and ($time <= "18:00")){
$codes = "<div id='tc4' class='p_clock c_active'><b>";
}else{
$codes = "<div id='tc4' class='p_clock '><b>";
}
if(($time >= "18:00") and ($time <= "20:30")){
$coder = "<div id='tc5' class='p_clock c_active'><b>";
}else{
$coder = "<div id='tc5' class='p_clock '><b>";
}
if(($time >= "20:30") and ($time <= "23:59")){
$cod = "<div id='tc6' class='p_clock c_active'><b>";
}else{
$cod = "<div id='tc6' class='p_clock '><b>";
}

$tong = str_replace($code, "", $ex[397]);
$tong = str_replace("</b></div>","",$tong);
$tong = trim($tong);
$quyosh = str_replace($codet, "", $ex[405]);
$quyosh = str_replace("</b></div>","",$quyosh);
$quyosh = trim($quyosh);
$peshin = str_replace($codee, "", $ex[412]);
$peshin = str_replace("</b></div>","",$peshin);
$peshin = trim($peshin);
$asr = str_replace($codes, "", $ex[419]);
$asr = str_replace("</b></div>", "", $asr);
$asr = trim($asr);
$shom = str_replace($coder, "", $ex[426]);
$shom = str_replace("</b></div>", "", $shom);
$shom = trim($shom);
$xufton = str_replace($cod, "", $ex[433]);
$xufton = str_replace("</b></div>", "", $xufton);
$xufton = trim($xufton);
echo "Namoz vaqtlari<br>
Tong: $tong <br>
Quyosh: $quyosh <br>
Peshin: $peshin <br>
Asr: $asr <br>
Shom: $shom <br>
Xufton: $xufton <br>";
?>
