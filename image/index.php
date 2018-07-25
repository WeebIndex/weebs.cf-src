<?php
    if(isset($_GET["hex"])) {
        header("Content-type: image/png");
        $hex = htmlspecialchars($_GET["hex"]);
        list($red, $green, $blue) = sscanf("#{$hex}", "#%02x%02x%02x");
        $IMG = imagecreate(500, 500);
        $background = imagecolorallocate($IMG, $red, $green, $blue);
        imagepng($IMG);
        imagecolordeallocate($IMG, $background);
    } else {
        include 'doc.php';
    }
?>