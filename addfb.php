<?php
system("clear");
error_reporting(0);

/*
+> Tool by : Nguyễn Anh Hào
+> Youtobe : Anh Hào Tool
=> Share source với mục đích chia sẻ ,hỗ trợ các member mới ,tôi đã bỏ thời gian làm lại bố cục ,add comment chú thích giúp quá trình học tool của các mem dễ dàng hơn .... vì vậy vui lòng dữ lại dòng comment này như sự tôn trọng công sức của admin .... cảm ơn đã theo dõi <3
*/

// Set pass tool
$checkpass = "Anhhao2102";
echo $lucnhat.">>> [Messenger] : =>$trang Nhập API Key : $xanh";
$pass=trim(fgets(STDIN));
if($pass == $checkpass){echo $vang." • Pass Đúng Rồi ... Cảm Ơn Đã Theo Dõi\n • Đang Vào Tool ..... \n";
sleep(2);
system("clear");
}else{echo $do."• Bạn Nhập Sai API Key Rồi Hãy Nhập Lại :))\n";
exit();
}

// Màu sắc
$nau= "\e[38;5;94m";
$lucnhat = "\033[1;96m";
$do = "\033[1;91m";
$xanh = "\033[1;92m";
$vang = "\033[1;93m";
$xanhd = "\033[1;94m";
$hong = "\033[1;95m";
$trang = "\033[1;97m";

// Logo
$logo = "$hong           ===================================\n         $xanhd |$lucnhat     Termux Tool Auto Kết Bạn     $xanhd |\n$hong           ===================================\n\n";

echo "$logo";
sleep(1);

