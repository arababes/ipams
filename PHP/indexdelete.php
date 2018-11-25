<?php 

include_once 'connect.php';
session_start();
if(isset($_SESSION['username']))
{
    if(isset($_GET['id'])){
        $idstodelete = ($_GET['id']);
    }
    
    if(isset($_POST['delete'])){
        // mysqli_query($connect,"DELETE FROM records WHERE record_id = 2");
        // mysqli_query($connect,"DELETE FROM publication WHERE publication_id = 17");
        // mysqli_query($connect,"DELETE FROM collaboration WHERE collaboration_id = 21");
        // mysqli_query($connect,"DELETE FROM team WHERE team_id = 69");
        // mysqli_query($connect,"DELETE FROM budget_group WHERE group_id = 25");
        // mysqli_query($connect,"DELETE FROM budget WHERE budget_id = 26");
        // mysqli_query($connect,"DELETE FROM conference_group WHERE conference_group_id = 19");
        // mysqli_query($connect,"DELETE FROM conference WHERE conference_id = 18");
        if(empty($idstodelete)){
            echo "wow ha";
        }
        else{
            foreach($idstodelete as $selected){
                $result = mysqli_query($connect,"SELECT * FROM records WHERE record_id = $selected ");
                while($row = mysqli_fetch_array($result)){
                $publication_id = $row['publication_id'];
                $collaboration_id = $row['collaboration_id'];
                $team_id = $row['team_id'];
                $group_id = $row['group_id'];
                $conference_group_id = $row['conference_group_id'];
                }

                $groupresult = mysqli_query($connect,"SELECT * FROM budget_per_record WHERE group_id = $group_id");
                while($grouprow = mysqli_fetch_array($groupresult)){
                $budget_id = $grouprow['budget_id'];
                }

                $conferenceresult = mysqli_query($connect,"SELECT * FROM conference_per_record WHERE conference_group_id = $conference_group_id");
                while($conferencerow = mysqli_fetch_array($conferenceresult)){
                $conference_id = $conferencerow['conference_id'];
                }

                mysqli_query($connect,"DELETE FROM records WHERE record_id = $selected");
                mysqli_query($connect,"DELETE FROM publication WHERE publication_id = $publication_id");
                mysqli_query($connect,"DELETE FROM collaboration WHERE collaboration_id = $collaboration_id");
                mysqli_query($connect,"DELETE FROM team WHERE team_id = $team_id");
                mysqli_query($connect,"DELETE FROM budget_group WHERE group_id = $group_id");
                mysqli_query($connect,"DELETE FROM budget WHERE budget_id = $budget_id");
                mysqli_query($connect,"DELETE FROM conference_group WHERE conference_group_id = $conference_group_id");
                mysqli_query($connect,"DELETE FROM conference WHERE conference_id = $conference_id");
                
           }
        }
    }
}
else{
    echo "<script>location.href='./../HOME/login/login.php'</script>";
}
?>
