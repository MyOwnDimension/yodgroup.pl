<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<?php header("Content-Type: text/html; charset=utf-8"); ?>

<HTML>


<HEAD>

<meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
<meta name="robots" content="index,follow" >
<meta name="author" content="">
<meta name="keywords" content="test">
<meta name="description" content="">
<TITLE>rozwojfirmy</TITLE>
<meta name="Author" content="test">
<meta name="Language" content="PL">
<meta name="Revisit-after" content="7 days">
<!--<link rel="stylesheet" href="css/css.css" type="text/css">-->
<link rel="shortcut icon" href="images/test.ico">







</HEAD>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!--
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"/>
 -->


<style>

body.main
{ 
background-color:#FCEEF7; 
//background-color:#FCEEF7; 
}

table.main {
   border-style: solid;
   border-color: #d0d0d0;

	        //border-color: #F0C3DA;
     border-spacing: 10px;
    border-collapse: collapse;
	// background-image: url("green.png");
}


td.main {
   border-style: solid;
   border-color: #d0d0d0;
   	 background-image: url("backgroundLink.png");
	   
}

div.textMain {
	color: #000000;
	font-family:"Arial", "Verdana";
	font-style: normal;
	font-variant: normal;	
	font-size: 18px;
	color: rgb(0,0,0);
	 text-align:center;
	text-decoration: none;
	font-weight:normal;
	}
	
div.textService {

	color: #000000;

	font-family:"Arial", "Verdana";

	font-style: normal;

	font-variant: normal;	

	font-size: 17px;

	color: rgb(0,0,0);

	 text-align:center;

	text-decoration: none;

	font-weight:normal;
 
     
	}
	
	table.emailInfo {
width: 90%; 
border: 0px solid;

	color: #000000;

	font-family:"Arial", "Verdana";

	font-style: normal;

	font-variant: normal;	

	font-size: 17px;

	color: rgb(0,0,0);

	 text-align:center;

	text-decoration: none;

	font-weight:normal;

   
     
	}
	
	text.emailInfo {
width: 90%; 
border: 0px solid;

color: #0032c0;

	font-family:"Arial", "Verdana";

	font-style: normal;

	font-variant: normal;	

	font-size: 17px;



	 text-align:center;

	text-decoration: none;

	font-weight:normal;

   
	}
	
text.hover {
	color: rgb(0,0,0);
	color: #0032c0;
	font-family:"Arial", "Verdana";
	font-style: normal;
	font-variant: normal;	
	font-size: 18px;

	 text-align:center;
	text-decoration: none;
	font-weight:normal;
}

a.linkService:link {
	color: #000000;
	font-family:"Arial", "Verdana";
	font-style: normal;
	font-variant: normal;	
	font-size: 18px;
	color: rgb(0,0,0);
	 text-align:center;
	text-decoration: none;
	font-weight:normal;

	}
a.linkService:visited {
	color: #000000;
	font-family:"Arial", "Verdana";
	font-style: normal;
	font-variant: normal;	
	font-size: 18px;
	color: rgb(0,0,0);
	 text-align:center;
	text-decoration: none;
	font-weight:normal;
	
	
	}
a.linkService:active {
	color: #0032c0;
	font-family:"Arial", "Verdana";
	font-style: normal;
	font-variant: normal;	
	font-size: 18px;
	//color: rgb(0,0,0);
	 text-align:center;
	text-decoration: none;
	font-weight:normal;
	}
a.linkService:hover {
	color: rgb(0,0,0);
	color: #0032c0;
	font-family:"Arial", "Verdana";
	font-style: normal;
	font-variant: normal;	
	font-size: 18px;

	 text-align:center;
	text-decoration: none;
	font-weight:normal;
}


a.linkSmaller:link {
	color: #000000;
	font-family:"Arial", "Verdana";
	font-style: normal;
	font-variant: normal;	
	font-size: 16px;
	color: rgb(0,0,0);
	 text-align:center;
	text-decoration: none;
	font-weight:normal;

	}
a.linkSmaller:visited {
	color: #000000;
	font-family:"Arial", "Verdana";
	font-style: normal;
	font-variant: normal;	
	font-size: 16px;
	color: rgb(0,0,0);
	 text-align:center;
	text-decoration: none;
	font-weight:normal;
	
	
	}
a.linkSmaller:active {
	color: #0032c0;
	font-family:"Arial", "Verdana";
	font-style: normal;
	font-variant: normal;	
	font-size: 16px;
	//color: rgb(0,0,0);
	 text-align:center;
	text-decoration: none;
	font-weight:normal;
	}
