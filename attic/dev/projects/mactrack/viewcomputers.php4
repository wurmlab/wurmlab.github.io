<?php
include('pagedresults.php');
include('common.php);
include("db.php");
include("accesscontrol.php");

$rs = new MySQLPagedResultSet("select * from mactrack_computers where ownerid=$uid", 50,$dbcnx);
?>
<html>
<head>
<title>Your tracked Computers</title>
</head>
<body>
<table border="1">
#<?php while ($row = $rs->fetchArray()): ?>
#<tr><td><?=$row['id']?></td><td><?=$row['description']?></td></tr>
#<?php endwhile; ?>
</table>
<p><?=$rs->getPageNav("uid=$uid")?></p>
</body>
</html>
