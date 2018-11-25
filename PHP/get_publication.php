
<?php
       include "session.php";
       include "connect.php";
 
	$record = $_SESSION['record'];

   	$sql = "SELECT * FROM records WHERE record_id =".$record;

    $results = mysqli_query($connect,$sql);

   
    while($record = mysqli_fetch_assoc($results)) {
           $publication_id = $record['publication_id'];
    }

  	$sql = "SELECT * FROM publication WHERE publication_id =".$publication_id;

    $results = mysqli_query($connect,$sql);

   
    while($record = mysqli_fetch_assoc($results)) {
           $publication_name = $record['publication_name'];
           $isbn = $record['isbn'];
           $isi=$record['isi'];
           $issn=$record['issn'];
           $year_published = $record['year_published'];
           $published_level_id = $record['published_level_id'];
    }


    $sql = "SELECT * FROM publication_level WHERE publish_level_id =".$published_level_id;

    $results = mysqli_query($connect,$sql);

   
    while($record = mysqli_fetch_assoc($results) ) {
           $published_level = $record['level_name'];
    }



?>