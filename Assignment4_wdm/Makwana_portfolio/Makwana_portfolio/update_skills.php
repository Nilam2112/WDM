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
<title>update_skills</title>
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



$query = "SELECT * FROM skill";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);




//$conn->close();





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
                <p style="font-family: Roboto; font-size: 0.70em; color: #777777; margin-left:16px; margin-top: 10px;">Admin can update a skills: </p>
               
                <hr style="color: #FFFFFF;">
 
 <!--  <label   style="color: #777777; font-size: 0.70em; font-family: Roboto; margin-left:16px;margin-top: 20px;">User Name: </label>-->
<table style="color: #777777; font-size: 0.70em; font-family: Roboto; margin-left:16px;margin-top: 20px;">
  <tr>
    <th>Skillname</th>
     <th>Percentage</th>
      <th>Skilltype</th>
  </tr>
     <?php        
    while($result  = mysqli_fetch_assoc($data)) 
    {
   echo "
<tr>
<td>".$result['skill_name']."</td>
<td>".$result['percentage']."</td>
<td>".$result['skill_type']."</td>

<td><a href='admin_update_skills.php? skill_name=$result[skill_name]&percentage=$result[percentage]&skill_type=$result[skill_type]'>edit</td>
</tr>";
      
    }
    ?> 
     </table>

       

        
       
        
   <br/>
    <a  href="edit_admin.php" style="color: #777777; font-size: 0.70em; font-family: Roboto; margin-left:16px;margin-top: 20px; text-decoration: none;"> Back&nbsp;</a>   

        <br/> 

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