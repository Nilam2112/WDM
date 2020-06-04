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
<title>Update exp</title>
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
                <p style="font-family: Roboto; font-size: 0.70em; color: #777777; margin-left:16px; margin-top: 10px;">Admin can update a experience: </p>
                <hr style="color: #FFFFFF;">



        <label  for="year" style="color: #777777; font-size: 0.70em; font-family: Roboto; margin-left:13px;">Year:</label><br/>
            <input type="text"id="year" name="year"  value="<?php echo $_GET['year'];?>" placeholder="Enter year"  title="please Enter a valid year" style="width:456px;height:36px;color:#777777;font-size:0.70em;font-family:Roboto;margin-left:13px;">
            <span class="error">  </span>
            <label for="c_name" style="color: #777777; font-size: 0.70em; font-family: Roboto; margin-left:16px;margin-top: 20px;">Company name:</label><br/>
            <input type="text"id="c_name" name="c_name"  value="<?php echo $_GET['c_name'];?>"  placeholder="Enter company name"    title="please Enter a company name"  style="width:456px;height:36px;color:#777777;font-size:0.70em;font-family:Roboto;margin-left:13px;">
            <span class="error">  </span>
            <label for="position" style="color: #777777; font-size: 0.70em; font-family: Roboto; margin-left:13px;"> Position:</label><br/>
            <input type="text"id="position"  name="position" value="<?php echo $_GET['position'];?>" placeholder="Enter position" title="please Enter a position" style="width:456px;height:36px;color:#777777;font-size:0.70em;font-family:Roboto;margin-left:13px;">
            <span class="error">  </span>
           
        <br/><br/>
        <hr style="color: #FFFFFF;">
		
		<button class="Close" style="padding: 10px;"><a  href="update_exp.php" style="color:#222222;font-family:Roboto;text-decoration: none;"> Back&nbsp;</a></button>
		
        <input type="submit" value="submit" name="submit" style="padding: 10px;" class="getin" onclick = "return empty()">
		
      
        <br/>
        </div>
    </form>
 <?php

if(isset($_GET['submit']))
{

$year_new =  isset($_GET['year']) ? $_GET['year'] : '' ;
$c_name_new = $_GET['c_name'];
$position_new = $_GET['position'];


   $query = "UPDATE exp SET year='$year_new',position='$position_new' WHERE c_name='$c_name_new'";
    $data = mysqli_query($conn,$query);
	if ($data)
	{
		echo "<script>
alert('Record updated successfully !  !! ');
window.location.href='update_exp.php'
</script>";
			
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