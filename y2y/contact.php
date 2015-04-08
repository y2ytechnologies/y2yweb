<?php

session_name("fancyform");
session_start();


$_SESSION['n1'] = rand(1,20);
$_SESSION['n2'] = rand(1,20);
$_SESSION['expect'] = $_SESSION['n1']+$_SESSION['n2'];


$str='';
if($_SESSION['errStr'])
{
	$str='<div class="error">'.$_SESSION['errStr'].'</div>';
	unset($_SESSION['errStr']);
}

$success='';
if($_SESSION['sent'])
{
	$success='<h1>Thank you!</h1>';
	
	$css='<style type="text/css">#contact-form{display:none;}</style>';
	
	unset($_SESSION['sent']);
}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Y2Y Technologies - Home</title>
<link rel="stylesheet" type="text/css" href="assets/styles/style.css" media="screen" />
<!--[if lt IE 9]><script type="text/javascript" src="assets/scripts/modernizr.js"></script><![endif]-->
<link rel="stylesheet" type="text/css" href="ddlevelsfiles/ddlevelsmenu-base.css" />
<link rel="stylesheet" type="text/css" href="ddlevelsfiles/ddlevelsmenu-topbar.css" />
<link rel="stylesheet" type="text/css" href="ddlevelsfiles/ddlevelsmenu-sidebar.css" />
<script type="text/javascript" src="ddlevelsfiles/ddlevelsmenu.js"></script>
<script src="Scripts/swfobject_modified.js" type="text/javascript"></script>


<link rel="stylesheet" type="text/css" href="engine1/style.css" />
	<script type="text/javascript" src="engine1/jquery.js"></script>
    <style type="text/css">
<!--
.style1 {
	font-family: "Times New Roman", Times, serif;
	font-size: medium;
}
-->
    </style>
    <link rel="stylesheet" type="text/css" href="jqtransformplugin/jqtransform.css" />
<link rel="stylesheet" type="text/css" href="formValidator/validationEngine.jquery.css" />
<link rel="stylesheet" type="text/css" href="demo.css" />

<?=$css?>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<script type="text/javascript" src="jqtransformplugin/jquery.jqtransform.js"></script>
<script type="text/javascript" src="formValidator/jquery.validationEngine.js"></script>

<script type="text/javascript" src="script.js"></script>
</head>
<body>

    <table width="960px" border="0" cellspacing="0" cellpadding="0" align="center">
  <tr>
    <td><table width="884" border="0" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" height="105">
  <tr>
    <td width="872"><table width="100" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td><a href="index.html"><img src="images/top-1.jpg" width="241" height="195" border="0"></a></td>
        <td valign="top"><table width="100" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><img src="images/top-2.jpg" width="770" height="141"></td>
            </tr>
          <tr>
            <td><table width="300" border="0" align="right" cellpadding="0" cellspacing="0">
              <tr>
                <td width="10"></td>
                <td width="180"><a href="index.html" class="selected" style="color:#00678E;">Home</a> | <a href="contact.php" style="color:#00678E;">Contact Us</a></td>
                <td width="10"></td>
                </tr>
              </table></td>
            </tr>
          </table></td>
        </tr>
      <tr><td height="5"></td></tr>
  </table>
</td>
    <td width="12" valign="top"></td>
  </tr>
</table>
</td>
  </tr>
<tr><td>
<div id="ddtopmenubar" class="mattblackmenu">
<ul class="menu">
<li><a href="#" rel="ddsubmenu1"><img src="images/menu.png">Knowledge Center - Training</a></li>
<li><a href="#" rel="ddsubmenu2"><img src="images/menu.png">Online Training</a></li>
<li><a href="#" rel="ddsubmenu3"><img src="images/menu.png">Consulting</a></li>
<li><a href="ytoylms.html"><img src="images/menu.png">LMS</a></li>
<li><a href="downloads.html">Downloads</a></li>
</ul>
</div>

