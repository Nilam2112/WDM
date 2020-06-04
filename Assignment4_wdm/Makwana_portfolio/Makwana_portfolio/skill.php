<!DOCTYPE html>
<html>
<head>
	<title>
    Skills
	</title>
    <link type="text/css" rel="stylesheet" href="css/portfolio1.css">
    <link rel="stylesheet" type="text/css" href="css/portfolio.css">
<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Rajdhani' rel='stylesheet'>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</style>

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


$sql = "SELECT skill_type, skill_name, percentage FROM skill";
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
<body  id="wrapper">
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
<hr class="box4">
<h2 class="box"> <h2 id="h_2" style="font-family: 'Rajdhani',Arial, Helvetica, sans-serif; padding-bottom: 15px;">SKILLS</h2></h2>


<div style="padding-top: 130px; padding-left: 70px;">
				<?php
    while($rows  = $result->fetch_assoc()) {
   ?> 
			

			

			<div >
			<table class="progress-bar5">
				<tr>
				<td  class="progress-bar-fill-h5-51"style="position: absolute; padding-top: 3px;font-family: Roboto,Arial, Helvetica, sans-serif;font-size: 14px; color: #777777;"><?php echo $rows['skill_type']; ?></td>
					<td class="progress-bar-fill5" style="position: absolute; padding-top: 3px;font-family: Roboto,Arial, Helvetica, sans-serif;font-size: 14px;"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $rows['skill_name']; ?></td>
					<td   class="progress-bar-fill-h5-5" style="font-family: Roboto,Arial, Helvetica, sans-serif; font-size: 14px; padding-top:3px;"> <?php echo $rows['percentage']; ?></td>
				</tr>
				<br/>
			</table>	

			</div>
<br/>
			 <?php
    }
   ?> 		
</div>


</body>
</main>
<footer>
		<div class="foot" style="padding-top: 200px;">&copy; DiazApps ALL RIGHTS RESERVED BY
			<span class="luis1">Neelam B Makwana</span>
			<div>
					</footer>
</html>