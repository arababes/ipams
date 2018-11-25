<?php
session_start();
include_once './../php/connect.php';


	if($_POST){
		$_SESSION['institution']=$_POST['institution'];
		$_SESSION['collabtype']=$_POST['collabtype'];
        $_SESSION['collabname']=$_POST['collabname'];
        
	}

$collarr=$_SESSION['collabtype'];
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

$rolearr=$_SESSION['roles'];
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

$budarr=$_SESSION['budtype'];
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

$conarr=$_SESSION['conlevel'];
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

if(isset($_SESSION['publevel']) && 'local'==$_SESSION['publevel']){
    $pubid=1;
}else if(isset($_SESSION['publevel']) && 'school'==$_SESSION['publevel']){
    $pubid=2;
}else if(isset($_SESSION['publevel']) && 'national'==$_SESSION['publevel']){
    $pubid=3;
}else if(isset($_SESSION['publevel']) && 'international'==$_SESSION['publevel']){
    $pubid=4;
}

if(isset($_SESSION['classname']) && 'home'==$_SESSION['classname']){
    $pscedid=1;
}else if(isset($_SESSION['classname']) && 'architect'==$_SESSION['classname']){
    $pscedid=2;
}else if(isset($_SESSION['classname']) && 'agriculture'==$_SESSION['classname']){
    $pscedid=3;
}else if(isset($_SESSION['classname']) && 'businessad'==$_SESSION['classname']){
    $pscedid=4;
}else if(isset($_SESSION['classname']) && 'edsci'==$_SESSION['classname']){
    $pscedid=5;
}else if(isset($_SESSION['classname']) && 'engineering'==$_SESSION['classname']){
    $pscedid=6;
}else if(isset($_SESSION['classname']) && 'fine'==$_SESSION['classname']){
    $pscedid=7;
}else if(isset($_SESSION['classname']) && 'humanities'==$_SESSION['classname']){
    $pscedid=8;
}else if(isset($_SESSION['classname']) && 'law'==$_SESSION['classname']){
    $pscedid=9;
}else if(isset($_SESSION['classname']) && 'mass'==$_SESSION['classname']){
    $pscedid=10;
}else if(isset($_SESSION['classname']) && 'math'==$_SESSION['classname']){
    $pscedid=11;
}else if(isset($_SESSION['classname']) && 'med'==$_SESSION['classname']){
    $pscedid=12;
}else if(isset($_SESSION['classname']) && 'natural'==$_SESSION['classname']){
    $pscedid=13;
}else if(isset($_SESSION['classname']) && 'religion'==$_SESSION['classname']){
    $pscedid=14;
}else if(isset($_SESSION['classname']) && 'service'==$_SESSION['classname']){
    $pscedid=15;
}else if(isset($_SESSION['classname']) && 'social'==$_SESSION['classname']){
    $pscedid=16;
}else if(isset($_SESSION['classname']) && 'trade'==$_SESSION['classname']){
    $pscedid=17;
}else if(isset($_SESSION['classname']) && 'disc'==$_SESSION['classname']){
    $pscedid=18;
}else if(isset($_SESSION['classname']) && 'it'==$_SESSION['classname']){
    $pscedid=19;
}

if(isset($_SESSION['class']) && 'applied'==$_SESSION['class']){
    $classid=1;
}else if(isset($_SESSION['class']) && 'basic'==$_SESSION['class']){
    $classid=2;
}


