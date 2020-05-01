<?php
$admin = "503177249";

define('API_KEY','1015518603:AAFq734GfOPHwqK3sJ9HeaKj2fNpmBlMHVg');
function del($nomi){
array_map('unlink', glob("step/$nomi.*"));
}
function put($fayl, $nima){
file_put_contents("$fayl", "$nima");
}
function pstep($cid,$zn){
file_put_contents("step/$cid.step",$zn);
}
function step($cid){
$step = file_get_contents("step/$cid.step");
$step += 1;
file_put_contents("step/$cid.step",$step);
}
function ty($ch){
return bot('sendChatAction', [
'chat_id' => $ch,
'action' => 'typing',
]);
}   

function ACL($callbackQueryId, $text = null, $showAlert = false)
{
return bot('answerCallbackQuery', [
'callback_query_id' => $callbackQueryId,
'text' => $text,
'show_alert' => $showAlert,
]);
}

function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}

$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$cid = $message->chat->id;
$cidtyp = $message->chat->type;
$miid = $message->message_id;
$name = $message->chat->first_name;
$user1 = $message->from->username;
$text = $message->text;
$callback = $update->callback_query;
$mmid = $callback->inline_message_id;
$mes = $callback->message;
$mid = $mes->message_id;
$cmtx = $mes->text;
$mmid = $callback->inline_message_id;
$idd = $callback->message->chat->id;
$cbid = $callback->from->id;
$cbuser = $callback->from->username;
$data = $callback->data;
$ida = $callback->id;
$cqid = $update->callback_query->id;
$cbins = $callback->chat_instance;
$cbchtyp = $callback->message->chat->type;
$step = file_get_contents("step/$cid.step");
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$mid = $message->message_id;
$msgs = json_decode(file_get_contents('msgs.json'),true);
$data = $update->callback_query->data;
$type = $message->chat->type;
$text = $message->text;
$cid = $message->chat->id;
$uid= $message->from->id;
$gname = $message->chat->title;
$left = $message->left_chat_member;
$new = $message->new_chat_member;
$name = $message->from->first_name;
$bio = $messenge->from->about;
$repid = $message->reply_to_message->from->id;
$repname = $message->reply_to_message->from->first_name;
$newid = $message->new_chat_member->id;
$leftid = $message->left_chat_member->id;
$newname = $message->new_chat_member->first_name;
$leftname = $message->left_chat_member->first_name;
$username = $message->from->username;
$cmid = $update->callback_query->message->message_id;
$cusername = $message->chat->username;
$repmid = $message->reply_to_message->message_id; 
$ccid = $update->callback_query->message->chat->id;
$cuid = $update->callback_query->message->from->id;

$photo = $message->photo;
$gif = $message->animation;
$video = $message->video;
$music = $message->audio;
$voice = $message->voice;
$sticker = $message->sticker;
$document = $message->document;
$for = $message->forward_from;
$forc = $message->forward_from_chat;
$data = $update->callback_query->data;

$time=date("H:i",strtotime("5 hour"));
$kun=date("d-m-Y",strtotime("5 hour"));
$otex = json_encode(['resize_keyboard'=>true,
'keyboard'=>[
    [['text'=>"Orqaga"],],
]
]);

$logo = json_encode(['resize_keyboard'=>true,
'keyboard'=>[
    [['text'=>"Logo yasash"],['text'=>"Statistika"],],
]
]);

$raqam = json_encode(['resize_keyboard'=>true,
'keyboard'=>[
    [['text'=>"1-logo"],['text'=>"2-logo"],],
    [['text'=>"3-logo"],['text'=>"4-logo"],],
]
]);

$reply_menu = json_encode([
           'resize_keyboard'=>false,
            'force_reply' => true,
            'selective' => true
        ]);
    $repsu = $message->reply_to_message->text;


$kid = 'TemaUz_N1'; $kkid = '@TemaUz_N1'; if(isset($update->message->text)){ $gett = bot('getChatMember',[ 'chat_id' =>$kkid, 'user_id' => $update->message->chat->id, ]); $gget = $gett->result->status; if($gget == "member" or $gget == "creator" or $gget == "administrator"){ } else{ bot('sendMessage',[ 'chat_id'=>$update->message->chat->id, 'message_id'=>$update->message->message_id, 'parse_mode'=>'html', 'text'=>"<b>Salom Siz kanalimizga azo emasiz Shuning uchun bot ishlamaydi siz uchun</b>⛔️ 

<code>Botimizdan to'liq foydalanish uchun</code> @TemaUz_N1 <code>kanaliga a'zo bo'ling</code>✅

Kanalga A'zo bo'lganizdan so'ng qaytadan /start ni bosing",
'reply_markup'=>json_encode([  'inline_keyboard'=>[
    [['text'=>"A'zo bo'lish 🎗",'url'=>'http://t.me/'.$kid.'']],
    [['text'=>"Tekshirish",'callback_data'=>"tek"]], 
] 
]) 
]);
return true;
}   
}


if($text == "/start"){
    bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"*✋Salom botimizga xush kelibsiz.!!! *
👉Bu bot orqali Ramazon oyiga mos logotip yasashingiz mumkin.\nBu botning boshqa botlardan farqi rasmlarda hech qanday ssilka va reklamalar yo'q.\nDo'stlaringizni ham botimizga taklif qiling.\nKirib kelayotgan Ramazon oyi muborak bo'lsin!\n Logo yasash uchun Logo yasash tugmasini bosing,shunchaki kerakli tugmani tanlang va ismingizni yuboring.Hozircha 1,2,3 va 4 raqamli logolar mavjud.Albatta hozircha*
*🎓Admin @OnlineWolf  👨‍💻*",
        'parse_mode'=>'html',
        'reply_markup'=>$logo,
    ]);
    $baza = file_get_contents("azolar.dat");
    file_put_contents("$cid/$cid.step", "logo");
