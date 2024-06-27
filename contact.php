


<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Welcome to iDiscuss - Coding Forums</title>
    <style>
    .container{
      min-height: 87vh;
    }
    </style>
  </head>
  <body>
  <?php include 'partials/_dbconnect.php';?>
  <?php include 'partials/_header.php';?>
  <div class="row">

<div class="container my-3 col-md-5">
<h1 class="text-center">Contact Us</h1>
<form action="" method="post">
<div class="form-group my-3 ">
    <label for="exampleFormControlInput1 ">Username</label>
    <input type="username" class="form-control" id="username" name="username"placeholder="username" required>
  </div>

  <div class="form-group my-3">
    <label for="exampleFormControlInput1">Email address</label>
    <input type="useremail" class="form-control" id="useremail" name="useremail" placeholder="name@example.com" required>
  </div>

  <div class="form-group">
    <label for="exampleFormControlTextarea1">Example textarea</label>
    <textarea class="form-control" id="text" name="text"rows="3" required></textarea>
  </div>

  <button class="btn btn-primary">Submit</button>
</form>

</div>
<div class="container my-5 col-md-5 ">
<img src="img/jk.png" class="img-rounded" alt="Cinque Terre" width="550" height="306"  >
<div class="contact-info  my-5 col-md-8 pd-8 text-center">
        <div><i class="fas fa-map-marker-alt"></i><h5>Police colony-rahatni, Pune, India</h5></div>
        <div><i class="fas fa-envelope " href="ujjawala992001@gmail.com"></i><h6>contact@email.com</h6></div>
        <div><i class="fas fa-phone"></i><h6>Contact No- 9511779452</h6></div>
        
      </div>
  </div>

  </div>
  <?php include 'partials/_footer.php';?> 
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>
<?php
use PHPMailer\PHPMailer\PHPMailer;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';
$mail = new PHPMailer(true);


if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'partials/_dbconnect.php';
    $username = $_POST["username"];
    $useremail = $_POST["useremail"];
    $text = $_POST["text"];
    $sql = "INSERT INTO `contact` (`username`, `useremail`, `text`, `timestamp`) VALUES ( '$username', '$useremail', '$text',current_timestamp())";
    $result = mysqli_query($conn, $sql);
  if($result){  

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'ujjawala992001@gmail.com'; // Gmail address which you want to use as SMTP server
    $mail->Password = 'ihvvpgwndtjwfrwc'; // Gmail address Password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = '587';

    $mail->setFrom('ujjawala992001@gmail.com','iDiscuss Website contact page'); // Gmail address which you used as SMTP server
    $mail->addAddress('ujjwala992001@gmail.com'); // Email address where you want to receive emails (you can use any of your gmail address including the gmail address which you used as SMTP server)

    $mail->isHTML(true);
    $mail->Subject = 'Thank you for sharing your meassage to our website!';
    $mail->Body = "<h3>welcome to our website!We will sent you quick reply please stay tuned. <br>Email: $useremail <br>Thank for Your response! </h3>";

    $mail->send();
// $showAlert = true;
    echo '<script type ="text/JavaScript">';  
    echo 'alert("Your message sent successfully!")';  
    echo '</script>'; 
    //header("Location: /forum/contact.php");
}
}
header("Location: /forum/contact.php");


?>