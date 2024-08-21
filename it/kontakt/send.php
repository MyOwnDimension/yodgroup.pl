<?php

$link=mysql_connect($sqlhost, $sqluser, $sqlpass);
mysql_select_db($sqlbase);

$opis="since";
$result1 = mysql_query("SELECT `tresc`,`pokaz` FROM tekst WHERE `opis` = '$opis' "); 
$wnum_rows = mysql_num_rows($result1);
$line1 = mysql_fetch_array($result1);
$tresc=$line1['tresc'];
$pokaz=$line1['pokaz'];



if ($pokaz=="0")
{
$tresc=NULL;
}


$opis="kontakt_mail_biuro0";
$result1 = mysql_query("SELECT `tresc`,`pokaz` FROM tekst_stron WHERE `opis` = '$opis' "); 
$wnum_rows = mysql_num_rows($result1);
$line1 = mysql_fetch_array($result1);
$mail_biuro=$line1['tresc'];
$pokaz=$line1['pokaz'];




$opis="kontakt_mail_kadry0";
$result1 = mysql_query("SELECT `tresc`,`pokaz` FROM tekst_stron WHERE `opis` = '$opis' "); 
$wnum_rows = mysql_num_rows($result1);
$line1 = mysql_fetch_array($result1);
$mail_kadry=$line1['tresc'];
$pokaz=$line1['pokaz'];




$opis="kontakt_mail_info0";
$result1 = mysql_query("SELECT `tresc`,`pokaz` FROM tekst_stron WHERE `opis` = '$opis' "); 
$wnum_rows = mysql_num_rows($result1);
$line1 = mysql_fetch_array($result1);
$mail_info=$line1['tresc'];
$pokaz=$line1['pokaz'];