if(isset($_POST['insert']))
{
    $teamquery="";
    $collabname=$_SESSION['collabname'];
    $author=$_SESSION['author'];
    $budalloc=$_SESSION['budgetalloc'];
    $fundsource=$_SESSION['fundsource'];
    $contitle=$_SESSION['contitle'];
    $date=$_SESSION['date'];
    $venue=$_SESSION['venue'];
    $pubname=$_SESSION['pubname'];
    $isbn=$_SESSION['isbn'];
    $year=$_SESSION['year'];
    $title=$_SESSION['title'];
    $year2=$_SESSION['year2'];
    $issn=$_SESSION['issn'];
    $isi=$_SESSION['isi'];
    $institution=$_SESSION['institution'];
    

    $countauth=count($author);
    $countcon=count($contitle);
    $countbud=count($fundsource);
    $countcol=count($collabname);
    
    $query[0]="INSERT INTO collaboration(collaboration_id) VALUES (NULL)";
    $getcgroupid="SELECT MAX(collaboration_id) FROM collaboration";
    $query[1]="INSERT INTO team(team_id) VALUES (NULL)";
    $getteamid="SELECT MAX(team_id) FROM team";
    $query[2]="INSERT INTO conference_group(conference_group_id) VALUES(NULL)";
    $getcongroupid="SELECT MAX(conference_group_id) FROM conference_group";
    $query[3]="INSERT INTO budget_group(group_id) VALUES (NULL)";
    $getbudgroupid="SELECT MAX(group_id) FROM budget_group";
    

   if($countauth>0){
       $new=array();
       $getauthid=array();
       $teamquery=array();

       foreach($author as $key=>$value){
           $new[]="(NULL,'$value')";
       }

       if(count($new)>0){
        $query[4]="INSERT INTO authors(author_id,name) VALUES ".implode(', ',$new);
       }
       
       
        for($a=0;$a<$countauth;$a++){
            $getauthid[]="SELECT MAX(author_id) FROM authors WHERE name='$author[$a]'";
        }

    
        for($b=0;$b<$countauth;$b++){
                $teamquery[]="(NULL,($getteamid),($getauthid[$b]),'$rolearr2[$b]')";
            }
        
    
        if(count($teamquery)>0){
        $query[5]="INSERT INTO author_team(validation,team_id,author_id,author_role_id) VALUES ".implode(', ',$teamquery);
        }
    }


    if($countcon>0){
        $conquery=array();
        $recordquery=array();

        for($c=0;$c<$countcon;$c++){
            $conquery[]="(NULL,'$contitle[$c]','".date($date[$c])."','$venue[$c]','$conarr2[$c]')";
        }

        if(count($conquery)>0){
            $query[6]="INSERT INTO conference(conference_id,conference_title,conference_date,venue,conference_level_id) VALUES ".implode(', ',$conquery);
            }
        
        for($d=0;$d<$countcon;$d++){
            $getconid[]="SELECT MAX(conference_id) FROM conference WHERE conference_title='$contitle[$d]'";
           
        }

       for($e=0;$e<$countcon;$e++){
           $recordquery[]="(NULL,($getcongroupid),($getconid[$e]))";
       }

       if(count($recordquery)>0){
       $query[7]="INSERT INTO conference_per_record(id,conference_group_id,conference_id) VALUES".implode(', ',$recordquery);
       }
    }
    
    $query[8]="INSERT INTO publication(publication_id,publication_name,isbn,year_published,published_level_id,issn,isi) VALUES (NULL,'$pubname','$isbn','$year2','$pubid','$issn','$isi')";
    

    if($countbud>0){
        $budquery=array();
        $budrecquery=array();

        for($g=0;$g<$countbud;$g++){
            $budquery[]="(NULL,'$budalloc[$g]','$fundsource[$g]','$budarr2[$g]')";
        }
        
        if($budquery>0){
            $query[9]="INSERT INTO budget(budget_id,budget_allocation,funding_source,budget_type_id) VALUES".implode(', ',$budquery);
        }

        for($j=0;$j<$countbud;$j++){
            $getbudid[]="SELECT MAX(budget_id) FROM budget WHERE funding_source='$fundsource[$j]'";
        }

        for($h=0;$h<$countbud;$h++){
            $budrecquery[]="(NULL,($getbudgroupid),($getbudid[$h]))";
        }

        if(count($budrecquery)>0){
            $query[10]="INSERT INTO budget_per_record(id,group_id,budget_id) VALUES".implode(', ',$budrecquery);
        }
    }

    if($countcol>0){
        $new1=array();
        $getcollid=array();
        $cgroupquery=array();
 
        for($n=0;$n<$countcol;$n++){
            $new1[]="(NULL,'$collabname[$n]','$institution[$n]')";
        }
 
        if(count($new1)>0){
         $query[11]="INSERT INTO collaborators(collaborator_id,name,institution) VALUES ".implode(', ',$new1);
        }
        
        
         for($l=0;$l<$countcol;$l++){
             $getcollid[]="SELECT MAX(collaborator_id) FROM collaborators WHERE name='$collabname[$l]'";
         }
 
     
         for($m=0;$m<$countcol;$m++){
                 $cgroupquery[]="(NULL,($getcollid[$m]),($getcgroupid),'$collarr2[$m]')";
             }
         
     
         if(count($cgroupquery)>0){
         $query[12]="INSERT INTO collab_group(id,collaborator_id,collaboration_id,collaboration_type_id) VALUES ".implode(', ',$cgroupquery);
         }
     }

    $getpubid="SELECT MAX(publication_id) FROM publication";
    $query[13]="INSERT INTO records(record_id,title,year_accomplished,classification_id,psced_id,conference_group_id,group_id,team_id,collaboration_id,publication_id) VALUES (NULL,'$title','$year','$classid','$pscedid',($getcongroupid),($getbudgroupid),($getteamid),($getcgroupid),($getpubid))";



    for($x=0;$x<=13;$x++){
  
    mysqli_query($connect,$query[$x]);
       
    }

    header('location: ../RECORDS/index.php');

}

?>