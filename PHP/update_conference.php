<?php
    session_start();
    include_once './../php/connect.php';
    $id=0;

    $conarr=$_POST['conlevel'];
    $concount=count($conarr);
    $conarr2=[];

    for($iz=0;$iz<$concount;$iz++){
        if(isset($conarr[$iz]) && 'Regional'==$conarr[$iz]){
            $conarr2[$iz]=1;
        }else if(isset($conarr[$iz]) && 'Local'==$conarr[$iz]){
            $conarr2[$iz]=2;
        }else if(isset($conarr[$iz]) && 'National'==$conarr[$iz]){
            $conarr2[$iz]=3;
        }else if(isset($conarr[$iz]) && 'International'==$conarr[$iz]){
            $conarr2[$iz]=4;
        }
    }
    
    if(isset($_POST['update'])){
        $contitle=$_POST['contitle'];
        $date=$_POST['date'];
        $id=$_POST['id'];
        $venue=$_POST['venue'];

        $countcon=count($contitle);

        for($x=0;$x<$countcon;$x++){
            $query[$x]="UPDATE conference SET conference_title='$contitle[$x]',conference_date='$date[$x]',venue='$venue[$x]',conference_level_id='$conarr2[$x]' WHERE conference.conference_id='$id[$x]'";
            
        }
    }

    for($i=0;$i<$countcon;$i++){
        mysqli_query($connect, $query[$i]);
    }
    header('location: ../RECORDS/blue');
    
?>