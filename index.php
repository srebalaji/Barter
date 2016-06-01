<?
include 'header.php';
?>


<style>

#name{
color:white;
font-family:Century Gothic;
font-size:xx-large;
}
#item
{
	color: white;
	font-size: medium;
	font-family: "Arial Rounded MT Bold";
}
#ineed
{
font-size:medium;
color:white;
font-family: "Arial Rounded MT Bold";

}
#cat
{
color:red;
}
#deal
{
position:absolute;
top:20px;
right:10px;
color:orange;
border:solid green;
height:40px;

}
#reply
{
color:orange;
}

.style2 {
	background-attachment: fixed;
	background: center;
	font-family: "haettenschweiler";
	letter-spacing:8px;
	font-size: 39pt;
	color: #FFFFFF;
	font-style: normal;
	border-bottom-color: #FFFF00;
}
.style3 {
	font-family: "Arial";color: #FFFFFF;
}
.style4 {
	font-family: arial;
}
.style5 {
	font-family: arial;
	font-size: large;
}
.style6 {
	font-size: 20pt;
}
.style8 {
	vertical-align: middle;
}
.style9 {
	color: #FFFFFF;
	margin-top: 0px;
}






#cssmenu,
#cssmenu ul,
#cssmenu ul li,
#cssmenu ul ul {
  list-style: none;
  margin: 0;
  padding: 0;
  border: 0;
}
#area{position:absolute;top:200px;left:30px;}
#cssmenu ul {
  position: relative;
  z-index: 597;
  float: left;
}
#cssmenu ul li {
  float: left;
  min-height: 1px;
  line-height: 1em;
  vertical-align: middle;
}
#cssmenu ul li.hover,
#cssmenu ul li:hover {
  position: relative;
  z-index: 599;
  cursor: default;
}
#cssmenu ul ul {
  margin-top: 1px;
  visibility: hidden;
  position: absolute;
  top: 1px;
  left: 99%;
  z-index: 598;
  width: 100%;
}
#cssmenu ul ul li {
  float: none;
}
#cssmenu ul ul ul {
  top: 1px;
  left: 99%;
}
#cssmenu ul li:hover > ul {
  visibility: visible;
}
#cssmenu ul li {
  float: none;
}
#cssmenu ul ul li {
  font-weight: normal;
}
/* Custom CSS Styles */
#cssmenu {
  font-family: 'Lato', sans-serif;
  font-size: 18px;
  width: 200px;
}
#cssmenu ul a,
#cssmenu ul a:link,
#cssmenu ul a:visited {
  display: block;
  color: #848889;
  text-decoration: none;
  font-weight: 300;
}
#cssmenu > ul {
  float: none;
}
#cssmenu ul {
  background: #fff;
}
#cssmenu > ul > li {
  border-left: 3px solid #d7d8da;
}
#cssmenu > ul > li > a {
  padding: 10px 20px;
}
#cssmenu > ul > li:hover {
  border-left: 3px solid #3dbd99;
}
#cssmenu ul li:hover > a {
  color: #3dbd99;
}
#cssmenu > ul > li:hover {
  background: #f6f6f6;
}
/* Sub Menu */
#cssmenu ul ul a:link,
#cssmenu ul ul a:visited {
  font-weight: 400;
  font-size: 14px;
}
#cssmenu ul ul {
  width: 180px;
  background: none;
  border-left: 20px solid transparent;
}
#cssmenu ul ul a {
  padding: 8px 0;
  border-bottom: 1px solid #eeeeee;
}
#cssmenu ul ul li {
  padding: 0 20px;
  background: #fff;
}
#cssmenu ul ul li:last-child {
  border-bottom: 3px solid #d7d8da;
  padding-bottom: 10px;
}
#cssmenu ul ul li:first-child {
  padding-top: 10px;
}
#cssmenu ul ul li:last-child > a {
  border-bottom: none;
}
#cssmenu ul ul li:first-child:after {
  content: '';
  display: block;
  width: 0;
  height: 0;
  position: absolute;
  left: -20px;
  top: 13px;
  border-left: 10px solid transparent;
  border-right: 10px solid #fff;
  border-bottom: 10px solid transparent;
  border-top: 10px solid transparent;
}

</style> 

</head>
<body>
<?php




if(!mysql_connect('localhost','root','') || !mysql_select_db('barter'))
{
die(mysql_error);

}


?>



<!--sssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss -->
<?php

