<!DOCTYPE html>
<html>
<body>


<?php


if (isset($_POST)) {
    $Email = $_POST['Email'];
    $Message = $_POST['Message'];
    if ($_POST['Email'] =="") {
	echo "Not a valid Email address";
} else {
	 echo "Thank you for your response $Email   "; 
   echo "Your Message: $Message . has been recored";
}

  
}
?>

</body>
</html>
