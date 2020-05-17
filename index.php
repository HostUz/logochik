<?php
$get = file_get_contents("https://islom.uz/");
$ex = explode("\n", $get);

$tong = str_replace("<div id='tc1' class='p_clock '><b>", "", $ex[397]);
$tong = str_replace("</b></div>", "", $tong);

$quyosh = str_replace("<div id='tc2' class='p_clock '><b>", "", $ex[405]);
$quyosh = str_replace("</b></div>", "", $quyosh);

$peshin = str_replace("<div id='tc3' class='p_clock c_active'><b>", "", $ex[412]);
$peshin = str_replace("</b></div>", "", $peshin);

$asr = str_replace("<div id='tc4' class='p_clock '><b>", "", $ex[419]);
$asr = str_replace("</b></div>", "", $asr);

$shom = str_replace("<div id='tc5' class='p_clock '><b>", "", $ex[426]);
$shom = str_replace("</b></div>", "", $shom);

$xufton = str_replace("<div id='tc6' class='p_clock '><b>", "", $ex[433]);
$xufton = str_replace("</b></div>", "", $xufton);

echo "Namoz vaqtlari<br>
🕋Tong: $tong <br>
🕋Quyosh: $quyosh <br>
🕋Peshin: $peshin <br>
🕋Asr: $asr <br>
🕋Shom: $shom <br>
🕋Xufton: $xufton <br>
Yaratuvchi <a href='https://t.me/ProMasterPHP'>Turgunboyev Diyorbek</a>";
?>