$baza = file_get_contents("azolar.dat");
if(mb_stripos($baza, $cid) !== false){
}else{
file_put_contents("azolar.dat", "$baza\n$cid");
}
}

if($data == "tek"){
    bot('editMessagetext',[
        'chat_id'=>$cid,
        'message_id'=>$mid,
        'text'=>"*✋Salom botimizga xush kelibsiz.!!! *
👉Bu bot orqali Ramazon oyiga mos logotip yasashingiz mumkin.\nBu botning boshqa botlardan farqi rasmlarda hech qanday ssilka va reklamalar yo'q.\nDo'stlaringizni ham botimizga taklif qiling.\nKirib kelayotgan Ramazon oyi muborak bo'lsin!\n Logo yasash uchun Logo yasash tugmasini bosing,shunchaki kerakli tugmani tanlang va ismingizni yuboring.Hozircha 1,2,3 va 4 raqamli logolar mavjud.Albatta hozircha*
*🎓Admin @OnlineWolf  👨‍💻*",
        'parse_mode'=>'html',
        'reply_markup'=>$logo,
    ]);
}

if($text == "1-logo"){
    bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"#1 Ismingizni kiriting.",
        'parse_mode'=>'html',
        'reply_markup'=>$reply_menu,
    ]);
}
if($text == "2-logo"){
    bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"#2 Ismingizni kiriting.",
        'parse_mode'=>'html',
        'reply_markup'=>$reply_menu,
    ]);
}
if($text == "3-logo"){
    bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"#3 Ismingizni kiriting.",
        'parse_mode'=>'html',
        'reply_markup'=>$reply_menu,
    ]);
}
if($text == "4-logo"){
    bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"#4 Ismingizni kiriting.",
        'parse_mode'=>'html',
        'reply_markup'=>$reply_menu,
    ]);
}

if($repsu == "#1 Ismingizni kiriting."){
    bot('SendPhoto',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'photo'=>"https://promaster.xvest.ru/Api1/Ramazon.php?text=".$text,
'caption'=>"Logo Tayyor!
🤖 Tayyorlovchi: @OnlineWolf",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'📡','url'=>'https://telegram.me/TemaUz_N1'],['text'=>'👨‍✈️','url'=>'https://telegram.me/OnlineWolf']]
]
])
]);
}
}
if($repsu == "#2 Ismingizni kiriting."){
    bot('SendPhoto',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'photo'=>"https://promaster.xvest.ru/Api2/Ramazon.php?text=".$text,
'caption'=>"Logo Tayyor!
🤖 Tayyorlovchi: @OnlineWolf",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'📡','url'=>'https://telegram.me/TemaUz_N1'],['text'=>'👨‍✈️','url'=>'https://telegram.me/OnlineWolf']]
]
])
]);
}
}
if($repsu == "#3 Ismingizni kiriting."){
    bot('SendPhoto',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'photo'=>"https://promaster.xvest.ru/Api3/Ramazon.php?text=".$text,
'caption'=>"Logo Tayyor!
🤖 Tayyorlovchi: @OnlineWolf",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'📡','url'=>'https://telegram.me/TemaUz_N1'],['text'=>'👨‍✈️','url'=>'https://telegram.me/OnlineWolf']]
]
])
]);
}
}
if($repsu == "#4 Ismingizni kiriting."){
    bot('SendPhoto',[
'chat_id'=>$chat_id,
'reply_to_message_id'=>$mid,
'photo'=>"https://promaster.xvest.ru/New/Ramazon.php?text=".$text,
'caption'=>"Logo Tayyor!
🤖 Tayyorlovchi: @OnlineWolf",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'📡','url'=>'https://telegram.me/TemaUz_N1'],['text'=>'👨‍✈️','url'=>'https://telegram.me/OnlineWolf']]
]
])
]);
}
}

$yubbi = "Yuboriladigon xabarni kiriting. Xabar turi markdown";
if($text == "/send" and $cid == $admin){
      bot('sendMessage',[
      'chat_id'=>$cid,
      'text'=>$yubbi,
      'reply_markup'=>$reply_menu,
      ]);
    }

    if($repsu=="Yuboriladigon xabarni kiriting. Xabar turi markdown" and $text !="/send"){ 
    $idss=file_get_contents("azolar.dat");
      $idszs=explode("\n",$idss);
      foreach($idszs as $idlat){
      $hamma=bot('sendMessage',[
      'chat_id'=>$idlat,
      'text'=>$text,
      ]);
      }
    }elseif($replyik=="Yuboriladigon xabarni kiriting. Xabar turi markdown" and $text =="/send"){
        bot('sendMessage',[
            'chat_id' => $cid,
            'text'=>"Bu buyruqni ikki marta ishlatib bo'lmaydi.",
            'parse_mode'=>'html',
            'reply_markup'=>$keys1,
        ]);
    }
if($hamma){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"Hammaga habar yetkazildi",
'parse_mode'=>'html',
'reply_markup'=>$keys1,
]);
}
if($text == "Statistika"){
$baza = file_get_contents("azolar.dat");
$obsh = substr_count($baza,"\n");
$gruppa = substr_count($baza,"-");
$lichka = $obsh - $gruppa;

     bot('sendMessage',[
     'chat_id'=>$cid,
     'text'=>"*Bot foydalanuvchilari: $obsh ta*\n\n".date("Y-m-d H:i:s", strtotime('5 hour'))."",
     'parse_mode'=>'markdown',
     ]);

}

?>
