<?php
header('Location: automatic.html');

sleep(5);
#############################################
$url2 = "192.168.43.8/?relayon";
$extension2 = "$url2";
#echo ($extension2); #we got emotion value.
ini_set('user_agent', 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 1.0.3705; .NET CLR 1.1.4322)');
$ch2 = curl_init();
curl_setopt($ch2, CURLOPT_URL,$extension2); 
$result2=curl_exec($ch2);

sleep(1);

$url4 = "192.168.43.139/fanoff.php";
$extension4 = "$url4?hello=true";
echo ($extension4); #we got emotion value.
ini_set('user_agent', 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 1.0.3705; .NET CLR 1.1.4322)');
$ch4 = curl_init();
curl_setopt($ch4, CURLOPT_URL,$extension4);
$result4=curl_exec($ch4);

sleep(1);

$url3 = "192.168.43.139/light.php";
$extension3 = "$url3?happy=true";
echo ($extension3); #we got emotion value.
ini_set('user_agent', 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 1.0.3705; .NET CLR 1.1.4322)');
$ch3 = curl_init();
curl_setopt($ch3, CURLOPT_URL,$extension3);
$result3=curl_exec($ch3);

sleep(10);

$url2 = "192.168.43.8/?relayoff";
$extension2 = "$url2";
#echo ($extension2); #we got emotion value.
ini_set('user_agent', 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 1.0.3705; .NET CLR 1.1.4322)');
$ch2 = curl_init();
curl_setopt($ch2, CURLOPT_URL,$extension2); 
$result2=curl_exec($ch2);

sleep(1);

$url3 = "192.168.43.139/light.php";
$extension3 = "$url3?reset22=true";
echo ($extension3); #we got emotion value.
ini_set('user_agent', 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 1.0.3705; .NET CLR 1.1.4322)');
$ch3 = curl_init();
curl_setopt($ch3, CURLOPT_URL,$extension3);
$result3=curl_exec($ch3);

sleep(1);

$url4 = "192.168.43.139/fanon.php";
$extension4 = "$url4?hello=true";
echo ($extension4); #we got emotion value.
ini_set('user_agent', 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 1.0.3705; .NET CLR 1.1.4322)');
$ch4 = curl_init();
curl_setopt($ch4, CURLOPT_URL,$extension4);
$result4=curl_exec($ch4);

sleep(10);

$url6 = "192.168.43.139/light.php";
$extension6 = "$url6?active=true";
echo ($extension6); #we got emotion value.
ini_set('user_agent', 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 1.0.3705; .NET CLR 1.1.4322)');
$ch6 = curl_init();
curl_setopt($ch6, CURLOPT_URL,$extension6);
$result6=curl_exec($ch6);

$url7 = "192.168.43.139/ledon.php";
$extension7 = "$url7?hello=true";
echo ($extension7); #we got emotion value.
ini_set('user_agent', 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 1.0.3705; .NET CLR 1.1.4322)');
$ch7 = curl_init();
curl_setopt($ch7, CURLOPT_URL,$extension7);
$result7=curl_exec($ch7);

sleep(10);

$url3 = "192.168.43.139/light.php";
$extension3 = "$url3?reset22=true";
echo ($extension3); #we got emotion value.
ini_set('user_agent', 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 1.0.3705; .NET CLR 1.1.4322)');
$ch3 = curl_init();
curl_setopt($ch3, CURLOPT_URL,$extension3);
$result3=curl_exec($ch3);

sleep(1);

$url4 = "192.168.43.139/fanoff.php";
$extension4 = "$url4?hello=true";
echo ($extension4); #we got emotion value.
ini_set('user_agent', 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 1.0.3705; .NET CLR 1.1.4322)');
$ch4 = curl_init();
curl_setopt($ch4, CURLOPT_URL,$extension4);
$result4=curl_exec($ch4);

sleep (1);

$url7 = "192.168.43.139/ledoff.php";
$extension7 = "$url7?hello=true";
echo ($extension7); #we got emotion value.
ini_set('user_agent', 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 1.0.3705; .NET CLR 1.1.4322)');
$ch7 = curl_init();
curl_setopt($ch7, CURLOPT_URL,$extension7);
$result7=curl_exec($ch7);




?>