<?php
use PHPMailer\PHPMailer\PHPMailer;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';
$mail = new PHPMailer(true);


$showError = "false";
// if(isset($_POST['submit'])){
 if($_SERVER["REQUEST_METHOD"] == "POST"){
    include '_dbconnect.php';
    $user_email = $_POST['signupEmail'];
    $pass = $_POST['signupPassword'];
    $cpass = $_POST['signupcPassword'];

    // Check whether this email exists
    $existSql = "select * from `users` where user_email = '$user_email'";
    $result = mysqli_query($conn, $existSql);
    $numRows = mysqli_num_rows($result);
    if($numRows>0){
       
        // $showError = "Email already in use";
        echo '<script type ="text/JavaScript">';  
        echo 'alert("Email is already in use. Login please!")';  
        echo '</script>'; 
    }
    else{
        if($pass == $cpass){
            $hash = password_hash($pass, PASSWORD_DEFAULT);
            $sql = "INSERT INTO `users` (`sno`,`user_email`, `user_pass`, `timestamp`) VALUES ( '$user_email', '$hash', current_timestamp())";
            $result = mysqli_query($conn, $sql);
            
            if($result){
                // $showAlert = true;
                
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com';
                $mail->SMTPAuth = true;
                $mail->Username = 'ujjawala992001@gmail.com'; // Gmail address which you want to use as SMTP server
                $mail->Password = 'ihvvpgwndtjwfrwc'; // Gmail address Password
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                $mail->Port = '587';
    
                $mail->setFrom('ujjawala992001@gmail.com','iDiscuss Website'); // Gmail address which you used as SMTP server
                $mail->addAddress('ujjwala992001@gmail.com'); // Email address where you want to receive emails (you can use any of your gmail address including the gmail address which you used as SMTP server)
    
                $mail->isHTML(true);
                $mail->Subject = ' welcome to our website!';
                $mail->Body = "<h3>welcome to our website!<br>Email: $user_email <br>Your password : $pass</h3>";
    
                $mail->send();
            
        // $showAlert = true;
                echo '<script type ="text/JavaScript">';  
                echo 'alert("You signup successfully!")';  
                echo '</script>'; 
                header("Location: /forum/index.php?signupsuccess=true");
                exit();
               }
            }
        else{
                echo '<script type ="text/JavaScript">';  
                echo 'alert("Your password do not match")';  
                echo '</script>'; 
                // $showError = "Passwords do not match"; }
                // header("Location: /forum/index.php");
        }
     
            
        }
    
    
        echo '<script type ="text/JavaScript">';  
        echo 'alert("Credential Error ")';  
        echo '</script>'; 
        //header("Location: /forum/index.php");
        

 }
?>