<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<HTML>

<HEAD>

<meta http-equiv="Content-Type" content="text/html; charset=windows-1250">
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

<!--<script type="text/javascript" language="JavaScript" src="javascripts/main.js"></script>-->

<script type="text/javascript">


</script>

</HEAD>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!--
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"/>
 -->
<script>
$(document).ready(function(){
$('#linkA4').hover(function(){
$('#textA4').fadeToggle(150);
});

$('#linkA5t').hover(function(){
$('#textA5').fadeToggle(150);
});


});
</script>

<style>

a.sprawdzam:link {
	color: #000000;
	font-family:"ARIAL CE";
	text-decoration: none;
	font-weight:bold;
	}
a.sprawdzam:visited {
	color: #000000;
	text-decoration: none;
	font-weight:bold;
	}
a.sprawdzam:active {
	color: #000000;
	text-decoration: none;
font-weight:bold;
	}
a.sprawdzam:hover {
	color: #00FF00;
	text-decoration: none;
	font-weight:bold;
}



a.link:link {
		color: #000000;
	text-decoration: none;
	}
a.link:visited {
		color: #000000;
	text-decoration: none;
	}
a.link:active {
		color: #000000;
	text-decoration: none;
	}
a.link:hover {
	text-decoration: none;
	color: #0000FF;
}

</style>

<BODY class=main>


  
<?php

//echo strlen("Hello world!")."<br>";


$hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);

//echo $hostname."<br>";

$language =  substr($hostname,strrpos($hostname,".",0)+1, strlen($hostname)); 
//echo substr($hostname,start,length) ; 
//echo $language;

$language1= strval($language);

//echo strlen($language1);

$pl="pl";
echo "<br>";

?>
<center>
<br><br><br><br>
	<H1> STRONA   W   BUDOWIE </H1>
	
	</center>