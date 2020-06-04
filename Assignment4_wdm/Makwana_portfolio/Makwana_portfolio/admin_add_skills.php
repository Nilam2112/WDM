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
<title>Admin add skills</title>
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
$skillnameErr = $percentErr = $typeErr  = "";
$sname= $percent =$type = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["skill_name"])) {
    $skillnameErr = "skill name is required";

  } else {
    $sname = test_input($_POST["skill_name"]);
    
  }
  if (empty($_POST["percentage"])) {
    $percentErr = "percentage is required";
  } else {
    $percent = test_input($_POST["percentage"]);
    
  }

  if (empty($_POST["skill_type"])) {
    $typeErr = " required";
  } else {
    $type = test_input($_POST["skill_type"]);
   
  }
 



if(!empty($_POST["skill_name"] && $_POST["percentage"] &&  $_POST["skill_type"]))
{
$sql = "INSERT INTO skill (skill_name, percentage, skill_type)
VALUES ('$_POST[skill_name]','$_POST[percentage]','$_POST[skill_type]')";

$sql_u="SELECT * FROM skill WHERE skill_name='$skill_name'";
$res_u=mysqli_query($conn, $sql_u);


if(mysqli_num_rows($res_u)>0)
{
 echo "<script>alert('SKILLS EXITS !!!');
window.location.href='admin_add_skills.php'
</script>";
}
else
{
if (mysqli_query($conn, $sql))
{
    echo "<script>alert('Added !!!');
window.location.href='update_skills.php'
</script>";
}
 else
 {
 $_SESSION["message"] = "Invalid ";
  echo "Error: " . $sql . "<br>" . $conn->error;
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
                <p style="font-family: Roboto; font-size: 0.70em; color: #777777; margin-left:16px; margin-top: 10px;">Admin can insert a skills: </p>
                <hr style="color: #FFFFFF;">

        <label  for="skill_name" style="color: #777777; font-size: 0.70em; font-family: Roboto; margin-left:13px;">Skill name:</label><br/>
            <input type="text"id="skill_name" name="skill_name"  placeholder="Enter skill name"  title="please Enter a valid skill name" style="width:456px;height:36px;color:#777777;font-size:0.70em;font-family:Roboto;margin-left:13px;">
            <span class="error">   <?php echo $skillnameErr;?></span>
            <label for="percentage" style="color: #777777; font-size: 0.70em; font-family: Roboto; margin-left:16px;margin-top: 20px;">Percentage:</label><br/>
            <input type="text"id="percentage" name="percentage"   placeholder="Enter percentage"    title="please Enter a valid percentage"  style="width:456px;height:36px;color:#777777;font-size:0.70em;font-family:Roboto;margin-left:13px;">
            <span class="error">   <?php echo $percentErr;?></span>
            <label for="skill_type" style="color: #777777; font-size: 0.70em; font-family: Roboto; margin-left:13px;"> Skill_type:</label><br/>
            <input type="text"id="skill_type"  name="skill_type"  placeholder="Enter skill type" title="please Enter a valid skill type" style="width:456px;height:36px;color:#777777;font-size:0.70em;font-family:Roboto;margin-left:13px;">
            <span class="error">   <?php echo $typeErr;?></span>
        <br/><br/>
        <hr style="color: #FFFFFF;">
        <input type="submit" value="Save "style="padding: 10px;" class="getin">
       <button class="Close" style="padding: 10px;"><a  href="update_skills.php" style="color:#222222;font-family:Roboto;text-decoration: none;"> Back&nbsp;</a></button>
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