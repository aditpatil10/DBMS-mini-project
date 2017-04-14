<html >
<head>
  <meta charset="UTF-8">
  <title>Home Page</title>
  
  
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
        <li><a href="sass.html">Home</a></li>
        <li><a href="badges.html">Search</a></li>
        <li><a href="collapsible.html">Projects</a></li>
        <li><a href="collapsible.html">Request Leave</a></li>
        <li><a href="logout.php">Log Out</a></li>
      </ul>
    </div>
  </nav>
<h1 class="title">Welcome babe </h1>
   

        <h2>Home Page</h2>
        
<hello>! 
 <!--Display's user name-->
        <a href="logout.php">Click here to go logout</a><br/><br/>
        <form action="add.php" method="POST">
           Add more to list: <input type="text" name="details" /> <br/>
           Public post? <input type="checkbox" name="public[]" value="yes" /> <br/>
           <input type="submit" value="Add to list"/>
        </form>
    <h2 align="center">My list</h2>
  
</body>
</html>