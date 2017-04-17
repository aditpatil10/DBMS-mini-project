<?php require('connection.php');?>
<html>
 <head>
  <title>Add New Project</title>
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
<tr bgcolor=red><td ><font size=4 color=white>New
Project/Product</font></td></tr>
<form name=fdadd method=post action=psave.php>
<tr><td><table width=750 cellspacing=0 cellpadding=5>
<tr><td>Project/product Name</td><td><input type=text name=name size=30
maxlength=30></td></tr>
<tr><td>Type</td><td><input type=text name=type size=30
maxlength=30></td></tr>
<tr><td>Duration</td><td><input type=text name=dur size=30
maxlength=30></td></tr>
</table></td></tr>
<tr><td align=center><input type=submit value=Submit></td></tr>
</form>
</table>
</body>
</html>