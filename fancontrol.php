<?php
header('Location: resultfinal.html');

$fh = fopen('/var/www/html/emorecog/emo.txt','r');
while ($line = fgets($fh)) {
    $url = "192.168.43.139/fanangry.php";

    if ($line === anger)
    {
        $line=hello;
        $extension = "$url?$line=true";
        echo ($extension); #we got emotion value.
        ini_set('user_agent', 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 1.0.3705; .NET CLR 1.1.4322)');
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,$extension);
        $result=curl_exec($ch);

    }

                        }
                        
?>