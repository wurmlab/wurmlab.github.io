<html>
<body>
<?php if (isset($addowner)):
?>
<h1> Add New Computer to be tracked</h1>
<?php echo("$firstname $lastname logged in");?><br>
<br>Please enter the new computer's information and click on submit:<br>
<FORM ACTION="<?php echo($PHP_SELF); ?>" METHOD=POST>
<P>Your OwnerId: <?=$uid?><br> 
<p>Computer Description (255 chars!):<br>
    <INPUT TYPE="text" NAME="macdesc" SIZE="100"></p>
<INPUT TYPE=SUBMIT NAME="submitcomp" VALUE="SUBMIT">
</FORM>

<?php else:
$curownid = $uid;
include("connect.inc.php");
if ("SUBMIT"==$submitcomp) {
    $sql = "INSERT INTO mactrack_computers SET adddate=CURRENT_TIMESTAMP, description='$macdesc', ownerid='$curownid'";
	$result=mysql_query($sql);
	$compid=mysql_insert_id();
	if ( $result ) {
            echo("<p><h1>Computer database successfully updated.</h1></p>Update affected for $macdesc.</P>");
	echo("<p>User: $firstname $lastname</p>");
	echo("<p>User id: $uid</p>");
	echo("<p>Computer id: $compid</p>");
	

	  } else {
        echo("<P>Error performing update: " .	
            mysql_error() . "</P>");
}
}
echo("<p><a href='$PHP_SELF?addowner=1'> Add another computer</a></p>");

endif;
?>


</body></html>
