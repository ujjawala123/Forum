<?php
$showError = "false";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include '_dbconnect.php';
    $user_email = $_POST['loginEmail'];
    $pass = $_POST['loginPass'];
    
    $sql = "Select * from users where user_email='$user_email'";
    $result = mysqli_query($conn, $sql);
    $numRows = mysqli_num_rows($result);
    if($numRows==1){
        $row = mysqli_fetch_assoc($result);
        if(password_verify($pass, $row['user_pass'])){
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['sno'] = $row['sno'];
            $_SESSION['user_email'] = $user_email;
            echo "logged in". $user_email;
        } 
        header("Location: /forum/index.php"); 
        exit(); // Add this line to stop further execution after redirection
    } else {
        $showError = "Invalid Password";
    }
        // echo '<script type ="text/JavaScript">';  
        // echo 'alert("Credential Error ")';  
        // echo '</script>'; 
    }
    

?>