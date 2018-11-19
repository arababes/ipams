<?php 

include_once './../../PHP/connect.php';
session_start();
if(isset($_SESSION['username']))
{
    if (isset($_POST['delete'])){
        if(empty($_GET['idselected'])){
            echo "wow";
            
        }
        else{
            foreach($_GET['idselected'] as $selected){
                mysqli_query($connect,"DELETE FROM records WHERE record_id = $selected");
           }
        }
        //while (list($key,$val)=@each($checkbox)){
        //   mysqli_query($connect,"DELETE FROM records WHERE record_id = $val");
        //}
        //for($i=0;$i<count($checkbox);$i++){
        //    $del_id = $checkbox[$i]; 
        //    mysqli_query($connect,"DELETE FROM records WHERE record_id='".$del_id."'");
        //}
        //echo "<script>location.href='index.php'</script>";
    }
}
else{
    echo "<script>location.href='./../login/login.php'</script>";
}
?>
