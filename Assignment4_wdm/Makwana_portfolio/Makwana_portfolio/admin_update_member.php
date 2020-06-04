<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/portfolio1.css">
<link rel="stylesheet" type="text/css" href="css/portfolio.css">
<!--<script type="text/javascript" src="portfolio.js"> </script>-->
<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Rajdhani' rel='stylesheet'>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<title>Update member</title>
</head>

<?php
$_SESSION["message"] = "";
$servername = "";
$username = "";
$password = "";
$dbname = "";
// crederntials removed for security reason


//$fname=$_GET['Firstname'];
//echo "$fname";

error_reporting(0);

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
 }


?>

<body id="wrapper">
        <header>
                <nav class="navigate">
                    <h1 class="menu">
                        <span class="logo_image">
                        <img class="logo" src="image/logo.png" alt="logo.png">
                        </span>
                        <span class="name" style="padding-top: 10px;">Makwana Neelam</span>
                        <a class="navlink" href="sign up.php"> Sign Up </a>
                        <a class="navlink" href="mainlogin.php" > Login </a>
                        <a class="navlink" href="Contact Me.php" > Contact </a>
                        <a class="navlink" href="hireme.php" > Hire Me </a>
                        <a class="navlink" href="" > Blog </a>
                        <a class="navlink" href="Experience.php"> Experience </a>
                        <a class="navlink" href="Portfolio.php"> Portfolio </a>
                        <a class="navlink" href="skill.php" > Skills </a>
                        <a class="navlink" href="About Me.php"> About </a>
                        <a class="currentPage" href="index.php">Home</a>
                    </h1>
                </nav>
            </header>
      <main>
      <form method="GET" action="">
     <!-- <form name="SignForm" action="" onsubmit="return ValidateSign()" method="post">-->
                <!-- <form action="/action_.php" method="get"> -->
               <div class="signup">
                <p style="font-family: Roboto; font-size: 0.70em; color: #777777; margin-left:16px; margin-top: 10px;">Admin can update a member: </p>
                <hr style="color: #FFFFFF;">



        <label  for="Firstname" style="color: #777777; font-size: 0.70em; font-family: Roboto; margin-left:13px;">Name:</label><br/>
            <input type="text"id="Firstname" name="fname"  value="<?php echo $_GET['Firstname'];?>" placeholder="Enter firstname"  title="please Enter a valid firstname" style="width:456px;height:36px;color:#777777;font-size:0.70em;font-family:Roboto;margin-left:13px;">
            <span class="error">  </span>
            <label for="Lastname" style="color: #777777; font-size: 0.70em; font-family: Roboto; margin-left:16px;margin-top: 20px;">Lastname:</label><br/>
            <input type="text"id="Lastname" name="lname"  value="<?php echo $_GET['Lastname'];?>"  placeholder="Enter lastname"    title="please Enter a valid Lastname"  style="width:456px;height:36px;color:#777777;font-size:0.70em;font-family:Roboto;margin-left:13px;">
            <span class="error">  </span>
            <label for="Email" style="color: #777777; font-size: 0.70em; font-family: Roboto; margin-left:13px;"> Email:</label><br/>
            <input type="text"id="Email"  name="email" value="<?php echo $_GET['Email'];?>" placeholder="Enter email" title="please Enter a valid Email" style="width:456px;height:36px;color:#777777;font-size:0.70em;font-family:Roboto;margin-left:13px;">
            <span class="error">  </span>
            <label  for="User" style="color: #777777; font-size: 0.70em; font-family: Roboto; margin-left:16px;margin-top: 20px;">User:</label><br/>
            <input type="text"id="User" name="user" value="<?php echo $_GET['User'];?>" placeholder="Enter username"   title="please Enter a valid Username"  style="width:456px;height:36px;color:#777777;font-size:0.70em;font-family:Roboto;margin-left:13px;">
            <span class="error">  </span>
            <label for="Password" style="color: #777777; font-size: 0.70em; font-family: Roboto; margin-left:13px;"> Password:</label><br/>
            <input type="password"id="Password" name="password"  value="<?php echo $_GET['Password'];?>"placeholder="Enter Password" style="width:456px;height:36px;color:#777777;font-size:0.70em;font-family:Roboto;margin-left:13px;">
            <span class="error">   </span>
            <label  for="Repeat_Password" style="color: #777777; font-size: 0.70em; font-family: Roboto; margin-left:16px;margin-top: 20px;">Repeat Password:</label><br/>
            <input type="password"id="Repeat_Password" name="rpassword"  value="<?php echo $_GET['Repeat_Password'];?>"   placeholder="Enter Password" style="width:456px;height:36px;color:#777777;font-size:0.70em;font-family:Roboto;margin-left:13px;">
            <span class="error"> </span> 
<!-- First name<input type="text"  name="fname"    value="<?php echo $_GET['Firstname']; ?>"/><br><br>
last name<input type="text"  name="lname"    value="<?php echo $_GET['Lastname']; ?>"/><br><br>
email<input type="text"  name="email"    value="<?php echo $_GET['Email']; ?>"/><br><br>
user<input type="text"  name="user"    value="<?php echo $_GET['User']; ?>"/><br><br>
password<input type="text"  name="password"    value="<?php echo $_GET['Password']; ?>"/><br><br>
r password<input type="text"  name="rpassword"    value="<?php echo $_GET['Repeat_Password']; ?>"/><br><br>-->
       
           

        <br/><br/>
        <hr style="color: #FFFFFF;">
		
		
		<button class="Close" style="padding: 10px;"><a  href="try.php" style="color:#222222;font-family:Roboto;text-decoration: none;"> Back&nbsp;</a></button>
        <input type="submit" value="submit" name="submit" style="padding: 10px;" class="getin" onclick = "return empty()">
		

   <!--  <button class="getin" style="padding: 10px;"> Save</button>-->
       <!-- -->
      
        <br/>
        </div>
    </form>


 <?php

if(isset($_GET['submit']))
{

$first_name_new =  isset($_GET['fname']) ? $_GET['fname'] : '' ;
$last_name_new = $_GET['lname'];
$email_new = $_GET['email'];
$user_new = $_GET['user'];
$password_new = $_GET['password'];
$rpassword_new = $_GET['rpassword'];


   $query = "UPDATE signup SET Firstname='$first_name_new', Lastname='$last_name_new',Email='$email_new',Password='$password_new',Repeat_Password='$rpassword_new' WHERE User='$user_new'";
    $data = mysqli_query($conn,$query);
	if ($data)
	{
		echo "Record updated successfully !  !! ";

      
	}	
	else
	{
		echo "Record NOT updated !";
	}


}
else 
{
	echo "click on Submit to save changes!";
}	


?> 

            </main>
            <footer>
                    <div class="foot" style="padding-top:650px;">&copy; DiazApps ALL RIGHTS RESERVED BY
                        <span class="luis1">Neelam B Makwana</span>
                        <div>
                                </footer>
                        </body>
                    </html>