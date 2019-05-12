<?php

    

    $img = $_POST['image'];

    $folderPath = "emorecog/data/test_images/";

  

    $image_parts = explode(";base64,", $img);

    $image_type_aux = explode("image/", $image_parts[0]);

    $image_type = $image_type_aux[1];

  

    $image_base64 = base64_decode($image_parts[1]);

    $fileName = test1 . '.jpg';

  

    $file = $folderPath . $fileName;

    file_put_contents($file, $image_base64);

  
    header('Location: result.html');

    

  

?>
