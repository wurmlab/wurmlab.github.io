<html>
<body>
<?php if (isset($addowner)):
?>
<br>Register yourself as a new user...<br>
<FORM ACTION="<?php echo($PHP_SELF); ?>" METHOD=POST>
<P>Primary Email Address:: <br> 
    <INPUT TYPE="text" NAME="curemail" SIZE="24"></p>
<INPUT TYPE=SUBMIT NAME="submitip" VALUE="SUBMIT">
</FORM>

<?php else:
require("connect.inc.php");
if ("SUBMIT"==$submitip) {
    $sql = "INSERT INTO mactrack_owners SET adddate=CURRENT_TIMESTAMP, primaryemail='$curemail'";
        if ( mysql_query($sql) ) {
            echo("<P>Update affected for $curemail" . 
            mysql_affected_rows() . " rows.</P>");
        } else {
        echo("<P>Error performing update: " .
            mysql_error() . "</P>");
}
}
echo("<p><a href='$PHP_SELF?addowner=1'> Add another owner</a></p>");

endif;
?>


</body></html>
