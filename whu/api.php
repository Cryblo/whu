<?php
    $zt = $_GET['zt'];
    $color = $_GET['color'];
    $id = $_GET['id'];

    header('Content-type:image/jpeg');
    $image = imagecreatefromjpeg('images/1.png');
    $x = 330;
    $y = 235;
    $textfont = 35;
    switch ($zt) {
        case '1':
            $font_d = 'raleway/Raleway-Medium.ttf';
        break;  
        case '2':
            $font_d = 'raleway/Raleway-Bold.ttf';
        break; 
        default:
            $font_d = 'raleway/Raleway-Italic.ttf';
    }
    switch ($color) {
        case 'black':
            $color = imagecolorallocate($image, 0, 0, 0);
        break;  
        case 'blue':
            $color = imagecolorallocate($image, 0, 0, 255);
        break; 
        default:
            $color = imagecolorallocate($image, 255, 192, 203);
    }
    
    imagettftext($image, $textfont, 0, $x, $y, $color, $font_d, $id);

    imagejpeg($image);
?>