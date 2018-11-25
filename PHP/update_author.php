<?php
    session_start();
    include_once './../php/connect.php';
    
    $id=0;
    $rolearr=$_POST['roles'];
    $rolecount=count($rolearr);
    $rolearr2=[];

    for($i=0;$i<$rolecount;$i++){
        if(isset($rolearr[$i]) && 'Researcher'==$rolearr[$i]){
            $rolearr2[$i]=1;
        }else if(isset($rolearr[$i]) && 'Adviser'==$rolearr[$i]){
            $rolearr2[$i]=2;
        }else if(isset($rolearr[$i]) && 'Presenter'==$rolearr[$i]){
            $rolearr2[$i]=3;
        }
    }

    if(isset($_POST['classname']) && 'home'==$_POST['classname']){
        $pscedid=1;
    }else if(isset($_POST['classname']) && 'architect'==$_POST['classname']){
        $pscedid=2;
    }else if(isset($_POST['classname']) && 'agriculture'==$_POST['classname']){
        $pscedid=3;
    }else if(isset($_POST['classname']) && 'businessad'==$_POST['classname']){
        $pscedid=4;
    }else if(isset($_POST['classname']) && 'edsci'==$_POST['classname']){
        $pscedid=5;
    }else if(isset($_POST['classname']) && 'engineering'==$_POST['classname']){
        $pscedid=6;
    }else if(isset($_POST['classname']) && 'fine'==$_POST['classname']){
        $pscedid=7;
    }else if(isset($_POST['classname']) && 'humanities'==$_POST['classname']){
        $pscedid=8;
    }else if(isset($_POST['classname']) && 'law'==$_POST['classname']){
        $pscedid=9;
    }else if(isset($_POST['classname']) && 'mass'==$_POST['classname']){
        $pscedid=10;
    }else if(isset($_POST['classname']) && 'math'==$_POST['classname']){
        $pscedid=11;
    }else if(isset($_POST['classname']) && 'med'==$_POST['classname']){
        $pscedid=12;
    }else if(isset($_POST['classname']) && 'natural'==$_POST['classname']){
        $pscedid=13;
    }else if(isset($_POST['classname']) && 'religion'==$_POST['classname']){
        $pscedid=14;
    }else if(isset($_POST['classname']) && 'service'==$_POST['classname']){
        $pscedid=15;
    }else if(isset($_POST['classname']) && 'social'==$_POST['classname']){
        $pscedid=16;
    }else if(isset($_POST['classname']) && 'trade'==$_POST['classname']){
        $pscedid=17;
    }else if(isset($_POST['classname']) && 'disc'==$_POST['classname']){
        $pscedid=18;
    }else if(isset($_POST['classname']) && 'it'==$_POST['classname']){
        $pscedid=19;
    }

    if(isset($_POST['class']) && 'applied'==$_POST['class']){
        $classid=1;
    }else if(isset($_POST['class']) && 'basic'==$_POST['class']){
        $classid=2;
    }
    if(isset($_POST['update'])){
        $author=$_POST['author'];
        $role=$_POST['roles'];
        $id=$_POST['id'];
        $role_id=$_POST['role_id'];
        $record_id=$_POST['record_id'];

        $countauth=count($author);

        for($x=0;$x<$countauth;$x++){
            $query[$x]="UPDATE authors SET name='$author[$x]' WHERE author_id='$id[$x]'";
            
            
        }
        for($y=0;$y<$countauth;$y++){      
        $query2[$y]="UPDATE author_team SET author_role_id='$rolearr2[$y]' WHERE author_team.author_id='$id[$y]'";
        }
    }  

    for($i=0;$i<$countauth;$i++){
        mysqli_query($connect, $query[$i]);
    }
    for($j=0;$j<$countauth;$j++){
        mysqli_query($connect, $query2[$j]);
    }
    mysqli_query($connect,"UPDATE records SET classification_id='$classid',psced_id='$pscedid' WHERE records.record_id='$record_id'");
    header('location: ../RECORDS/orange');
?>