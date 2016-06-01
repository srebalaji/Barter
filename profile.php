<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">

<head>
<meta http-equiv="Content-Language" content="en-in" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>profile</title>
<style type="text/css">
.style1 {
	color: #FFFFFF;
	font-family: "Century Gothic";
	font-size: 39pt;
	margin-left: 240px;
}
.style3 {
	color: #FFFFFF;
	font-family: "Century Gothic";
	font-size: x-large;
}
.style14 {
	font-size: xx-large;
}
.style8 {
	color: #FFFF00;
	font-size: large;
	font-family: "Arial Rounded MT Bold";
}
.style7 {
	color: #FFFFFF;
	font-size: medium;
	font-family: "Arial Rounded MT Bold";
}
.style2 {
	color: #FFFFFF;
	font-size: large;
	font-family: "Arial Rounded MT Bold";
}
.style6 {
	color: #FFFFFF;
	font-family: "Arial Rounded MT Bold";
}
.style13 {
	color: #FFFF00;
	font-family: "Arial Rounded MT Bold";
}
.style12 {
	color: #008000;
	font-family: "Arial Rounded MT Bold";
}
.style22 {
	font-family: "Century Gothic";
	font-size: large;
	color: #FFFF00;
}
.style15 {
	font-weight: normal;
}
.style20 {
	margin-top: 0px;
	color: #FFCC99;
}
.style17 {
	color: #FFFFFF;
}
.style18 {
	font-size: medium;
	font-family: "Arial Rounded MT Bold";
}
.style21 {
	color: #FFCC99;
}
.style16 {
	margin-top: 0px;
}
.style19 {
	font-size: large;
}
.style24 {
	color: #FFFFFF;
	font-family: "Century Gothic";
	font-size: 38pt;
	margin-left: 360px;
}
.style25 {
	color: #FFFFFF;
	font-family: "Century Gothic";
}
.style26 {
	color: #FFFFFF;
	font-family: "Century Gothic";
	font-size: medium;
}
.style27 {
	font-family: "Century Gothic";
}
.style28 {
	font-size: medium;
}
.style29 {
	color: #FFFFFF;
	font-size: medium;
}
.style30 {
	color: #FFFF00;
	font-size: large;
}
.style31 {
	margin-left: 360px;
}
.style32 {
	font-size: small;
}
.style33 {
	color: #FFFFFF;
	font-size: small;
	font-family: "Century Gothic";
}
.style34 {
	margin-left: 1080px;
}
#name{
color:white;
font-family:Century Gothic;
font-size:xx-large;
}
#item
{
	color: black;
	font-size: large;
	font-family: "Arial Rounded MT Bold";
}
#ineed
{
font-size:large;
}
</style>
</head>

<body style="background-image: url('twittercloud.jpg')">
<?php

if(!mysql_connect('localhost','root','') || !mysql_select_db('barter'))
{
die(mysql_error);

}
if(isset($_GET['idno']) && !empty($_GET['idno']) )
{
$idno=$_GET['idno'];
if($query=mysql_query("select `name`,`addressline1`,`addressline2`,`email`,`city`,`country`,`phno` from users where `id` = '$idno' "))
{
while($fetch=mysql_fetch_assoc($query))
{
$name=$fetch['name'];
$add1=$fetch['addressline1'];
$add2=$fetch['addressline2'];
$email=$fetch['email'];
$city=$fetch['city'];
$country=$fetch['country'];
$phno=$fetch['phno'];
}
}
else
{
die(mysql_error());
}
}
?>

<p class="style1">My posts</p>
<span class="style17"><span class="style32"><span class="style27">
<form method="post" class="style33" style="width: 920px; height: 48px">
			<p class="style34">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			
</form>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a class="style33" href="editmyprofile.html"><button value="Edit my profile" style="width: 149px; height: 50px; background-color: #FFFF00; border: #FFFF00 solid; font-family: 'Arial Rounded MT Bold'; font-size: large">Edit My Profile</button></a>
	<div style="height: 88px; width: 964px" class="style31">
		<span class="style33">Email: </span>
<span class="style33">
		<?php echo $email; ?></span></a><span class="style17"><span class="style32"><span class="style27"><br />
		Address: <?php echo $add1; ?><br />
		City: <?php echo $city; ?><br />
		Country: India&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<br />
		Phone number: <?php echo $phno; ?></span></span></span></div>
		
<?php
if($query=mysql_query("SELECT posts.item,posts.id, posts.ineed, users.username, category.category,posts.range
FROM posts
LEFT JOIN users ON posts.userid = users.id
LEFT JOIN category ON posts.catid = category.id WHERE posts.userid='$idno'"))
{
while($fetch=mysql_fetch_assoc($query))
{
$postid=$fetch['id'];
$name=$fetch['username'];

$item=$fetch['item'];
$ineed=$fetch['ineed'];
$range=$fetch['range'];

echo '<div id="center" style="margin-left:400px;border:1px solid white;width:500px;background-color:;">';

echo '<div id="name">'.$name.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:yellow;font-size:medium;">Price Range - '.$range.'</span></div>';
echo '<b><div id="item">Hey guys, I&#39;m looking forward to 
	bart my <span style="color: #FFFF00;font-size:large;font-family: Arial Rounded MT Bold;"> '.$item.'</span>with something useful I find with you</br></br></div>';
	// i need items
echo '<b><div id="ineed"> I&#39;m looking for something like</br> </b><span style ="color: #FFFF00;font-family: Arial Rounded MT Bold;">'.$ineed.'</span></br></br></div>';

if($query2=mysql_query("select reply,nameoftheuser,range2 from reply where postid='$postid'"))
{
while($fetch8=mysql_fetch_assoc($query2))
{
$replier=$fetch8['nameoftheuser'];
$reply=$fetch8['reply'];
$range=$fetch8['range2'];
echo '<span style="color: #FFFF00;font-size:1.7em;">'.$replier.'</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:yellow">'.$range.'</span></br>';
echo $reply.'</br>';
echo '<a href="shipment.html"><button style="width: 60px; height: 22px; background-color: #FFFF00; border-color: #FFFF00; border: #FFFF00 solid; font-family: Arial; font-size: small; font-weight: 400">Bart</button></a>';

echo '<hr color="white" width="50%" align="left">';
}

}

echo '<form action="index.php" method="post">

<input type="radio" name="range2" value="range matches">my price range matches </br>
<input type="radio" name="range2" value="barter with extra money">i would like to barter with extra money </br>
<input type="radio" name="range2" value="barter with multiple items">i would like to barter with multiple items </br>


<textarea name="reply"  style="width: 252px; height: 69px; border-color: #FFFFFF;font-size:large; border: #FFFFFF solid"></textarea><span class="style19">&nbsp&nbsp;&nbsp;
<input type="hidden" name="postid" value="'.$postid.'">
 <input name="ping" type="submit" value="Ping" style="width: 86px; height: 34px; background-color: #FFFF00; border: #FFFF00 solid; font-family: Century Gothic;font-size:large;">
</form>';
echo '</div></br>';

}//while

}
else
{
die(mysql_error());
}


?>		
		
		
		
	

</body>

</html>