if(isset($_GET['cat']) && !empty($_GET['cat']) )
{
$cat=$_GET['cat'];

if($query=mysql_query("SELECT posts.item,posts.id, posts.ineed, users.username, category.category,posts.range
FROM posts
LEFT JOIN users ON posts.userid = users.id
LEFT JOIN category ON posts.catid = category.id  where category.category='$cat'"))
{

while($fetch=mysql_fetch_assoc($query))
{

$postid=$fetch['id'];
$name=$fetch["username"];
$item=$fetch['item'];
$ineed=$fetch['ineed'];
$cat=$fetch['category'];
$range=$fetch['range'];

$arr=explode(",",$ineed);

echo '<div id="center" style="margin-left:400px;width:800px;background-color:;line-height:180%">';

echo '<div id="name">'.$name.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:yellow;font-size:medium;">Price Range - '.$range.'</span></div>';
echo '<div id="item">Hey guys, I&#39;m looking forward to 
	bart my <span style="color: #FFFF00;font-size:large;font-family: Arial Rounded MT Bold;"> '.$item.'</span>with something useful I find with you</br></div>';
	// i need items
	
echo '<div id="ineed"> I&#39;m looking for something like</br> </b><span style ="color: lightgreen;font-family: Arial Rounded MT Bold;font-size:large;">'.$ineed.'</span></br></br></div>';


if($query2=mysql_query("select reply,nameoftheuser,range2 from reply where postid='$postid'"))
{
while($fetch8=mysql_fetch_assoc($query2))
{
$replier=$fetch8['nameoftheuser'];
$reply=$fetch8['reply'];
$range=$fetch8['range2'];

echo '<span style="color: #FFFF00;font-size:1.7em;font-family:Century Gothic;">'.$replier.'</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:yellow">'.$range.'</span></br>';
echo '<span style="color:white;font-size:large;font-family: Arial Rounded MT Bold;">'.$reply.'</span><hr color="white" width="50%" align="left">';
}

}

echo '<form action="index.php" method="post">

<span style="color:lightgreen;font-size:large;font-family: Arial Rounded MT Bold;">
<input type="radio" name="range2" value="range matches">my price range matches </br>
<input type="radio" name="range2" value="barter with extra money">i would like to barter with extra money </br>
<input type="radio" name="range2" value="barter with multiple items">i would like to barter with multiple items </br>
</span>

<textarea name="reply"  style="width: 252px; height: 69px; border-color: #FFFFFF;font-size:large; border: #FFFFFF solid"></textarea><span class="style19">&nbsp&nbsp;&nbsp;
<input type="hidden" name="postid" value="'.$postid.'">
 <input name="ping" type="submit" value="Ping" style="width: 86px; height: 34px; background-color: #FFFF00; border: #FFFF00 solid; font-family: Century Gothic;font-size:large;">
</form>';
echo '</div><hr width="60%" color="white" align="center">';
}//while
}
else
{
die(mysql_error());
}
}

else
{
if($query=mysql_query("SELECT posts.item,posts.id, posts.ineed, users.username, category.category,posts.range
FROM posts
LEFT JOIN users ON posts.userid = users.id
LEFT JOIN category ON posts.catid = category.id"))
{
while($fetch=mysql_fetch_assoc($query))
{
$postid=$fetch['id'];
$name=$fetch['username'];
$cat=$fetch['category'];
$item=$fetch['item'];
$ineed=$fetch['ineed'];
$range=$fetch['range'];
$arr=explode(",",$ineed);

echo '<div id="center" style="margin-left:400px;width:800px;background-color:;line-height:180%">';

echo '<div id="name">'.$name.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:yellow;font-size:medium;">Price Range - '.$range.'</span></div>';
echo '<div id="item">Hey guys, I&#39;m looking forward to 
	bart my <span style="color: #FFFF00;font-size:large;font-family: Arial Rounded MT Bold;"> '.$item.'</span>with something useful I find with you</br></div>';
	// i need items
echo '<div id="ineed"> I&#39;m looking for something like</br> </b><span style ="color: lightgreen;font-family: Arial Rounded MT Bold;font-size:large;">'.$ineed.'</span></br></br></div>';

if($query2=mysql_query("select reply,nameoftheuser,range2 from reply where postid='$postid'"))
{
while($fetch8=mysql_fetch_assoc($query2))
{
$replier=$fetch8['nameoftheuser'];
$reply=$fetch8['reply'];
$range=$fetch8['range2'];

echo '<span style="color: #FFFF00;font-size:1.7em;font-family:Century Gothic;">'.$replier.'</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:yellow">'.$range.'</span></br>';
echo '<span style="color:white;font-size:large;font-family: Arial Rounded MT Bold;">'.$reply.'</span><hr color="white" width="50%" align="left">';
}

}

echo '<form action="index.php" method="post">

<span style="color:lightgreen;font-size:large;font-family: Arial Rounded MT Bold;">
<input type="radio" name="range2" value="range matches">my price range matches </br>
<input type="radio" name="range2" value="barter with extra money">i would like to barter with extra money </br>
<input type="radio" name="range2" value="barter with multiple items">i would like to barter with multiple items </br>
</span>

<textarea name="reply"  style="width: 252px; height: 69px; border-color: #FFFFFF;font-size:large; border: #FFFFFF solid"></textarea><span class="style19">&nbsp&nbsp;&nbsp;
<input type="hidden" name="postid" value="'.$postid.'">
 <input name="ping" type="submit" value="Ping" style="width: 86px; height: 34px; background-color: #FFFF00; border: #FFFF00 solid; font-family: Century Gothic;font-size:large;">
</form>';
echo '</div><hr width="60%" color="white" align="center">';

}//while

}
else
{
die(mysql_error());
}

}



?>
<?php
if(isset($_POST['reply']) && !empty($_POST['reply']) && isset($_POST['range2']) && !empty($_POST['range2']) )
{
if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id']))
{
$reply=$_POST['reply'];
$postid=$_POST['postid'];
$name3=$_SESSION['name2'];
$range2=$_POST['range2'];
if($query=mysql_query("insert into reply values (null,'$postid','$reply','$name3','$range2')"))
{
echo '<script>window.alert("replied");</script>';
echo '<script>window.locaton.reload() </script>';

}
else{die(mysql_error());}
}
else
{
echo '<script>window.alert("not logged in");</script>';
die();

}
}

?>
<div id="area">
<div id='cssmenu'>
<ul>
   <li class='active'><a href='index.php'><span>Home</span></a></li>
   <li class='has-sub'><a href='index.php?cat=laptops'><span>Laptops</span></a>
      <ul>
        <li class='has-sub'><a href='index.php?cat=harddisk'><span>hard disk</span></a> 
           
         </li>
        <li class='has-sub'><a href='index.php?cat=pendrives'><span>pendrives</span></a> </li>
        <li class='has-sub'><a href='index.php?cat=headphones'><span>headphones</span></a> </li>
        <li class='has-sub'><a href='index.php?cat=printers'><span>printers</span></a> </li>
      </ul>
   </li>
   
   <li class='has-sub'><a href='index.php?cat=mobile phones'><span>Mobile phones</span></a>
   <ul>
        <li class='has-sub'><a href='index.php?cat=ipad'><span>ipad</span></a> 
           
         </li>
        <li class='has-sub'><a href='index.php?cat=samsung'><span>samsung</span></a> </li>
        <li class='has-sub'><a href='index.php?cat=sony'><span>sony</span></a> </li>
        <li class='has-sub'><a href='index.php?cat=asus'><span>asus</span></a> </li>
      </ul>
   </li>
   
    <li class='has-sub'><a href='#'><span>Audio and Video</span></a>
   <ul>
        <li class='has-sub'><a href='index.php?cat=mp3'><span>mp3 players</span></a> 
           
         </li>
        <li class='has-sub'><a href='index.php?cat=ipods'><span>ipods</span></a> </li>
        <li class='has-sub'><a href='index.php?cat=speakers'><span>speakers</span></a> </li>
        <li class='has-sub'><a href='index.php?cat=headphones'><span>headphones</span></a> </li>
      </ul>
   </li>
   
    <li class='has-sub'><a href='#'><span>Gaming and Consoles</span></a>
   <ul>
        <li class='has-sub'><a href='#'><span>play station</span></a> 
           
         </li>
        <li class='has-sub'><a href='#'><span>xbox</span></a> </li>
        <li class='has-sub'><a href='#'><span>game cds</span></a> </li>
        <li class='has-sub'><a href='#'><span>xbox and ps games</span></a> </li>
      </ul>
   </li>
   
   
   
    <li class='has-sub'><a href='#'><span>Cameras</span></a>
   <ul>
        <li class='has-sub'><a href='#'><span>canon</span></a> 
           
         </li>
        <li class='has-sub'><a href='#'><span>nikon</span></a> </li>
        <li class='has-sub'><a href='#'><span>sony</span></a> </li>
        <li class='has-sub'><a href='#'><span>cam corders</span></a> </li>
      </ul>
   </li>
   
   
    <li class='has-sub'><a href='#'><span>Personal Appliances</span></a>
   <ul>
        <li class='has-sub'><a href='#'><span>trimmers</span></a> 
           
         </li>
        <li class='has-sub'><a href='#'><span>hair dyers</span></a> </li>
        <li class='has-sub'><a href='#'><span>epiators</span></a> </li>
       
      </ul>
   </li>
   
   
    <li class='has-sub'><a href='#'><span>Antiques</span></a>
   <ul>
        <li class='has-sub'><a href='#'><span>antiques</span></a> 
           
         </li>
       
      </ul>
   </li>
   
   
    <li class='has-sub'><a href='index.php?cat=books'><span>Books</span></a>
   <ul>
        <li class='has-sub'><a href='#'><span>sidney shelton</span></a> 
           
         </li>
        <li class='has-sub'><a href='#'><span>david baladacci</span></a> </li>
        <li class='has-sub'><a href='#'><span>chetan baghat</span></a> </li>
        <li class='has-sub'><a href='#'><span>christina agartha</span></a> </li>
      </ul>
   </li>
   
   
    <li class='has-sub'><a href='#'><span>Mobile accessories</span></a>
   <ul>
        <li class='has-sub'><a href='#'><span>memory cards</span></a> 
           
         </li>
        <li class='has-sub'><a href='#'><span>back covers</span></a> </li>
       
      </ul>
   </li>
   
    <li class='has-sub'><a href='#'><span>Clothes</span></a>
  
   </li>
    <li class='has-sub'><a href='#'><span>Home Furnitures </span></a>
  
   </li>
    <li class='has-sub'><a href='#'><span>Decorative </span></a>
  
   </li>
   

   
   
</ul>
</div>
</div>

