<?php require('connection.php');?>
<html>
 <head>
  <title>Recover Project</title>
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
Project</font></td></tr>
<?php

$rno=$_GET["rno"];
 
 
 mysql_query("update Patient set pshow='Y' where pno='$rno'");
 echo "<tr><td align=center><font size=4 color=green>SuccessfullyRecords Recovered</font></td></tr>";
echo "<tr><td align=center><a
href=plist.php>Continue...</a></td></tr>";
echo "</table>";
echo "</body></html>"; 