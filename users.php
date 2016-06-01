<?php
if(!mysql_connect('localhost','root','') || !mysql_select_db('barter'))
{
die(mysql_error);

}
session_start();
?>

<?php

if(isset($_POST['user']) && isset($_POST['pass']) && isset($_POST['name']) && isset($_POST['add1']) && isset($_POST['add2']) && isset($_POST['email']) && isset($_POST['city']) && isset($_POST['country']) && isset($_POST['phno']))
{
$user=$_POST['user'];
$pass=md5($_POST['pass']);
$name=$_POST['name'];
$add1=$_POST['add1'];
$add2=$_POST['add2'];
$email=$_POST['email'];
$city=$_POST['city'];
$country=$_POST['country'];
$phno=$_POST['phno'];
if($query2=mysql_query("insert into users values('$user','$pass','$name','$add1','$add2','$email',null,'$city','$country','$phno')"))
{
echo 'registration successfull</br>';
echo '<b><a href="index.php">visit home page to login in</a></b>';
}
else
{
die(mysql_error());
}
}
else
{
echo 'eeeeeee';
}

?>

<?php
if(isset($_POST['username']) && isset($_POST['password']))
{
$user=$_POST['username'];
$pass=md5($_POST['password']);

if($query3=mysql_query("select `id`,`name` from `users` where `username`='$user' and `password`='$pass'"))
{
if(mysql_num_rows($query3)==1)
{
while($fetch3=mysql_fetch_assoc($query3))
{
$result=$fetch3['id'];
$name2=$fetch3['name'];
}//while
$_SESSION['user_id']=$result;
$_SESSION['name2']=$name2;
header('Location: index.php');

}
else
{
echo 'no match found';
}
}
else
{
die(mysql_error());
}
}
else
{

}


?>
