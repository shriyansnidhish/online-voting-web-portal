<?php
require ('sql_connect.php');
if (isset($_POST['login'])){
$username=mysql_escape_string($_POST['voterid']);
$password=mysql_escape_string($_POST['password']);
if (!$_POST['voterid'] | !$_POST['password'])
 {
echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('You did not complete all of the required fields')
        window.location.href='htmlogin.html'
        </SCRIPT>");
exit();
     }
$sql= mysql_query("SELECT * FROM `login_voter` WHERE `userid` = '$voterid' AND `pass` = '$password'");
if(mysql_num_rows($sql) > 0)
{
echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Login Succesfully!.')
        window.location.href='htmlogin.html'
        </SCRIPT>");
exit();
}
else{
echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Wrong username password combination.Please re-enter.')
        window.location.href='htmlogin.html'
        </SCRIPT>");
exit();
}
}
else{
}
?>