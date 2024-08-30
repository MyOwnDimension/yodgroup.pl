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
<a class='linkServiceMobile'  href='?doswiadczenie'  title='Doświadczenie w pozycjonownaiu i SEO'>

Doświadczenie w<br>pozycjonownaiu, SEO

</a>

</td>

<td class='mainNormalMobile'  >
<a class='linkServiceMobile'  href='?zastosowanie'  title='Zastosowanie pozycjonowania'>

Zastosowanie<br>pozycjonowania, SEO

</a>

</td>
</tr>
<tr class='mainNormalMobile' >
<td class='mainNormalMobile'  >
<a class='linkServiceMobile'  href='?cele'  title='Cele automatyzacji procesów'>

Cele<br>pozycjonowania

</a>

</td>

<td class='mainNormalMobile'  >
<a class='linkServiceMobile'  href='?etapy'  title='Etapy automatyzacji procesów biznesowcyh'>

Etapy<br>pozycjonowania

</a>
</td>

</tr>

<tr class='mainNormalMobile' >

<td class='mainNormalMobile'  >
<a class='linkServiceMobile'  href='?seo_optymalizacja'  title='Przykłady automatyzacji w biznesie'>

SEO<br>optymalizacja

</a>
</td>
<td class='mainNormalMobile' >
<a class='linkServiceMobile'  href='?seo_etapy'  title='Przykłady automatyzacji w biznesie'>

SEO<br>etapy

</a>

</td>
</tr>
<tr class='mainNormalMobile' >
<td class='mainNormalMobile' >
<a class='linkServiceMobile'  href='?monitorowanie'  title='Przykłady automatyzacji w biznesie'>

Monitorowanie<br>pozycjonowania WWW

</a>

</td>

<td class='mainNormalMobile' >
<a class='linkServiceMobile'  href='?kontakt'  title='Kontakt'>

Kontakt

</a>
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
include('doswiadczenie.php');
}else if (isset($_GET["zastosowanie"])) {
include('zastosowanie.php');
}else if (isset($_GET["cele"])) {
include('cele.php');
}else if (isset($_GET["etapy"])) {
include('etapy.php');
}else if (isset($_GET["seo_optymalizacja"])) {
include('seo_optymalizacja.php');
}else if (isset($_GET["seo_etapy"])) {
include('seo_etapy.php');
}else if (isset($_GET["monitorowanie"])) {
include('monitorowanie.php');
}else if (isset($_GET["kontakt"])) {
include ('../kontakt/kontakt_include_pc.php');
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