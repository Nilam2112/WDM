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


$sql = "SELECT skill_name, percentage FROM skill";
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
<h4 id="marketable" style="font-family: 'Rajdhani',Arial, Helvetica, sans-serif; font-size: 17px;">MARKETABLE SKILLS</h4>
<div class="wrapp">
			<div class="progress-bar">
				<span class="progress-bar-fill" style="width: 75%;"><img src="image/web.jpg" id="web"><span style="position: absolute; padding-top: 3px; font-family: Roboto,Arial, Helvetica, sans-serif; font-size: 14px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Web</span><h5 class="progress-bar-fill-h5" style="font-family: Roboto,Arial, Helvetica, sans-serif; font-size: 14px; padding-top:3px;">75%</h5></span>

			</div>
		</div>
<div class="wrapp2">
			<div class="progress-bar2">
				<span class="progress-bar-fill2" style="width: 75%;"><img src="image/mobile1.jpg" id="mobile"><span style="position: absolute; padding-top: 3px;font-family: Roboto,Arial, Helvetica, sans-serif; font-size: 14px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mobile</span><h5 class="progress-bar-fill-h5-2" style="font-family: Roboto,Arial, Helvetica, sans-serif; font-size: 14px; padding-top:3px;">75%</h5></span>

			</div>
<div class="wrapp3">
			<div class="progress-bar3">
				<span class="progress-bar-fill3" style="width: 80%;"><img src="image/photo.jpg" id="photography"><span style="position: absolute; padding-top: 3px;font-family: Roboto,Arial, Helvetica, sans-serif;font-size: 14px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Photography</span><h5 class="progress-bar-fill-h5-3" style="font-family: Roboto,Arial, Helvetica, sans-serif; font-size: 14px; padding-top:3px;">80%</h5></span>

			</div>
<div class="wrapp4">
			<div class="progress-bar4">
				<span class="progress-bar-fill4" style="width: 97%;"><img src="image/server.jpg" id="server"><span style="position: absolute; padding-top: 3px;font-family: Roboto,Arial, Helvetica, sans-serif;font-size: 14px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Server Administration</span><h5 class="progress-bar-fill-h5-4" style="font-family: Roboto,Arial, Helvetica, sans-serif; font-size: 14px; padding-top:3px;">97%</h5></span>

			</div>
<h4 id="transfer" style="font-family: 'Rajdhani',Arial, Helvetica, sans-serif; font-size: 17px;">TRANSFERABLE SKILLS</h4>
<div class="wrapp5">
			<div class="progress-bar5">
				<span class="progress-bar-fill5" style="width: 75%;"><img src="image/communication.jpg" id="communication"><span style="position: absolute; padding-top: 3px;font-family: Roboto,Arial, Helvetica, sans-serif;font-size: 14px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Communication</span><h5 class="progress-bar-fill-h5-5" style="font-family: Roboto,Arial, Helvetica, sans-serif; font-size: 14px; padding-top:3px;">75%</h5></span>

			</div>

			<div class="wrapp6">
			<div class="progress-bar6">
				<span class="progress-bar-fill6" style="width: 80%;"><img src="image/team.jpg" id="teamwork"><span style="position: absolute; padding-top: 3px;font-family: Roboto,Arial, Helvetica, sans-serif;font-size: 14px; ">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Team Work</span><h5 class="progress-bar-fill-h5-6" style="font-family: Roboto,Arial, Helvetica, sans-serif; font-size: 14px; padding-top:3px;">80%</h5></span>

			</div>

			<div class="wrapp7">
			<div class="progress-bar7">
				<span class="progress-bar-fill7" style="width: 97%;"><img src="image/leader.jpg" id="leadership"><span style="position: absolute; padding-top: 3px;font-family: Roboto,Arial, Helvetica, sans-serif;font-size: 14px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Leadership</span><h5 class="progress-bar-fill-h5-7" style="font-family: Roboto,Arial, Helvetica, sans-serif; font-size: 14px; padding-top:3px;">97%</h5></span>

			</div>
			<div class="wrapp8">
			<div class="progress-bar8">
                <span class="progress-bar-fill8" style="width: 70%;">
                <img src="image/time.jpg" id="time">
                <span style="position: absolute; padding-top: 3px; font-family: Roboto,Arial, Helvetica, sans-serif; font-size: 14px;">&nbsp&nbsp&nbsp&nbsp&nbspTime Management</span>
                <h5 class="progress-bar-fill-h5-8" style="font-family: Roboto,Arial, Helvetica, sans-serif; font-size: 14px; padding-top:3px;">70%</h5></span>

			</div>

			<h3 id="h_3" style="font-family: 'Rajdhani',Arial, Helvetica, sans-serif; padding-top: 60px; text-align: center; font-size: 17px;">LANGUAGE SKILLS & KNOWLEDGE</h3>

</div>
<div id="lang">
        <div class="carts">
				<div class="cart">
						<span class="text_price_lang">95%</span>
						<div class="text_contain"> <h5>Spanish<br>
						  </h5></div>
				</div>
            <div class="cart">
					<span class="text_price_lang">85%</span>
					<div class="text_contain"> <h5>English<br>
					  </h5></div>
            </div>
            <div class="cart">
               <span class="text_price_lang">75%</span>
               <div class="text_contain"> <h5>Italian<br>
                 </h5></div>
            </div>
			<div class="cart">
					<span class="text_price_lang">65%</span>
					<div class="text_contain"> <h5>Japanese<br>
					  </h5></div>
            </div>
         </div>
      </div>
</body>
</main>
<footer>
		<div class="foot" style="padding-top: 200px;">&copy; DiazApps ALL RIGHTS RESERVED BY
			<span class="luis1">Neelam B Makwana</span>
			<div>
					</footer>
</html>