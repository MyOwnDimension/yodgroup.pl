<table class='mainMobile' >

<tr  class='mainSmallerMobile'>

<td class='mainSmallerMobile' >
<a class='linkSmallerMobile' href='../'>
Wszystkie usługi
</a>
</td>
<td  >
<table class=languageMobile>

<tr>

<td class='mainSmallerLanguageMobile' >
<!--
<a class='linkSmallerLanguage' href='../'>
PL
</a>
-->
</td>
<td  class='mainSmallerLanguageMobile'>
<!--
<a class='linkSmallerLanguage' href='../'>
PL
</a>
-->
</td>
<td class='mainSmallerLanguageMobile' >

</td>
<td class='mainSmallerLanguageMobile'>

</td>

</tr>

</table>
</td>


</tr>

<tr  >

<td class='mainSmallMobile'  >

</td>


<td class='mainSmallMobile'  >

</td>
</tr>

<tr class='mainNormalMobile' >

<td class='mainNormalMobile' >
<a class='linkServiceMobile'  href='?doswiadczenie'  title='Doświadczenie w automatyzacji procesów w firmie'>

Doświadczenie w<br>automatyzacji

</a>

</td>

<td class='mainNormalMobile'  >
<a class='linkServiceMobile'  href='?zastosowanie'  title='Zastosowanie automatyzacji'>

Zastosowanie<br>automatyzacji

</a>

</td>
</tr>
<tr class='mainNormalMobile' >
<td class='mainNormalMobile'  >
<a class='linkServiceMobile'  href='?cele'  title='Cele automatyzacji procesów'>

Cele<br>automatyzacji

</a>

</td>

<td class='mainNormalMobile'  >
<a class='linkServiceMobile'  href='?etapy'  title='Etapy automatyzacji procesów biznesowcyh'>

Etapy<br>automatyzacji

</a>
</td>

</tr>

<tr class='mainNormalMobile' >

<td class='mainNormalMobile'  >
<a class='linkServiceMobile'  href='?przyklady'  title='Przykłady automatyzacji w biznesie'>

Przykłady <br>automatyzacji

</a>
</td>
<td class='mainNormalMobile' >
<a class='linkServiceMobile'  href='?kontakt'  title='Kontakt'>

Kontakt

</a>
</td>
</tr>
<tr class='mainNormalMobile' >
<td class='mainNormalMobile' >
<div class='linkUnknownMobile' >
.....................
</div>
</td>

<td class='mainNormalMobile' >
<div class='linkUnknownMobile' >
.....................
</div>
</td>
</tr>

<tr  >

<td  colspan='2' class='contentDynamicMobile'>

</td>



</tr>


<tr  >

<td colspan='2' class='contentMobile'>
<div class='contentMobile' >
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

include ('../kontakt/kontakt_include_mobile.php');
} else{
	include('glowna.php');
}

?>
</div>
</td>



</tr>


<tr  >

<td colspan='2'  class='mainSmallerMobile'>
<a  href='#top' class='linkToTopMobile' >Wróć na górę strony</a>
</td>



</tr>



<tr  >

<td  class='mainSmallMobile'>
<a href='../' class='linkSmallerMobile'>

Wszystkie usługi

	</a>
</td>


<td class='mainSmallMobile' >

</td>
</tr>


<tr>

<td  class='pageFooterMobile'  >
	<a href="..\..\noindex\pl\warunki-uzytkowania\gt.php" class='rodoLinkMobile' target="_blank">Ogólne warunki użytkowania strony</a>
</td>

<td  class='pageFooterMobile'  >
	<a href="..\..\noindex\pl\polityka-prywatnosci\pp.php" class='rodoLinkMobile' target="_blank">Polityka prywatności i Cookies</a>
</td>



</tr>

</table>