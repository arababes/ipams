
<?php

 
	$record = $_SESSION['record'];

   	$sql = "SELECT * FROM records WHERE record_id =".$record;

    $results = mysqli_query($connect,$sql);

   
    while($record = mysqli_fetch_assoc($results)) {
           $collaboration_id = $record['collaboration_id'];
    }

  	$sql = "SELECT * FROM collaboration WHERE collaboration_id =".$collaboration_id;

    $results = mysqli_query($connect,$sql);

   
    while($record = mysqli_fetch_assoc($results)) {
           $institution = $record['institution'];
           $collaboration_type_id = $record['collaboration_type_id'];
           $group_id = $record['group_id'];
   
    }


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
    }





?>