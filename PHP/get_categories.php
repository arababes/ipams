
<?php

 
	$record = $_SESSION['record'];

 	$sql = "SELECT * FROM records WHERE record_id =".$record;

  $results = mysqli_query($connect,$sql);

 
  while($record = mysqli_fetch_assoc($results)) {
         $classification_id = $record['classification_id'];
         $psced_id = $record['psced_id'];
  }


	$sql = "SELECT * FROM classifications WHERE classification_id =".$classification_id;

  $results = mysqli_query($connect,$sql);

 
  while($record = mysqli_fetch_assoc($results)) {
         $classification_name = $record['classification_name'];
  }


  $sql = "SELECT * FROM psced_classification WHERE psced_id =".$psced_id;

  $results = mysqli_query($connect,$sql);

 
  while($record = mysqli_fetch_assoc($results)) {
         $psced_classification = $record['classification_name'];
  }


?>