a.linkSmaller:hover {
	color: rgb(0,0,0);
	color: #0032c0;
	font-family:"Arial", "Verdana";
	font-style: normal;
	font-variant: normal;	
	font-size: 16px;

	 text-align:center;
	text-decoration: none;
	font-weight:normal;
}

</style>

<BODY class=main>


  
<?php
//echo strlen("Hello world!")."<br>";

$hostname = gethostbyaddr($_SERVER["REMOTE_ADDR"]);

//echo $hostname."<br>";

$language = substr(
    $hostname,
    strrpos($hostname, ".", 0) + 1,
    strlen($hostname)
);
//echo substr($hostname,start,length) ;
//echo $language;

$language1 = strval($language);

//echo strlen($language1);

$pl = "pl";
echo "<br>";

echo "<br>";

switch (
    $language // sprawdzamy zmienną $a
) {
    case "pl":
        echo "Polska";
        // header('Location: ./pl/automatyzacja-procesow-w-firmie/');
        break;

    case $pl:
        echo "Wartość zmiennej a to 2";
        break;

    case "pl":
        echo "Wartość zmiennej a to 3";
        break;

    default:
        echo "Końcówka hosta żadna z opcjonalnych";
        break;
}
?>
<br><br>

<center>
<script type="text/javascript">
$(document).ready(function(){
//kolenosc ma znaczenie, ostatni w talbei musi byc pierwszym tutaj !!!!
$('#linkA15').mouseenter(function(){
$('#textA15').show();
$('#textA4').hide();
});
$('#linkA15').mouseleave(function(){
$('#textA15').hide();
$('#textA4').show();
});

$('#linkA14').mouseenter(function(){
$('#textA14').show();
$('#textA4').hide();
});
$('#linkA14').mouseleave(function(){
$('#textA14').hide();
$('#textA4').show();
});

$('#linkA13').mouseenter(function(){
$('#textA13').show();
$('#textA4').hide();
});
$('#linkA13').mouseleave(function(){
$('#textA13').hide();
$('#textA4').show();
});

$('#linkA12').mouseenter(function(){
$('#textA12').show();
$('#textA4').hide();
});
$('#linkA12').mouseleave(function(){
$('#textA12').hide();
$('#textA4').show();
});

$('#linkA11').mouseenter(function(){
$('#textA11').show();
$('#textA4').hide();
});
$('#linkA11').mouseleave(function(){
$('#textA11').hide();
$('#textA4').show();
});

$('#linkA10').mouseenter(function(){
$('#textA10').show();
$('#textA4').hide();
});
$('#linkA10').mouseleave(function(){
$('#textA10').hide();
$('#textA4').show();
});

$('#linkA9').mouseenter(function(){
$('#textA9').show();
$('#textA4').hide();
});
$('#linkA9').mouseleave(function(){
$('#textA9').hide();
$('#textMain').show();
});

$('#linkA8').mouseenter(function(){
$('#textA8').show();
$('#textA4').hide();
});
$('#linkA8').mouseleave(function(){
$('#textA8').hide();
$('#textA4').show();
});

$('#linkA7').mouseenter(function(){
$('#textA7').show();
$('#textA4').hide();
});
$('#linkA7').mouseleave(function(){
$('#textA7').hide();
$('#textA4').show();
});

$('#linkA6').mouseenter(function(){
$('#textA6').show();
$('#textA4').hide();
});
$('#linkA6').mouseleave(function(){
$('#textA6').hide();
$('#textA4').show();
});

$('#linkA5').mouseenter(function(){
$('#textA5').show();
$('#textA4').hide();
});
$('#linkA5').mouseleave(function(){
$('#textA5').hide();
$('#textA4').show();
});

$('#linkA4').mouseenter(function(){
//$('#textA4').show();
});
$('#linkA4').mouseleave(function(){
$('#textA4').show();
});

$('#linkA3').mouseenter(function(){
$('#textA3').show();
$('#textA4').hide();
});
$('#linkA3').mouseleave(function(){
$('#textA3').hide();
$('#textA4').show();
});

$('#linkA2').mouseenter(function(){
$('#textA2').show();
$('#textA4').hide();
});
$('#linkA2').mouseleave(function(){
$('#textA2').hide();
$('#textA4').show();
});

});
</script>
<table class="main" >


<tr align=center valign=middle >

<td height=30 >
<a class="linkSmaller" id='' href="../index.php">
Główna
</a>
</td>
<td   >
<a class="linkSmaller" id='' href="./automatyzacja-procesow-w-firmie/">

</a>
</td>
<td  >
<a class="linkSmaller" id='' href="./automatyzacja-procesow-w-firmie/">

</a>
</td>
<td  >
Facebook, instagram
</a>
</td>


</td>
</tr>