$recommend=stripslashes(isset($_POST['recommend']));

   if ($_SERVER['REQUEST_METHOD']=="POST" && $recommend==NULL && $change==NULL)

	{
//$from=stripslashes(isset($_POST['from']));
if(isset($_POST['from'])) 
{
$from=stripslashes($_POST['from']);
if ($from==NULL)
{
$from="";
}
}
else
{
$from=""; 
}


//$phone=stripslashes(isset($_POST['phone']));
if(isset($_POST['phone'])) 
{
$phone=stripslashes($_POST['phone']);
if ($phone==NULL)
{
$phone="";
}
}
else
{
$phone=""; 
}


//$toemail = stripslashes(isset($_POST['toemail']));
if(isset($_POST['toemail'])) 
{
$toemail=stripslashes($_POST['toemail']);
if ($toemail==NULL)
{
$toemail="";
}
}
else
{
$toemail=""; 
}
//$subject = stripslashes($_POST['subject']);
//$subject = "=?utf-8?B?".base64_encode(stripslashes($_POST['subject']))."?=";
//$subject1 = "=?utf-8?B?".base64_encode($subject)."?=";
//$message=stripslashes(isset($_POST['message']));
if(isset($_POST['message'])) 
{
$message=stripslashes($_POST['message']);
if ($message==NULL)
{
$message="";
}
}
else
{
$message=""; 
}
$filename=stripslashes(isset($_POST['filename']));

//$message = str_replace("  ", "  " , $message);

$message = str_replace("
", "<br>" , $message);

$dlugosc=strlen($message);
$message0=$message;
for( $x = 0; $x < $dlugosc-1; $x++ )
	{
$message0 = str_replace(" ", "" , $message0);
		if ($message0==NULL)
			{
			$message=NULL;
			end;
			}

	}

$subject1="Wiadomość z Yod Studio";


$dlugosc=strlen($from);
$from1=$from;
for( $x = 0; $x < $dlugosc-1; $x++ )
	{
$from1 = str_replace(" ", "" , $from1);
		if ($from1==NULL)
			{
			$from=NULL;
			end;
			}
			else
			{
			$from=$from1;
			}
	}

if ($from!=NULL)
{

if(preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i", $from))
//if (eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$", $from))
  {
$walidacja_maila="yes";
  } 
else
	{
$walidacja_maila="no";
	}


}

else if ($from==NULL)

{
$walidacja_maila="yes";
}


$dlugosc=strlen($phone);
$phone1=$phone;
for( $x = 0; $x < $dlugosc-1; $x++ )
	{
$phone1 = str_replace(" ", "" , $phone1);
		if ($phone1==NULL)
			{
			$phone=NULL;
			end;
			}
	}

if ($phone!=NULL)
{

if(preg_match("/^([0-9 \. \( \) + -]+)$/i", $phone))
//if (eregi("^([0-9 \. \( \) + -]+)$", $phone))
  {
$walidacja_telefonu="yes";
  } 
else
	{
$walidacja_telefonu="no";
	}


}

else if ($phone==NULL)

{
$walidacja_telefonu="yes";
}


		if ( $walidacja_maila=="yes" && $walidacja_telefonu=="yes"  && $message!=NULL && ( $from!=NULL || $phone!=NULL ) )
			{


	if ($from==NULL && $phone!=NULL && $walidacja_telefonu=="yes")
		{

$css_mail=file_get_contents("css_mail.php");

$message1="
<html>
<head>

<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">


<script type=\"text/javascript\">


function changeYod(sclassName)
{
document.getElementById('yod').className=sclassName;
}

function changeStudio(sclassName)
{
document.getElementById('studio').className=sclassName;
}

</script>

".$css_mail."

</head>

<body style=\"cursor: url('http://www.yodstudio.com/images_v1/normal.cur'),auto\">

<center>
<br><Br><Br>




	

					<TABLE class=\"logo_firm1\" id=\"logo_firm1\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
					<TR>
					<TD height=\"35\" colspan=\"2\" align=\"left\" valign=\"bottom\"><font class=\"yourowndimension\">Your Own Dimension</font></td>
					</TR>
					<TR>
					<td>


<TABLE class=\"logo_firm2\" id=\"logo_firm2\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">

<TR>
<TD height=\"78\" width=\"175\" align=\"center\" valign=\"top\" onmouseover=\"changeYod('on_yod'),changeStudio('on_studio');\"  onClick=\"window.location.href='http://www.yodstudio.com/'\" onmouseout=\"changeYod('yod'),changeStudio('studio');\">
<font id=\"yod\" class=\"yod\">Yod</font>


</TD>
</TR>

<TR>
<TD height=\"39\"  width=\"175\" align=\"center\" valign=\"top\" onmouseover=\"changeStudio('on_studio'), changeYod('on_yod');\" onClick=\"window.location.href='http://www.yodstudio.com/'\"  onmouseout=\" changeStudio('studio'), changeYod('yod');\" ><font id=\"studio\" class=\"studio\" >STUDIO</font></TD>
</TR>

</TABLE>

					</td>
					<td>

					<TABLE class=\"logo_firm3\" id=\"logo_firm3\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
					<TR>
					<TD height=\"92\" width=\"141\"  align=\"left\" valign=\"middle\"><font class=\"d3d\">3D</font></TD>
					</TR>
					<TR>
					<TD height=\"25\" width=\"141\" align=\"center\" valign=\"top\"><font class=\"since\">".$tresc."</font></TD>
					</TR>
					</TABLE>

					</td>
					</TR>
					</TABLE>


					<br><Br><br>


<TABLE class=\"message_email\" id=\"message_email\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">

<TR>
<TD align=\"justify\" valign=\"top\" >
<br><br>
<font class='text_other_bold' style=\"align:justify; cursor: url('http://www.yodstudio.com/images_v1/normal.cur'),auto\"> 

Telefon nadawcy to: &nbsp &nbsp ".$phone."
<p>
Treść wiadomości:
</font>
<font class='text_other'> 
<p>
<p>
 ".$message."
</font>

<br><Br>
</TD>

</TR>
</TABLE>


<Br>
<br><Br><br>


</center>
</body>

</html>";
		}


	if ($phone==NULL && $from!=NULL && $walidacja_maila=="yes")
		{

$css_mail=file_get_contents("css_mail.php");

$message1="
<html>
<head>

<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">


<script type=\"text/javascript\">


function changeYod(sclassName)
{
document.getElementById('yod').className=sclassName;
}

function changeStudio(sclassName)
{
document.getElementById('studio').className=sclassName;
}

</script>

".$css_mail."

</head>

<body style=\"cursor: url('http://www.yodstudio.com/images_v1/normal.cur'),auto\">

<center>
<br><Br><Br>




	

					<TABLE class=\"logo_firm1\" id=\"logo_firm1\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
					<TR>
					<TD height=\"35\" colspan=\"2\" align=\"left\" valign=\"bottom\"><font class=\"yourowndimension\">Your Own Dimension</font></td>
					</TR>
					<TR>
					<td>


<TABLE class=\"logo_firm2\" id=\"logo_firm2\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">

<TR>
<TD height=\"78\" width=\"175\" align=\"center\" valign=\"top\" onmouseover=\"changeYod('on_yod'),changeStudio('on_studio');\"  onClick=\"window.location.href='http://www.yodstudio.com/'\" onmouseout=\"changeYod('yod'),changeStudio('studio');\">
<font id=\"yod\" class=\"yod\">Yod</font>


</TD>
</TR>

<TR>
<TD height=\"39\"  width=\"175\" align=\"center\" valign=\"top\" onmouseover=\"changeStudio('on_studio'), changeYod('on_yod');\" onClick=\"window.location.href='http://www.yodstudio.com/'\"  onmouseout=\" changeStudio('studio'), changeYod('yod');\" ><font id=\"studio\" class=\"studio\" >STUDIO</font></TD>
</TR>

</TABLE>

					</td>
					<td>

					<TABLE class=\"logo_firm3\" id=\"logo_firm3\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
					<TR>
					<TD height=\"92\" width=\"141\"  align=\"left\" valign=\"middle\"><font class=\"d3d\">3D</font></TD>
					</TR>
					<TR>
					<TD height=\"25\" width=\"141\" align=\"center\" valign=\"top\"><font class=\"since\">".$tresc."</font></TD>
					</TR>
					</TABLE>

					</td>
					</TR>
					</TABLE>


					<br><Br><br>


<TABLE class=\"message_email\" id=\"message_email\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">

<TR>
<TD align=\"justify\" valign=\"top\" >
<br><br>
<font class='text_other_bold' style=\"align:justify; cursor: url('http://www.yodstudio.com/images_v1/normal.cur'),auto\"> 

Adres e-mail nadawcy to: &nbsp &nbsp ".$from."
<p>
Treść wiadomości:
</font>

<font class='text_other'> 
<p>
<p>
 ".$message."
</font>

<br><Br>
</TD>

</TR>
</TABLE>


<Br>
<br><Br><br>


</center>
</body>

</html>";
		}


	if ($from!=NULL && $phone!=NULL && $walidacja_telefonu=="yes" && $walidacja_maila=="yes")
		{

$css_mail=file_get_contents("css_mail.php");

$message1="
<html>
<head>

<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">


<script type=\"text/javascript\">


function changeYod(sclassName)
{
document.getElementById('yod').className=sclassName;
}

function changeStudio(sclassName)
{
document.getElementById('studio').className=sclassName;
}

</script>

".$css_mail."

</head>

<body style=\"cursor: url('http://www.yodstudio.com/images_v1/normal.cur'),auto\">

<center>
<br><Br><Br>




	

					<TABLE class=\"logo_firm1\" id=\"logo_firm1\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
					<TR>
					<TD height=\"35\" colspan=\"2\" align=\"left\" valign=\"bottom\"><font class=\"yourowndimension\">Your Own Dimension</font></td>
					</TR>
					<TR>
					<td>


<TABLE class=\"logo_firm2\" id=\"logo_firm2\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">

<TR>
<TD height=\"78\" width=\"175\" align=\"center\" valign=\"top\" onmouseover=\"changeYod('on_yod'),changeStudio('on_studio');\"  onClick=\"window.location.href='http://www.yodstudio.com/'\" onmouseout=\"changeYod('yod'),changeStudio('studio');\">
<font id=\"yod\" class=\"yod\">Yod</font>


</TD>
</TR>

<TR>
<TD height=\"39\"  width=\"175\" align=\"center\" valign=\"top\" onmouseover=\"changeStudio('on_studio'), changeYod('on_yod');\" onClick=\"window.location.href='http://www.yodstudio.com/'\"  onmouseout=\" changeStudio('studio'), changeYod('yod');\" ><font id=\"studio\" class=\"studio\" >STUDIO</font></TD>
</TR>

</TABLE>

					</td>
					<td>

					<TABLE class=\"logo_firm3\" id=\"logo_firm3\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
					<TR>
					<TD height=\"92\" width=\"141\"  align=\"left\" valign=\"middle\"><font class=\"d3d\">3D</font></TD>
					</TR>
					<TR>
					<TD height=\"25\" width=\"141\" align=\"center\" valign=\"top\"><font class=\"since\">".$tresc."</font></TD>
					</TR>
					</TABLE>

					</td>
					</TR>
					</TABLE>


								<br><Br><br>


<TABLE class=\"message_email\" id=\"message_email\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">

<TR>
<TD align=\"justify\" valign=\"top\" >
<br><br>
<font class='text_other_bold' style=\"align:justify; cursor: url('http://www.yodstudio.com/images_v1/normal.cur'),auto\"> 


Adres e-mail nadawcy to: &nbsp &nbsp ".$from."
<p>
Telefon nadawcy to: &nbsp &nbsp ".$phone."
<p>
Treść wiadomości:
</font>
<font class='text_other'> 
<p>
<p>
 ".$message."
</font>

<br><Br>
</TD>

</TR>
</TABLE>


<Br>
<br><Br><br>


</center>
</body>

</html>";
		}


     // generate a random string to be used as the boundary marker
   $mime_boundary="==Multipart_Boundary_x".md5(mt_rand())."x";

   // store the file information to variables for easier access

   $tmp_name = $_FILES['filename']['tmp_name'];
   $type = $_FILES['filename']['type'];
   $name = $_FILES['filename']['name'];
   $size = $_FILES['filename']['size'];


   // here we'll hard code a text messge
   // again, in reality, you'll normally get this from the form submission
   //$message = "------------------------" ;// 

   // if the upload succeded, the file will exist
   if (file_exists($tmp_name)){

      // check to make sure that it is an uploaded file and not a system file
      if(is_uploaded_file($tmp_name)){

         // open the file for a binary read
         $file = fopen($tmp_name,'rb');

         // read the file content into a variable
         $data = fread($file,filesize($tmp_name));

         // close the file
         fclose($file);

         // now we encode it and split it into acceptable length lines
         $data = chunk_split(base64_encode($data));
     }

      // now we'll build the message headers
      $headers = "From: $from\r\n" .
         "MIME-Version: 1.0\r\n" .
         "Content-Type: multipart/mixed;\r\n" .
         " boundary=\"{$mime_boundary}\"";

      // next, we'll build the message body
      // note that we insert two dashes in front of the
      // MIME boundary when we use it
     $message1 = "This is a multi-part message in MIME format.\n\n" .
         "--{$mime_boundary}\n" .
         "Content-Type: text/html; charset=\"utf-8\"\n" .
         "Content-Transfer-Encoding: 8bit\n\n" .
         $message1 . "\n\n";

    // now we'll insert a boundary to indicate we're starting the attachment
      // we have to specify the content type, file name, and disposition as
      // an attachment, then add the file content and set another boundary to
      // indicate that the end of the file has been reached
     $message1 .= "--{$mime_boundary}\n" .
         "Content-Type: {$type};\n" .
         " name=\"{$name}\"\n" .
         //"Content-Disposition: attachment;\n" .
         //" filename=\"{$fileatt_name}\"\n" .
         "Content-Transfer-Encoding: base64\n\n" .
         $data . "\n\n" .
         "--{$mime_boundary}--\n";









				if (mail($toemail, $subject1, $message1, $headers))
					{
if ($toemail==$mail_biuro)
{
$check1="checked";
$check2="";
$check3="";
$display1="show";
$display2="none";
$display3="none";
$display4="none";
}
if ($toemail==$mail_info)
{
$check1="";
$check2="checked";
$check3="";
$display1="none";
$display2="show";
$display3="none";
$display4="none";
}
if ($toemail==$mail_kadry)
{
$check1="";
$check2="";
$check3="checked";
$display1="none";
$display2="none";
$display3="show";
$display4="show";
}
					echo "Wiadomość z załącznikiem wysłana pomyślnie. Dziękujemy.";
$from = "";
$phone = "";
$message = "";

					}
					else
					{
$check2="checked";
					echo "<font color='red'>System nie może wysłać wiadomości. Prosimy o zaistniałym fakcie poinformować infolinię.</font>";
					}

   }
    else if (!file_exists($tmp_name))
{

					   $headers = "From:yodgroup.com<".$from.">\r\n"
//."Reply-To:\r\n";
//."CC: 	wojdalp@o2.pl\r\n"
//  ."BCC: pwojdal@o2.pl \r\n" // ukryty adres odbiorcy i wtey w mail() pierwsze pole do kogo zostaje puste
."Content-Transfer-Encoding: 8bit \r\n"
."Content-Type: text/html; charset=utf-8 \r\n";

	if (mail($toemail, $subject1, $message1, $headers))
					{
if ($toemail==$mail_biuro)
{
$check1="checked";
$check2="";
$check3="";
$display1="show";
$display2="none";
$display3="none";
$display4="none";
}
if ($toemail==$mail_info)
{
$check1="";
$check2="checked";
$check3="";
$display1="none";
$display2="show";
$display3="none";
$display4="none";
}
if ($toemail==$mail_kadry)
{
$check1="";
$check2="";
$check3="checked";
$display1="none";
$display2="none";
$display3="show";
$display4="show";
}
					echo "Wiadomość wysłana pomyślnie. Dziękujemy.";
$from = "";
$phone = "";
$message = "";

					}
					else
					{
$check2="checked";
					echo "<font color='red'>System nie może wysłać wiadomości. Prosimy o zaistniałym fakcie poinformować infolinię.</font>";
					}
}



			}
			else if ( $from!=NULL && $phone!=NULL && $walidacja_telefonu=="no" && $walidacja_maila=="no"  )
			{
			echo "<font color='red'>Proszę poprawnie wpisać swój adres e-mail oraz numer telefonu.</font>";
$phone=NULL;
$from = NULL;
if ($toemail==$mail_biuro)
{
$check1="checked";
$check2="";
$check3="";
$display1="show";
$display2="none";
$display3="none";
$display4="none";
}
if ($toemail==$mail_info)
{
$check1="";
$check2="checked";
$check3="";
$display1="none";
$display2="show";
$display3="none";
$display4="none";
}
if ($toemail==$mail_kadry)
{
$check1="";
$check2="";
$check3="checked";
$display1="none";
$display2="none";
$display3="show";
$display4="show";
}


}

else if ( $from!=NULL && $phone!=NULL && $walidacja_telefonu=="no" && $walidacja_maila=="yes"  )
			{
			echo "<font color='red'>Proszę poprawnie wpisać swój numer telefonu.</font>";
$phone=NULL;
if ($toemail==$mail_biuro)
{
$check1="checked";
$check2="";
$check3="";
$display1="show";
$display2="none";
$display3="none";
$display4="none";
}
if ($toemail==$mail_info)
{
$check1="";
$check2="checked";
$check3="";
$display1="none";
$display2="show";
$display3="none";
$display4="none";
}
if ($toemail==$mail_kadry)
{
$check1="";
$check2="";
$check3="checked";
$display1="none";
$display2="none";
$display3="show";
$display4="show";
}


}

else if ( $from!=NULL && $phone!=NULL && $walidacja_telefonu=="yes" && $walidacja_maila=="no"  )
			{
			echo "<font color='red'>Proszę poprawnie wpisać swój adres e-mail.</font>";
$from = NULL;
if ($toemail==$mail_biuro)
{
$check1="checked";
$check2="";
$check3="";
$display1="show";
$display2="none";
$display3="none";
$display4="none";
}
if ($toemail==$mail_info)
{
$check1="";
$check2="checked";
$check3="";
$display1="none";
$display2="show";
$display3="none";
$display4="none";
}
if ($toemail==$mail_kadry)
{
$check1="";
$check2="";
$check3="checked";
$display1="none";
$display2="none";
$display3="show";
$display4="show";
}


}

else if ( $walidacja_maila=="no" && $from != NULL  && $phone==NULL )
			{
			echo "<font color='red'>Proszę poprawnie wpisać swój adres e-mail.</font>";
$from = NULL;
if ($toemail==$mail_biuro)
{
$check1="checked";
$check2="";
$check3="";
$display1="show";
$display2="none";
$display3="none";
$display4="none";
}
if ($toemail==$mail_info)
{
$check1="";
$check2="checked";
$check3="";
$display1="none";
$display2="show";
$display3="none";
$display4="none";
}
if ($toemail==$mail_kadry)
{
$check1="";
$check2="";
$check3="checked";
$display1="none";
$display2="none";
$display3="show";
$display4="show";
}


}

else if ( $walidacja_telefonu=="no" && $phone !=NULL && $from==NULL )
			{
			echo "<font color='red'>Proszę poprawnie wpisać swój numer telefonu.</font>";
$phone=NULL;
if ($toemail==$mail_biuro)
{
$check1="checked";
$check2="";
$check3="";
$display1="show";
$display2="none";
$display3="none";
$display4="none";
}
if ($toemail==$mail_info)
{
$check1="";
$check2="checked";
$check3="";
$display1="none";
$display2="show";
$display3="none";
$display4="none";
}
if ($toemail==$mail_kadry)
{
$check1="";
$check2="";
$check3="checked";
$display1="none";
$display2="none";
$display3="show";
$display4="show";
}


}

else if ( $walidacja_telefonu=="yes" && $walidacja_maila=="yes" && $phone !=NULL && $from!=NULL && $message==NULL  )
			{
			echo "<font color='red'>Proszę wpisać wiadomość.</font>";

if ($toemail==$mail_biuro)
{
$check1="checked";
$check2="";
$check3="";
$display1="show";
$display2="none";
$display3="none";
$display4="none";
}
if ($toemail==$mail_info)
{
$check1="";
$check2="checked";
$check3="";
$display1="none";
$display2="show";
$display3="none";
$display4="none";
}
if ($toemail==$mail_kadry)
{
$check1="";
$check2="";
$check3="checked";
$display1="none";
$display2="none";
$display3="show";
$display4="show";
}


}

else if ( ($walidacja_telefonu=="yes" && $phone !=NULL && $from==NULL && $message==NULL) || ($walidacja_maila=="yes" && $from !=NULL && $phone==NULL && $message==NULL) )
			{
			echo "<font color='red'>Proszę wpisać wiadomość.</font>";

if ($toemail==$mail_biuro)
{
$check1="checked";
$check2="";
$check3="";
$display1="show";
$display2="none";
$display3="none";
$display4="none";
}
if ($toemail==$mail_info)
{
$check1="";
$check2="checked";
$check3="";
$display1="none";
$display2="show";
$display3="none";
$display4="none";
}
if ($toemail==$mail_kadry)
{
$check1="";
$check2="";
$check3="checked";
$display1="none";
$display2="none";
$display3="show";
$display4="show";
}


}

			else
			{
if ($toemail==$mail_biuro)
{
$check1="checked";
$check2="";
$check3="";
$display1="show";
$display2="none";
$display3="none";
$display4="none";
}
if ($toemail==$mail_info)
{
$check1="";
$check2="checked";
$check3="";
$display1="none";
$display2="show";
$display3="none";
$display4="none";
}
if ($toemail==$mail_kadry)
{
$check1="";
$check2="";
$check3="checked";
$display1="none";
$display2="none";
$display3="show";
$display4="show";
}
			echo "<font color='red'>Proszę wypełnić pole treści wiadomości oraz przynajmniej jedno z pól danych kontaktowych.</font>";
		
$message=$message;	}


		}
		else 
		{

$check1="";
$check2="checked";
$check3="";
$display1="none";
$display2="show";
$display3="none";
$display4="none";

		echo "Nawiązanie szybkiego kontaktu e-mailowego umożliwi Państwu poniższy formularz.<BR>Zapraszamy do korzystania.";
		}
/*
if ($toemail==$mail_biuro)
{
$check1="checked";
$check2="";
$check3="";
$display1="show";
$display2="none";
$display3="none";
$display4="none";
}
if ($toemail==$mail_info)
{
$check1="";
$check2="checked";
$check3="";
$display1="none";
$display2="show";
$display3="none";
$display4="none";
}
if ($toemail==$mail_kadry)
{
$check1="";
$check2="";
$check3="checked";
$display1="none";
$display2="none";
$display3="show";
$display4="show";
}
*/
	?>


