<?php
require('connection.php');
error_reporting(1);
?><html>
 <head>
  <title>Patients Lists</title>
  <link rel='stylesheet prefetch' href='http://netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css'>
  <link href="https://fonts.googleapis.com/css?family=Jim+Nightshade" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/css/materialize.min.css">
      <link rel="stylesheet" href="css/style.css">

 </head> 
 <body>
 <nav>
    <div class="nav-wrapper blue lighten-1">
      <a href="#" class="brand-logo">Logo</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li class="texts"><a href="sass.html" class="texts">Home</a></li>
        <li><a href=dlist.php class="texts">Doctors</a></li>
        <li><a href=plist.php class="texts">Patients</a></li>
        <li><a href=alist.php class="texts">Appointments</a></li>
        <li><a href="logout.php" class="texts">Log Out</a></li>
      </ul>
    </div>
  </nav>
<table class="table table-bordered">
<tr bgcolor=blue><td align=center><font SIZE=6 color=white>HOSPITAL
MANAGEMENT SYSTEM</font></td></tr>
<tr><td><table align=center width=750 cellspacing=0 cellpadding=5>
<tr><td align=center><a href=dlist.php>Doctors</td><td align=center><a
href=plist.php>Patients</td><td align=center><a
href=alist.php>Appointments</td>
</table></td></tr>
<tr bgcolor=red><td ><font size=4 color=white>Patient
List</font></td></tr>
<tr><td><a href=padd.php>Add New Record</a></td></tr>
<tr><td><table width=750 cellspacing=0 cellpadding=5>
<tr bgcolor=#ccccc><td align=center>S No</td><td align=center>Patient
Name</td><td align=center>Address</td><td align=center>sex</td><td
align=center>Options</td></tr>
<?php


$rs1=mysql_query("SELECT * from patient where pshow='Y' order by
pname;");
$sno=1;
while( $row=mysql_fetch_array($rs1)) {
 echo "<tr><td>$sno</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td><a
href=pmod.php?rno=".$row[0].">Modify</a> | <a
href=pdel.php?rno=".$row[0].">Delete</a></td></tr>";
 $sno++;
}
if ($sno==1) echo "<tr><td align=center><font size=4 color=red>Records
Not Found</font></td></tr>";
?>
</table></td></tr>
<tr><td align=center><hr></td></tr>
<tr bgcolor=red><td><font size=4 color=white>Deleted
Records</font></td></tr>
<tr><td><table width=750 cellspacing=0 cellpadding=5>
<tr bgcolor=#ccccc><td align=center>S No</td><td align=center>patient
Name</td><td align=center>Address</td><td
align=center>Options</td></tr>
<?php
$rs2=mysql_query("SELECT * from patient where pshow='N' order by
pname;");
$sno=1;
while( $row=mysql_fetch_array($rs2)) {
 echo "<tr><td>$sno</td><td>$row[1]</td><td>$row[2]</td><td><a
href=Pundel.php?rno=".$row[0].">Undelete</a></td></tr>";
 $sno++;
}
if ($sno==1) echo "<tr><td align=center><font size=4 color=red>Records
Not Found</font></td></tr>";
?>
</table></td></tr>
</table>
</body>
</html> 