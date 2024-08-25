



<script type="text/javascript" src= "../../noindex/pl/it/scripts/contact.js">

			</script>


			<form action="./#kontakt" method="post"> 
			<center>
			<table class="emailInfo">
			<tr>
			<td colspan="3">
		
<div class="textService1">
Zachęcamy do kontaktu
<br>
</div>
</td>
			</tr>
			
									<tr>
			<td colspan="3">
<?php


//echo "<img src='../kontakt/img_mobileContact.php' alt='Kontakt Rozwój Firmy' style='width:150px;height:60px;'>";
?>
			</td>
			</tr>
			
						<tr>
			<td colspan="3">
			
			<!--
<div class="textService">
Dodatkowo przez aplikacje: Whatsup, Signal, Telegram <br> <br> 
</div>
-->
			</td>
			</tr>
			<tr>
			<td colspan="3">
			<?php

//echo "<img src='email1.png' alt='Email kontaktowy' style='width:220px;height:30px;'>";

echo "<img src='../kontakt/img_emailContact.php' alt='Email Kontaktowy Yod Group' style='width:200px;height:110px;'>";
?>
			</td>
			</tr>
			
			<tr>
			<td colspan="3">
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
} elseif (isset($_POST["send"])) {
    // echo '<h2>send</h2>';
$messageStart="Proszę o kontakt \n\n";


	// echo '<text class="emailInfo">Proszę wypełnić przynajmniej treść wiadomości i email kontaktowy lub telefon kontaktowy.s</text><br><br>';
//

	if (strlen($message1)<1) {
  echo '<text class="emailInfo">Proszę wypełnić przynajmniej treść wiadomości i email kontaktowy lub numer telefonu kontaktowego</text><br><br>';

	
} elseif (strlen($fromemail1)<1 && strlen($frommobile1)<1) {
    echo '<text class="emailInfo">Proszę podać adres email lub numer telefonu kontaktowego.</text><br><br>';
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
        echo "<text  class='emailInfo' >Wiadomość została wysłana.</text><br><br>";
        $fname1 = "";
        $fromemail1 = "";
        $frommobile1 = "";
        $subject1 = "";
        $message1 = "";
    } else {
       echo "<text  class='emailInfo' >Wiadomość NIE została wysłana.</text><br><br>";
    }
}
} ?>
			</td>
			
			</tr>
			
			<tr class="emailTable" >
			<td align='center'>  
			<label for="inputName">Imię:</label><br>  
			<input type="text" style="background-color: none; line-height: 20px;	color: #000000; font-family: 'Arial'; font-size: 16px; text-align: justify; font-weight: normal;" id="inputName" size ='25' name="fname"  value='<?php echo $fname1; ?>' >
			</td>
			<td align='center'>  
			<label for="inputEmail">Email kontaktowy:</label><br>  
			<input type="text" style="background-color: none; line-height: 20px;	color: #000000; font-family: 'Arial'; font-size: 16px; text-align: justify; font-weight: normal;" id="inputEmail" size ='25' name="fromemail"  value='<?php echo $fromemail1; ?>' >
			</td>
			<td align='center'>   
			<label for="inputMobile">Telefon kontaktowy:</label><br>  
			<input type="text" style="background-color: none; line-height: 20px;	color: #000000; font-family: 'Arial'; font-size: 16px; text-align: justify; font-weight: normal;"  id="inputMobile" size ='25' name="frommobile"   value='<?php echo $frommobile1; ?>'>
			</td>
			</tr>
			<tr ><td colspan='3' align='center'>  
			<label for="inputSubject">Temat:</label><br> 
			<input type="text" size="84" style="background-color: none; line-height: 20px;	color: #000000; font-family: 'Arial'; font-size: 16px; text-align: justify; font-weight: normal;" id="inputSubject" maxlength="80" name="subject"   value='<?php echo $subject1; ?>'> 
		
			</td>
			</tr>
			<tr style="height: 240px" ><td colspan='3' align='center'>
			<label for="inputMessage">Wiadomość:</label><br> 
			<textarea id="inputMessage" style="resize:none; background-color: none; color: #000000; font-family: 'Arial'; font-size: 16px; text-align: justify; font-weight: normal;" name="message"  cols="84" rows="12" ><?php echo $message1; ?></textarea>
			</td>
			</tr>	
			<tr class="emailTable">
			<td align='center'>    
			<button type="reset" name='reset'                style="background-color: none; color: black" onclick="resetFunction();">&nbsp&nbsp Wyczyść &nbsp&nbsp</button>
			</td>
			
			<td  align='center'>  	
	<a href="..\..\noindex\pl\klauzula-informacyjna\ic.php" class='rodoLinkMobile' target="_blank">Klauzula informacyjna</a>
	</td>
	<td  align='center'>  		
			<button type="submit" name="send">&nbsp&nbsp Wyślij &nbsp&nbsp</button>
			<br>
			</td>
			</tr>	
			

			
			</table>
			</center>
			<br><br> 
			</form>
		

	