



<script type="text/javascript" src= "../../noindex/pl/it/scripts/contact.js">

			</script>


			<form action="./?kontakt#kontakt_2" method="post"> 
			<center>
			<table class="emailInfoMobile">
			<tr>
			<td colspan="2">
		
<div class="textService1Mobile">
Zachęcamy do kontaktu
<br>
</div>
</td>
			</tr>
			
									<tr>
			<td colspan="2">
<?php


//echo "<img src='../kontakt/img_mobileContact.php' alt='Kontakt Rozwój Firmy' style='width:150px;height:60px;'>";
?>
			</td>
			</tr>
			
						<tr>
			<td colspan="2">
			
			<!--
<div class="textService">
Dodatkowo przez aplikacje: Whatsup, Signal, Telegram <br> <br> 
</div>
-->
			</td>
			</tr>
			<tr>
			<td colspan="2">
			<?php

//echo "<img src='email1.png' alt='Email kontaktowy' style='width:220px;height:30px;'>";

echo "<img src='../kontakt/img_emailContact_mobile.php' alt='Email Kontaktowy Yod Group' style='width:500px;height:275px;'>";
?>
			</td>
			</tr>
			
			<tr>
			<td colspan="2">
			<?php

header("Content-Type: text/html; charset=utf-8");

$fname1 = stripslashes($_POST["fname"]);
$fromemail1 = stripslashes($_POST["fromemail"]);
$frommobile1 = stripslashes($_POST["frommobile"]);
$subject1 = stripslashes($_POST["subject"]);
$message1 = stripslashes($_POST["message"]);

$toemail1 = "biuro.it@yodgroup.pl";
//$toemail1 = "pytaniaitp@gmail.com";

//."Reply-To:\r\n";
//."CC: 	wojdalp@o2.pl\r\n"
//  ."BCC: pwojdal@o2.pl \r\n" // ukryty adres odbiorcy i wtey w mail() pierwsze pole do kogo zostaje puste
//  ."Content-Transfer-Encoding: 8bit \r\n"
// ."Content-Type: text/html; charset=utf-8 \r\n";



