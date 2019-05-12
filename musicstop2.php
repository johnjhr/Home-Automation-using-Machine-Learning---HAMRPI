<?php
header('Location: index.html');
exec ("sudo -u john amixer -q -D pulse sset Master toggle")
#exec('sudo -u john python3 /var/www/html/emorecog/music.py')


?>