<script type="text/javascript">
ddlevelsmenu.setup("ddtopmenubar", "topbar") //ddlevelsmenu.setup("mainmenuid", "topbar|sidebar")
</script>


<ul id="ddsubmenu1" class="ddsubmenustyle">
<li><a href="training_by_role.html">Enterprise Infrastructure Architect Track</a>
 <ul>
  <li><a href="enterprise_cloud_infrastructure_as_a_service.html">Enterprise Cloud – Infrastructure as a Service</a></li>
  <li><a href="enterprise_cloud_desktop_as_a_service.html">Enterprise Cloud – Desktop as a Service</a></li>
  <li><a href="soon.html">Enterprise Cloud – Storage as a Service</a></li>
  <li><a href="soon.html">Open Source- Enterprise Infrastructure Architect</a></li>
  <li><a href="soon.html">Open Source- Enterprise Infrastructure Architect</a></li>
  <li><a href="soon.html">Enterprise Security as a Service</a></li>    
 </ul>
 </li>
<li><a href="training_by_role.html">Enterprise Infrastructure Specialist Track</a>
 <ul>
  <li><a href="soon.html">Enterprise Virtualization – KVM</a></li>
  <li><a href="soon.html">Enterprise Virtualization – Hyper V</a></li>
  <li><a href="soon.html">Enterprise Virtualization – Xen</a></li>
  <li><a href="soon.html">Open Source Technology – Linux High Availability</a></li>
   <li><a href="soon.html">Open Source Technology – Linux System Performance and Monitoring</a></li>
   <li><a href="soon.html">Open Source Technology – Linux Directory Services </a></li>
   <li><a href="soon.html">Open Source Technology – Linux Mail Services</a></li>
   <li><a href="soon.html">Open Source Technology – Linux Provisioning services and Automation</a></li>
   <li><a href="soon.html">Open Source Technology – Linux Network and Security</a></li>    
 </ul>
 </li>
<li><a href="training_by_technology.html">Enterprise Cloud</a>
 <ul>
  <li><a href="enterprise_cloud_infrastructure_as_a_service.html">Infrastructure as a Service</a></li>
  <li><a href="enterprise_cloud_desktop_as_a_service.html">Desktop as a Service</a></li>
  <li><a href="soon.html">Storage as a Service</a></li>
</ul>
</li>
<li><a href="training_by_technology.html">Enterprise Virtualization</a>
 <ul>
  <li><a href="soon.html">KVM</a></li>
  <li><a href="soon.html">Hyper V</a></li>
  <li><a href="soon.html">Xen</a></li>
</ul>
</li>
<li><a href="training_by_technology.html">Open Source Technologies</a>
 <ul>
  <li><a href="soon.html">Enterprise Infrastructure Architect</a></li>
  <li><a href="soon.html">Linux High Availability</a></li>
  <li><a href="soon.html">Linux System Performance and Monitoring</a></li>
  <li><a href="soon.html">Linux Directory Services</a></li>
   <li><a href="soon.html">Linux Mail Services</a></li>
   <li><a href="soon.html">Linux Provisioning services and Automation </a></li>
   <li><a href="soon.html">Linux Network and Security</a></li>
 </ul>
</li>
<li><a href="training_by_technology.html"> Enterprise Security</a>
  <ul>
  <li><a href="soon.html">Security as a Service</a></li>
  </ul>
</li>
</ul>


<!--Top Drop Down Menu 2 HTML-->

<ul id="ddsubmenu2" class="ddsubmenustyle">
<li><a href="soon.html">Enterprise Cloud</a></li>
<li><a href="soon.html">Enterprise Virtualization</a></li>
<li><a href="soon.html">Open Source Technologies</a></li>
</ul>

<!--Top Drop Down Menu 3 HTML-->

<ul id="ddsubmenu3" class="ddsubmenustyle">
<li><a href="soon.html">Cloud Infrastructure solution</a></li>
<li><a href="soon.html">Enterprise Virtualization Solution</a></li>
<li><a href="soon.html">Open Source Solution</a></li>
</ul>


