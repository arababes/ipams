
<?php
	
    include_once './../php/connect.php';

    $sql2 = "SELECT * FROM classifications";

    $results = mysqli_query($connect,$sql2);

    //creates hashtable for classification
    while($class = mysqli_fetch_assoc($results)) {
        $classification[$class['classification_id']] = $class['classification_name'];


    }

    $sql3 = "SELECT * FROM psced_classification";

    $results = mysqli_query($connect,$sql3);

    //creates hashtable for psced
    while($psced = mysqli_fetch_assoc($results)) {
            $pscedClass[$psced['psced_id']] = $psced['classification_name'];

    }

    //sets page to 1 if not set
    if (isset($_GET['pageno'])) {
        $pageno = $_GET['pageno'];
    } else {
        $pageno = 1;
    }

    $no_of_records_per_page = 7;
    $offset = ($pageno-1) * $no_of_records_per_page;

    

    $total_pages_sql = "SELECT COUNT(*) FROM records";
    $result = mysqli_query($connect,$total_pages_sql);
    $total_rows = mysqli_fetch_array($result)[0];
    $total_pages = ceil($total_rows / $no_of_records_per_page);

    $sql = "SELECT * FROM records LIMIT $offset, $no_of_records_per_page";

    $res_data = mysqli_query($connect,$sql);

    $count = 0;

    ?>  
    <form action="get_selected_records.php" method="get">
    <?php
    while($row = mysqli_fetch_array($res_data)){
    	
    	$count++;
        echo '<tr><th> <input type="checkbox" id="'  ;
        echo $row['record_id'];
        
        echo '" /><label  for="' ;
        echo $row['record_id'];
        echo '">Toggle</label> </th>';
        //title
        echo '<td style="padding-left: 1em;width: 40%;">';

        ?>
        	<a href="<?php  echo "red?record=".($row['record_id']);  ?>" style="color: #333333">

        <?php
        echo $row['title'];
        echo '</a></td>';
        //title
        echo '<td style="width: 8%">';
        echo $row['year_accomplished'];
        echo '</td>';

        //classification
        echo '<td style="width: 20%">';
        echo $classification[$row['classification_id']];
        echo '</td>';

        //psced
        echo '<td>';
        echo $pscedClass[$row['psced_id']];
        echo '</td>';

    }

    for ($x = $count; $x < $no_of_records_per_page; $x++){
    	echo '<tr> <td></td> <td></td> <td></td> <td></td> <td></td> </tr>';
	}?>
    
    </form>
    <?php

    mysqli_close($connect);
?>