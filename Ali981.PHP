<?php
ob_start();
define('API_KEY', '1683456514:AAECkEqsN0G9jsSabSfB0izCzVB4CnhRtH4');
echo file_get_contents("https://api.telegram.org/bot" . API_KEY . "/setwebhook?url=" . $_SERVER['SERVER_NAME'] . "" . $_SERVER['SCRIPT_NAME']);

function bot($method, $datas = [])
  {
  $url = "https://api.telegram.org/bot" . API_KEY . "/" . $method;
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $datas);
  $res = curl_exec($ch);
  if (curl_error($ch))
    {
    var_dump(curl_error($ch));
    }
    else
    {
    return json_decode($res);
    }
  }

$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$chat_id = $message->chat->id;
$text = $message->text;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id2 = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
$from_id = $message->from->id;
$name = $update->message->from->first_name;
$from_id = $message->from->id;
$sudo = file_get_contents("ids.txt");
$u = explode("\n",file_get_contents("memb.txt"));
$c = count($u)-1;
$modxe = file_get_contents("usr.txt");
$chs = file_get_contents('ch.txt');
$buy = file_get_contents("buy.txt");
$admin = 1533027960;
$sudo = 1533027960;
$username = $update->message->from->username;
$reply = $message->reply_to_message->message_id;
$list = file_get_contents("blocklist.txt");
$rep = $message->reply_to_message->forward_from; 
$id = $rep->id; 
$chs = "php88";
$ch = "mroan1235";
$username = $update->message->from->username;
$join = bot('getChatMember', ["chat_id" => "@php88", "user_id" => $from_id])->result->status;

if ($message && $join == 'left') {
  bot('sendMessage', ['chat_id' => $chat_id, 'text' => "- عليك الاشتراك في القناة ليتم تشغيل البوت .'🚫", 'reply_markup' => json_encode(['inline_keyboard' => [[['text' => '• اضغط هنا للاشتراك - 🔱 ', 'url' => 'https://t.me/php88']]]]) ]);
  bot("sendmessage",[
    "chat_id"=>$sudo,
    "text"=>"- العضو قام بألاشتراك في قناة البوت ، 📌
- معلومات العضو الذي قام بألاشتراك ؛

• الاسم ؛ $name 
• الايدي ؛ $from_id
• المعرف ؛ @$username
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎	",
    ]);
  die();
}

$ebu = explode("\n",$list);
if(in_array($from_id,$ebu)){
    bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"▪️ انت محظور من قبل صاحب البوت ،
▫️ لا يمكنك استخدام البوت ، 🚫
 ﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
[• اضغط هنا وتابع جديدنا 🌐؛](https://t.me/$chs)
 ",
 'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
      ]);
    
}

