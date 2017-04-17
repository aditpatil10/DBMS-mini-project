<?php
require('connection.php');
error_reporting(1);
?>
<html>
 <head>
 <meta charset="UTF-8">
  <title>Meetings</title>
  
  
  <link rel='stylesheet prefetch' href='http://netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css'>
  <link href="https://fonts.googleapis.com/css?family=Jim+Nightshade" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/css/materialize.min.css">
      <link rel="stylesheet" href="css/style.css">

 </head> 
 <body>
 <nav>
    <div class="nav-wrapper blue lighten-1">
      <a href="#" class="brand-logo">Wayne Enterprises</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li class="texts"><a href="home.php" class="texts">Home</a></li>
<li><a href=dlist.php class="texts">Employee</a></li>
        <li><a href=plist.php class="texts">Projects</a></li>
        <li><a href=alist.php class="texts">Meetings</a></li>
        <li><a href="logout.php" class="texts">Log Out</a></li>
      </ul>
    </div>
  </nav>

<table class="table table-bordered">
<tr bgcolor=blue><td align=center><font SIZE=6 color=white>EMPLOYEE
MANAGEMENT SYSTEM</font></td></tr>
<tr bgcolor=red><td ><font size=4 color=white>List of meetings and Audits</font></td></tr>
<tr><td><a href=app.php>Add New Meeting/Audit</a></td></tr>
<tr><td><table width=750 cellspacing=0 cellpadding=5>
<tr bgcolor=#ccccc><td align=center>S No</td><td align=center>Topic
Name</td><td align=center>Employee
Name</td><td align=center>Time</td>
<td align=center>Date</td><td
align=center>Options</td></tr>
<?php

if($_GET['rno']!=null)
{
$todel=$_GET['rno'];
mysql_query("update appt SET ashow='N' where ano='$todel' ;");
}
$rs1=mysql_query("SELECT * from appt where ashow='Y'");
$sno=1;
while( $row=mysql_fetch_array($rs1)) {

$rs2=mysql_query("SELECT pname from patient where pno='$row[2]'");
$rs3=mysql_query("SELECT dname from doct where dno='$row[1]'");
$rs22=mysql_fetch_assoc($rs2);
$rs33=mysql_fetch_assoc($rs3);
 echo "<tr><td>$sno</td><td>$rs22[pname]</td><td>$rs33[dname]</td><td>$row[3]</td><td>$row[5]</td><td><a
href=alist.php?rno=".$row[0].">Delete</a></td></tr>";
 $sno++;
}
if ($sno==1) echo "<tr><td align=center><font size=4 color=red>Records
Not Found</font></td></tr>";?>
</table></td></tr>
<tr><td align=center><hr></td></tr>
<tr bgcolor=red><td><font size=4 color=white>Deleted
Records</font></td></tr>
<tr><td><table width=750 cellspacing=0 cellpadding=5>
<tr bgcolor=#ccccc><td align=center>S No</td><td align=center>Topic
Name</td><td align=center>Employee
Name</td><td align=center>Time</td>
<td align=center>Date</td><td
align=center>Options</td></tr>
<?php
$rs1=mysql_query("SELECT * from appt where ashow='N'");
$sno=1;
while( $row=mysql_fetch_array($rs1)) {

$rs2=mysql_query("SELECT pname from patient where pno='$row[2]'");
$rs3=mysql_query("SELECT dname from doct where dno='$row[1]'");
$rs22=mysql_fetch_assoc($rs2);
$rs33=mysql_fetch_assoc($rs3);
 echo "<tr><td>$sno</td><td>$rs22[pname]</td><td>$rs33[dname]</td><td>$row[3]</td><td>$row[5]</td><td><a
href=aundel.php?rno=".$row[0].">Undelete</a></td></tr>";
 $sno++;
}
if ($sno==1) echo "<tr><td align=center><font size=4 color=red>Records
Not Found</font></td></tr>";
?>
</table></td></tr>
</table>
</body>
</html> 