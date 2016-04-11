<html>
<body>
<?php if (isset($addmac)):
?>
<br>Add A Mac...<br>
<FORM ACTION="<?php echo($PHP_SELF); ?>" METHOD=POST>
<P>Computer ID: <br> 
    <INPUT TYPE="text" NAME="curmacid" SIZE="24"></p>
<p>IP: <br>
    <INPUT TYPE="text" NAME ="curip" SIZE="24"></p>
<p>Comment:<br>
    <INPUT TYPE="text" NAME ="curcomment" SIZE="24"></p>
<INPUT TYPE=SUBMIT NAME="submitip" VALUE="SUBMIT">
</FORM>

<?php else:
require ("connect.inc.php");
if ("SUBMIT"==$submitip) {
    $sql = "INSERT INTO mactrack_updates SET adddate=CURRENT_TIMESTAMP, ip= '$curip', comments='$curcomment', macid='$curmacid'";

        if ( mysql_query($sql) ) {
            echo("<P>Update affected for $$curmacid" . 
            mysql_affected_rows() . " rows.</P>");
        } else {
        echo("<P>Error performing update: " .
            mysql_error() . "</P>");
}
}
echo("<p><a href='$PHP_SELF?addmac=1'> Add a Mac</a></p>");
endif;
?>


</body></html>
