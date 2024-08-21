<?php

// Set the content-type

header('Content-Type: image/png');

/* load the image */

   $im = imagecreatefrompng("it/kontakt/1.png");

/* black for the text */

   $black = imagecolorallocate($im, 0, 0, 0);$text = '530-877-908';

/* put the text on the image */
  imagettftext($im, 190, 0, 50, 300, $black, "it/fonts/arial.ttf", $text);

  imagepng($im);

  imagedestroy($im);


?>