if (isset($_POST["reset"])) {
    $fname1 = "";
    $fromemail1 = "";
    $frommobile1 = "";
    $subject1 = "";
    $message1 = "";
} elseif (isset($_POST["sendMobile"])) {
    // echo '<h2>send</h2>';
$messageStart="Proszę o kontakt \n\n";


	// echo '<text class="emailInfoMobile">Proszę wypełnić przynajmniej treść wiadomości i email kontaktowy lub telefon kontaktowy.s</text><br><br>';
//

	if (strlen($message1)<1) {
  echo '<text class="emailInfoMobile">Proszę wypełnić przynajmniej treść wiadomości i email kontaktowy lub numer telefonu kontaktowego</text><br><br>';

	
} elseif (strlen($fromemail1)<1 && strlen($frommobile1)<1) {
    echo '<text class="emailInfoMobile">Proszę podać adres email lub numer telefonu kontaktowego.</text><br><br>';
} else {
    //$message2 = 'Wiadomość wysłana ze strony rozwojfirmy.com \n\n'.$message1.'\n\n';
	
	/*
    echo "fname1 " .
        $fname1 .
        " fromemail1 " .
        $fromemail1 .
        " frommobile1 " .
        $frommobile1 .
        " toemail1 " .
        $toemail1 .
        " subject " .
        $subject1 .
        " messag1 " .
        $message1;

    echo "<br>";
    echo "fromemail1 " .
         strlen($fromemail1) .
        " frommobile1 " .
         strlen($frommobile1);
    echo "<br>";

    echo "<br>";

		*/
	$messageReady="Wiadomość wysłana ze strony firmowej.\r\n";

    if (strlen($fromemail1)<1 && strlen($frommobile1)>0) {
		/*
				    echo "fromemail1 " .
         strlen($fromemail1) .
        " frommobile1 " .
         strlen($frommobile1);
    echo "<br>";
        echo "TYLO mOBILE";
        echo "<br>";
		*/
        $fromemail1 = $toemail1;
        $messageReady .=
            "Użytkownik nie podał emaila kontaktowego.\n\n".
			"Uzytkownik podał numer kontaktowy:" .$frommobile1 ."\n\n".
            "Wiadomość to: \n\n" .
            $message1;
    }

    else if (strlen($fromemail1)>0 && strlen($frommobile1)>0){
		/*
		    echo "fromemail1 " .
         strlen($fromemail1) .
        " frommobile1 " .
         strlen($frommobile1);
    echo "<br>";
        echo "emial i mOBILE";
        echo "<br>";
		*/
        $messageReady .=
            "Użytkownik podał email oraz numer kontaktowy: " . $frommobile1 ."\n\n".
            "Wiadomość to: \n\n" .
            $message1;
	}
	
	    if (strlen($fromemail1)>0 && strlen($frommobile1)<1)  {
		
	
		      $messageReady .= 
			  "Użytkownik podał email kontaktowy. \r\n".
		"Wiadomość to: \r\n".
		$message1;
		/*
		    echo "fname1 " .
        $fname1 .
        " fromemail1 " .
        $fromemail1 .
        " frommobile1 " .
        $frommobile1 .
        " toemail1 " .
        $toemail1 .
        " subject " .
        $subject1 .
        " messag1 " .
        $message1;
		
		
				    echo "fromemail1 " .
         strlen($fromemail1) .
        " frommobile1 " .
         strlen($frommobile1);
    echo "<br>";
        echo "TYLO EMAIL";
        echo $messageReady."<br>";
  
  */
    }
	
	if(strlen($fname1)<1){
	$fname1 = "Anonim";
}
	
	if(strlen($subject1)<1){
	$subject1 = "Brak tematu";
}


    $headers = "Content-Type: text/plain; charset=utf-8" . "\r\n";
    $headers .= "Content-Transfer-Encoding: 8bit" . "\r\n";
    $headers .=
        "From:=?utf-8?b?" .
        base64_encode($fname1) .
        "?= <" .
        $fromemail1 .
        ">\r\n";


		
		$body = "Sprawdzam jak działa \n\n";


    if (mail($toemail1,"=?utf-8?b?" .  base64_encode($subject1) .  "?=" , $messageReady, $headers)) {
        echo "<text  class='emailInfoMobile' >Wiadomość została wysłana.</text><br><br>";
        $fname1 = "";
        $fromemail1 = "";
        $frommobile1 = "";
        $subject1 = "";
        $message1 = "";
    } else {
       echo "<text  class='emailInfoMobile' >Wiadomość NIE została wysłana.</text><br><br>";
    }
}
} ?>
			</td>
			
			</tr>
			
			<tr class="emailTable" >
			<td align='center'>  
			<br>
			<label for="inputNameMobile">Imię:</label><br>  
		</td>
			<td align='center'>  
			<br>
				<input type="text" style="background-color: none; line-height: 5px;	color: #000000; font-family: 'Verdana'; font-size: 35px; text-align: justify; font-weight: normal;" id="inputNameMobile" size ='20' name="fname"  value='<?php echo $fname1; ?>' >
			</td>
			</tr>
			<tr>
			<td align='center'>  
			<br>
			<label for="inputEmailMobile">Email:</label><br>  
		</td>
			<td align='center'>   
			<br>
				<input type="text" style="background-color: none; line-height: 10px;	color: #000000; font-family: 'Verdana'; font-size: 35px; text-align: justify; font-weight: normal;" id="inputEmailMobile" size ='20' name="fromemail"  value='<?php echo $fromemail1; ?>' >
			</td>
			</tr>
			<tr>
			<td align='center'>  
			<br>
			<label for="inputMobileMobile">Telefon:</label><br>  
		</td>
		<td align='center'>  
		<br>
			<input type="text" style="background-color: none; line-height: 10px;	color: #000000; font-family: 'Verdana'; font-size: 35px; text-align: justify; font-weight: normal;"  id="inputMobileMobile" size ='20' name="frommobile"   value='<?php echo $frommobile1; ?>'>
			</td>
			
			
			</tr>
			<tr ><td align='center'>  
			<br>
			<label for="inputSubjectMobile">Temat:</label>
			</td>
				<td align='center'>  
				<br>
			<input type="text" size="20" style="background-color: none; line-height: 20px;	color: #000000; font-family: 'Verdana'; font-size: 35px; text-align: justify; font-weight: normal;" id="inputSubjectMobile" maxlength="20" name="subject"   value='<?php echo $subject1; ?>'> 
		
			</td>
			</tr>
			<tr  ><td colspan='2' align='center'>
			<br>
			<label for="inputMessageMobile">Wiadomość:</label><br> 
			<textarea id="inputMessageMobile" style="resize:none; background-color: none; color: #000000; font-family: 'Verdana'; font-size: 35px; text-align: justify; font-weight: normal;" name="message"  cols="34" rows="12" ><?php echo $message1; ?></textarea>
			</td>
			</tr>	
			<tr style='height:140px'>
			<td colspan='2' align='center'>
							
	<a href="..\..\noindex\pl\klauzula-informacyjna\ic.php" class='rodoLinkMobile' target="_blank">Klauzula informacyjna</a>	
	</td>
	</tr>
			<tr> 
			<td >    

			<button type="reset" name='reset'  style="font-family: 'Verdana'; font-size: 35px; background-color: none; color: black; margin-left: auto; margin-right: auto;  position: absolute;" onclick="resetFunction();">&nbsp&nbsp Wyczyść &nbsp&nbsp</button>
			<br>
			</td>
			

			<td>  

			<button type="submit" name="sendMobile" style="font-family: 'Verdana'; font-size: 35px; margin-left: auto; margin-right: auto;  position: absolute;" >&nbsp&nbsp Wyślij &nbsp&nbsp</button>
			<br>
			</td>
			</tr>	
			

			
			</table>
			</center>
			
			</form>
		

	