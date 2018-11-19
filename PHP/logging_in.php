<?php

include_once './../../PHP/connect.php';
session_start();
if(isset($_SESSION['username']))
{
    echo "<script>location.href='./../user/user.php'</script>";
}
else{
    if(isset($_POST['login'])){
        $username=$_POST['username'];
        $password=$_POST['password'];
        $resultusername=null;
    
        $checklogin = mysqli_query($connect,"SELECT * FROM users WHERE username = '$username' && password = '$password'");
     
        while($row = mysqli_fetch_array($checklogin)){
            $resultusername = $row['username'];
        }
    
        if($resultusername!=null){
           $_SESSION['username']=$username;
            echo "<script>location.href='./../user/user.php'</script>";
        }
        else{
            echo "<script>alert('Username and/or Password is incorrect!')</script>";
            echo "<script>location.href=login.php</script>";
        }
    } 
}
?>