<div class="wrapper">
  <section id="home">
    <div class="row">
      <div class="six columns">
        <div>
<div id="wowslider-container1">
	<div class="ws_images"><ul>
<li><img src="data1/images/1.jpg" alt="1" title="1" id="wows1_0"/></li>
<li><img src="data1/images/2.jpg" alt="2" title="2" id="wows1_1"/></li>
<li><img src="data1/images/3.jpg" alt="3" title="3" id="wows1_2"/></li>
</ul></div>

	<div class="ws_shadow"></div>
	</div>
	<script type="text/javascript" src="engine1/wowslider.js"></script>
	<script type="text/javascript" src="engine1/script.js"></script>        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="35%" height="355" valign="top"><br><br>
<strong style="font-size:15px;">Y2Y Technologies</strong><br><br />
<p style="font-size:14px;">No.9 Greeshma<br>
P.W.D Main Road<br>
Opp Veerabadreshwara Traders<br>
A.Narayanapura, Akash Nagar<br>
Bangalore :16</p> </td>
            <td width="65%" valign="top"><div id="main-container">

	<div id="form-container">
    <h2>Drop us a line and we will get back to you</h2>
    
    <form id="contact-form" name="contact-form" method="post" action="submit.php">
      <table width="100%" border="0" cellspacing="0" cellpadding="5">
        <tr>
          <td width="15%" height="41"><label for="name">Name</label></td>
          <td width="70%"><input type="text" class="validate[required,custom[onlyLetter]]" name="name" id="name" value="<?=$_SESSION['post']['name']?>" /></td>
          <td width="15%" id="errOffset">&nbsp;</td>
        </tr>
        <tr>
          <td height="43"><label for="email">Email</label></td>
          <td><input type="text" class="validate[required,custom[email]]" name="email" id="email" value="<?=$_SESSION['post']['email']?>" /></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td height="37"><label for="subject">Subject</label></td>
          <td><select name="subject" id="subject">
            <option value="" selected="selected"> - Choose -</option>
            <option value="Question">Question</option>
            <option value="Business proposal">Business proposal</option>
            <option value="Complaint">Complaint</option>
          </select>          </td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td height="211" valign="top"><label for="message">Message</label></td>
          <td><textarea name="message" id="message" class="validate[required]" cols="35" rows="5"><?=$_SESSION['post']['message']?></textarea></td>
          <td valign="top">&nbsp;</td>
        </tr>
        <tr>
          <td height="58"><label for="captcha"><?=$_SESSION['n1']?> + <?=$_SESSION['n2']?> =</label></td>
          <td><input type="text" class="validate[required,custom[onlyNumber]]" name="captcha" id="captcha" /></td>
          <td valign="top">&nbsp;</td>
        </tr>
        <tr>
          <td valign="top">&nbsp;</td>
          <td colspan="2"><input type="submit" name="button" id="button" value="Submit" />
          <input type="reset" name="button2" id="button2" value="Reset" />
          
          <?=$str?>          <img id="loading" src="img/ajax-load.gif" width="16" height="16" alt="loading" /></td>
        </tr>
      </table>
      </form>
      <?=$success?>
    </div>
	
</div>
              </td>
          </tr>
        </table>
        <p align="left">&nbsp;</p>
        </div>
      
    </div>
    <hr>
  </section>
  <footer>
    <p class="left">Copyright © 2012 - 2013 All Rights Reserved<br>
	Site By: <a href="http://www.cybergeeksolution.com">Cybergeek Solution</a></p>
    <div class="social right">    <a href="http://www.facebook.com/pages/Y-to-Y-Technologies/490630117666622"><img src="assets/images/facebook.png" alt="Facebook" /></a><a href=" http://www.linkedin.com/profile/view?id=237188810" target="_blank"><img src="assets/images/linkedin.png" alt="Linkedin" /></a><a href="https://twitter.com/y2ytech" target="_blank"><img src="assets/images/twitter.png" alt="Twitter" /></a>    </div>
</footer>
</div>


</td></table>

</body>
</html>