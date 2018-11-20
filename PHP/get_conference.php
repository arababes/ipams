
<?php

 
	$record = $_SESSION['record'];

   	$sql = "SELECT * FROM records WHERE record_id =".$record;

    $results = mysqli_query($connect,$sql);

   
    while($record = mysqli_fetch_assoc($results)) {
           $conference_id = $record['conference_id'];
    }

  	$sql = "SELECT * FROM conference WHERE conference_id =".$conference_id;

    $results = mysqli_query($connect,$sql);

   
    while($record = mysqli_fetch_assoc($results)) {
           $conference_title = $record['conference_title'];
           $conference_venue = $record['venue'];
           $conference_date = $record['conference_date'];
           $conference_level_id = $record['conference_level_id'];
    }


    $sql = "SELECT * FROM conference_level WHERE conference_level_id =".$conference_level_id;

    $results = mysqli_query($connect,$sql);

   
    while($record = mysqli_fetch_assoc($results) ) {
           $conference_level = $record['level_name'];
    }



?>