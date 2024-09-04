<?php

// Set the content-type

header('Content-Type: image/png');

/* load the image */

   $im = imagecreatefrompng("./background.png");

/* black for the text */

   $black = imagecolorallocate($im, 55, 55, 55);

$text = 'Usługi     IT';
 $text = wordwrap($text, 7, "\n",true); 
 
/* put the text on the image */
  imagettftext($im, 300, 0, 700, 1000, $black, "./noindex/fonts/arialbd.ttf", $text);

  imagepng($im);

  imagedestroy($im);

?>