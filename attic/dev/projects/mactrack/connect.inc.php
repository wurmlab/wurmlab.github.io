<?php
$dbcnx = @mysql_connect("localhost", "idh", "bdrxpo");
if (!$dbcnx) {
      echo( "<P>Unable to connect to the " .
              "database server at this time.</P>" );
        exit();
}
if (! @mysql_select_db("idh")) {
    echo("<p> Unable to connect to database</p>");
    exit();
}   
?>
