<?php
header('Location: resultfinal.html');

$fh = fopen('/var/www/html/emorecog/emo.txt','r');
while ($line = fgets($fh)) {
    $url = "192.168.43.139/light.php";
    if ($line === happy)
    {
        $extension = "$url?$line=true";
        echo ($extension); #we got emotion value.
        ini_set('user_agent', 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 1.0.3705; .NET CLR 1.1.4322)');
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,$extension);
        $result=curl_exec($ch);
        $url2 = "192.168.43.8/?relayon";
$extension2 = "$url2";        
echo ($extension2); #we got emotion value.
        
ini_set('user_agent', 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 1.0.3705; .NET CLR 1.1.4322)');
        
$ch2 = curl_init();
        
curl_setopt($ch2, CURLOPT_URL,$extension2);
        
$result2=curl_exec($ch2);

    }
    if ($line === anger)
    {
        $line=angry;
        $extension = "$url?$line=true";
        echo ($extension); #we got emotion value.
        ini_set('user_agent', 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 1.0.3705; .NET CLR 1.1.4322)');
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,$extension);
        $result=curl_exec($ch);

    }
    if ($line === sadness)
    {
        $line=sad;
        $extension = "$url?$line=true";
        echo ($extension); #we got emotion value.
        ini_set('user_agent', 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 1.0.3705; .NET CLR 1.1.4322)');
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,$extension);
        $result=curl_exec($ch);
        $url22 = "192.168.43.8/?relayoff";
        $extension22 = "$url22";        
        echo ($extension22); #we got emotion value.
                
        ini_set('user_agent', 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 1.0.3705; .NET CLR 1.1.4322)');
                
        $ch22 = curl_init();
                
        curl_setopt($ch22, CURLOPT_URL,$extension22);
                
        $result22=curl_exec($ch22);
    }
                        }
                        
?>