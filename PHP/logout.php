<?php

include_once './../../PHP/connect.php';

if(isset($_POST['logout']))
{
    
    session_start();

    if (isset($_SESSION['username'])){
        session_destroy();
        echo "<script>location.href='./../login/login.php'</script>";
    }
    else{
        echo "<script>location.href='./../login/login.php'</script>";
    }
    
    
}
?>