<tr align=center valign=middle >

<td id="linkA2" class="main"  colspan="2" width=600 height=50>
<a class="linkService" id='' href="../o-projekcie/">
O projekcie
</a>
</td>


<td id="linkA3" class="main" colspan="2" class="main" width=600 >
<a href="../kontakt/" class="linkService">

Kontakt
</a>
</td>
</tr>

<tr align=center valign=middle >

<td id='linkA4' class="main" width=300 height=75>
<text class="hover"  >
Automatyzacja<br>procesów w firmie
</text>
</td>

<td id='linkA5' class="main" width=300 >
<a class="linkService"  href="../skuteczny-emailing/" >
Skuteczny e_mailing
</a>
</td>

<td id="linkA6" class="main" width=300 >
<a href="../tworzenie-stron-www/" class="linkService">

Tworzenie stron <br>WWW
</a>
</td>

<td id="linkA7" class="main" width=300 >
<a href="../pozycjonowanie-stron-www/" class="linkService">

Pozycjonowanie stron <br>WWW
</a>
</td>

</tr>

<tr align=center valign=middle >

<td id="linkA8" class="main"  height=75>
<a href="../tworzenie-aplikacji-na-zlecenie/" class="linkService">
Na zlecenie: Program PC, <br>aplikacja mobilna
</a>
</td>
<td id="linkA9" class="main" >
<a href="../rozszerzanie-funkcjonalnosci-programow/" class="linkService">
Rozszerzenia <br>funkcjonalności programów
</a>
</td>
<td id="linkA10" class="main" >
<a href="../wyszukiwanie-informacji-w-internecie/" class="linkService">


Usługa wyszukiwania <br>informacji w internecie
</a>
</td>

<td id="linkA11" class="main" >
<a href="../marketing-internetowy/" class="linkService">
Marketing internetowy

</a>
</td>
</tr>
<tr align=center valign=middle >

<td id="linkA12" class="main"  height=75>
<a href="../VR-wirtualna-rzeczywistosc/" class="linkService">
VR
</a>
</td>

<td id="linkA13" class="main"  >
<a href="../grafika_3D/" class="linkService">
3D
</a>
</td>

<td id="linkA14" class="main" >
<a href="../grafika-2D/" class="linkService">
2D
</a>
</td>

<td id="linkA15" class="main"  >
<a href="../wsparcie-utrzymanie-rozwoj-aplikacji/" class="linkService">
Wsparcie, utrzymanie<br>
i rozwój aplikacji
</a>
</td>

</tr>
<tr align=center valign=middle >

<td colspan="4"  height="50" class=main>

<div id='textA2' class='textService' style='display:none'>O PROJEKCIE</div>
<div id='textA3' class='textService' style='display:none'>Kontakt</div>
<div id='textA4' class='textService' style='display:none'>Automatyzacja procesów w firmie pozwala miedzy innymi przyspieszyć proces, ale rónież zredukować koszty.</div>
<div id='textA5' class='textService' style='display:none'>Skuteczny emailing dociera do każdego odbiorcy.</div>
<div id='textA6' class='textService' style='display:none'>Tworzenie stron WWW.</div>

<div id='textA7' class='textService' style='display:none'>Pozycjonownaie stron WWW</div>
<div id='textA8' class='textService' style='display:none'>Aplikacje na zlecenie </div>
<div id='textA9' class='textService' style='display:none'>Tworzenie rozszerzeń do aplikacji, do wordpressa itp</div>
<div id='textA10' class='textService' style='display:none'>Usługa wyszukiwania informacji</div>
<div id='textA11' class='textService' style='display:none'>Marketing internetowy</div>
<div id='textA12' class='textService' style='display:none'>VR</div>
<div id='textA13' class='textService' style='display:none'>3D</div>
<div id='textA14' class='textService' style='display:none'>2D</div>
<div id='textA15' class='textService' style='display:none'>Wsparcie aplikacji </div>
</td>
</tr>
<tr align=center valign=middle >
<td colspan="4"  height="50" class=main><br><br>

<div class="textService">
Zachęcamy do kontaktu
<br><br>
</div>

<?php

echo "<img src='tel.png' alt='Kontakt' style='width:150px;height:25px;'>";

//echo "<img src='./img_automateProcess.php' alt='Automatyzacja' style='width:300px;height:50px;'>";
?>

<div class="textService">
Dodatkowo przez aplikacje: Whatsup, Signal, Telegram <br> <br> 
</div>
<?php

echo "<img src='email1.png' alt='Email kontaktowy' style='width:220px;height:30px;'>";

//echo "<img src='./img_automateProcess.php' alt='Automatyzacja' style='width:300px;height:50px;'>";
?>
<br>


