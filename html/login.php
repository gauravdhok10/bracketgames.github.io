
<!DOCTYPE html>    
<html>  
<head>    
    <title>Bracket gaming - Registration Form</title>    
    <link rel="stylesheet"  href="../html/css/login.css">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>  
</head>    
<body> 
<?php
// define variables and set to empty values
$nameErr = $emailErr = $phoneErr= $websiteErr = "";
$name = $email = $phone = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
 if (empty($_POST["name"])) {
 $nameErr = "Name is Mandatory";
 } else {
 $name = test_input($_POST["name"]);
 // check if name only contains letters and whitespace
 if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
 $nameErr = "Only letters and white space allowed";
 }
 }
 
 if (empty($_POST["email"])) {
 $emailErr = "Email is Mandatory";
 } else {
 $email = test_input($_POST["email"]);
 // check if e-mail address is well-formed
 if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
 $emailErr = "Invalid email format";
 }
 }

 if (empty($_POST["phone"])) {
	$phoneErr = "Phone No is Mandatory";
	} else {
		$phone = test_input($_POST["phone"]);
		if (!preg_match('/^[6-9]\d{9}$/', $phone)) {
			$phoneErr = "Enter Correct Phone";
			}	
	}
 


 if (empty($_POST["url"])) {
 $websiteErr = "Website URL is Mandatory";
 } else {
 $website = test_input($_POST["url"]);
 // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
 if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
 $websiteErr = "Invalid URL";
 }
 }
}

//if($name =! "" && $email =! "" &&  $website =! "" && $phone =! "" )   
//{
//	header("Location:http:/game/html/success.php");
//}
function test_input($data) {
 $data = trim($data);
 $data = stripslashes($data);
 $data = htmlspecialchars($data);
 return $data;
}
?>


<nav>
		<div class="nav_l">
			<a href="../index.php"><img class="logo" src="../logo.png" width="200" height="65"></a>
		</div>
		<div class="nav_m">
		<ul class="nav_c">
			<li><a  href="../html/play.html">Gaming Cafe</a></li>
			<li><a href="../html/event.html">Events</a></li>
			<li><a href="../html/about.html">About us</a></li>
			<li><a href="../html/glibrary.html">Gaming Library</a></li>
			 <li><a href="../html/login.php">Registration</a></li>
		</ul>
		</div>
		<div class="nav_r">
			<a href="../html/contact.html"><button>SPEAK TO US</button></a> 
		</div>
</nav>
<div class="container">
<div class="header">
		<h2>Register</h2>
		
</div>
	<form id="form" class="form" method = "post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" > 
		<div class="form-control">
			<label for="name">Name <span>*</span></label>
			<input type="text" placeholder="Name" id="name" name="name"  value="<?php echo $name;?>" />
			<span class="error"><?php echo $nameErr;?></span>
		</div>
		<div class="form-control">
			<label for="email">Email <span>*</span></label>
			<input type="text" placeholder="email@bg.com" id="email" name="email"  value="<?php echo $email;?>"/>
			<span class="error"><?php echo $emailErr;?></span>
		</div>
		
		<div class="form-control">
			<label for="phone">Phone <span>*</span></label>
			<input type="text" placeholder="Phone"  id="phone" name="phone" value="<?php echo $phone;?>"/>
			<span class="error"><?php echo $phoneErr;?></span>
		</div>

		<div class="form-control">
		<label for="website">Website Url <span>*</span></label>
			<input type="text" placeholder="Url"  id="url" name="url"  value="<?php echo $website;?>"/>
			<span class="error"><?php echo $websiteErr;?></span>
			
		</div>
		
		<div class="form_button">
		<input type="submit"  name="submit"  value="Submit">
		</div>

		<br>
		<input type="checkbox" id="check">    
        <span> Send Emails Regarding New Events </span> 
	</form>
</div>
    
    <footer class="footer-m">

			<div class="footer-left">
                <a href="../index.html"><img src="../logo.png" ></a>

				<p class="footer-company-name">© 2020 Bracket Gaming </p>
			</div>

			<div class="footer-center">
				<div>
					  <p><span>PICT , Dhankawadi </span></p>
				</div>
				<div>
					<p>+91 22-27782183</p>
				</div>
				<div>
					<p><a href="mailto:support@bgaming.com">support@bgaming.com</a></p>
				</div>
			</div>
			<div class="footer-right">
				<p class="footer-company-about">
					<span>Connect with Us</span>
					</p>
				<div class="footer-icons">
					<a href="#"><img src="/image/icon/facebook.png"></a>
					<a href="#"><img src="/image/icon/instagram.png"></a>
					<a href="#"><img src="/image/icon/youtube.png"></a>
				</div>
			</div>
		</footer>
 

</body>
</html>
