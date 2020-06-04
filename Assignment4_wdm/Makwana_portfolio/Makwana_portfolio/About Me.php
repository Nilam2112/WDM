<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/portfolio1.css">
<link rel="stylesheet" type="text/css" href="css/portfolio.css">
<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Rajdhani' rel='stylesheet'>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<title>About Me</title>
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


$sql = "SELECT name, phone, address, email, dob, nationality, para1  FROM about_me";
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
                <hr class="box4">
                <h2 class="box_C"> <h2 id="h_2" style="font-family:'Rajdhani',Arial, Helvetica, sans-serif; padding-bottom:15px;">About Me</h2></h2>
            <div id="sell_about"\>
                <div class="carts_c">
                    <div class="cart_c" style="padding-top: 50px;">
                            <img id="img_me" src="image/pp.JPG" >
                            <br/>




                    </div>
                   <?php
    while($rows  = $result->fetch_assoc()) {
   ?> 
                    <div >

                       <div class="Contact_a">
                         <p><img src="image/name1.png" alt="name" id="name"></p>
<h4 id="nameh4"> Name <br> <?php echo $rows['name']; ?> </h4>
<p><img src="image/phone1.png" alt="pp" id="phone">
<h4 id="phoneh4"> Phone <br><?php echo $rows['phone']; ?> </h4>
<p><img src="image/address1.png" alt="pp" id="address">
<h4 id="addressh4"> Address <br><?php echo $rows['address']; ?> </h4>
<p><img src="image/mail1.png" alt="pp" id="email">
<h4 id="emailh4"> Email <br><?php echo $rows['email']; ?> </h4>
<p><img src="image/dob.png" alt="pp" id="calender">
<h4 id="calenderh4">Date Of Birth <br><?php echo $rows['dob']; ?>  </h4>
<p><img src="image/nationality.png" alt="pp" id="flag">
<h4 id="flagh4">Nationality <br><?php echo $rows['nationality']; ?>  </h4>


    <p><table width="210px" style="padding-top: 200px;"><tr>
            <h4 id="social">Social Profiles details</h4>

        <td style="width: 35px;"> <a href="#" target="_blank"><img src="image/7.jpg" id="Add_space1"></a></td>
        <td style="width: 35px;"> <a href="#" target="_blank"><img src="image/8.jpg" id="Add_space1"></a></td>
        <td style="width: 35px;">  <a href="#" target="_blank"><img src="image/9.jpg" id="Add_space1"></a></td>
        <td style="width: 35px;">  <a href="#" target="_blank"><img src="image/10.jpg" id="Add_space1"></a></td>
        <td style="width: 35px;"> <a href="#" target="_blank"><img src="image/11.jpg" id="Add_space1"></a></td>
        <td style="width: 35px;"><a href="#" target="_blank"><img src="image/12.jpg" id="Add_space1"></a></td>
    </tr></table></p>

    <p id="para">
                </br>
                <?php echo $rows['para1']; ?> 
                       
                      
                        ​ </br></br>
                        <p>  <img  src="image/twke3.png" id="img_sign"></p>


                    </p>


                       </br>
                    </div>
                    </div>
  <?php
    }
   ?> 
       
                 </div>
              </div>
            </main>
            <footer>
<div class="foot" style="padding-top: 400px;padding-bottom: 20px;">&copy; DiazApps ALL RIGHTS RESERVED BY
    <span class="luis1">Neelam B Makwana</span>
    <div>
            </footer>
    </body>
    </html>