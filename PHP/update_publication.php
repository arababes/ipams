<?php
    session_start();
    include_once './../php/connect.php';
    $id=0;
    
    if(isset($_POST['publevel']) && 'local'==$_POST['publevel']){
        $pubid=1;
    }else if(isset($_POST['publevel']) && 'school'==$_POST['publevel']){
        $pubid=2;
    }else if(isset($_POST['publevel']) && 'national'==$_POST['publevel']){
        $pubid=3;
    }else if(isset($_POST['publevel']) && 'international'==$_POST['publevel']){
        $pubid=4;
    }
    
    if(isset($_POST['update'])){
        $isbn=$_POST['isbn'];
        $isi=$_POST['isi'];
        $id=$_POST['id'];
        $issn=$_POST['issn'];
        $pubtitle=$_POST['pubname'];
        $year=$_POST['year2'];
    }
        mysqli_query($connect, "UPDATE publication SET publication_name='$pubtitle',isbn='$isbn',year_published='$year',published_level_id='$pubid',issn='$issn',isi='$isi' WHERE publication_id=$id");

        header('location: ../RECORDS/yellow');
?>