<?php

/*
By : mroan8

Ch : @mroan1235
*/
define('API_KEY','1682490055:AAEa3VrnE0sEbX5-vJ4sAQs_fuS624SW0gk');
echo file_get_contents("https://api.telegram.org/bot" . API_KEY . "/setwebhook?url=" . $_SERVER['SERVER_NAME'] . "" . $_SERVER['SCRIPT_NAME']);
function teamMroan($method,$datas=[]){
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

 function sendmessage($chat_id, $text, $model){
	teamMroan('sendMessage',[
	'chat_id'=>$chat_id,
	'text'=>$text,
	'parse_mode'=>$mode
	]);
	}
	function sendaction($chat_id, $action){
	teamMroan('sendchataction',[
	'chat_id'=>$chat_id,
	'action'=>$action
	]);
	}
	function Forward($Memoo,$Memooo,$TeamMemo)
{
    bot('ForwardMessage',[
        'chat_id'=>$Memoo,
        'from_chat_id'=>$Memooo,
        'message_id'=>$TeamMemo
    ]);
}
function sendphoto($chat_id, $photo, $action){
	teamMroan('sendphoto',[
	'chat_id'=>$chat_id,
	'photo'=>$photo,
	'action'=>$action
	]);
	}
function senddocument($chat_id,$document,$caption){
    teamMroan('senddocument',[
        'chat_id'=>$chat_id,
        'document'=>$document,
        'caption'=>$caption
    ]);
}
	function objectToArrays($object)
    {
        if (!is_object($object) && !is_array($object)) {
            return $object;
        }
        if (is_object($object)) {
            $object = get_object_vars($object);
        }
        return array_map("objectToArrays", $object);
    }

$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$message_id = $update->message->id;
$chat_id = $message->chat->id;
$text = $message->text;
$name = $update->message->from->first_name;
$username = $update->message->from->username;
$mroan = file_get_contents("mroan.txt");
$ADMIN = 175279237;
mkdir("data/$chat_id");
$chatid = $update->callback_query->message->chat->id;
$data = $update->callback_query->data;
$message_id = $update->callback_query->message->message_id;

if($text == '/start'){
teamMroan('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"
➖➖➖➖➖➖➖➖➖➖
مرحبا بك في بوت التحميل من اليوتيوب 
البوت يقوم بتحميل المقطع بصيغة mp4 فقط .
➖➖➖➖➖➖➖➖➖➖
",
 'parse_mode'=>"MarkDown",
  'reply_markup'=>json_encode([
            'inline_keyboard'=>[
              [
              ['text'=>"الدخول الى البوت",'callback_data'=>"b"]
              ],
              [
              ['text'=>"instagram",'url'=>"http://t.me/c_941"]
              ],
              [
              ['text'=>"</>ۦٰ ⱮℜᎧÂＮ ❀🎼🌸℡³¹³",'url'=>"http://t.me/mroan1235"]
              ],
              [
              ['text'=>"php files",'url'=>"http://t.me/php88"]
              ]
              ]
        ])
  ]);
}

elseif($text == "/admin" && $chat_id == $ADMIN){
sendaction($chat_id, typing);
        teamMroan('sendmessage', [
                'chat_id' =>$chat_id,
                'text' =>"عزيزي المطور ، مرحبًا بك في لوحة إدارة البوت .",
                'parse_mode'=>'html',
      'reply_markup'=>json_encode([
            'keyboard'=>[
              [
              ['text'=>"المشتركين"],['text'=>"اذاعة"]
              ]
              ],'resize_keyboard'=>true
        ])
            ]);
        }
