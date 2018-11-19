<?php

include_once './../../PHP/connect.php';
session_start();
if(isset($_SESSION['username']))
{
    echo "<script>location.href='./../user/user.php'</script>";
    
}
else{
    if (isset($_POST['signup'])){
        $username=$_POST['signup_username'];
        $password=$_POST['signup_password'];
        $email=$_POST['signup_email'];
    
        $checksignup = mysqli_query($connect,"SELECT * FROM users WHERE username = '$username' && email = '$email'");
    
        while($row = mysqli_fetch_array($checksignup)){
            $resultusername = $row['username'];
            $resultemail = $row['email'];
        }
    
        if($resultusername==null && $resultemail==null){
            $signupquery="INSERT INTO users(username,email,password) VALUES ('$username','$email','$password')";
            mysqli_query($connect,$signupquery);
            $_SESSION['username']=$username;
            echo "<script>location.href='./../user/user.php'</script>";
        }
        else
            echo "<script>alert('Signup Failed! Your username and/or email seems to be already used.')</script>";
    }
}

?>