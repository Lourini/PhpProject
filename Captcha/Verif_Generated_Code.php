<?php
    session_start();
    header ('Content-type: image/png');
    $_img = imagecreatefrompng("Verif_Img.png");
    $avant_plan = imagecolorallocate($_img,255,240,255);
    $nombre = mt_rand(100000,999999);
    $_SESSION['aleat_nbr'] = $nombre;
    imagestring($_img, 5, 15, 10, $nombre, $avant_plan);
    imagepng($_img);
?>