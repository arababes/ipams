
<?php

  $total = 0;

	$record = $_SESSION['record'];

   	$sql = "SELECT * FROM records WHERE record_id =".$record;

    $results = mysqli_query($connect,$sql);

   
    while($record = mysqli_fetch_assoc($results)) {
           $budget_id = $record['budget_id'];
    }

  	$sql = "SELECT * FROM budget WHERE budget_id =".$budget_id;

    $results = mysqli_query($connect,$sql);

    
    while($record = mysqli_fetch_assoc($results)) {

           $budget_type_id = $record['budget_type_id'];
           $budget_source = $record['funding_source'];
           $budget_allocation = $record['budget_allocation'];

           $total += $budget_allocation;

    }


    $sql = "SELECT * FROM budget_type WHERE budget_type_id =".$budget_type_id;

    $results = mysqli_query($connect,$sql);

   
    while($record = mysqli_fetch_assoc($results) ) {
           $type_name = $record['type_name'];
    }



?>