function wr($type,$text,$id){
  $str = str_split(strtolower($text));
  switch ($type) {
  	case 'khrz':
      $url = 'https://ddyd.000webhostapp.com/khz/';
      break;
      case 'yiu':
      $url = 'https://ddyd.000webhostapp.com/phoz1/';
      break;
      case 'ha':
      $url = 'https://ddyd.000webhostapp.com/klx7/';
      break;
      case 'ci':
      $url = 'https://oa-74.000webhostapp.com/halkat/';
      break;
      case 'br':
      $url = 'https://oa-74.000webhostapp.com/lmarsase/';
      break;
      case 'stone':
      $url = 'https://oa-74.000webhostapp.com/kears/';
      break; 
      case 'fire':
      $url = 'https://ddyd.000webhostapp.com/psz/';
      break;
      case 'ca':
      $url = 'https://oa-74.000webhostapp.com/jooklet/';
      break;
      case 'ward':
      $url = 'https://oa-74.000webhostapp.com/ward/';
      break;
      case 'cand3':
      $url = 'http://devel-point.ga/cand/photos3z/';
      break;
      case 'lma':
      $url = 'https://ddyd.000webhostapp.com/lmko7/';
      break;
      case 'kle':
      $url = 'https://oa-74.000webhostapp.com/kletr/';
      break;
      case 'wrd':
      $url = 'https://ddyd.000webhostapp.com/photo5t/';
      break;
      case 'rml':
      $url = 'https://ddyd.000webhostapp.com/rml7e/';
      break;
      case 'alw':
      $url = 'https://ddyd.000webhostapp.com/alwu3/';
      break;
      case 's':
      $url = 'https://oa-74.000webhostapp.com/shame/';
      break;
      case 'n':
      $url = 'https://bl-saadmohammed.000webhostapp.com/nj3/';
      break;
      case 'w':
      $url = 'https://sd-saadmohammed.000webhostapp.com/wae/';
      break;
      case 'k':
      $url = 'https://bl-saadmohammed.000webhostapp.com/ke3/';
      break;
      case 'hl1':
      $url = 'https://bl-saadmohammed.000webhostapp.com/hl1o/';
      break;
      case 'hl2':
      $url = 'https://bl-saadmohammed.000webhostapp.com/hl2o/';
      break;
      case 'w1':
      $url = 'https://bl-saadmohammed.000webhostapp.com/w1ae/';
      break;
      case 'w2':
      $url = 'https://bl-saadmohammed.000webhostapp.com/w2ae/';
      break;
      case 'w3':
      $url = 'https://bl-saadmohammed.000webhostapp.com/w3ae/';
      break;
      case 'sm':
      $url = 'https://bl-saadmohammed.000webhostapp.com/smv/';
      break;
      case 'ba':
      $url = 'https://bl-saadmohammed.000webhostapp.com/banz/';
      break;
      case 'kt':
      $url = 'https://bl-saadmohammed.000webhostapp.com/kto0/';
      break;
      case 'd3':
      $url = 'https://bl-saadmohammed.000webhostapp.com/d3zh/';
      break;
      case 'to':
      $url = 'https://bl-saadmohammed.000webhostapp.com/to/';
      break;
      case 'nj':
      $url = 'https://bl-saadmohammed.000webhostapp.com/nj0/';
      break;
      case 'hd':
      $url = 'https://bl-saadmohammed.000webhostapp.com/hdk1/';
      break;
      case 'zj':
      $url = 'https://bl-saadmohammed.000webhostapp.com/zjp/';
      break;
      case 'nf':
      $url = 'https://bl-saadmohammed.000webhostapp.com/nfk1/';
      break;
      case 'w4':
      $url = 'https://bl-saadmohammed.000webhostapp.com/w4ae/';
      break;
      case 'jd':
      $url = 'https://denel.000webhostapp.com/jde0/';
      break;
      case 'w5':
      $url = 'https://bl-saadmohammed.000webhostapp.com/w5ae/';
      break;
      case 'w6':
      $url = 'https://denel.000webhostapp.com/w6ae/';
      break;
      case 'k2':
      $url = 'https://oa-74.000webhostapp.com/carton/';
      break;
      case 'love':
      $url = 'https://denel.000webhostapp.com/love0/';
      break;
      case 'neo':
      $url = 'https://denel.000webhostapp.com/neoj/';
      break;
      case 'mhar':
      $url = 'https://denel.000webhostapp.com/mharm/';
      break;
      case 'love2':
      $url = 'https://denel.000webhostapp.com/love20/';
      break;
      case 'hd2':
      $url = 'https://rdb1.000webhostapp.com/c/';
      break;
      case 'hd3':
      $url = 'https://rdb1.000webhostapp.com/s/';
      break;      
      case 'cc':
      $url = 'https://rdb1.000webhostapp.com/cc/';
      break;
      case 'rr':
      $url = 'https://rdb1.000webhostapp.com/rr/';
      break;
      case 'kz':
      $url = 'https://denel.000webhostapp.com/kzha/';
      break;  
      case 'thb':
      $url = 'https://denel.000webhostapp.com/thb/';
      break;    
      case 'jo2':
      $url = 'https://oa-74.000webhostapp.com/joklet2/';
      break;
      case 'cii':
      $url = 'https://oa-74.000webhostapp.com/halkat';
      break;
  }
    $i = 0;
    foreach($str as $char){$im[] = $url."".$char.'.jpg';}
    $q = getimagesize($im[0]);
    $num = $q[0]; 
    
    $img = imagecreatetruecolor($num * count($im), $q[1]);
   while ($i < count($im)) {
      $num1 = $num * $i;
      $cur = imagecreatefromjpeg($im[$i]);
      imagecopy($img, $cur, $num1, 0, 0, 0, getimagesize($im[0])[0], getimagesize($im[0])[1]);
      $i++;
    }
  imagejpeg($img,$id.'.jpg');
}

