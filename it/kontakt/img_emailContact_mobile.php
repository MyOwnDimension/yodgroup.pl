<?php

// Set the content-type

header('Content-Type: image/png');

/* load the image */

   $im = imagecreatefrompng("../kontakt/background_contact_mobile_email.png");

/* black for the text */

   $black = imagecolorallocate($im, 0, 0, 0);$text = 'biuro.it@yodgroup.pl';

/* put the text on the image */
  imagettftext($im, 210, 0, 50, 850, $black, "../../noindex/fonts/arial.ttf", $text);

  imagepng($im);

  imagedestroy($im);


?>