<?php
    session_start();
    include_once './../php/connect.php';
    $id=0;

    
    if(isset($_POST['update'])){
        $title=$_POST['title'];
        $year=$_POST['year'];
        $id=$_POST['id'];
    }
        mysqli_query($connect, "UPDATE records SET title='$title', year_accomplished='$year' WHERE record_id=$id");
        header('location: ../RECORDS/red');
?>