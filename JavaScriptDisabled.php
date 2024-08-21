
  <center>
<?php

if(isset($_SERVER['HTTP_REFERER'])){
	

$previousUrl = $_SERVER['HTTP_REFERER'];

$pieces = explode("acceptNoJava=", $previousUrl);
//echo "<br>";
//echo count($pieces);

$position = count($pieces);
//echo "<br>";
$result = $pieces[$position-1];
$url = $pieces[0];
//echo $result; // piece2
echo "<br>";
//echo $previousUrl;
echo "<br>";
//$lastGet =  substr($previousUrl,strrpos($previousUrl,'?',0)+1, strlen($previousUrl)); 

if ($position==1){
echo "<a href='".$previousUrl."?acceptNoJava=true'>Odwiedź stronę mimo braku włączonej obsługi JavyScript</a>";
//echo "<br>Pierwsze wywoaleni brak poprzendih zniennych do wyciecie";
}
else{
	echo "<a href='".$url."acceptNoJava=".$result."'>Odwiedź stronę mimo braku włączonej obsługi JavyScript</a>";
	//echo "<br>KOLEJNE wywoaleni , wstawile wyciete zmienne";
}

}

else
{
	echo "<a href='index.php'>Brak poprzedniego linku</a>";
}

//include ('check_language.php');
?>
</center>


