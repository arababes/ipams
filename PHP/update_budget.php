<?php
    session_start();
    include_once './../php/connect.php';
    $id=0;

    $budarr=$_POST['budtype'];
    $budcount=count($budarr);
    $budarr2=[];

    for($is=0;$is<$budcount;$is++){
        if(isset($budarr[$is]) && 'School'==$budarr[$is]){
            $budarr2[$is]=1;
        }else if(isset($budarr[$is]) && 'Local'==$budarr[$is]){
            $budarr2[$is]=2;
        }else if(isset($budarr[$is]) && 'Foreign'==$budarr[$is]){
            $budarr2[$is]=3;
    }
    }
    
    if(isset($_POST['update'])){
        $budalloc=$_POST['budgetalloc'];
        $id=$_POST['id'];
        $fundsource=$_POST['fundsource'];

        $countbud=count($fundsource);

        for($x=0;$x<$countbud;$x++){
            $query[$x]="UPDATE budget SET budget_allocation='$budalloc[$x]',funding_source='$fundsource[$x]',budget_type_id='$budarr2[$x]' WHERE budget.budget_id='$id[$x]'";
            
        }
    }

    for($i=0;$i<$countbud;$i++){
        mysqli_query($connect, $query[$i]);
    }
    header('location: ../RECORDS/green');

?>