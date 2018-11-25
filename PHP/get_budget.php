
<?php
include "session.php";
include "connect.php";

  $total = 0;

	$record = $_SESSION['record'];

   	$sql = "SELECT * FROM records WHERE record_id =".$record;

    $results = mysqli_query($connect,$sql);

   
    while($record = mysqli_fetch_assoc($results)) {
           $group_id = $record['group_id'];
    }

  	$sql = "SELECT * FROM budget_per_record WHERE group_id =".$group_id;

    $results = mysqli_query($connect,$sql);
    $count = 0;
    
    while($record = mysqli_fetch_assoc($results)) {

           $budget_id[$count] = $record['budget_id'];

           $count++;

    }

 for ($traverser = 0; $traverser<$count; $traverser++){

      $sql = "SELECT * FROM budget WHERE budget_id =".$budget_id[$traverser];

      $results = mysqli_query($connect,$sql);

      
      while($record = mysqli_fetch_assoc($results)) {

             $budget_type_id[$traverser] = $record['budget_type_id'];
             $budget_allocation[$traverser] = $record['budget_allocation'];
             $total += $budget_allocation[$traverser];
             $funding_source[$traverser] = $record['funding_source'];

           


      }



  } 

for ($traverser = 0; $traverser<$count; $traverser++){

      $sql = "SELECT * FROM budget_type WHERE budget_type_id =".$budget_type_id[$traverser];

      $results = mysqli_query($connect,$sql);

      
      while($record = mysqli_fetch_assoc($results) ) {

             $budget_type[$traverser] = $record['type_name'];
             


      }



  } 


?>