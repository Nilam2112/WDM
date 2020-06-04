<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/portfolio.css">
<link rel="stylesheet" type="text/css" href="css/portfolio1.css">
<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Rajdhani' rel='stylesheet'>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<title>Experience</title>
</head>

<?php
$_SESSION["message"] = "";
$servername = "";
$username = "";
$password = "";
$dbname = "";
// crederntials removed for security reason


 $yeardis = $c_namedis =$positiondis = "";


 $yeardis1 = $c_namedis1 =$positiondis1 = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
 }


$sql = "SELECT year, c_name, position FROM exp";
$result = $conn->query($sql);

//if ($result->num_rows > 0) {
    // output data of each row
  
  //  while($rows = mysql_fetch_assoc($result)) {
   
      // $yeardis = $row["year"];
     // $c_namedis = $row["c_name"];
     //   $positiondis =  $row["position"] ;

  //   echo " ". $row["year"]. " ". $row["c_name"]. " " . $row["position"] . "<br/>";
    

 //    echo " ". $row["year"]. " <br/>";
 //    $yeardis=  $row["year"];

   //  echo " $yeardis <br/>";
    	//	
   
    	
//    }
 
//}

$conn->close();
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
          <div><hr class="box4">
            <h2 class="box"> <h2 id="h_2" style="font-family: 'Rajdhani',Arial, Helvetica, sans-serif; padding-bottom:15px;">Experience</h2></h2>
          </div>
            <div class="Exp">
<?php
    while($rows  = $result->fetch_assoc()) {
   ?> 
     
        <label   style="color: #777777; font-size: 0.70em; font-family: Roboto; margin-left:13px; padding-top: 10px; padding-bottom: 10px; width: 260px; padding-right:220px; padding-left: 10px;">Year:

        <?php echo $rows['year']; ?> </label><br/>
        <br/>
         <label  class="exp2" style="color: #777777; font-size: 0.70em; font-family: Roboto; margin-left:16px;margin-top: 20px;padding-top: 10px; padding-bottom: 12px; width: 260px; padding-right:220px; padding-left: 10px;">Company:  <?php echo $rows['c_name']; ?>   </label><br/>
        <br/>
        <label class="exp3"  style="color: #777777; font-size: 0.70em; font-family: Roboto; margin-left:16px;margin-top: 20px;padding-top: 10px; padding-bottom: 12px; width: 230px; padding-right:168px; padding-left: 10px;">Postion:  <?php echo $rows['position']; ?> 
        </label><br/>
         <br/><br/>
        <?php
    }
   ?> 
       
        </div>
        </main>
            <footer>
<div class="foot" style="padding-top: 690px;">&copy; DiazApps ALL RIGHTS RESERVED BY
    <span class="luis1">Neelam B Makwana</span>
    <div>
            </footer>
    </body>
    </html>