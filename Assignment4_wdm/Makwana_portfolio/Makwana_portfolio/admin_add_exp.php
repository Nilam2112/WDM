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
<title>Admin add exp</title>
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
$yearErr = $cnameErr = $positionErr  = "";
$year= $c_name =$position = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["year"])) {
    $yearErr = "year is required";

  } else {
    $year = test_input($_POST["year"]);
    
  }
  if (empty($_POST["c_name"])) {
    $cnameErr = "company name is required";
  } else {
    $c_name = test_input($_POST["c_name"]);
    
  }

  if (empty($_POST["position"])) {
    $positionErr = " required";
  } else {
    $position = test_input($_POST["position"]);
   
  }
 



if(!empty($_POST["year"] && $_POST["c_name"] &&  $_POST["position"]))
{
$sql = "INSERT INTO exp (year, c_name, position)
VALUES ('$_POST[year]','$_POST[c_name]','$_POST[position]')";

$sql_u="SELECT * FROM exp WHERE c_name='$c_name'";
$res_u=mysqli_query($conn, $sql_u);


if(mysqli_num_rows($res_u)>0)
{
 echo "<script>alert('DATA EXITS !!! PLEASE CHANGE ');
window.location.href='admin_add_exp.php'
</script>";
}
else
{
if (mysqli_query($conn, $sql))
{
    
   echo "<script>alert('Added !!!');
window.location.href='update_exp.php'
</script>";
    
}
 else
 {
   echo "<script>alert('Error:');
window.location.href='admin_add_exp.php'
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
                <p style="font-family: Roboto; font-size: 0.70em; color: #777777; margin-left:16px; margin-top: 10px;">Admin can insert a Experience: </p>
                <hr style="color: #FFFFFF;">

        <label  for="year" style="color: #777777; font-size: 0.70em; font-family: Roboto; margin-left:13px;">Year:</label><br/>
            <input type="text"id="year" name="year"  placeholder="Enter year"  title="please Enter a valid year" style="width:456px;height:36px;color:#777777;font-size:0.70em;font-family:Roboto;margin-left:13px;">
            <span class="error">   <?php echo $yearErr;?></span>
            <label for="c_name" style="color: #777777; font-size: 0.70em; font-family: Roboto; margin-left:16px;margin-top: 20px;">Company name:</label><br/>
            <input type="text"id="c_name" name="c_name"   placeholder="Enter company name"    title="please Enter a valid name"  style="width:456px;height:36px;color:#777777;font-size:0.70em;font-family:Roboto;margin-left:13px;">
            <span class="error">   <?php echo $cnameErr;?></span>
            <label for="position" style="color: #777777; font-size: 0.70em; font-family: Roboto; margin-left:13px;"> Position:</label><br/>
            <input type="text"id="position"  name="position"  placeholder="Enter position" title="please Enter a valid position" style="width:456px;height:36px;color:#777777;font-size:0.70em;font-family:Roboto;margin-left:13px;">
            <span class="error">   <?php echo $positionErr;?></span>
        <br/><br/>
        <hr style="color: #FFFFFF;">
        <input type="submit" value="Save "style="padding: 10px;" class="getin">
        <button class="Close" style="padding: 10px;"><a  href="update_exp.php" style="color:#222222;font-family:Roboto;text-decoration: none;"> Back&nbsp;</a></button>
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