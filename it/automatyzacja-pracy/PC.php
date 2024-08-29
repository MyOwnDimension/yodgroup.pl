<table class='main' >
<!--
<tr>
<td colspan='4' class=main>

<noscript>
<a href='oferta.html'><IMG SRC='SklepyDrobiarskie_images/sklep_drobiarski_1000.jpg' border=0 align='middle' alt='sklep drobiarski'></a>
</noscript>
<script type='text/javascript'>WyswietlBaner();</script>

</td>
</tr>
-->

<tr  class='mainSmaller'>

<td class='mainSmaller' >
<a class='linkSmaller' id='linkA1' href='../'>
Wszystkie usługi
</a>
</td>
<td colspan='2' >
<table class=language>

<tr>

<td class='mainSmallerLanguage' >
<!--
<a class='linkSmallerLanguage' href='../'>
PL
</a>
-->
</td>
<td  class='mainSmallerLanguage'>
<!--
<a class='linkSmallerLanguage' href='../'>
PL
</a>
-->
</td>
<td class='mainSmallerLanguage' >

</td>
<td class='mainSmallerLanguage'>

</td>

</tr>

</table>
</td>

<td  >
<?php
//echo 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
 ?>

</td>
</tr>

<tr  >

<td id='linkA2' class='mainSmall' colspan='2'   >

</td>


<td id='linkA3' class='mainSmall' colspan='2'  >

</td>
</tr>

<tr class='mainNormal' >

<td id='linkA4' class='mainNormal' >
<a class='linkService'  href='?doswiadczenie'  title='Doświadczenie w automatyzacji procesów w firmie'>

Doświadczenie w<br>automatyzacji

</a>

</td>

<td id='linkA5' class='mainNormal'  >
<a class='linkService'  href='?zastosowanie'  title='Zastosowanie automatyzacji'>

Zastosowanie<br>automatyzacji

</a>

</td>

<td id='linkA6' class='mainNormal'  >
<a class='linkService'  href='?cele'  title='Cele automatyzacji procesów'>

Cele<br>automatyzacji

</a>

</td>

<td id='linkA7' class='mainNormal'  >
<a class='linkService'  href='?etapy'  title='Etapy automatyzacji procesów biznesowcyh'>

Etapy<br>automatyzacji

</a>
</td>

</tr>

<tr class='mainNormal' >

<td id='linkA8' class='mainNormal'  >
<a class='linkService'  href='?przyklady'  title='Przykłady automatyzacji w biznesie'>

Przykłady <br>automatyzacji

</a>
</td>
<td id='linkA9' class='mainNormal' >
<a class='linkService'  href='?kontakt'  title='Kontakt'>

Kontakt

</a>
</td>
<td id='linkA10' class='mainNormal' >
<div class='linkUnknown' >
.....................
</div>
</td>

<td id='linkA11' class='mainNormal' >
<div class='linkUnknown' >
.....................
</div>
</td>
</tr>
<tr class='mainNormal' >

<td id='linkA12' class='mainNormal' >
<div class='linkUnknown' >
.....................
</div>
</td>

<td id='linkA13' class='mainNormal'  >
<div class='linkUnknown' >
.....................
</div>
</td>

<td id='linkA14' class='mainNormal' >
<div class='linkUnknown' >
.....................
</div>
</td>

<td id='linkA15' class='mainNormal'  >
<div class='linkUnknown' >
.....................
</div>
</td>

</tr>
<tr  >

<td  colspan='4' class='contentDynamic'>
<div id='textMain' class='textService' style='display:block'>Automatyzacja procesów w firmie</div>
<div id='textA0' class='textService' style='display:none'></div>
<div id='textA1' class='textService' style='display:none'>Powróć do wyboru wszystkich usług IT</div>
<div id='textA2' class='textService' style='display:none'></div>
<div id='textA3' class='textService' style='display:none'></div>
<div id='textA4' class='textService' style='display:none'>Doświadczenie w automatyzacji</div>
<div id='textA5' class='textService' style='display:none'>Zastosowanie automatyzacji w firmie</div>
<div id='textA6' class='textService' style='display:none'>Cele automatyzacji</div>
<div id='textA7' class='textService' style='display:none'>Etapy automatyzacji</div>

<div id='textA8' class='textService' style='display:none'>Przykłady automatyzacji procesów w firmie</div>
<div id='textA9' class='textService' style='display:none'>Kontakt</div>
<div id='textA10' class='textService' style='display:none'>Automatyzacja procesów w firmie</div>
<div id='textA11' class='textService' style='display:none'>Automatyzacja procesów w firmie</div>
<div id='textA12' class='textService' style='display:none'>Automatyzacja procesów w firmie</div>
<div id='textA13' class='textService' style='display:none'>Automatyzacja procesów w firmie</div>
<div id='textA14' class='textService' style='display:none'>Automatyzacja procesów w firmie</div>
<div id='textA15' class='textService' style='display:none'>Automatyzacja procesów w firmie</div>

</td>



</tr>


<tr  >

<td colspan='4' class='content'>
<div class='content' >
<?php

if (isset($_GET["doswiadczenie"])) {
$doswiadczenie = stripslashes($_GET["doswiadczenie"]);

include('doswiadczenie.php');
} 

else if (isset($_GET["zastosowanie"])) {
$zastosowanie = stripslashes($_GET["zastosowanie"]);

include('zastosowanie.php');
}else if (isset($_GET["cele"])) {
$cele = stripslashes($_GET["cele"]);

include('cele.php');
}else if (isset($_GET["etapy"])) {
$etapy = stripslashes($_GET["etapy"]);

include('etapy.php');
}else if (isset($_GET["przyklady"])) {
$przyklady = stripslashes($_GET["przyklady"]);

include('przyklady.php');
}else if (isset($_GET["kontakt"])) {
$kontakt = stripslashes($_GET["kontakt"]);

include ('../kontakt/kontakt_include_pc.php');
} else{
	include('glowna.php');
}

?>
</div>
</td>

</tr>

<tr>

<td colspan='4'  class='mainSmaller'>
<a  href='#top' class='linkToTop' >Wróć na górę strony</a>
</td>

</tr>

<tr>

<td colspan='2' class='mainSmall'>
<a href='../' class='linkSmaller'>

Wszystkie usługi

	</a>
</td>


<td colspan='2' class='mainSmall' >

</td>
</tr>


<tr>

<td  class='pageFooter'  >
	<a href="..\..\noindex\pl\warunki-uzytkowania\gt.php" class='rodoLink' target="_blank">Ogólne warunki użytkowania strony</a>
</td>

<td  class='pageFooter'  >
	<a href="..\..\noindex\pl\polityka-prywatnosci\pp.php" class='rodoLink' target="_blank">Polityka prywatności i Cookies</a>
</td>

<td  class='pageFooter' >

</td>

<td  class='pageFooter' >

</td>

</tr>

</table>