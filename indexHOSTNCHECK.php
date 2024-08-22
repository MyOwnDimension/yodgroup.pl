<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<!--
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<!DOCTYPE HTML>
-->
<HTML lang='pl'>

<HEAD>

<meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
<meta name='robots' content='index,follow' >
<meta name='author' content=''>
<meta name='keywords' content='test'>
<meta name='description' content=''>
<TITLE>rozwojfirmy</TITLE>
<meta name='Author' content='test'>
<meta name='Language' content='PL'>
<meta name='Revisit-after' content='7 days'>
<!--<link rel='stylesheet' type='text/css' href='css/css.css'>-->
<link rel='shortcut icon' href='images/test.ico'>

<!--<script type='text/javascript' language='JavaScript' src='javascripts/main.js'></script>-->
<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js' ></script>

<script type='text/javascript'>

</script>

<style type='text/css'>



</style>

</HEAD>





<BODY class=main id = 'body'>


  


<?php


$hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);

//echo $hostname.'<br>';

$language =  substr($hostname,strrpos($hostname,'.',0)+1, strlen($hostname)); 

//echo $language;

$language1= strval($language);
//echo $language1; 
//echo strlen($language1);



	
echo '<br>';

switch ($language) // linkServicey zmienną $a
{
case 'pl':
  echo 'Polska';
  header('Location: ./pl/');
  break;

case 'de':
 // header('Location: ./de/');
  break;


default:
echo $language;
  header('Location: ./pl/');
  break;
}
?>

</BODY>

</HTML>


	
	