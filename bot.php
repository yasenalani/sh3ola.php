<?php 

ob_start();

$API_KEY = '1708961623:AAEsJ5jQ-lbhNV4Llz9e91ot7seQSh7SCcA';
define('API_KEY',$API_KEY);
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
$text = $message->text;
$chat_id =$message->chat->id;
$time = time() + (979 * 11 + 1 + 30);
$ex = explode('كول',$text);
$sudo = 1189284654;
$id_sudo = 1189284654;
$id = $message->from->id; 
$getid = file_get_contents('ied.txt');
$exid = explode("\n", $getid);
$count = count($exid);
$sudo = 1189284654;
$bc = explode("/bc", $text);
$user = $update->message->from->username;
$name = $update->message->from->first_name;
$last_name = $update->message->from->last_name;
$from_id = $update->message->from->id;
$message_id = $update->message->message_id;
$user_id = $update->message->from->user_id;
$sudo = 1189284654;
$user_id = $message->from->id;
$name = $message->from->first_name;
$username = $message->from->username;

$sudo = 1189284654;
$get = explode("\n", file_get_contents('memberbot.txt'));

$sudo == 1189284654;
if($text == "رفع مطي مميز" and $id == $sudo){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"العضو تم رفعه مطي مميز بنجاح😹✅",
'reply_to_message_id'=>$message_id
]);
}
if($text == "رفع مطي مميز" and $id != $sudo){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"انت ليس مطور
اسمك:- $name
ايديك:- $from_id",
'reply_to_message_id'=>$message_id
]);
}

if($text == '/start' and !in_array($chat_id, $get)){
file_put_contents('memberbot.txt',"\n" . $chat_id, FILE_APPEND);
}
if($text == '/users' and $id == $sudo){
 $count = count($get);
  bot('sendmessage',[
    'chat_id'=>$chat_id,
    'parse_mode'=>'markdown',
    'text'=>"هاذ عدد المشتركين حبق: $count",
  ]);
  }
$bc = explode("/bc", $text);
if($bc and $id == $sudo){
for($y=0;$y<count($get); $y++){
bot('sendMessage', [
'chat_id'=>$get[$y],
'text'=>"$bc[1]",
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
]);
}
}

if($text == 'بووتي' and $id == $sudo){
bot('sendmessage',[
chat_id=>$chat_id,
'text'=>"هَــْـِْـْْـِلاّ مــْـِْـْْـِطــْـِْـْْـِوري"
]);
}

if($text == 'تفعيل' and $id == $sudo){
bot('sendmessage',[
chat_id=>$chat_id,
'text'=>"
المجموعه😻تم تفعيلهاا بنجاح
اسمك:- $name
معرفك:- $user
ايديك:- $from_id"
]);
}


if($text == 'بووتي' and !$id == $sudo){
bot('sendmessage',[
chat_id=>$chat_id,
'text'=>"مو مطوري حسبالك ما عرفك"
]);
}

if($text == "الاوامر"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"❖- اهلا بيك عزيزي $name في قائمة الاوامر

❖معلوماتي ↭ لعرض معلوماتك الشخصيه

❖- ايدي لكروب ↭ لعرض ايدي لكروب

❖- كول+الكلمه

❖اضف+كلمة ↭ لاضافة رد عام
جواب الرد

❖- قائمة الاغاني ↭ لضهور قائمة الاغاني

❖- اسمي ↭ لعرض اسمك
",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($rep && $text == "ايدي"){
bot('sendmessage', [
'chat_id' => $chat_id,
'text' => "id = $re_id
name = $re_name
user = $re_user",
]);
}

include 'rd.php';
if (preg_match('/^(اضف)(.*)/', $text) ) {
  $rd = str_replace('اضف ', $rd, $text);
  $ex = explode("\n", $rd);

    $put = "\n".'
    if ($text == "'.$ex[0].'") {
      bot(\'sendMessage\',[
        \'chat_id\'=>$chat_id,
        \'text\'=>"'.$ex[1].'"
      ]);
    }';
    file_put_contents('rd.php', $put,FILE_APPEND);
    bot('sendMessage',[
                'chat_id'=>$chat_id,
                'text'=>"تــم اضــافــة الـرد بـنـجـاح✅
بـواسـطـه $name",
'reply_to_message_id'=> $message_id,
                ]);
  
}
if($text=="/start"){
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"يــااهـــــلا بيـــــك حبيـــــصي نـــــورت م̷ـــِْن كـــــتلي /start ياخـــــي حـــــبيتك من اول نـــــضـــــرة والـــــمشكه انـــــه اعـــــرف اســـــمك
هاذ اســـــمك حبـــــق↭ $name",
'reply_to_message_id'=>$mid,
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>"اضفــني لكــروبك🔴 ⌚️",'url'=>"t.me/SH3OLA_0_bot?startgroup=new"]],
        [['text'=>"❗المطور❗", 'url'=>"t.me/llIIlIIllI"]]
    ]

  ])
  ]);
} 
if($text== 'هلو'){
bot('sendMessage',[
"chat_id"=>$chat_id,
'text'=>'بيك ورد'
]);
}

