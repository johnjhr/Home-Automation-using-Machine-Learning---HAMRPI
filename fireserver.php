<?php
$fh = fopen('http://192.168.43.139/fire.txt','r');
while ($line = fgets($fh)) {
    if ($line==alert)
    ob_end_clean();
    echo"<!DOCTYPE html>";
     echo" <html> ";
     echo"<head>";
     echo'<meta name="viewport" content="width=device-width, initial-scale=1">';
     echo"<style>";
     echo".alert {";
        echo"  padding: 40px;";
        echo"background-color: #f44336;";
        echo"color: white;";
        echo"}";
     
        echo".closebtn {";
            echo"margin-left: 15px;";
            echo"color: white;";
            echo"font-weight: bold;";
            echo"float: right;";
            echo"font-size: 22px;";
            echo"line-height: 20px;";
            echo"cursor: pointer;";
            echo"transition: 0.3s;";
            echo"}";
     
            echo".closebtn:hover {";
                echo"color: black;";
                echo"}";
                echo"</style>";
                echo"</head>";
                echo"<body>";
                echo"";
                echo'<div class="alert">';
                
                               echo'<strong>Danger! </strong>Smoke/Fire/Gas Detected in Home';
                echo"</div>";
     
                echo"</body>";
                echo"</html>";
             
                
    if ($line==normal)
    ob_end_clean();
    echo"<!DOCTYPE html>";
    echo" <html> ";
    echo"<head>";
    echo'<meta name="viewport" content="width=device-width, initial-scale=1">';
    echo"<style>";
    echo".alert2 {";
       echo"  padding: 20px;";
       echo"background-color: #4CAF50;";
       echo"color: white;";
       echo"}";
    
       echo".closebtn {";
           echo"margin-left: 15px;";
           echo"color: white;";
           echo"font-weight: bold;";
           echo"float: right;";
           echo"font-size: 22px;";
           echo"line-height: 20px;";
           echo"cursor: pointer;";
           echo"transition: 0.3s;";
           echo"}";
    
           echo".closebtn:hover {";
               echo"color: black;";
               echo"}";
               echo"</style>";
               echo"</head>";
               echo"<body>";
               echo"";
               echo'<div class="alert2">';
               
                              echo'<strong>Normal</strong>Operation';
               echo"</div>";
    
               echo"</body>";
               echo"</html>";
               ob_start();
}           
fclose($fh);
?>