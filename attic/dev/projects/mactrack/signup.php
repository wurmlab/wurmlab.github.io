<?php //signup.php

include("common.php");
include("db.php");

if (!isset($submitok)):
 // Display the user signup form
	?>
	<html>
	<head><title>New User Registration</title></head>
	<body>
	<html>
<head><title>New User Registration</title></head>
<body>


<h3>New User Registration Form</h3>
<p><font color=orangered size=+1><TT><B>*</B></TT></font>
   indicates a required field</p>
<form method=post action="<?=$PHP_SELF?>">
<table border=0 cellpadding=0 cellspacing=5>
    <tr>
        <td align=right>
            <p>User ID</p>
        </td>
        <td>
            <input name=newid type=text maxlength=100 size=25>
            <font color=orangered size=+1><TT><B>*</B></TT></font>
        </td>
    </tr>
    <tr>
        <td align=right>
            <p>Last Name</p>
        </td>
        <td>
            <input name=newlastname type=text maxlength=100 size=25>
            <font color=orangered size=+1><TT><B>*</B></TT></font>
        </td>
    </tr>
  <tr>
        <td align=right>
            <p>First Name</p>
        </td>
        <td>
            <input name=newfirstname type=text maxlength=100 size=25>
            <font color=orangered size=+1><TT><B>*</B></TT></font>
        </td>
    </tr>

    <tr>
        <td align=right>
            <p>E-Mail Address</p>
        </td>
        <td>
            <input name=newemail type=text maxlength=100 size=25>
            <font color=orangered size=+1><TT><B>*</B></TT></font>
        </td>
    </tr>
    <tr valign=top>
        <td align=right>
            <p>Other Notes</p>
        </td>
        <td>
            <textarea wrap name=newnotes rows=5 cols=30></textarea>
        </td>
    </tr>
    <tr>
        <td align=right colspan=2>
            <hr noshade color=black>
            <input type=reset value="Reset Form">
            <input type=submit name="submitok" value="   OK   ">
        </td>
    </tr>
</table>
</form>


</body>
</html>	

<?php
else:
 // Process signup submission
 dbConnect('idh');
 if ($newid=="" or $newfirstname=="" or $newlastname=="" or $newemail=="") {
	error("One or more required fields were left blank.\\n Please fill them in an try again.");
}

 //Check for existing user with the new id
 $sql = "SELECT COUNT(*) FROM mactrack_users WHERE userid = '$newid'";
 $result = mysql_query($sql);
 if (!$result) {
	error("A database error (number 1) occured in processing you submission.\\nIf this error persists, please contact yannickwurm@mac.com.");
}
if (@mysql_result($result,0,0)>0) {
	error("A user already exists with your chosen userid.\\nPlease try another.");
}
 $newpass = substr(md5(time()),0,6);
 $sql = "INSERT INTO mactrack_users SET
		userid = '$newid',
		password = PASSWORD('$newpass'),
	firstname = '$newfirstname',
		lastname = '$newlastname',
		primaryemail = '$newemail',
 adddate=CURRENT_TIMESTAMP,
		notes = '$newnotes'";

 if (!mysql_query($sql))
	error("A database error (number 2) occurred in processing you submission.\\nIf this error persists, please contact yannickwurm@mac.com.");

 // Email the new password to the person.
 $message = "Hello!

  Your personal account for the Computrack Web SIte has been created! To log in, proceed to the following address: 

		http://www.yannick.org/computrack/
  
  Your personal login ID and password are as follows:
		
		userid: $newid
		password: $newpass

  You aren't stuck with this password! You can change it at any time after you have logged in.

  If you have any problems, feel free to contact me at <yannickwurm@mac.com>.

 	- Yannick Wurm
	Computrack Webmaster
";

mail($newemail, "Your Password for the Computrack Web Site", $message, "From:Yannick Wurm <yannickwurm@mac.com>");

?>
    <html>
    <head><title> Registration Complete </title></head>
    <body>
    <p><strong>User registration successful!</strong></p>
    <p>Your userid and password have been emailed to
       <strong><?=$newemail?></strong>, the email address
       you just provided in your registration form. To log in,
       click <a href="index.php">here</a> to return to the login
       page, and enter your new personal userid and password.</p>
    </body>
    </html>
    <?php
endif;
?>
