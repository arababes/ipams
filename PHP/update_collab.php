<?php
    session_start();
    include_once './../php/connect.php';
    $id=0;

    $collarr=$_POST['collabtype'];
    $collcount=count($collarr);
    $collarr2=[];

    for($ik=0;$ik<$collcount;$ik++){
        if(isset($collarr[$ik]) && 'Academy'==$collarr[$ik]){
            $collarr2[$ik]=1;
        }else if(isset($collarr[$ik]) && 'Government'==$collarr[$ik]){
            $collarr2[$ik]=2;
        }else if(isset($collarr[$ik]) && 'Industry'==$collarr[$ik]){
            $collarr2[$ik]=3;
        }
    }

if(isset($_POST['update'])){
        $collabname=$_POST['collabname'];
        $institution=$_POST['institution'];
        $id=$_POST['id'];

        $countcol=count($collabname);

        for($x=0;$x<$countcol;$x++){
            $query[$x]="UPDATE collaborators SET name='$collabname[$x]',institution='$institution[$x]' WHERE collaborators.collaborator_id='$id[$x]'";    
        }

        for($y=0;$y<$countcol;$y++){      
            $query2[$y]="UPDATE collab_group SET collaboration_type_id='$collarr2[$y]' WHERE collab_group.collaborator_id='$id[$y]'";
            }
    }  

    for($i=0;$i<$countcol;$i++){
        mysqli_query($connect, $query[$i]);
    }
    for($j=0;$j<$countcol;$j++){
        mysqli_query($connect, $query2[$j]);
    }
    header('location: ../RECORDS/purple');

?>