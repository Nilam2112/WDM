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
<title>Delete member</title>
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
$userErr = "";
$user = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {

  if (empty($_POST["User"])) {
    $userErr = "user name is required";
  } else {
    $user = test_input($_POST["User"]);
    if(!preg_match("/^[A-Za-z]*$/",$user))
      {
                $userErr = "Only letters allowed for user name";
    }

}



if(!empty($_POST["User"]))
{

$sql = "DELETE FROM signup WHERE user='$_POST[User]'";

echo "deleted";
echo $conn->error;
if($conn->query($sql) === TRUE)
{
  
 echo "<script>alert('Deleted successfully !!!');
window.location.href='try.php'
</script>";
    
  
}
else
{
  $_SESSION["message"] = "Invalid login";
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
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
                <div class="delete_member">
                <p style="font-family: Roboto; font-size: 0.70em; color: #777777; margin-left:16px; margin-top: 10px;">Admin can delete a member: </p>
                <hr style="color: #FFFFFF;">

            <label  for="User" style="color: #777777; font-size: 0.70em; font-family: Roboto; margin-left:16px;margin-top: 20px;">User:</label><br/>
            <input type="text"id="User" name="User"  placeholder="Enter username"   title="please Enter a valid Username"  style="width:456px;height:36px;color:#777777;font-size:0.70em;font-family:Roboto;margin-left:13px;">
            <span class="error">   <?php echo $userErr;?></span>

        <br/><br/>
        <hr style="color: #FFFFFF;">
        <input type="submit" value="Delete "style="padding: 10px;" class="getin">

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