<br>



<?php

header("Content-Type: text/html; charset=utf-8");

$fname1 = stripslashes($_POST["fname"]);
$fromemail1 = stripslashes($_POST["fromemail"]);
$frommobile1 = stripslashes($_POST["frommobile"]);
$subject1 = stripslashes($_POST["subject"]);
$message1 = stripslashes($_POST["message"]);

$toemail1 = "biuro@rozwojfirmy.com";
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
}
?>

  
	<?php if ($subject1 == null) {
  //  echo "<h2>Wyślij email</h2><br>";

	
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
	
    $headers = "Content-Type: text/plain; charset=utf-8" . "\r\n";
    $headers .= "Content-Transfer-Encoding: 8bit" . "\r\n";
    $headers .=
        "From:=?utf-8?b?" .
        base64_encode($fname1) .
        "?= <" .
        $fromemail1 .
        ">\r\n";


		
		$body = "Sprawdzam jak działa \n\n";


    if (mail($toemail1, $subject1, $messageReady, $headers)) {
        echo "Wiadomość wysłana :) <br>";
        $fname1 = "";
        $fromemail1 = "";
        $frommobile1 = "";
        $subject1 = "";
        $message1 = "";
    } else {
        echo "Wiadomość niewysłana. <br>";
    }
} ?>

			<form action="index.php" id='myForm' method="post"> 
			<table class="emailInfo">
			<tr height='40' >
			<td align='center'>  
			<label for="inputName">Imię:</label><br>  
			<input type="text" id="inputName" size ='25' name="fname"  placeholder="Twoje imię" value='<?php echo $fname1; ?>' required>
			</td>
			<td align='center'>  
			<label for="inputEmail">Email kontaktowy:</label><br>  
			<input type="email" id="inputEmail" size ='25' name="fromemail"  placeholder="email@domena.pl" value='<?php echo $fromemail1; ?>' >
			</td>
			<td align='center'>   
			<label for="inputMobile">Telefon kontaktowy:</label><br>  
			<input type="tel" id="inputMobile" size ='25' name="frommobile" pattern="[^A-Za-z]+[0-9]"   placeholder="123456890" value='<?php echo $frommobile1; ?>'>
			</td>
			</tr>
			<tr height='40'><td colspan='3' align='center'>  
			<label for="inputSubject">Temat:</label><br> 
			<input type="text" size="130" id="inputSubject" maxlength="80" name="subject"  placeholder="Temat wiadomości" required value='<?php echo $subject1; ?>'> 
			</select>
			</td>
			</tr>
			<tr height='240'><td colspan='3' align='center'>
			<label for="inputMessage">Wiadomość:</label><br> 
			<textarea id="inputMessage" name="message"  style="resize:none" cols="130" rows="12"  placeholder="Twoja wiadomość" value ="TEST" required><?php echo $message1; ?></textarea>
			</td>
			</tr>	
			<tr height='40'>
			<td align='center'>    
			<button type="reset" name='reset'                style="background-color: none; color: black" onclick="resetFunction();">&nbsp&nbsp Wyczyść &nbsp&nbsp</button>
			</td><td  align='center'>  		 </td><td  align='center'>  		
			<button type="submit" name="send">&nbsp&nbsp Wyślij &nbsp&nbsp</button>
			<br>
			</td>
			</tr>	
			</table>
			<br><br> 
			</form>
		
			<script>
			function resetFunction(){	
			let inputName = document.getElementById("inputName");   
			let inputEmail = document.getElementById("inputEmail");	  
			let inputMobile = document.getElementById("inputMobile");		
			let inputSubject = document.getElementById("inputSubject");	
var inputMessage = document.getElementById('inputMessage');
inputMessage.innerHTML = '';


inputMessage.innerText = '';

			
			var c=document.createElement("inputMessage");
			c.innerHTML="sssf";
			document.body.appendChild(c);		
			inputName.setAttribute('value', '');	
			inputEmail.setAttribute('value', '');	
			inputMobile.setAttribute('value', '');		
			inputSubject.setAttribute('value', '');		

			}
			</script>
</td>
</tr>
<tr align=center valign=middle >
<td colspan="4"  height=30 class=main>
<a  href="#top" class="linkSmaller" >Wróć na górę strony</a>
</td>



</tr>



<tr align=center valign=middle >

<td colspan="2" width=600 height=50>
<a class="linkService" id='linkA4' href="../o-projekcie/">
O nas
</a>
</td>


<td colspan="2" class="main" width=600 height=30>
<a href="../kontakt/" class="linkService">

Kontakt
</a>
</td>
</tr>



</table>

</center>

<br><br>
</BODY>

</HTML>


	
	