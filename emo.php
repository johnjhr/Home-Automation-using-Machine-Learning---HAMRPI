<?php
$fh = fopen('/var/www/html/emorecog/emo.txt','r');
while ($line = fgets($fh)) {
  // <... Do your work with the line ...>
  echo '<div style="font-size:1.25em;color:#ffffff;font-weight:bold;"><span style="font-size:1.25em;color:#ffffff;font-weight:bold;">'.$line.'</span></div>';
  //echo $precio_digital;
  echo "<br />";
}
fclose($fh);
sleep(2);
$value = rand(10,100);
$file = "/emorecog/data/result_image/result1.jpg?$value";
echo '<img src="'.$file.'">';
?>