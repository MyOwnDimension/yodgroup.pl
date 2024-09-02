<?php

// Set the content-type

header('Content-Type: image/png');

/* load the image */

   $im = imagecreatefrompng("./background.png");

/* black for the text */

   $black = imagecolorallocate($im, 0, 0, 0);

$text = 'Usługi    IT';
 $text = wordwrap($text, 7, "\n",true); 
 
/* put the text on the image */
  imagettftext($im, 500, 00, 300, 1000, $black, "./noindex/fonts/arial.ttf", $text);

  imagepng($im);

  imagedestroy($im);

?>