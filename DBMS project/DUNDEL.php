<html>
 <head>
  <title>Recover Doctor</title>
 <link rel="stylesheet" href="css/bootstrap.css"/>
 </head> 
 <body>
<table class="table table-bordered">
<tr bgcolor=blue><td align=center><font SIZE=6 color=white>EMPLOYEE
MANAGEMENT SYSTEM</font></td></tr>
<tr><td><table align=center width=750 cellspacing=0 cellpadding=5>
<tr><td align=center><a href=dlist.php>Employee</td><td align=center><a
href=plist.php>Projects</td><td align=center><a
href=alist.php>Meetings</td>
</table></td></tr>
<tr bgcolor=red><td ><font size=4 color=white>Recover
Employee</font></td></tr>

<?php
require('connection.php');
error_reporting(1);
$rno=$_GET["rno"];
 mysql_query("update doct set dshow='Y' where dno='$rno'");
 echo "<tr><td align=center><font size=4 color=green>SuccessfullyRecords Recovered</font></td></tr>";
echo "<tr><td align=center><a
href=dlist.php>Continue...</a></td></tr>";
echo "</table>";
echo "</body></html>"; 