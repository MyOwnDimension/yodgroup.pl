<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"><!--<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"><!DOCTYPE HTML>-->
<HTML lang='pl'>
<HEAD>
<?php



if (isset($_GET["doswiadczenie"])) {
echo '<TITLE>Doświadczeni w automatyzacja procesów w firmie - Yod Group</TITLE>'."\r\n";
echo '<link rel="canonical" href="http://yodgroup.pl/it/rozwoj-utrzymanie-aplikacji/?doswiadczenie" >'."\r\n";
echo '<meta name="keywords" content="automatyzacja procesów, redukcja kosztów, automat, praca, program, aplikacja">'."\r\n";
echo '<meta name="description" content="Oferujemy automatyzację procesów w firmie za pomocą wyspecjalizowanych aplikacji, co wpływa na redukcję kosztów i usprawnienie pracy">'."\r\n";

}else if (isset($_GET["kontakt"])) {
echo '<TITLE>Automatyzacja procesów w firmie - Yod Group</TITLE>'."\r\n";
echo '<link rel="canonical" href="http://yodgroup.pl/it/rozwoj-utrzymanie-aplikacji/?kontakt" >'."\r\n";
echo '<meta name="keywords" content="automatyzacja procesów, redukcja kosztów, automat, praca, program, aplikacja">'."\r\n";
echo '<meta name="description" content="Oferujemy automatyzację procesów w firmie za pomocą wyspecjalizowanych aplikacji, co wpływa na redukcję kosztów i usprawnienie pracy">'."\r\n";

} else{
echo '<TITLE>Automatyzacja procesów w firmie - Yod Group</TITLE>'."\r\n";
echo '<link rel="canonical" href="http://yodgroup.pl/it/rozwoj-utrzymanie-aplikacji/" >'."\r\n";
echo '<meta name="keywords" content="automatyzacja procesów, redukcja kosztów, automat, praca, program, aplikacja">'."\r\n";
echo '<meta name="description" content="Oferujemy automatyzację procesów w firmie za pomocą wyspecjalizowanych aplikacji, co wpływa na redukcję kosztów i usprawnienie pracy">'."\r\n";

}



?>
<meta name='robots' content='index,follow' >
<meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
<meta name='Language' content='PL'>
<meta name='Author' content='Yod Group'>
<meta name='Revisit-after' content='7 days'>
<link rel='stylesheet' type='text/css' href='../../noindex/pl/it/css/process_automation.css'>
<link rel='shortcut icon' href='../../images/YodGroup.ico'>
<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.12.1/jquery.js' ></script>

  <link rel="stylesheet" href= "../../noindex/pl/it/css/jquery-ui-1.12.1.css"> 
  <script type='text/javascript' src= "../../noindex/pl/it/scripts/jquery-ui-1.12.1.js"> 
  </script> 
  
  <script type='text/javascript' src= "../../noindex/pl/it/scripts/process_automation.js"> 
  </script> 

</HEAD>

<BODY>
	<noscript>
      <div style="border: 1px solid purple; padding: 10px; text-align: center;">
        <span style="color:red; font-family: 'Arial', 'Verdana'; ">Brak włączonej JavyScript w przeglądarce ! Strona może działać nieprawidłowo !</span>
      </div>
	</noscript>
<br>



<div id="PC" style="  display: block; visibility: visible">
<!--<h1>PC</H1>-->
<?php
include ('PC.php');
?>
</div>



<div id="MOBILE" style="display: none; visibility: hidden">
<!--<h1>MOBILE</H1>-->

<?php
include ('MOBILE.php');
?>



</div>

<br><br>



<br><br>
<script type='text/javascript' src='../../noindex/pl/it/scripts/mainPcMobile.js'>

</script>
</BODY>


</HTML>


	
	