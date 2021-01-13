<?php
	// define variables and set to empty values
	$nameErr = $emailErr = $phoneErr  = "";
	$name = $email = $phone  = "";
	
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	   
		if (empty($_POST['name'])) {
		  $nameErr = "Name is required";
	   }else {
		  $name = test_input($_POST["name"]);
	   }
	
	   
	   if (empty($_POST["email"])) {
		  $emailErr = "Email is required";
	   }else {
		  $email = test_input($_POST["email"]);
		  
		  // check if e-mail address is well-formed
		  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			 $emailErr = "Invalid email format"; 
		  }
	   }
   
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	   if (empty($_POST["phone"])) {
		  $phoneErr = "phone is required";
	   }else {
		  $phone = test_input($_POST["phone"]);
	   }
	   
	  
	}
}
	
	function test_input($data) {
	   $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}
 ?>
 
<?php
         echo "<h2>Your given values are as:</h2>";
         echo $name;
         echo "<br>";
         
         echo $email;
         echo "<br>";

?>