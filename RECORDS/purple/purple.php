<?php
	session_start();
	if(isset($_GET['edit'])){
	include_once "./../../php/get_collaborator.php";
	}
?>
<?php
	if($_POST){
		$_SESSION['budtype']=$_POST['budtype'];
		$_SESSION['budgetalloc']=$_POST['budgetalloc'];
		$_SESSION['fundsource']=$_POST['fundsource'];
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>IPAMS</title>

	<link rel="stylesheet" type="text/css" href="./../../CSS/styles.css">
	<link rel="stylesheet" type="text/css" href="./../../CSS/bootstrap.css">
	
	

	

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
						<a class="h-100 w-100 pale nav-button" href="/records">
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

							<link rel="stylesheet" type="text/css" href="~/fonts/font-awesome/css/all.css" />
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
											<!-- name -->
											<div style="width:10em; height:3em;margin-top:1em;margin-left:1em;text-align:center"><h4>Megumin</h4></div>
											<!--	-->
											<div style="width:10em; height:2em;margin-left:1em;text-align:center">
												<button id="edit" class="rounded os-font" style="max-width:10em; max-height:2em; margin-left:0px;text-align:left; padding-left:1em;border:none">
													EDIT
												</button>
											</div>
											<div style="width:10em; margin-top:.2em; height:2em;margin-left:1em;text-align:center">
												<button id="delete" class="rounded os-font" style="max-width:10em; max-height:2em; margin-left:0px; text-align:left; padding-left:1em;border:none">
													DELETE
												</button>
											</div>
											<!-- radio -->
											<div class="" style="width:10em; height:15em; margin-top:3em; margin-left:1.2em">

												<div class="row h-15 " style="margin-top:1em;">
													<div class="col-lg-1  h-100" align="center">
														<a href="../red/red.php"><div class="rad-button" style=" background-color:white; border-color:#df3737;"></div></a>
													</div>
													<div class="col-lg-9 h-100">
														<h4 class="mont-fon-reg" style=" font-size:16px;margin-top:1px">title & abstract</h4>
													</div>
												</div>

												<div class="row h-15 " style="margin-top:.5em;">
													<div class="col-lg-1  h-100" align="center">
														<a href="../orange/orange.php"><div class="rad-button" style=" background-color:white; border-color:#f78200"></div></a>
													</div>
													<div class="col-lg-9 h-100">
														<h4 class="mont-fon-reg" style="font-size:16px;margin-top:1px">authors & categories</h4>
													</div>
												</div>

												<div class="row h-15 " style="margin-top:.5em;">
													<div class="col-lg-1  h-100" align="center">
														<a href="../blue/blue.php"><div class="rad-button" style="background-color:white; border-color:#009cdf"></div></a>
													</div>
													<div class="col-lg-9 h-100">
														<h4 class="mont-fon-reg" style="font-size:16px;margin-top:8px">conference</h4>
													</div>
												</div>
												<div class="row h-15 " style="margin-top:.5em;">
													<div class="col-lg-1  h-100" align="center">
														<a href="../yellow/yellow.php"><div class="rad-button" style=" background-color:white; border-color:#ffb900"></div></a>
													</div>
													<div class="col-lg-9 h-100">
														<h4 class="mont-fon-reg" style="font-size:16px;margin-top:8px">publication</h4>
													</div>
												</div>


												<div class="row h-15 " style="margin-top:.5em;">
													<div class="col-lg-1  h-100" align="center">
														<a href="../green/green.php"><div class="rad-button" style=" background-color:white; border-color:#5ebd3e"></div></a>
													</div>
													<div class="col-lg-9 h-100">
														<h4 class="mont-fon-reg" style="font-size:16px;margin-top:8px">budget</h4>
													</div>
												</div>
												<div class="row h-15 " style="margin-top:.5em;">
													<div class="col-lg-1  h-100" align="center">
														<div class="rad-button" style=" background-color:#973999; border-color:#973999"></div>
													</div>
													<div class="col-lg-9 h-100">
														<h4 class="mont-fon-reg" style="font-size:16px;margin-top:8px">collaboration</h4>
													</div>
												</div>



											</div>

											<div class="row" style="margin-top:10em; margin-left:2em; width:8em; height:2em" align="center">
												<a href="/home" style="color:dimgray"><h4>logout</h4></a>
											</div>

										</div>
									</div>
									<!--  -->

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
											<div class="col-lg-4 test h-100" style="background-color:#973999"></div>
										</div>
									</div>
									<div class="col-lg-11 test h-100" style="background-color:#973999">
										<h1 class="record-header">COLLABORATION</h1>
									</div>
								</div>
								
								<!-- end header -->
								<!-- content -->
							
								<div class="row " style="height:80%">
									<div class="col-lg-1 pale h-100"></div>
									<div class="col-lg-11 pale h-15">

									<BUTTON class="sided rounded mont-reg" style="width: 12em; margin-top: 2em;" onclick="addField()">+ ADD CATEGORY</BUTTON>
									<form action=<?php if(isset($_POST['nextgreen'])){echo "../../php/add.php";}else if(isset($_GET['edit'])){echo "../../php/update_collab.php";}?> method="POST">
										<table id="table4" class="table table-striped" style="background-color:#ecece9; margin-top:5em;">
											<tr style="background-color: #973999;color:white;">
												<th>OTHER Industry</th>
												<th>INSTITUTION</th>
												<th>TYPE</th>
												<th></th>
											</tr>
											<tr>
												<td>
													<input type="text" name="collabname[]" value="<?php if(isset($_GET['edit'])){echo $collaborator_name[0];}?>" class="transparent borderless" style="border-bottom: 1px solid !important;">
												</td>
												<td>
													<input type="text" name="institution[]" value="<?php if(isset($_GET['edit'])){echo $collaborator_institution[0];}?>" class="transparent borderless" style="border-bottom: 1px solid !important;">
												</td>
												<td>
												<select name="collabtype[]" class="transparent borderless">
													<option value="Academy" <?php if(isset($_GET['edit'])){if($collaboration_type[0]=='Academy')echo "selected";}?>>Academy</option>
													<option value="Government" <?php if(isset($_GET['edit'])){if($collaboration_type[0]=='Government')echo "selected";}?>>Government</option>
													<option value="Industry" <?php if(isset($_GET['edit'])){if($collaboration_type[0]=='Industry')echo "selected";}?>>Industry</option>
												</select>
												</td>
												<td><button class="rounded delete" style="margin:  0px;">x</button></td>
											</tr>

											<?php 
												if(isset($_GET['edit'])){
											 	for ($traverser = 1; $traverser<$count; $traverser++){
													echo "<tr><td>";
													echo "<input name='collabname[$traverser]' class='transparent borderless' style='border-bottom: 1px solid !important;' value='".$collaborator_name[$traverser]."'>";
													echo "</td><td>";
													echo "<input name='institution[$traverser]' class='transparent borderless' style='border-bottom: 1px solid !important;' value='".$collaborator_institution[$traverser]."'>";
													echo "</td><td>";
													echo "<select name='collabtype[$traverser]' class='transparent borderless'>";

													if($collaboration_type[$traverser]=='Academy'){
														echo "<option value='Academy' selected>Academy</option>";
														echo "<option value='Government'>Government</option>";
														echo "<option value='Industry'>Industry</option>";
													}else if($collaboration_type[$traverser]=='Government'){
														echo "<option value='Academy'>Academy</option>";
														echo "<option value='Government' selected>Government</option>";
														echo "<option value='Industry'>Industry</option>";
													}else if($collaboration_type[$traverser]=='Industry'){
														echo "<option value='Academy'>Academy</option>";
														echo "<option value='Government'>Government</option>";
														echo "<option value='Industry' selected>Industry</option>";
													}
													
													echo "</td>";
													echo "<td><button class='delete rounded' style='margin: 0px'>x</button></td></tr>";
												
												}
												
												for($traverser1=0;$traverser1<$count;$traverser1++){
												
													echo "<input type='hidden' name='id[$traverser1]' value='$collaborator_id[$traverser1]'>";
													
												}
											}
											?>

											<script>
	
												function addField() {
															
													var myTable = document.getElementById("table4");
													var currentRow = table4.insertRow(-1);
													var array=["Academy","Government","Industry"];
													var x=1;

													var ctypeBox = document.createElement("select");
													ctypeBox.setAttribute("name", "collabtype[]" );
													ctypeBox.setAttribute("class","transparent borderless");
													
													for (var i = 0; i < array.length; i++) {
															var option = document.createElement("option");
															option.value = array[i];
															option.text = array[i];
															ctypeBox.appendChild(option);
														}

													var collabBox = document.createElement("input");
													collabBox.setAttribute("name", "collabname[]");
													collabBox.setAttribute("class","transparent borderless");
													collabBox.setAttribute("style","border-bottom: 1px solid !important;");
													
													var instBox = document.createElement("input");
													instBox.setAttribute("name", "institution[]");
													instBox.setAttribute("class","transparent borderless");
													instBox.setAttribute("style","border-bottom: 1px solid !important;");

													var delButton = document.createElement("button");
													delButton.setAttribute("class","delete rounded");
													delButton.setAttribute("style","margin:0px;");
															

													var currentCell = currentRow.insertCell(-1);
													currentCell.appendChild(collabBox);

													currentCell = currentRow.insertCell(-1);
													currentCell.appendChild(instBox);

													currentCell = currentRow.insertCell(-1);
													currentCell.appendChild(ctypeBox);

													currentCell = currentRow.insertCell(-1);
													currentCell.appendChild(delButton);
													
													}
													
												</script>

											


										</table>
										<input type="<?php if(isset($_GET['edit'])){echo 'hidden';}else{echo 'submit';}?>" class="btn" name="insert" value="Submit">
										<input type="<?php if(isset($_GET['edit'])){echo 'submit';}else{echo 'hidden';}?>" class="btn" name="update" value="Update">







									</div>

								</div>
							</form>
							</div>

						</div>



					</div>

				</div>

			</div>
		
			


			</div>

		

			
		

		</div>


		
</body>
</html>


<!---->