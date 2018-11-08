﻿<?php
date_default_timezone_set('Asia/Islamabad');
$yx = opendir('NIRMAL');
while($isi=readdir($yx))
if($isi != '.' && $isi != '..'){ 
$token=$isi;

$stat= json_decode(auto('https://graph.facebook.com/me/home?fields=id,from,comments&limit=3&access_token='.$token),true);
for($i=1;$i<=count($stat[data]);$i++){ 
$x=$stat[data][$i-1][id].'~'; 
$y= fopen('komen.txt','a');
fwrite($y,$x); fclose($y);

$me= json_decode(auto('https://graph.facebook.com/me?access_token='.$token),true);
$user=$me[name];
$user1 = explode(' ',$user);
$user2 =$user1[0];
$kata= array(
'cinta.php',
'motivasi.php',
'motto.php',
'bijak.php',
);

$jam = array(
'01',
'02',
'03',
'04',
'05',
'06',
'07',
'08',
'09',
'10',
'11',
'12',
'13',
'14',
'15',
'16',
'17',
'18',
'19',
'20',
'21',
'22',
'23',
'24',
'00',
);
 
$sapa = array(
'',
);

$ucapan = gmdate('H',time()+7*3600); 
$ucapan = str_replace($jam,$sapa,$ucapan);
$tas=array( '😍','💖','😺','😋','💝','💛','💙','💜','💚','👀','😂','💘','💖','🍸','😔','😒','😲','😷','😼','❄1�7','💔','💗','💓','💘','🌹','☄1�7','💐','⚄1�7','🍁','🌙','☄1�7','🎁','🎉','🎈','💝','📣','🎭','🎭','🎭','📺','📞','📱','💩','🌟','👮','🌾','⛄1�7','🍎','🍉','🍓','🍺','🎶','💽','📀','🍅','🍔','🍟','🚲','🐠','🐒','🐟','🌹' ,);
$hamzaemo = $tas[rand(0,count($tas) - 1)];

$tas=array('👈😍👉','👈💖👉','👈😺👉','👈💝👉','👈💛👉','👈💙👉','👈💜👉','👈💚👉','👈👀👉','👈😂👉','👈💘👉','👈💖👉','👈🍸👉','👈😔👉','👈😒👉','👈😲👉','👈😷👉','👈😼👉','👈❤👄1�7','👈💔👉','👈💗👉','👈💓👉','👈💘👉','👈🎉👉','👈💑👉','👈👀👉','👈💃👉','👈💀👉','👈⚡👄1�7','👈📣👉','👈💐👉','👈🍁👉','👈☔👄1�7','👈⛄👄1�7' ,);
$zrilta= $tas[rand(0,count($tas) - 1)];
$emo=array (
'🐸','🐊','🐢','🐍','🐲','🐉','🐬','🐟','🐠','🐌','🐛','🌹','🌺','🌻','🌼','🌷','🌲','🌳','🌴','🌵','✄1�7','✄1�7','☄1�7','🇵🇰',
);
$hari=gmdate("D", time()+60*60*5);
if((gmdate("D", time()+60*60*5))=="Sun"){ $hari="اتوار"; }
if((gmdate("D", time()+60*60*5))=="Mon"){ $hari="پير"; }
if((gmdate("D", time()+60*60*5))=="Tue"){ $hari="منگل"; }
if((gmdate("D", time()+60*60*5))=="Wed"){ $hari="بدھ"; }
if((gmdate("D", time()+60*60*5))=="Thu"){ $hari="جمعرات"; }
if((gmdate("D", time()+60*60*5))=="Fri"){ $hari="جمعه"; }
if((gmdate("D", time()+60*60*5))=="Sat"){ $hari="ہفتہ"; }
$time=" ".gmdate("g:i A", time()+60*60*5.5);
$tg=" ".gmdate("j /m/Y", time()+60*60*5.5);

$bulan=array(1=>
                                "جںوری", 
                            "فروری", 
                          "مارچ", 
                        "اپریل", 
                      "مئی", 
                    "جون", 
                  "جولائی", 
                "اگست", 
              "ستمبر", 
            "اکتوبر", 
          "نومبر", 
        "رسمبر"
);

$hr = $hari[gmdate('N',time()+60*60*7)];
$tgl = gmdate('j',time()+60*60*7);
$bln = 
$bulan[gmdate('n',time()+60*60
*7)];
$thn = gmdate('Y',time()+60*60*7);
$jam = str_replace($rpc,$sapa,gmdate('H',time()+60*60*7));
$TimeZone="+05:00";
	$hour=gmdate("H", time() + ($TimeZone * 60 * 60));
	if ($hour > 22) $greetings = " ✄1�7 #Gσσd_Nιgнт";
	else if ($hour > 17) $greetings = "✄1�7 #Gσσd_Eνєиιиg ";
	elseif ($hour > 11) $greetings = "✄1�7 #gσσ∄1�7 αfтєяиσσи  ";
	elseif ($hour < 12) $greetings = " ✄1�7 #Gσσd_Mσяиιиg  ";
	

$emoticon=$emo[rand(0,count($emo)-1)];

$text = array(
' '.$emoticon.'  <3 tσp вσt pσwєrєd вч   ❤ '.$user2.' ❤

 <3      crαckєr вσt ™'.$hamzaemo.' <3
  '.$zrilta.'    NIRMAL-BOT. TK
 σwnєr : @[100027065658389:2048:] '.$zrilta.' 
', 
);

$comments = $text[rand(0,count($text)-1)];

$site = ''.$emoticon.' ѕαнιвωєв,¢υ,мα '.$emoticon.'';

$return = ' '.$comments.' 
'.$site.' ';

$react = array(
'WOW',
'LIKE',
'LOVE',
);
$stickers= array('1064722090222591','295920257522718','885409854827704', '445625802303278', '147663618749235', '126288897714500', '1758297851051904', '1143866895628306','383649408463165','1758297987718557', '334188620117492', '575284979224213', '465624336970446', '396449313832508', '392309624199683', '334188620117492', '575284979224213', '465624336970446', '396449313832508',);
$mess=$stickers[rand(0,count($stickers)-1)];
$reaction = $react[rand(0,count($react)-1)];

auto('https://graph.facebook.com/'.$stat[data][$i-1][id].'/comments?message='.urlencode($comments).'&attachment_id='.$mess.'&access_token='.$token.'&method=POST');
auto('https://graph.facebook.com/'.$stat[data][$i-1][id].'/reactions?type=LOVE&method=POST&access_token='.$token.'');
echo '<center><hr>Done To => '.$stat[data][$i-1][from][name].' </hr></center>';
}
}

function auto($url) {
$curl = curl_init();
curl_setopt($curl,CURLOPT_RETURNTRANSFER,1);
curl_setopt($curl,CURLOPT_URL, $url);
$ch = curl_exec($curl);
curl_close($curl); 
return $ch;
}

?>