if($text && $from_id !== $sudo){
bot('forwardMessage',[
'chat_id'=>$sudo,
'from_chat_id'=>$chat_id,
'message_id'=>$update->message->message_id,
'text'=>$text,
]);
}

if ($text and $message->reply_to_message && $text!="/info" && $text!="/ban" && $text!="/unban" && $text!="/forward") {
  bot('sendMessage',[
'chat_id'=>$message->reply_to_message->forward_from->id,
    'text'=>$text,
    ]);
}

if ($text == '/start' && $chat_id != $list){
  bot('sendMessage', [
  'chat_id' => $chat_id, 
  'text' => "- مرحبا بك ؛ [$name](tg://user?id=$chat_id)

• في بوت الكتابة على الصور ، 
• يحتوي البوت على اكثر من نوع من الصور ، ستتم اضافتها في التحديث القادم 🐰

• كل ماعليك ارسال اسمك باللغة الانكليزيةه واختيار نوع من انواع الصور وسوف يتم تصميم اسمك من قبل البوت ، 

• لا ترسال الرموز والمسافات والسمايلات والاحرف العربية ، ⚠️ لان البوت لايصمم الصور فقط للحروف الانكليزية
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
[• اضغط هنا وتابع جديدنا 🌐؛](https://t.me/$chs)", 'parse_mode' => "MarkDown", 'disable_web_page_preview' => true, 'reply_markup' => json_encode(['inline_keyboard' => [[['text' => "• اضغط هنا وتابع جديدنا 🌈؛", 'url' => "https://t.me/$chs"]], ]]) ]);
  if ($update && !in_array($chat_id, $u)) {
    file_put_contents("memb.txt", $chat_id."\n",FILE_APPEND);
  }
  }

if ($text == "/admin" and $chat_id == $admin ) {
    bot('sendMessage',[
        'chat_id'=>$chat_id,
      'text'=>"- اهلا بك مطوري 🔱؛ [$name](tg://user?id=$chat_id) ،

• قم باختيار ماتريد من الاسفل للعودة الى قائمةه التصاميم ارسل /start ! ، ⚙",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
        'reply_markup'=>json_encode([
            'inline_keyboard'=>[
[['text'=>'- رسالةه للكل 📮؛','callback_data'=>'ce'],['text'=>'- المشتركين ⚜؛','callback_data'=>'co']],
[['text'=>'• ᴏᴍᴀʀ ʜᴀѕʜᴍ ‏ ⌯┆-‏𖤍 •','url'=>"https://t.me/$chs"]],
            ]
            ])
        ]);
}

if ($message->reply_to_message && $text== "/ban") {
			$myfile2 = fopen("blocklist.txt", "a") or die("Unable to open file!");	
			fwrite($myfile2, "$id\n");
			fclose($myfile2);
			bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"📌┇تم حظر العضو من البوت ،
📃┇ايدي العضو ؛ $id .",
]);
			bot('sendmessage',[
'chat_id'=>$id,
'text'=>"⚠️┇عذرا عزيزي تم حظرك من هذا البوت ،
📮┇تابع قناة البوت ؛ @$ch .",
]);
		}
		
		if($message->reply_to_message && $text=="/unban"){
			$newlist = str_replace($id,"",$list);
			file_put_contents("blocklist.txt",$newlist);
			bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"📌┇تم الغاء حظر العضو ،
📃┇ايدي العضو ؛ $id .",
]);
			bot('sendmessage',[
'chat_id'=>$id,
'text'=>"⚠️┇ عزيزي تم الغاء حظرك من هذا البوت ،
📮┇تابع قناة البوت ؛ @$ch .",
]);
}

