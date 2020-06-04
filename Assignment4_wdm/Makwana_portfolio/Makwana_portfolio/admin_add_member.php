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
<title>Admin add member</title>
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
$fnameErr = $lnameErr = $emailErr  = $userErr = $passErr =$rpassErr = "";
$fname = $lname =$email = $user =$password = $rpassword = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["Firstname"])) {
    $fnameErr = "first name is required";

  } else {
    $fname = test_input($_POST["Firstname"]);
    if(!preg_match("/^[A-Za-z]*$/",$fname))
      {
                $fnameErr = "Only letters allowed for first name";

      }
  }
  if (empty($_POST["Lastname"])) {
    $lnameErr = "last name is required";
  } else {
    $lname = test_input($_POST["Lastname"]);
    if(!preg_match("/^[A-Za-z]*$/",$lname))
      {
                $lnameErr ="Only letters allowed for last name";
      }
  }

  if (empty($_POST["Email"])) {
    $emailErr = "email is required";
  } else {
    $email = test_input($_POST["Email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL))
    {
      $emailErr = "Invalid email format";
    }
  }
  if (empty($_POST["User"])) {
    $userErr = "user name is required";
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

  if (empty($_POST["Repeat_Password"])) {
    $rpassErr = "repeat password is required";
  } else {
    {
      $rpassword = test_input($_POST["Repeat_Password"]);
    if($password==$rpassword)
    {
      $rpassErr = "ConfirmPassword ";
    }
    else
    {
      $rpassErr = "ConfirmPassword is wrong ";

    }
  }
}

if(!empty($_POST["Firstname"] && $_POST["Lastname"] &&  $_POST["Email"] && $_POST["User"]  && $_POST["Password"]  && $_POST["Repeat_Password"]))
{
$sql = "INSERT INTO signup (Firstname, Lastname, Email, User, Password, Repeat_Password)
VALUES ('$_POST[Firstname]','$_POST[Lastname]','$_POST[Email]','$_POST[User]','$_POST[Password]','$_POST[Repeat_Password]')";

$sql_u="SELECT * FROM signup WHERE User='$user'";
$res_u=mysqli_query($conn, $sql_u);


if(mysqli_num_rows($res_u)>0)
{
 echo "<script>alert('USERNAME ALREADY EXITS !!! PLEASE CHANGE USERNAME');
window.location.href='sign up.php'
</script>";
}
else
{
if (mysqli_query($conn, $sql))
{
 echo "<script>alert('Signed Up successfully !!!');
window.location.href='login.php'
</script>";
    
}
 else
 {
  echo "<script>alert('Error');
window.location.href='sign up.php'
</script>";
  
}
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
     <!-- <form name="SignForm" action="" onsubmit="return ValidateSign()" method="post">-->
                <!-- <form action="/action_.php" method="get"> -->
                <div class="signup">
                <p style="font-family: Roboto; font-size: 0.70em; color: #777777; margin-left:16px; margin-top: 10px;">Admin can insert a member: </p>
                <hr style="color: #FFFFFF;">

        <label  for="Firstname" style="color: #777777; font-size: 0.70em; font-family: Roboto; margin-left:13px;">Name:</label><br/>
            <input type="text"id="Firstname" name="Firstname"  placeholder="Enter firstname"  title="please Enter a valid firstname" style="width:456px;height:36px;color:#777777;font-size:0.70em;font-family:Roboto;margin-left:13px;">
            <span class="error">   <?php echo $fnameErr;?></span>
            <label for="Lastname" style="color: #777777; font-size: 0.70em; font-family: Roboto; margin-left:16px;margin-top: 20px;">Lastname:</label><br/>
            <input type="text"id="Lastname" name="Lastname"   placeholder="Enter lastname"    title="please Enter a valid Lastname"  style="width:456px;height:36px;color:#777777;font-size:0.70em;font-family:Roboto;margin-left:13px;">
            <span class="error">   <?php echo $lnameErr;?></span>
            <label for="Email" style="color: #777777; font-size: 0.70em; font-family: Roboto; margin-left:13px;"> Email:</label><br/>
            <input type="text"id="Email"  name="Email"  placeholder="Enter email" title="please Enter a valid Email" style="width:456px;height:36px;color:#777777;font-size:0.70em;font-family:Roboto;margin-left:13px;">
            <span class="error">   <?php echo $emailErr;?></span>
            <label  for="User" style="color: #777777; font-size: 0.70em; font-family: Roboto; margin-left:16px;margin-top: 20px;">User:</label><br/>
            <input type="text"id="User" name="User"  placeholder="Enter username"   title="please Enter a valid Username"  style="width:456px;height:36px;color:#777777;font-size:0.70em;font-family:Roboto;margin-left:13px;">
            <span class="error">   <?php echo $userErr;?></span>
            <label for="Password" style="color: #777777; font-size: 0.70em; font-family: Roboto; margin-left:13px;"> Password:</label><br/>
            <input type="password"id="Password" name="Password"  placeholder="Enter Password" style="width:456px;height:36px;color:#777777;font-size:0.70em;font-family:Roboto;margin-left:13px;">
            <span class="error">   <?php echo $passErr;?></span>
            <label  for="Repeat_Password" style="color: #777777; font-size: 0.70em; font-family: Roboto; margin-left:16px;margin-top: 20px;">Repeat Password:</label><br/>
            <input type="password"id="Repeat_Password" name="Repeat Password"   placeholder="Enter Password" style="width:456px;height:36px;color:#777777;font-size:0.70em;font-family:Roboto;margin-left:13px;">
            <span class="error">   <?php echo $rpassErr;?></span>
        <br/><br/>
        <hr style="color: #FFFFFF;">
        <input type="submit" value="Save" style="padding: 10px;" class="getin">
            <button class="Close" style="padding: 10px;"><a  href="try.php" style="color:#222222;font-family:Roboto;text-decoration: none;"> Back&nbsp;</a></button>
   <!--  <button class="getin" style="padding: 10px;"> Save</button>-->
       <!-- <button class="Close" style="padding: 10px;"> Close&nbsp;</button>-->
        <br/>
        </div>
    </form>
            </main>
            <footer>
                    <div class="foot" style="padding-top:650px;">&copy; DiazApps ALL RIGHTS RESERVED BY
                        <span class="luis1">Neelam B Makwana</span>
                        <div>
                                </footer>
                        </body>
                    </html>