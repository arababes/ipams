<?php

	$record = $_SESSION['record'];

	



    $sql = "SELECT * FROM records WHERE record_id =".$record;

    $results = mysqli_query($connect,$sql);

   
    while($record = mysqli_fetch_assoc($results)) {
           $team_id = $record['team_id'];

    }

    $sql = "SELECT * FROM author_team WHERE team_id =".$team_id;

    $results = mysqli_query($connect,$sql);

    //creates hashtable for psced
    $count = 0;
    while($record = mysqli_fetch_assoc($results)) {

           $author_id[$count] = $record['author_id'];

           $count++;

    }

    $sql = "SELECT * FROM authors WHERE author_id =".$author_id[0];

    $results = mysqli_query($connect,$sql);

    //creates hashtable for psced
    $count = 0;
    while($record = mysqli_fetch_assoc($results)) {

           $author_name[$count] = $record['name'];
           $author_role_id[$count] = $record['author_role_id'];
           $count++;

    }

    $sql = "SELECT * FROM roles WHERE author_role_id =".$author_role_id[0];

    $results = mysqli_query($connect,$sql);

   
    while($record = mysqli_fetch_assoc($results) ) {
           $author_role = $record['role_name'];
    }

 



?>