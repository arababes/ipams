
<?php
        include "session.php";
        include "connect.php";
 
	$record = $_SESSION['record'];

   	$sql = "SELECT * FROM records WHERE record_id =".$record;

    $results = mysqli_query($connect,$sql);

   
    while($record = mysqli_fetch_assoc($results)) {
           $conference_group_id = $record['conference_group_id'];
           
    }

  	$sql = "SELECT * FROM conference_per_record WHERE conference_group_id =".$conference_group_id;

    $results = mysqli_query($connect,$sql);

    $count = 0;
   
    while($record = mysqli_fetch_assoc($results)) {
          $conference_id[$count] =  $record['conference_id']; 
       
          $count++;
    }

    for($traverser = 0; $traverser<$count; $traverser++){
      $sql = "SELECT * FROM conference WHERE conference_id =".$conference_id[$traverser];

      $results = mysqli_query($connect,$sql);

     
      while($record = mysqli_fetch_assoc($results) ) {
             $conference_title[$traverser] = $record['conference_title'];
             $conference_level_id[$traverser] = $record['conference_level_id'];
             $conference_venue[$traverser] = $record['venue'];
             $conference_date[$traverser] = $record['conference_date'];

      }



    }

     for($traverser = 0; $traverser<$count; $traverser++){
      $sql = "SELECT * FROM conference_level WHERE conference_level_id =".$conference_level_id[$traverser];

      $results = mysqli_query($connect,$sql);

     
      while($record = mysqli_fetch_assoc($results) ) {
          
             $conference_level[$traverser] = $record['level_name'];

             
      }



    }

?>