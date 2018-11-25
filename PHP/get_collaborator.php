
<?php
        include "session.php";
        include "connect.php";
 
	$record = $_SESSION['record'];

   	$sql = "SELECT * FROM records WHERE record_id =".$record;

    $results = mysqli_query($connect,$sql);

   
    while($record = mysqli_fetch_assoc($results)) {
           $collaboration_id = $record['collaboration_id'];

    }



  	$sql = "SELECT * FROM collab_group WHERE collaboration_id =".$collaboration_id;

    $results = mysqli_query($connect,$sql);
    $count =0;
   
    while($record = mysqli_fetch_assoc($results)) {
   
          $collaborator_id[$count] = $record['collaborator_id'];
          $collaboration_type_id[$count] = $record['collaboration_type_id'];
          
          

          $count++;
    }

 

 


    for ($traverser = 0; $traverser<$count; $traverser++){

      $sql = "SELECT * FROM collaborators WHERE collaborator_id =".$collaborator_id[$traverser];

      $results = mysqli_query($connect,$sql); 

      
        while($record = mysqli_fetch_assoc($results) ) {

              $collaborator_name[$traverser] = $record['name'];
              $collaborator_institution[$traverser] = $record['institution'];

        }
    }

    for ($traverser = 0; $traverser<$count; $traverser++){
       $sql = "SELECT * FROM collaboration_type WHERE collaboration_type_id =".$collaboration_type_id[$traverser];

        $results = mysqli_query($connect,$sql);

        while($record = mysqli_fetch_assoc($results)) {
       
              $collaboration_type[$traverser] = $record['type_name'];
          
        }
      }


   

/*
    $sql = "SELECT * FROM collaboration_type WHERE collaboration_type_id =".$collaboration_type_id;

    $results = mysqli_query($connect,$sql);

   
    while($record = mysqli_fetch_assoc($results) ) {
           $collaboration_type = $record['type_name'];
    }

    $sql = "SELECT * FROM collab_group WHERE group_id =".$group_id;

    $results = mysqli_query($connect,$sql);

   
    while($record = mysqli_fetch_assoc($results) ) {
           $collaborator_id = $record['collaborator_id'];
    }


    $sql = "SELECT * FROM collaborators WHERE collaborator_id =".$collaborator_id;

    $results = mysqli_query($connect,$sql);

   
    while($record = mysqli_fetch_assoc($results) ) {
           $name = $record['name'];
    }*/





?>