<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0014)about:internet --> 
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" /> 
<meta http-equiv=Content-Type content="text/html; charset=Big5"> 
<meta name="Description" content="LUKTAC Media Application." /> 
<meta name="keywords" content="LUKTAC, LUKTAC, Francis, Lawal, Udah, media, Player, authentication"<link rel="shortcut icon" type="image/x-icon" href="pictures/logo1.jpg">
<link rel="icon" type="image/x-icon" href="pictures/logo1.jpg">
<title>LUKTAC - Contact Us</title> 
<style type="text/css"> 
<!--
#Layer1 {
	position:absolute;
	left:20px;
	top:430px;
	width:239px;
	height:265px;
	z-index:1;
}
.style5 {
	font-family: "Times New Roman", Times, serif;
	font-size: 18px;
	font-weight: bold;
	color: #000033;
}
.style7 {
	font-size: 14px;
	font-family: "Times New Roman", Times, serif;
}
body {
	background-color: #FFFFCC;
}
.style9 {font-size: 12px}
.style11 {font-size: smaller}
a:link {
	text-decoration: none;
	color: #0000FF;
}
a:visited {
	text-decoration: none;
	color: #0000FF;
}
a:hover {
	text-decoration: none;
	color: #0000FF;
}
a:active {
	text-decoration: none;
	color: #0000FF;
}
body,td,th {
	font-family: Times New Roman, Times, serif;
	text-align: left;
}
a {
	font-weight: bold;
}
td {
	text-align: left;
}
td {
	text-align: left;
}
.style15 {color: #666666}
-->
</style> 
 <script type="text/javascript">
function Redirect()
{
  location.href = 'login.php';
}
</script>
</head>
 
<div align="center"> 

<!-- motto/logo upper part--> 

<table width="900" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFCC">
<tr><td align="center"></td></tr>
   
<tr>
     <td align="center"><center>
	<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0" id="tech" align="middle">
		<param name="allowScriptAccess" value="sameDomain" />
		<param name="movie" value="Logo.swf" />
		<param name="quality" value="high" />
		<embed src="Logo.swf" quality="high" width="900" height="305" name="tech" align="middle" allowScriptAccess="sameDomain" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
     </td>
   </tr>   
</table>

<!--  bg color for whole center -->
<table width="900" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFCC"> 
<tr>   <td height="50" colspan="8" valign="top" bgcolor="#CCCCCC"> <div align="center"><p>
<a href="home.html"><img src="Button\Homepic.JPG" width="100" height="35" border="0"></a>&nbsp;&nbsp;
<a href="aboutus.html"><img src="Button\TeamPro.JPG" width="100" height="35" border="0"></a>&nbsp;&nbsp;
<a href="Documents.html"><img src="Button\Doc.JPG" width="100" height="35" border="0"></a>&nbsp;&nbsp;
<a href="Diary.html"><img src="Button\Diary.JPG" width="100" height="35" border="0"></a>&nbsp;&nbsp;
<a href="Product.html"><img src="Button\Product.JPG" width="100" height="35" border="0"></a>&nbsp;&nbsp;
<a href="contactus.html"><img src="Button\Contact.JPG" width="100" height="35" border="0"></a>&nbsp;&nbsp;
<a href="faq.html"><img src="Button\F&A.JPG" width="100" height="35" border="0"></a></p>
</div></td> </tr><tr></table>

<div id="page">
	<!-- start content -->
  <table width="900" height="500" border="0" align="center" bgcolor="#FFFFFF" cellpadding="0" cellspacing="0">
      <tr>
        <th align="center" valign="top" scope="col"><table width="700" border="0" cellpadding="0" cellspacing="0">
          
          <tr>
            <th colspan="2" align="left" scope="col">
            </th>
          </tr>
          <tr>
            <td width="63">&nbsp;</td>
            <td width="637">
            <?php echo $success; ?><br />
            
            
            <script language="javascript">
                    
                    function submitform()
{
if (document.ContactForm.name.value=="")
{
	alert("Please Enter Your Name")
	document.ContactForm.name.focus()
}
else if(document.ContactForm.email.value=="")
{
	alert("Please Enter Your Email Address")
	document.ContactForm.email.focus()
}
else if(document.ContactForm.comment.value=="")
{
	alert("Please Enter Your Comment / Feedback")
	document.ContactForm.comments.focus()
	}
	else
		{
			document.ContactForm.action="send.php"
			document.ContactForm.submit()
		}
}
</script>

            <form name="ContactForm" method="post">  
       
    Name<br />
    <input name="name" type="text" class="buttonSilver" onBlur="globalcheck(this)"  size="32" maxlength="40"  />
    <br /><br />
    
    Email<br /> 
    <input name="email" type="text" class="buttonSilver" onBlur="globalcheck(this)"  size="32" maxlength="40"  />
    <br /><br />

   Comments<br />
   <textarea name="comment" class="buttonSilver" onBlur="globalcheck(this)" cols="50" rows="5" id="comment" ></textarea>

        <br />
        <input type="button" name="Button" value="Send Comment" class="buttonSilver" onClick="submitform()" />
        
        <input type="reset" name="reset" id="reset" value="Clear" class="buttonSilver" />
    
    </form>
    <p>&nbsp;</p>
    <p><span style="color:#003; font-size:12px;font-family:Lucida Calligraphy;font-weight:100">For Further enquiry, Please contact us:</span></p>
 <p><span style="color:#003; font-size:12px;font-family:Verdana;font-weight:100"> @: <a href="mailto:fkyeretwumasi@yahoo.com">fkyeretwumasi@yahoo.com</a></span></p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="mailto:habdulhayyu@yahoo.com">habdulhayyu@yahoo.com</a></span></p><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="mailto:bobomaski4u@yahoo.com">bobomaski4u@yahoo.com</a></span></p>
<p><span style="color:#003; font-size:12px;font-family:Verdana;font-weight:100">or call +60168844746, +60143973929, +60198587040</span></p>
              <p>&nbsp;</p>                     
            </p>
            <p>&nbsp;
            
            </p></td>
          </tr>
        </table></th>
    </tr>
  </table>



<div align="center"> 
<!--  bg color for whole center -->
<table width="900" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFCC"> 
<tr>
<td height="50" colspan="8" valign="top" bgcolor="#CCCCCC"> <div align="center"><p>
<script language="javascript" type="text/javascript" src="Java Script\copyright.txt"></script>
</td></tr></p></div> </table> 
</body> 
</html> 