// Cookie
echo $trang."==/> Nhập Cookie Acc Muốn Thêm Bạn Bè\n";
echo "\e[$hong ┌─[\e[$trang\e[1;42mNhập Cookie Facebook\e[0m\e[$hong]
└──╼ \e[1;35m❯\e[1;36m❯\e[1;31m❯ : $hong";
$cookie=trim(fgets(STDIN));

// Delay
echo"\n\n";
echo "\e[$hong ┌─[\e[$trang\e[1;42mNhập Time Delay\e[0m\e[$hong]
└──╼ \e[1;35m❯\e[1;36m❯\e[1;31m❯ : $hong";
$delay=trim(fgets(STDIN));

echo "$xanh"."Đang Lấy Dữ Liệu !!!!!!!\n";

// Header facebook
$headerfb = array(
"Host:mbasic.facebook.com",
"cache-control:max-age=0",
"sec-ch-ua-mobile:?1",
"save-data:on",
"upgrade-insecure-requests: 1",
"user-agent:Mozilla/5.0 (Linux; Android 10; SM-A015F) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.134 Mobile Safari/537.36",
"accept:text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9",
"sec-fetch-mode:navigate",
"sec-fetch-user:?1",
"sec-fetch-dest: document",
"accept-language:vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5",
"cookie:$cookie",
);

// Header get token facebook
$headertk = array(
"Connection: keep-alive",
"Keep-Alive: 300",
"authority: m.facebook.com",
"ccept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7",
"accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5",
"cache-control: max-age=0",
"upgrade-insecure-requests: 1",
"accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9",
"sec-fetch-site: none",
"sec-fetch-mode: navigate",
"sec-fetch-user: ?1",
"sec-fetch-dest: document",
"user-agent:Mozilla/5.0 (Linux; Android 10; SM-A015F) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.134 Mobile Safari/537.36",
"cookie:$cookie",
);

// URL
$urlgetdata = "https://mbasic.facebook.com/friends/center/mbasic/?fb_ref=tn&sr=1&ref_component=mbasic_home_header&ref_page=MFriendsCenterMBasicController";
$urltoken = "https://m.facebook.com/composer/ocelot/async_loader/?publisher=feed";

// Get access token
$gettoken = api($urltoken,$headertk);
$access_token = explode('\",\"useLocalFilePreview', explode('accessToken\":\"', $gettoken)[1])[0];

// Get info FB => Tên
$tenfb = json_decode(file_get_contents('https://graph.facebook.com/me/?access_token='.$access_token))-> {'name'};

// Get info FB => ID
$idfb = json_decode(file_get_contents('https://graph.facebook.com/me/?access_token='.$access_token))-> {'id'};
system("clear");

echo "$logo";

// Hiển thị data facebook
echo $trang."▪︎▪︎▪︎▪︎▪︎▪︎▪︎▪︎▪︎▪︎▪︎▪︎▪︎▪︎▪︎▪︎▪︎▪︎▪︎▪︎▪︎▪︎▪︎▪︎▪︎▪︎▪︎▪︎▪︎▪︎▪︎▪︎▪︎▪︎▪︎▪︎▪︎▪︎▪︎▪︎▪︎▪︎▪︎▪︎▪︎▪︎▪︎▪︎▪︎▪︎▪︎▪︎▪︎▪︎▪︎▪︎▪︎\n";
echo "$do"."•$lucnhat"."AccCount$xanhd [$nau"."ID$trang".":$xanh$idfb$xanhd"."]$trang"."[$vang"."Name$trang".":$hong$tenfb$trang]\n";
echo $trang."▪︎▪︎▪︎▪︎▪︎▪︎▪︎▪︎▪︎▪︎▪︎▪︎▪︎▪︎▪︎▪︎▪︎▪︎▪︎▪︎▪︎▪︎▪︎▪︎▪︎▪︎▪︎▪︎▪︎▪︎▪︎▪︎▪︎▪︎▪︎▪︎▪︎▪︎▪︎▪︎▪︎▪︎▪︎▪︎▪︎▪︎▪︎▪︎▪︎▪︎▪︎▪︎▪︎▪︎▪︎▪︎▪︎\n\n";
echo $xanh."========================================================\n";

$number = 0;

// Vòng lặp kiểm tra live cookie
while(true){

// Kiểm tra live cookie
if (strpos($access_token, 'EAAAA') !== 0){
echo "Cookie Die !\n";
exit();
}

// Vòng lặp kết bạn
while(true){

// Get id user
$data = api($urlgetdata,$headerfb);
$link1 = explode('" class="',explode('/a/mobile/friends/add_friend.php?',$data)[1])[0];
$link = 'https://mbasic.facebook.com/a/mobile/friends/add_friend.php?'.str_replace('&amp;','&',$link1);
$id = explode('&hf',explode('id=',$link)[1])[0];

// Set URL get name
$urlname = "https://mbasic.facebook.com/profile.php?id=$id&fref=fr_tab&refid=17";

// Get name user
$getname = api($urlname,$headerfb);
$name = explode('<head><title>',explode('</title>',$getname)[0])[1];

// Số Thứ Tự
$number ++;

// Gửi Kết Bạn
$add = api($link,$headerfb);

// Play delay
$playdelay = delay($delay);

// Hoàn Thành
$done = done($tenfb,$id,$number,$name);
}}

// Api truy cập (Get)
function api($url,$header){
$ch = curl_init();
curl_setopt_array($ch, array(
CURLOPT_URL => $url,
CURLOPT_RETURNTRANSFER => true,
CURLOPT_SSL_VERIFYPEER => false,
CURLOPT_TIMEOUT => 30,
CURLOPT_CUSTOMREQUEST => "GET",
CURLOPT_HTTPHEADER => $header
));
$ch2 = curl_exec($ch);
curl_close($ch);
return $ch2;
}

// Hiển thị nội dung
function done($tenfb,$idbb,$dem,$name){
$lucnhat = "\033[1;96m";
$nau= "\e[38;5;94m";
$lucnhat = "\033[1;96m";
$do = "\033[1;91m";
$xanh = "\033[1;92m";
$vang = "\033[1;93m";
$xanhd = "\033[1;94m";
$hong = "\033[1;95m";
$trang = "\033[1;97m";
echo $xanhd."[$dem] ☆ [-$tenfb"."-] <: Kết Bạn Với :> [-$name"."-]\n";
echo $vang." => [ Link Info ] : m.facebook.com/$idbb\n";
echo $vang."=======================================================\n";
}

// Hiển thị delay
function delay($delay){
$nau= "\e[38;5;94m";
$lucnhat = "\033[1;96m";
$do = "\033[1;91m";
$xanh = "\033[1;92m";
$vang = "\033[1;93m";
$xanhd = "\033[1;94m";
$hong = "\033[1;95m";
$trang = "\033[1;97m";
for($time = $delay;$time > -1;$time--){
echo "\r$xanh==\>$nau"."[$trang"."Anh Hào Tool$nau"."]$do=>$xanh"."Vui$xanhd Lòng$do Chờ |●○○○○|$vang [$lucnhat$time$vang"."]   ";
usleep(270000);
echo "\r$xanh==\>$nau"."[$lucnhat"."Anh Hào Tool$nau"."]$do=>$hong"."Vui$trang Lòng$xanhd Chờ |○●○○○|$vang [$lucnhat$time$vang"."]   ";
usleep(370000);
echo "\r$xanh==\>$nau"."[$xanhd"."Anh Hào Tool$nau"."]$do=>$nau"."Vui$xanh Lòng$hong Chờ |○○●○○|$vang [$lucnhat$time$vang"."]   ";
usleep(270000);
echo "\r$xanh==\>$nau"."[$hong"."Anh Hào Tool$nau"."]$do=>$do"."Vui$lucnhat Lòng$vang Chờ |○○○●○|$vang [$lucnhat$time$vang"."]   ";
usleep(270000);
echo "\r$xanh==\>$nau"."[$xanh"."Anh Hào Tool$nau"."]$do=>$hong"."Vui$nau Lòng$nau Chờ |○○○○●|$vang [$lucnhat$time$vang"."]   ";
usleep(270000);
echo "\r                                            \r";
}}
?>