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
<title>Admin add portfolio</title>
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
$descriptionErr = $imgErr = $titleErr  = "";
$description= $img=$title = $target_file = $name = $target_dir =  "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["description"])) {
    $descriptionErr = "description is required";

  } else {
    $description = test_input($_POST["description"]);
    
  }
  if (empty($_POST["title"])) {
    $titlerr = "title  is required";
  } else {
    $title = test_input($_POST["title"]);
    
  }

if(empty($_POST["img"])){
   
    //if(isset($_POST['but_upload'])){
       $imgErr = " required";
  } else {
 
  $name = $_FILES['file']['name'];
  $target_dir = "upload/";
  $target_file = $target_dir . basename($_FILES["file"]["name"]);

 
     $query = "insert into website(img) values('".$target_file."')";
    mysqli_query($conn,$query);
  
   
//  }
 
//}
   
  }
 



if(!empty($_POST["description"] && $_POST["title"]))
{

 $name = $_FILES['file']['name'];
  $target_dir = "upload/";
  $target_file = $target_dir . basename($_FILES["file"]["name"]);

$sql = "INSERT INTO website (description, title)
VALUES ('$_POST[description]','$_POST[title]')";

$sql_u="SELECT * FROM website WHERE title='$title'";
$res_u=mysqli_query($conn, $sql_u);

{
if (mysqli_query($conn, $sql))
{
    echo "Added !!!";
    header("location:admin_add_portfolio.php");
}
 else
 {
    echo "Error: ";
   header("location: sign up.php");
    //location
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
      <form method="post" enctype='multipart/form-data' action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
     <!-- <form name="SignForm" action="" onsubmit="return ValidateSign()" method="post">-->
                <!-- <form action="/action_.php" method="get"> -->
                <div class="signup">
                <p style="font-family: Roboto; font-size: 0.70em; color: #777777; margin-left:16px; margin-top: 10px;">Admin can insert a portfolio info: </p>
                <hr style="color: #FFFFFF;">

        <label  for="description" style="color: #777777; font-size: 0.70em; font-family: Roboto; margin-left:13px;">Description:</label><br/>
            <input type="text"id="description" name="description"  placeholder="Enter description"  title="please Enter a valid description" style="width:456px;height:36px;color:#777777;font-size:0.70em;font-family:Roboto;margin-left:13px;">
            <span class="error">   <?php echo $descriptionErr;?></span>
            <label for="img" style="color: #777777; font-size: 0.70em; font-family: Roboto; margin-left:16px;margin-top: 20px;">Image:</label><br/>
           
            <input type='file' id='file' name='file'   placeholder="Enter imge"    title="please Enter a valid image"  style="width:456px;height:36px;color:#777777;font-size:0.70em;font-family:Roboto;margin-left:13px;">
            <span class="error">   <?php echo $imgErr;?></span>
            <label for="title" style="color: #777777; font-size: 0.70em; font-family: Roboto; margin-left:13px;"> Title:</label><br/>
            <input type="text"id="title"  name="title"  placeholder="Enter title" title="please Enter a valid title" style="width:456px;height:36px;color:#777777;font-size:0.70em;font-family:Roboto;margin-left:13px;">
            <span class="error">   <?php echo $titleErr;?></span>
        <br/><br/>
        <hr style="color: #FFFFFF;">
        <input type="submit" value="Save"  style="padding: 10px;"  name='but_upload' class="getin">
        <input type="submit" value="Close" style="padding: 10px;" class="Close">
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