elseif($text == "المشتركين" && $chat_id == $ADMIN){
	sendaction($chat_id,'typing');
    $user = file_get_contents("Member.txt");
    $member_id = explode("\n",$user);
    $member_count = count($member_id) -1;
	sendmessage($chat_id , " عدد المشتركين هو : $member_count" , "html");
}
elseif($text == "اذاعة" && $chat_id == $ADMIN){
    file_put_contents("data/$chat_id/mroan.txt","bc");
	sendaction($chat_id,'typing');
	teamMroan('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"أرسل الرسالة ليتم نشرها للمشتركين البوت ",
    'parse_mode'=>'html',
    'reply_markup'=>json_encode([
      'keyboard'=>[
	  [['text'=>'/panel']],
      ],'resize_keyboard'=>true])
  ]);
}
elseif($mroan == "bc" && $chat_id == $ADMIN){
    file_put_contents("data/$chat_id/mroan.txt","none");
	SendAction($chat_id,'typing');
	teamMroan('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>" تم ارسال رسالتك لمشتركين البوت",
  ]);
	$all_member = fopen( "Member.txt", "r");
		while( !feof( $all_member)) {
 			$user = fgets( $all_member);
			SendMessage($user,$text,"html");
		}
}

elseif($data == "b"){
teamMroan('editmessagetext',[
 'chat_id'=>$chatid,
  'message_id'=>$message_id,
 'text'=>"مرحبا بك في بوت تحميل الفيديو من اليوتيوب √

قم بأختيار تحميل فيديو ، من ثم ارسل رابط الفيديو من اليوتيوب الى البوت ليتم تحميلة في ثواني ، 

لتفاصيل اكثر اختار مساعدة .",
 'parse_mode'=>"MarkDown",
 'reply_markup'=>json_encode([
            'inline_keyboard'=>[
              [
              ['text'=>"تحميل الفيديو",'callback_data'=>"f"], ['text'=>"مساعدة",'callback_data'=>"g"]
              ]
              ]
        ])
 ]);
}

elseif ($data == "f") {
file_put_contents("mroan.txt","f");
sendaction($chat_id,'typing');
  teamMroan('sendmessage',[
 'chat_id'=>$chatid,
  'message_id'=>$message_id,
    'text'=>"الان ارسل رابط الفيديو ليتم تحميلة",
  ]);
 }
elseif($mroan== "f" ){
file_put_contents("mroan.txt","0");
$A = $message->text;
    $memo1 = json_decode(file_get_contents("https://api.unblockvideos.com/youtube_downloader?id=".$text."&selector=mp4"));
    $tik2 = objectToArrays($memo1);
    $ur = $tik2["0"]["url"];
	sendaction($chat_id,'typing');
	teamMemo('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"تحميل 📤 .......
انتظر قليلا يتم تحميل مقطع الفيديو",
  ]);
teamMemo('sendmessage',[
    'chat_id'=>"@mroan8",
    'text'=>"قام احد الاشخاص بتحميل فيديو 

اليك التفاصيل 

الاسم : $name
اليوزر : @$username
الايدي : $chat_id

رابط الفيديو :
‌$text",
  ]);
  sendaction($chat_id,'upload_document');
		teamMroan('senddocument',[
        'chat_id'=>$chat_id,
    'document'=>$ur,
    'file_name'=>"@mroan.mp4",
  ]);
  teamMemo('senddocument',[
        'chat_id'=>"@mroan8",
    'document'=>$ur,
    'file_name'=>"@mroan.mp4",
  ]);
}

 elseif ($data == "g") {
sendaction($chat_id,'typing');
  teamMroan('sendmessage',[
 'chat_id'=>$chatid,
  'message_id'=>$message_id,
    'text'=>"قسم المساعدة 

 يمكنك تحميل اي مقطع فيديو من اليوتيوب بصيغة عالية و حفضه في جهازك من خلال الضغط على زر

 & تحميل الفيديو & 
 من ثم ارسل (رابط) الفيديو من اليوتيوب الى البوت !
سيقوم البوت بجلب المقطع في ثواني ، بدون الحاجة الى تنزيل برامج لتحميل المقاطع 


اذ لم تتمكن من تحميل المقطع او واجهتك اي مشكلة 

يمكنك طرحها هنا :- 

مطور البوت :- @mroan8

جديدنا :- @mroan1235",
  ]);
 }
?>
