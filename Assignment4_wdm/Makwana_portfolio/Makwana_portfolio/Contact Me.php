<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="text/javascript" src="portfolio.js"> </script>
<link rel="stylesheet" type="text/css" href="css/portfolio1.css">
<link rel="stylesheet" type="text/css" href="css/portfolio.css">
<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Rajdhani' rel='stylesheet'>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<title>Contact Me</title>
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
 $name = $email = $phone = $message =  "";
 $nameErr = $emailErr = $phoneErr = $msgErr =  "";

 if ($_SERVER["REQUEST_METHOD"] == "POST")
  {
    if(empty($_POST["Name"]))
    {
      $nameErr = "Name is required";


    }
    else
    {
      $name = test_input($_POST["Name"]);

      if(!preg_match("/^[A-Za-z]*$/",$name))
      {
        $nameErr = "Only letters allowed for Name";

      }
    }

    if(empty($_POST["Email"]))
    {
      $emailErr = "Email is required";

    }
    else
    {
      $email = test_input($_POST["Email"]);

      if (!filter_var($email, FILTER_VALIDATE_EMAIL))
      {
        $emailErr = "Invalid email format";

      }
    }

    if(empty($_POST["Phone"]))
    {
      $phoneErr = "phone is required";

    }
    else
    {
      $phone = test_input($_POST["Phone"]);

    }

    if(empty($_POST["Message"]))
    {
      $msgErr = "message is required";

    }
    else
    {
      $message = test_input($_POST["Message"]);

    }

 if (isset($_REQUEST['email']))  {      
    //Email information   
      $admin_email = "nilammakwana5@gmail.com";  
       $email = $_REQUEST['email'];   
      // $subject = $_REQUEST['subject'];   
       $name = $_REQUEST['name'];  
       $phone = $_REQUEST['phone'];  
       $message = $_REQUEST['message'];      
       //send email   
    mail($admin_email,$name,$phone,$message,"From:" . $email);      
       //Email response   
       echo "Thank you for contacting us!"; 
       header("location: Contact Me.php");
        }  

}
  
 /* if(!empty($_POST["Name"] &&  $_POST["Email"]  && $_POST["Phone"]  && $_POST["Message"]))

/{
  $sql = "INSERT INTO Contact(Name, Email, Phone, Message )
  VALUES ('$_POST[Name]','$_POST[Email]','$_POST[Phone]','$_POST[Message]')";



  echo "Submitted";
      echo $conn->error;
      if($conn->query($sql) === TRUE)
      {
        header("location: Contact Me.php");
      }
      else
      {
        $_SESSION["message"] = "User cannot be added";
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
      $conn->close();
    } */

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
        <hr class="box4">
        <h2 class="box_C"> <h2 id="h_2" style="font-family:'Rajdhani',Arial, Helvetica, sans-serif; padding-bottom:15px;">Contact Me</h2></h2>
    <div id="sell_contact">
        <div class="carts_c">
            <div class="cart_c">
                <span class="text_contact">CONTACT ADDRESS</span>
           <div style="padding-top: 60px;"></div>
              <img src="image/add.jpg" id="Add"> <div class="text_contact2">  <span style="font-weight: bolder;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Address:</span> xyz, Texas
                </div>
                <br>
                <img src="image/2.jpg" id="Add"> <div class="text_contact2">  <span style="font-weight: bolder;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Phone:</span> +1 567 903 0900
                </div>
                <br>
                <img src="image/3.jpg" id="Add"> <div class="text_contact2">  <span style="font-weight: bolder;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Whatsapp:</span> +1 567 903 0900
                </div>
                <br>
                <img src="image/4.jpg" id="Add"> <div class="text_contact2">  <span style="font-weight: bolder;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Skype:</span> neelam.makwana
                </div>
                <br>
                <img src="image/5.jpg" id="Add"> <div class="text_contact2">  <span style="font-weight: bolder;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Email:</span> nilammakwana5@gmail.com
                </div>
                <br>
                <img src="image/6.jpg" id="Add"> <div class="text_contact2">  <span style="font-weight: bolder;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Website:</span> www.nilammakwana.com
                </div>
                <br>
                <div><table><tr>
                    <td style="width: 35px;"> <a href="#" target="_blank"><img src="image/7.jpg" class="Add_space"></a></td>
                    <td style="width: 35px;"> <a href="#" target="_blank"><img src="image/8.jpg" class="Add_space"></a></td>
                    <td style="width: 35px;">  <a href="#" target="_blank"><img src="image/9.jpg" class="Add_space"></a></td>
                    <td style="width: 35px;">  <a href="#" target="_blank"><img src="image/10.jpg" class="Add_space"></a></td>
                    <td style="width: 35px;"> <a href="#" target="_blank"><img src="image/11.jpg" class="Add_space"></a></td>
                    <td style="width: 35px;"><a href="#" target="_blank"><img src="image/12.jpg" class="Add_space"></a></td>
                </tr></table></div>
                <div>



                </div>

            </div>
            <form method="post" name="ContactForm" action="" onsubmit="return ValidateContact()"  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
             <!--<form name="ContactForm" action="" onsubmit="return ValidateContact()" method="post">-->
           <!-- <form action="/action_.php" method="get"> -->
            <div class="cart">
             <div style="width:480px;"> <span class="text_contact">LETS HAVE A FUN</span></div>
               <div class="Contact_m">

                    <input type="text"id="Name" name="name" required  placeholder="Your Name" style="width:456px;height:36px;color:#000033;font-size:0.70em;font-family:Roboto;margin-left:13px; border:none;">
                    <hr style="color: #FFFFFF;">
               <span class="error"><?= $nameErr ?></span>
                    <input type="text" id="Email" name="email" required 
                    placeholder="Email"  style="width:456px;height:36px;color:#000033;font-size:0.70em;font-family:Roboto;margin-left:13px; border:none;">
                    <hr style="color: #FFFFFF;">
             <span class="error"><?= $emailErr ?></span>
                    <input type="text"id="Phone"  required pattern="^\d{3}\d{3}\d{4}$" name="phone" placeholder="Phone" style="width:456px;height:36px;color:#000033;font-size:0.70em;font-family:Roboto;margin-left:13px; border:none;">
                    <span class="error"><?= $phoneErr ?></span>
                    <hr style="color: #FFFFFF;">
                    <textarea type="text"id="Message" name="message" required  placeholder="Your Message" style="width:456px;height:36px;color:#000033;font-size:0.70em;font-family:Roboto;margin-left:13px; border:none;"></textarea>
                    <span class="error"><?= $msgErr ?></span>

            <br/><br/>
            <hr style="color: #FFFFFF;">
            <input type="submit" value="Submit" style="padding: 10px;" class="Send_now" onclick="return empty()">
     <!-- <button class="Send_now" type="submit" style="padding: 10px;"><a href="#"  style="text-decoration: none;color: #222222;">Send Now</a></button> -->
            <br/>
            </div>
            </div>

         </div>
        </form>
      </div>
    </main>
    <footer>
            <div class="foot" style="padding-top: 200px;">&copy; DiazApps ALL RIGHTS RESERVED BY
                <span class="luis1">Neelam B Makwana</span>
                <div>
                        </footer>
    </body>
    </html>