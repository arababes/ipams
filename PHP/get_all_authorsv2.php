<?php
  include "session.php";
  include "connect.php";

	$record = $_SESSION['record']; 

    $sql = "SELECT * FROM records WHERE record_id =".$record;

    $results = mysqli_query($connect,$sql);

   
    while($record = mysqli_fetch_assoc($results)) {
           $team_id = $record['team_id'];
          
    }

    $sql = "SELECT * FROM author_team WHERE team_id =".$team_id;

    $results = mysqli_query($connect,$sql);

  
    $count = 0;
    while($record = mysqli_fetch_assoc($results)) {

           $author_id[$count] = $record['author_id'];
           $author_role_id[$count] = $record['author_role_id'];

           $count++;


    }
    
    for ($traverser = 0; $traverser<$count; $traverser++){

      $sql = "SELECT * FROM authors WHERE author_id =".$author_id[$traverser];

      $results = mysqli_query($connect,$sql);

      
      while($record = mysqli_fetch_assoc($results)) {

             $author_name[$traverser] = $record['name'];
           


      }

      $sql = "SELECT * FROM roles WHERE author_role_id =".$author_role_id[$traverser];

      $results = mysqli_query($connect,$sql);

     
      while($record = mysqli_fetch_assoc($results) ) {
             $author_role[$traverser] = $record['role_name'];
      }

    }
 



?>