if ($text != '/start' && $text != '/admin' && $text != '_' && $text != '.' && $text != '/' && $text != '-' && $text != '@' && $chat_id != $list) {
	if(preg_match('/([a-z])|([A-Z])/i',$text)){
		bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"- اختر نوع الكتابةه الذي تريدة 🔽؛
      - الأسم ؛ $text .",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
      'reply_markup' => json_encode([
 'inline_keyboard' => [
[['text'=>'• بالورد ، 🌼 ','callback_data'=>'ward-'.$text],['text'=>'• بالكارتون ، 🐰','callback_data'=>'k2-'.$text]],
[['text' => '• بالجكليت 2  ، ⛱', 'callback_data' => 'jo2-' . $text],['text' => '• بالشمع ، 🕯', 'callback_data' => 's-' . $text]],
[['text' => 'قريبا', 'callback_data' => 'fire-' . $text], ['text' => '• بالخرز ، 🏔', 'callback_data' => 'stone-' . $text]],
[['text'=>'• بالماع رصاصي ، 🔰','callback_data'=>'br-'.$text],['text'=>'• بالحلقة ، 💍','callback_data'=>'ci-'.$text]],
[['text'=>'• قريبا','callback_data'=>'ha-'.$text],['text'=>'• بالجكليت ، 🍬','callback_data'=>'ca-'.$text]],
[['text'=>'• قريبا ، ✨','callback_data'=>'lma-'.$text],
['text'=>'• بالگليتر ، 🌟','callback_data'=>'kle-'.$text]],
[['text'=>'• لشراء البوت راسلني ، ❇️ •','url'=>"https://t.me/HHHH2Q"]],

]]) ]);

} else 
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>'• ارسل فقط حروف انكليزية ، 
• بدون مسافات وعلامات وسمايلات واحرف عربية ، ⚠️'
  ]);
  }
  

if($data == "co" and $update->callback_query->message->chat->id == $admin ){ 
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"
        عدد مشتركين البوت📢 :- [ $c ] .
        ",
        'show_alert'=>true,
]);
}
if($data == "ce" and $update->callback_query->message->chat->id == $admin){ 
    file_put_contents("usr.txt","yas");
    bot('EditMessageText',[
    'chat_id'=>$update->callback_query->message->chat->id,
    'message_id'=>$update->callback_query->message->message_id,
    'text'=>"▪️ ارسل رسالتك الان 📩 وسيتم نشرها لـ [ $c ] مشترك . 
   ",
    'reply_markup'=>json_encode([
        'inline_keyboard'=>[
[['text'=>' الغاء 🚫 •','callback_data'=>'off']]    
        ]
    ])
    ]);
}
if($data == "off" and $update->callback_query->message->chat->id == $admin){ 
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
      'text'=>"
☑️￤اهلا عزيزي :- `المطور` .
▫️￤اليك الاوامر الان حدد ماتريده 📩
-
",
        'reply_markup'=>json_encode([
            'inline_keyboard'=>[
[['text'=>'- رسالةه للكل 📮؛','callback_data'=>'ce'],['text'=>'- المشتركين ⚜؛','callback_data'=>'co']],
            ]
            ])
]);
file_put_contents('usr.txt', '');
}

if($text and $modxe == "yas" and $chat_id == $admin ){
    for ($i=0; $i < count($u); $i++) { 
        bot('sendMessage',[
          'chat_id'=>$u[$i],
          'text'=>"
          $text
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,

]);
    file_put_contents("usr.txt","no");

} 
}
$data = explode('-',$data);
if($data[0] and $data[1]){
  wr($data[0],$data[1],$chat_id2);
  
bot('answercallbackquery', [
			'callback_query_id' => $update->callback_query->id,
			'text' => "- انتظر قليلا جار التصميم ... 💛"
		]);    
		bot('deletemessage',[
  'chat_id'=>$chat_id2,
  'message_id'=>$message_id2  
  ]);
    $dats = getimagesize("$chat_id2.jpg");
    $dest = imagecreatefromjpeg("$chat_id2.jpg");
  $src = imagecreatetruecolor($dats[0] ,$dats[1] + 1920);
  imagefill($src, 0, 0, imagecolorallocate($src,255,255,255));
  imagecopy($src, $dest, 0, 1000, 0, 0 ,$dats[0], $dats[1] );
  imagejpeg($src,"$chat_id2"."1.jpg");
  imagedestroy($src);
  imagedestroy($dest);  
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg'),
       'caption'=>"• تم تصميم الصورة الاولى بدون توسيط ، 🇮🇶'
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
- قناة البوت ؛ @$chs ، 📢'",
    ]);
  bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'1.jpg'),
       'caption'=>"• تم تصميم الصورة الثانيةه بالتوسيط ، 

⚠️ ، لا عليك بطول الصورة فعند وضعها يستخدم وسط الصورة فقط ،(الحجم المربع) 🇮🇶'﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
- قناة البوت ؛ @$chs ، 📢'",
    ]); 
  unlink($chat_id2.'1.jpg');
unlink($chat_id2.'.jpg');  
}
