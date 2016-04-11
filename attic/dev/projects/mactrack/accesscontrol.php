<?php //accesscontrol.php
include("common.php");
include("db.php");

session_start();
if(!isset($uid)) {
  ?>
  <html>
  <head>
  <title> Please Log In for Access </title>
  </head>
  <body>
  <h1> Login Required </h1>
  <p>You must log in to access this area of the site. If you are
     not a registered user, <a href="signup.php">click here</a>
     to sign up for instant access!</p>
  <p><form method="post" action="<?=$PHP_SELF?>">
    User ID: <input type="text" name="uid" size="8"><br>
    Password: <input type="password" name="pwd" SIZE="8"><br>
    <input type="submit" value="Log in">
  </form></p>
  </body>
  </html>
  <?php
  exit;
}

session_register("uid");
session_register("pwd");

dbConnect("idh");
$sql = "SELECT * FROM mactrack_users WHERE userid = '$uid' AND password = PASSWORD('$pwd')";
$result = mysql_query($sql);

if(!$result) {
error("A database error occured while checking you login details.\\nIf this error persists, please contact yannickwurm@mac.com");
}

if (mysql_num_rows($result) == 0) {
  session_unregister("uid");
  session_unregister("pwd");
  ?>
  <html>
  <head>
  <title> Access Denied </title>
  </head>
  <body>
  <h1> Access Denied </h1>
  <p>Your user ID or password is incorrect, or you are not a
     registered user on this site. To try logging in again, click
     <a href="<?=$PHP_SELF?>">here</a>. To register for instant
     access, click <a href="signup.php">here</a>.</p>
  </body>
  </html>
  <?php
  exit;
}

$firstname = mysql_result($result,0,"firstname");
$lastname = mysql_result($result,0,"lastname");
?>
