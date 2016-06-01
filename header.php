<? 

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Language" content="en-in" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>BARTER</title>
<script>

</script>
<style type="text/css">
body
{
background:url("clouds.jpg");


}
</style>
</head>

<body>
<div id="white" style="background-color:white;width:100%;">
<span class="style2">

<img src="blogo.png" alt="barter logo" width="220" ">
</span>
<span class="style6"><span class="style3">&nbsp;

<input name="Text1" type="text" placeholder="search for categories,tags" style="width: 675px; height: 46px;font-size:medium; border: #99ccff solid" /><input name="Button2" type="button" value="SEARCH"  style="width: 114px; height: 56px; border: #FFFF00 solid; color: #000000; font-weight: lighter;background-color: #FFFF00; border-bottom-style: solid; border-left-color: #FFFF00; border-left-style: solid; border-right-color: #FFFF00; border-right-style: solid; border-top-color: #FFFF00; border-top-style: solid" class="style5" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;<a href="deal.php"><button style="border-bottom-color: #FF0000; border-color: #FF0000; border-style: solid; width: 133px; height: 46px; color: #FFFFFF; font-size: medium; font-weight: 200; background-color: #FF0000;position:absolute;right:15px;top:80px;">propose a deal</button></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<hr  class="style9" /></span></span>

<?php
session_start();
if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id']))
{
$idd=$_SESSION['name2'];
$id=$_SESSION['user_id'];
echo '<div style="position:absolute;top:20px;right:25px;font-family:Century Gothic;color:black;">welcome&nbsp;&nbsp;&nbsp;<a style="color:green;text-decoration:none;" href=profile.php?idno='.$id.'>'.$idd.'</a></span>';

echo '<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="logout.php" style="color:black;text-decoration:none;">logout</a>';
echo '</div>';



}

else
{

echo '<div style="position:absolute;top:20px;right:5px;">
<a href="login.html" ><button style="width: 70px; height: 33px; background-color: #008000;color:white; border: #008000 solid; font-family: Arial; font-size: medium; color:=ffffff">Login</button></a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href="register.html"><button style="width: 80px; height: 32px; background-color: #FFFF00; border-color: #FFFF00; border: #FFFF00 solid; font-family: Arial; font-size: medium; font-weight: 400">Sign up</button></a>
</div>';

}
?>

</div>