if($text=="اسمي"){
bot('sendmessage',[
'chat_id' => $chat_id,
'text'=>$name
]);
}
if($text == "ليش"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"احسن",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($text =="الوقت"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"🇮🇶 البلد : 🔥العراق \n" . "✨🔥  السنه  : " . date("Y") . "\n" . "🌟  الشهر🔥 : " . date("n") . "\n" . "💫  اليوم🔥 :" . date("j") . "\n" . "💏 الساعه🔥 :" . date('g', $time) . "\n" . "💋 الدقيقه🔥 :" . date('i', $time) . "\n" . " 😍",
'reply_to_message_id'=>$message->message_id
]);
}

if($text == "غني"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/mmss190/2665",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "."){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"..………",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "هيلاو"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"دولي خمطتهه م̷ـــِْن شهد",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "كول والله"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"والله",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "1$"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"غـِْاليّے كلش",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "اريد بوت"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ضيفني وصعني ادمن انه اتفاعل",
'reply_to_message_id'=>$message->message_id, 
]);
}


if($text== "ايدي لكروب"){
bot('sendMessage',[
"chat_id"=>$chat_id,
'text'=> 'هاذ ايدي لكروب ' .$chat_id,
]);
}
if($text == "ايدي"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"تريد ايديك دخلي خاص واكتب ايديي",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text== "ايديي"){
bot('sendMessage',[
"chat_id"=>$chat_id,
'text'=>'الايدي الخاص بك : ' .$chat_id,
]);
}
if($text == "شسمج"or $text== "شسمك"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"⁽ لـٰٖـٖيـٰٖش ⁉️ تريد تزحف 🔷",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "لا"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ووجعا 😂",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($text == "قائمة الاغاني"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"اهلا بك عزيزي في قائمة الاغاني
🔻🔻🔻🔻🔻🔻🔻🔻🔻
الاغاني المتوفره م̷ـــِْن 1الى10 اغنيه 
اكتب اغنيه+الرقم
مثال🔻
اغنيه1
او 
اغنيه7
وسوف ارسل ڵـڱ الاغنيه

ch:- @ailolvip",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "اغنيه1"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/mmss190/2663",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "اغنيه2"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/mmss190/2660",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == ""){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/mmss190/2657",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "اغنيه3"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/mmss190/2656",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "اغنيه4"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/mmss190/2652",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "اغنيه5"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/mmss190/2643",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "دي"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"لاخطيه",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "اغنيه6"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/mmss190/2643",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "اغنيه7"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/mmss190/2638",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "اغنيه8"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/mmss190/2638",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "اغنيه9"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/mmss190/2631",
 reply_to_message_id =>$message->message_id, 
]);
}

if($text == "اغنيه10"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/mmss190/2626",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "اغنيه11"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"كافي لطشت",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "😂"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"فطير ماصيرلك جارة",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($text == "😍"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"كبر يل غرم",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($text == "استحي"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"اكو حيوان يستحي م̷ـــِْن نفسه ",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($text == "😐"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"عليمن ماد حلكلك جنه بسطال",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "وين الربط"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"بعزك الربط غير",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "كول 1"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ما اكول لْـۆ تنطيني شسمه",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($text == "🙂"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"عود ثكيل",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($text == "🙄"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"نزل عـــ⌣̴͡͡د̲⌣̴͡͡ ــيونگ يول",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($text == "منو"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"شتدحس",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "تحبني"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ماحب زبايل",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "تكرهني"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"اي",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($text == "نعال"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"بحلكك وبعزك",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($text == "رمم"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"العضو تم رفعه مطي مميز😂😒",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "رفع مميز"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"مارفعه لْـۆ تموت 😍😂",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($text == "هه" or $text =="ههه" or $text == "هههه" or $text =="ههههه" or $text=="هههههه"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"⌣{دِْۈۈۈۈ/يّارٌبْ_مـْو_يـّوّمٌ/ۈۈۈۈمْ}⌣",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($text == "هلوو"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"بيك حب",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($text == "اريد يوزر"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"اصيرلك يوزر",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($text == "السلام عليكم"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>" وعليكم السلام",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "ياثين"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"هوه المطور مالتي",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($text == "يول"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"عـ๋͜ݪࢪاســي",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "هلا"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"؟هلوات حمب",
'reply_to_message_id'=>$message->message_id, 
]);
}
$MATHEO = explode('كول',$text);
if($MATHEO){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$MATHEO[1],
]);
}

