<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login and Signup</title>
	<script src="js/mobile.js" type="text/javascript"></script>

</head>
<body>
<div id ="placeholder" style="background-color: gray">
	<div id="page">
		<div id="header">
			<div id="navigation">
				<span id="mobile-navigation">&nbsp;</span>
				<a href="index.html" class="logo"><img src="imgs/petlogo.jpg" alt=""></a>
						<h2><a href="index.html">Home</a>|
						<a href="about.html">About Us</a>|
						<a href="events.html">Events</a>|
						<a href="contact.html">Contact Us</a>|
						<a href="payment.html">Payment</a>|
						<a href="class.html">Classes</a>|
						</h2>
			</div>
		</div>
		<div id="body" class="form">
			<div>
			<div id ="placeholder" style="background-color: pink">
			<fieldset>
				<h1>Login to page</h1>
				<form action="action/login.php" method="post">
				User Name: <br>
				<input type="text" name="username"  placeholder="Enter Username" required><br /><br />
				Password: <br>
				<input type="password" name="password" placeholder="Enter Password" required><br />
					<input type="submit" value="login" id="submit" name="login">

				</form>
				</fieldset>
			</div>

			<div>
			<div id ="placeholder" style="background-color: pink">
			<fieldset>
				<h1>Registration Form</h1>
				<form action="action/signup.php" method="post" id="signup">
				First Name: <input type="text" name="first_name" placeholder="First Name" required><br></br>
				Last Name: <input type="text" name="last_name" placeholder="Last Name" required><br></br>
				User Name: <input type="text" name="username" placeholder="Enter Username" required><br /><br />
				Password: <input type="password" name="password" id="password" placeholder="Enter Password" required><br /><br />
				Re-enter Pwd: <input type="password" name="repassword" id="repassword" placeholder="Re-enter password" 
					onkeyup="checkPassword();" required ><br /><br />
				Email: <input type="email" name="email" placeholder="Email" required>	<br /><br />
                Gender: <input type="radio" name="gender" value="male" required>Male
				        <input type="radio" name="gender" value="male" required>Female <br></br>  
                      				
				Address: <input type="text" name="address" placeholder="Address" required><br></br>
				Phone: <input type="text" name="phone" placeholder="Phone Number" required><br /><br />
					<input type="submit" value="Signup" id="submit" name="signup">
				</form>
				</fieldset>
			</div>

			<script type="text/javascript"> 
				function checkPassword(){
				    var password = document.getElementById('password');
				    var repassword = document.getElementById('repassword');
				    var correctColor = "purple";
				    var wrongColor = "yellow";
				   
				    if(password.value == repassword.value){
				        repassword.style.backgroundColor = correctColor;
				        message.style.color = correctColor;
				     
				    }else{
				        repassword.style.backgroundColor = wrongColor;
				        message.style.color = wrongColor;
				    }
				}  
			</script>
	
		</div>
				<p>&copy; 2017 by SALSA. All rights reserved.</p>
		</div>
	</div>
</body>
</html>

