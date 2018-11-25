<?php
	include("./../PHP/indexdelete.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>IPAMS</title>

	<link rel="stylesheet" type="text/css" href="./../CSS/styles.css">
	<link rel="stylesheet" type="text/css" href="./../CSS/bootstrap.css">
	

	

</head>

<!-- this is the main template for IPAMS -->

<body>
	

	<!-- main container -->
	<div class="h-100 w-100 ">
		
		<div class="h-100" style="width:105%;">

			<!-- left side container -->
			<div class="col-lg-10 h-100">

				<!-- header -->

				<div class="row h-15 pale">
					<div class="col-lg-1 pale h-100" align="right">
						<h1 class="logo-ip">IP</h1>
					</div>

					<div class="col-lg-3 h-100">
						<div class="row h-20">
							<div class="col-lg-12 h-100 "></div>

							<div class="col-lg-12 h-100 ">
								<h1 class="logo-text" style="margin-top:10%">ams</h1>
							</div>
						</div>

						<div class="row h-20">
							<div class="col-lg-12 h-100 ">
								<h4 class="logo-text" style="margin-top:-6%">asset management system</h4>
							</div>
						</div>
					</div>

					<!-- blank space-->
					<div class="col-lg-1 h-100"></div>

					<div class="col-lg-5 h-100" align="center">
						<a class="h-100 w-100 pale nav-button" href="/home">
							<div class="col-lg-3 h-100 no-padding nav-button"><h3 style="margin-top:30%">home</h3></div>
						</a>
						<a class="h-100 w-100 pale nav-button" href="./../../RECORDS/index.php">
							<div class="col-lg-3 h-100 no-padding nav-button"><h3  style="margin-top:30%">records</h3></div>
						</a>
						<a class="h-100 w-100 pale nav-button" href="/graph">
							<div class="col-lg-3 h-100 no-padding nav-button"><h3  style="margin-top:30%">graphs</h3></div>
						</a>
						<a class="h-100 w-100 pale nav-button" href="/upload">
							<div class="col-lg-3 h-100 no-padding nav-button"><h3  style="margin-top:30%">upload</h3></div>
						</a>

					</div>
				</div>

				<!-- end header -->

				<!-- Shows Body -->
				<div id="content" class="row h-100">
					<div class="col-lg-12 h-100">
						



						<div class="row h-100">

							<link rel="stylesheet" type="text/css" href="~/fonts/font-awesome/css/all.css"/>
							<!--  -->
							<div class="col-lg-5 h-100 pale">
							</div>

							<div class="col-lg-7 h-100 ">
								<div class="row h-15">
									<div class="col-lg-2"></div>
									<div class="col-lg-2 ml-15" style="background-color:#bc8f2e;margin-top:-16%;height:15%;margin-left:1.1em; width:16.8%;"> </div>
								</div>
								<div class="row h-100 pale" style="margin-top:-15.4%">


								</div>
								<div class="row h-50 " style="margin-top:-48%; ">
									<!-- right side -->
									<div style="margin-left:100%; margin-top:-70%; width:32%; background-color:white">
										<div class="" style="width:5em; height:10em">
											<!-- pic -->
											<div style="width:90px; height:90px; margin-top: 5em; margin-left: 3em;">
												<img class="h-100 w-100" src="../../Content/res/pic/profile.jpg" style="border-radius:50%" />
											</div>
											<div style="width:10em; height:3em;margin-top:1em;margin-left:1em;text-align:center"><h4>Megumin</h4></div>
										</div>
										<?php
							        	
										include_once './../php/logout.php';
										?>
										<form method="POST">
										<div class="row" style="margin-top:32.65em; margin-left:2em; width:8em; height:2em" align="center">
										<button type="submit" name="logout" class="btn_link"><h4>logout</h4></button>
										</div>
										</form>
									</div>
									<!---->

								</div>
							</div>
							<!---->
							<div class="row pale" style="position:absolute; left:0px; top: 0; height:83%; width:100%;">
								<!---->
								<!-- header -->
								<div class="row h-15">
									<div class="col-lg-1 h-100">
										<div class="row h-100">
											<div class="col-lg-8"></div>
											<div class="col-lg-4 test h-100" style="background-color:#200e19"></div>
										</div>
									</div>
									<div class="col-lg-11 test h-100" style="background-color:#200e19">
										<h1 class="record-header">RECORDS</h1>
									</div>
								</div>
								<!-- end header -->
								<!-- search and friends -->
								<div class="row" style=" height:12.5%">
									<div class="col-lg-8 h-100 ">
										<div class="row h-100">
											<div class="col-lg-1 h-100"></div>
											<div class="col-lg-11 h-100">
												<div class="row h-100">
													<div class="col-lg-8 h-100">
														<input type="search" placeholder="Search" class="rounded search-input" style="margin-left:-13px; margin-top:1em; min-width:40em; z-index:2; position:absolute" />
													</div>
													<div class="col-lg-2">
														<button class="rounded search-button">
															<i class="fas fa-filter"></i>
															FILTER
														</button>
													</div>
												</div>

											</div>
										</div>
									</div>

									<div class="col-lg-1  h-100">
									<form method="POST">
										<button name="delete" class="rounded extras delete-button">
											DELETE
										</button>
									</form>
									</div>
									<div class="col-lg-3  h-100">
									<form action="red/red.php" method="POST">
										<button class="rounded extras add-button" name="addrecord">
											<i class="fas fa-plus"></i>
											ADD RECORD
										</button>
										</form>
									</div>

								</div>

								<!-- end search and friends-->

															<!-- record table -->
							<div class="row" style="height:67.5%;">

							<div class="col-lg-12 h-100">
							    <table class="table table-striped table-responsive table-hover" style="margin-left:4.5%; max-width:96.5%; border:none; background-color:#ecece9; border-bottom:solid 4px; border-color:gray">
							        <tr style="background-color:#571C33; color:white">
							            <th width="5px"></th>
							            <th>RESEARCH TITLE</th>
							            <th>YEAR</th>
							            <th>CLASS</th>
							            <th>PSCED</th>
							        </tr>


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
							                
							                echo '" onclick="getIds()" /><label  for="' ;
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
	       
							    	include_once "../php/paginate.php";
							        
							    ?>

								</div>
								

								<!---->

					


								<!---->

							</div>

						</div>

						<script src="./../fonts/font-awesome/js/all.js"></script>
						<script src="./../Scripts/get_checkbox_values.js"></script>
						<script src="./../Scripts/records.js"></script>
					</div>

				</div>

			</div>
		
			


			</div>

		

			
		

		</div>


		
</body>
</html>


<!---->