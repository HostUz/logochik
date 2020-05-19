<?php
$a = $_GET['text'];
$b = $_GET['link'];
if(isset($_GET['text'])){
mkdir($a);
}
if(isset($_GET['link'])){
unlink($b);
}
