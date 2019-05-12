<?php
exec('sudo -u john python3 /var/www/html/emorecog/Model_test2.py');
$command = 'sudo -u john python3 /var/www/html/emorecog/music.py';
exec("nohup $command >/dev/null 2>/dev/null &");
#keepgoingtonextprocess
include 'lights.php';
include 'fancontrol.php';
$url = 'resultfinal.html';
header( "Location: $url" );
##exec('sudo -u john python3 /var/www/html/emorecog/music.py');
?>