if($text == "المشتركين" and $id == $sudo){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>$count
]);
}
if($text == 'اا'){
bot('sendMessage',[
'chat_id'=>$chat_id,
'reply_to_message_id'=>$message_id,
'text'=>"يوزرك◀️:- @$user
ايديك◀️:- $from_id
اسمك◀️:- $name",
'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [
          ['text'=>'المطور💚', 'url'=>"https://t.me/llIIlIIllI"]
        ],
        ]
        ])
]);
}
if($text == "بوتي"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"هاا لك والله كاعد منايم كلي تريد شي ",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($text == "انت"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"شبيه ماعاجبك ",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($text == "هاا"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ووجعاا",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($text == "جبك"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"دي لتزحف",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($text == "زاحف"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"وينه خل يجي يزحف علي",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($text == "حبق"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"شدتحس",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($text == "صدك"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"والله شبيك",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($text == "والله"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"لتحلف",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($text == "بوس لكروب"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"اممممموووحححه خدهم مالح وحلو",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($text == "اتفل"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"حححوك تففففف",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($text == "اتفل عل هاذ"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ووين سويله رد وكلي اتفل علي",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($text == "اتفل علي"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"تففففف علي وعل كصته ",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($text == "طرد"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ليش لان بعصك",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "حظر"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ليش تحظر ابن المطي",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($text == "."){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"......",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "تفليش"or $text=="فلش"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ماا افلش وبكيفي",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($text == "نلعب"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"دنجب انجب",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($text == "مطي"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"مطي ابن المطي",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($text == "اكلك"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"كول موو صطرتنه",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($text == "يب"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"يبات",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($text == "شدتحس"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"داحس انيج بيك",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($text == "سطر"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"10000",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "عير"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"بعزك",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "وعير"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"بحلكك",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "منيوج"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"اطيك النعال",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "قفل الصور"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"لا اصير مطي من حمايه اني",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "فتح الصور"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"اي خوش",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "السيد"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"تاج راسك وراسي",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "مقتدى"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"تاج راسك وراسي",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "حبي"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"صارت قديمه هسه الجديد كله حبق ",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($text == "الف"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"مصرفك هاذ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "الملف"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"شبي",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "شسمك"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ابو لسان 😁 😝",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "ابو لسان"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"هاا شتريد",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($text == "اضحك"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"هههههه",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "ابجي"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ما ابجي حبق",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "ابجي مدري اضحك"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"شويه اضحك وشويه ابجي",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($text == "لاا"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"والرب",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "5"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"احطه بيك واطمسه",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "1"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"حطه الك عبد الواحد",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "تدرس"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"شيدرس هوه هاذ فاهي",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "صدوك"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"عدل حجيك تره بل شسمه",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($text == "تروح"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"اي ليش لا",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "من وين"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"من العراق",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "حياك"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"كملهه كول حياك الله",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "اخوي"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"والنعم",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "فرخ"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"انت الفرخ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "التلي"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"شي كلش خوش برنامج اني استعمله",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "بي فروخ"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"نتحمل جاا شنسوي",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "قناة المطور"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"تفضل عمغي @AILOLVIP",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($text == "انطلق"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"انطلقت",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($text == "مقابل"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"كلشي صاار بمقابل",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "صح"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"صحات",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($text == "خطا"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ليش",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "المطور"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"مطوري الورده محح ❤️@llIIlIIllI",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($text == "علوش"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"كلش خوش ولد",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "رضاوي"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ورده مال الله",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($text == "ياسين"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"كلش خوش ولد ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "زوين وياسين"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"وردات والله احبهم",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "البنات"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"شبيهن",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "زاحفه"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"حل فضحوهه",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "منو حبيبك"or $text=="منو حبيبج"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"محد قابل مثلك/ج",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "جاو"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"هااا شبيك ضجت",
'reply_to_message_id'=>$message->message_id, 
]);
}


if($text == "يله جاوو"or $text== "جاوو"or $text=="يله جااوو"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"شبيك ضجت لوو وين رايح",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($text == "عود"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"مال شخاط",
'reply_to_message_id'=>$message->message_id, 
]);
}


if($text == "تنح"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"عيب يول",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "فاشل"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"مثلك",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "تهي بهي"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"هاا شبيك",
'reply_to_message_id'=>$message->message_id, 
]);
}


if($text == "رايح"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"الله ويااك",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($text == "مغادر"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"هسه وذا غادرت",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($text == "شعليك"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"انجب",
'reply_to_message_id'=>$message->message_id, 
]);
}


if($text == "نعال"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"تريد اطكك بي",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "الله"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"الله",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "حلو"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"انت الاحلا",
'reply_to_message_id'=>$message->message_id, 
]);
}
