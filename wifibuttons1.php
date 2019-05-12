<?php
header('Location: livingroom.html');

$url = "192.168.43.8/?relayon";
$extension = "$url";        
echo ($extension); #we got emotion value.
        
ini_set('user_agent', 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 1.0.3705; .NET CLR 1.1.4322)');
        
$ch = curl_init();
        
curl_setopt($ch, CURLOPT_URL,$extension);
        
$result=curl_exec($ch);

?>