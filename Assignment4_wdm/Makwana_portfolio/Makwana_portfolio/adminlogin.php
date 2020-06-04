<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/portfolio1.css">
<link rel="stylesheet" type="text/css" href="css/portfolio.css">
<script type="text/javascript" src="portfolio.js"> </script>
<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Rajdhani' rel='stylesheet'>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<title>Log in</title>
</head>

<?php
$_SESSION["message"] = "";
$servername = "";
$username = "";
$password = "";
$dbname = "";
// crederntials removed for security reason


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
 }

// define variables and set to empty values
$userErr = $passErr = "";
$user = $password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["User"])) {
    $userErr = "User is required";
  } else {
    $user = test_input($_POST["User"]);
    if(!preg_match("/^[A-Za-z]*$/",$user))
            {
                $userErr = "Only letters allowed for user name";
            }
  }

  if (empty($_POST["Password"])) {
    $passErr = "password is required";

  } else {
    $password = test_input($_POST["Password"]);

    if(!preg_match("/^[a-zA-Z0-9]{8,}$/",$password))
            {
                $passErr = "at least 8 characters. No Special characters";
            }
  }


  if(!empty($_POST["User"] &&  $_POST["Password"]))

{
 

    $sql="SELECT User,Password FROM admin WHERE User='$user' and Password='$password'";     
        
        $result=mysqli_query($conn,$sql);
        $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
  
        $count=mysqli_num_rows($result);
      
        if($count==1)
        {
         
          $_SESSION['login_user']=$User;
      echo "<script>
            alert('WELCOME ADMIN !!');
window.location.href='edit_admin.php'
</script>"; 
        }
      else
      {
            echo "<script>
            alert('Please enter the correct username and password !!');
window.location.href='adminlogin.php'
</script>"; 
      }
    }
  
else
{
  echo "<script>
window.location.href='adminlogin.php'
</script>";

}
    }


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
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
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

          <!--<form name="LoginForm" action="" onsubmit="return ValidateLogin()" method="post"> -->
            <!-- <form action="/action_.php" method="get"> -->
            <div class="Login1">



        <p style="font-family: 'Roboto', Arial, sans-serif; font-size: 0.70em; color: #777777; margin-left:16px; margin-top: 10px;">Log in </p>
        <hr style="color: #FFFFFF;">

    <label  for="User" style="color: #777777; font-size: 0.70em; font-family: Roboto; margin-left:13px;"> User:</label><br/>
            <input type="text" id="User"  name="User"   style="width:456px;height:36px;color:#000033;font-size:0.70em;font-family:Roboto;margin-left:13px;">
            <span class="error">   <?php echo $userErr;?></span>
            <label  for="Password" style="color: #777777; font-size: 0.70em; font-family: Roboto; margin-left:16px;margin-top: 20px;">Password:</label><br/>
            <input type="password" id="Password" name="Password"    style="width:456px;height:36px;color:#777777;font-size:0.70em;font-family:Roboto;margin-left:13px;">
            <span class="error">   <?php echo $passErr;?></span>
        <br/><br/>
        <hr style="color: #FFFFFF;">
        <input type="submit" value="getin" style="padding: 10px;" class="getin">
        <input type="submit" value="Close" style="padding: 10px;" class="Close">
       <!-- <button class="getin" style="padding: 10px;"> Get in</button>-->
      <!--  <button class="Close" style="padding: 10px;"> Close&nbsp;</button>-->
        <br/>

        </div>
    </form>
            </main>
            <footer>
                    <div class="foot" style="padding-top: 650px;">&copy; DiazApps ALL RIGHTS RESERVED BY
                        <span class="luis1">Neelam B Makwana</span>
                        <div>
                                </footer>
    </body>
    </html>