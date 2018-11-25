<?php
	session_start();
	if(isset($_GET['edit'])){
	include_once "./../../php/get_all_authorsv2.php";
	include_once "./../../php/get_categories.php";
	}
	include_once '../../php/connect.php';
?>
<?php


	if($_POST){
		$_SESSION['title']=$_POST['title'];
		$_SESSION['year']=$_POST['year'];
	}
	
		if (isset($_GET['record'])) {
			$record = $_GET['record'];
			$_SESSION['record'] = $record;
		} 
		elseif (isset($_SESSION['record'])) {
	
			$record = $_SESSION['record'];
		}
		else {
			$record = 1;
		}	
	
	
		$sql = "SELECT * FROM records WHERE record_id = ".$record;
	
		 mysqli_query($connect,$sql);



?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>IPAMS</title>

	<link rel="stylesheet" type="text/css" href="../../CSS/styles.css">
	<link rel="stylesheet" type="text/css" href="../../CSS/bootstrap.css">
	
	

	

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
														<div class="rad-button" style=" background-color:#f78200; border-color:#f78200"></div>
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
														<a href="../purple/purple.php"><div class="rad-button" style=" background-color:white; border-color:#973999"></div></a>
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
											<div class="col-lg-4 test h-100" style="background-color:#f78200"></div>
										</div>
									</div>
									<div class="col-lg-11 test h-100" style="background-color:#f78200">
										<h1 class="record-header">AUTHORS & CATEGORIES</h1>
									</div>
								</div>
								<!-- end header -->
								<!-- content -->
							
							
								<div class="row " style="height:80%">
									<div class="col-lg-1 pale h-100"></div>
									<div class="col-lg-11 pale h-15">
										<h1 class="mont-font">AUTHORS:</h1>

										<BUTTON type="button" class="sided rounded mont-reg" name="addauth" id="addauth" onclick="addField()">+ ADD AUTHOR</BUTTON>
								
										
										<form action=<?php if(isset($_POST['nextred'])){echo "../blue/blue.php";}else if(isset($_GET['edit'])){echo "../../php/update_author.php";}?> method="POST">
										<table id="table1" class="table table-striped" style="background-color:#ecece9">
											<tr style="background-color: #f78200;color:white;">
												<th style="width:50%">NAME</th>
												<th>ROLE</th>
												<th>
												<th>
											</tr>
											
											<tr>
											<td>
													<input id="auth" name="author[]" value="<?php if(isset($_GET['edit'])){echo $author_name[0];}?>" class="transparent borderless" style="border-bottom: 1px solid !important;">
												</td>
												<td>
												<select name="roles[]" id="role" class="transparent borderless">
													<option value="Presenter" <?php if(isset($_GET['edit'])){if($author_role[0]=='Presenter')echo "selected";}?>>Presenter</option>
													<option value="Adviser" <?php if(isset($_GET['edit'])){if($author_role[0]=='Adviser')echo "selected";}?>>Adviser</option>
													<option value="Researcher" <?php if(isset($_GET['edit'])){if($author_role[0]=='Researcher')echo "selected";}?>>Researcher</option>
												</select>
												</td>
												<td><button class="delete rounded">x</button><td>
												
											</tr>
											<?php 
												if(isset($_GET['edit'])){
											 	for ($traverser = 1; $traverser<$count; $traverser++){
													echo "<tr><td>";
													echo "<input name='author[$traverser]' class='transparent borderless' style='border-bottom: 1px solid !important;' value='".$author_name[$traverser]."'>";
													echo "</td><td>";
													echo "<select name='roles[$traverser]' class='transparent borderless'>";

													if($author_role[$traverser]=='Presenter'){
														echo "<option value='Presenter' selected>Presenter</option>";
														echo "<option value='Adviser'>Adviser</option>";
														echo "<option value='Researcher'>Researcher</option>";
													}else if($author_role[$traverser]=='Adviser'){
														echo "<option value='Presenter'>Presenter</option>";
														echo "<option value='Adviser' selected>Adviser</option>";
														echo "<option value='Researcher'>Researcher</option>";
													}else if($author_role[$traverser]=='Researcher'){
														echo "<option value='Presenter'>Presenter</option>";
														echo "<option value='Adviser'>Adviser</option>";
														echo "<option value='Researcher' selected>Researcher</option>";
													}
													
													echo "</td>";
													echo "<td><button class='delete rounded'>x</button></td></tr>";
												
												}
												
												for($traverser1=0;$traverser1<$count;$traverser1++){
												
													echo "<input type='hidden' name='id[$traverser1]' value='$author_id[$traverser1]'>";
													echo "<input type='hidden' name='role_id[$traverser1]' value='$author_role_id[$traverser1]'>";
												}
											}

											?>
											
											
						
										</table>
										<h1 class="mont-font">CATEGORIES:</h1>
										<BUTTON class="sided rounded mont-reg" style="width: 12em">+ ADD CATEGORY</BUTTON>
										<table id="table2" class="table table-striped" style="background-color:#ecece9">
											<tr style="background-color: #f78200;color:white;">
												<th style="width:50%;">CLASS</th>
												<th>PSCED</th>
												<th></th>
												<th></th>
											
											</tr>
											<tr>
												<td><select name="class" class="transparent borderless">
													<option value="applied" <?php if(isset($_GET['edit'])){if($classification_name=="Applied Research"){echo "selected";}}?>>Applied Research</option>
													<option value="basic" <?php if(isset($_GET['edit'])){if($classification_name=="Basic Research"){echo "selected";}}?>>Basic Research</option>
												</td>
												<td>
												<select name="classname" class="transparent borderless">
													<option value="agriculture" <?php if(isset($_GET['edit'])){if($psced_classification=="Agriculture,Forestry and Fisheries"){echo "selected";}}?>>Agriculture,Forestry and Fisheries</option>
													<option value="architect" <?php if(isset($_GET['edit'])){if($psced_classification=="Architecture and Town Planning"){echo "selected";}}?>>Architecture and Town Planning</option>
													<option value="businessad" <?php if(isset($_GET['edit'])){if($psced_classification=="Business Administration and Related"){echo "selected";}}?>>Business Administration and Related</option>
													<option value="edsci" <?php if(isset($_GET['edit'])){if($psced_classification=="Education Science and Teacher Training"){echo "selected";}}?>>Education Science and Teacher Training</option>
													<option value="engineering" <?php if(isset($_GET['edit'])){if($psced_classification=="Engineering and Technology"){echo "selected";}}?>>Engineering and Technology</option>
													<option value="home" <?php if(isset($_GET['edit'])){if($psced_classification=="Home Economics"){echo "selected";}}?>>Home Economics</option>
													<option value="fine" <?php if(isset($_GET['edit'])){if($psced_classification=="Fine and Applied Arts"){echo "selected";}}?>>Fine and Applied Arts</option>
													<option value="humanities" <?php if(isset($_GET['edit'])){if($psced_classification=="Humanities"){echo "selected";}}?>>Humanities</option>
													<option value="law" <?php if(isset($_GET['edit'])){if($psced_classification=="Law and Jurisprudence"){echo "selected";}}?>>Law and Jurisprudence</option>
													<option value="mass" <?php if(isset($_GET['edit'])){if($psced_classification=="Mass Communication and Documentation"){echo "selected";}}?>>Mass Communication and Documentation</option>
													<option value="math" <?php if(isset($_GET['edit'])){if($psced_classification=="Mathematics"){echo "selected";}}?>>Mathematics</option>
													<option value="med" <?php if(isset($_GET['edit'])){if($psced_classification=="Medical and Allied"){echo "selected";}}?>>Medical and Allied</option>
													<option value="natural" <?php if(isset($_GET['edit'])){if($psced_classification=="Natural Science"){echo "selected";}}?>>Natural Science</option>
													<option value="religion" <?php if(isset($_GET['edit'])){if($psced_classification=="Religion and Theology"){echo "selected";}}?>>Religion and Theology</option>
													<option value="service" <?php if(isset($_GET['edit'])){if($psced_classification=="Service Trades"){echo "selected";}}?>>Service Trades</option>
													<option value="social" <?php if(isset($_GET['edit'])){if($psced_classification=="Social and Behavioral Sciences"){echo "selected";}}?>>Social and Behavioral Sciences</option>
													<option value="trade" <?php if(isset($_GET['edit'])){if($psced_classification=="Trade, Craft and Industrial"){echo "selected";}}?>>Trade, Craft and Industrial</option>
													<option value="disc" <?php if(isset($_GET['edit'])){if($psced_classification=="Other Disciplines"){echo "selected";}}?>>Other Disciplines</option>
													<option value="it" <?php if(isset($_GET['edit'])){if($psced_classification=="IT Related Disciplines"){echo "selected";}}?>>IT Related Disciplines</option>
												</select>
												</td>
												<td><button class="delete rounded">x</button><td>
											</tr>
											<tr>
												<td><input type='hidden' name="record_id" value="<?php if(isset($_GET['edit'])){echo $record;}?>"></td>
												<td></td>
											</tr>

										</table>
										<script>
	
										function addField() {
													
											var myTable = document.getElementById("table1");
											var currentRow = table1.insertRow(-1);
											var array=["Presenter","Adviser","Researcher"];

											var authorBox = document.createElement("input");
											authorBox.setAttribute("name", "author[]");
											authorBox.setAttribute("class","transparent borderless");
											authorBox.setAttribute("style","border-bottom: 1px solid !important;")

											var roleBox = document.createElement("select");
											roleBox.setAttribute("name", "roles[]" );
											roleBox.setAttribute("class","transparent borderless");

											var delButton = document.createElement("button");
											delButton.setAttribute("class","delete rounded");
												
												for (var i = 0; i < array.length; i++) {
													var option = document.createElement("option");
													option.value = array[i];
													option.text = array[i];
													roleBox.appendChild(option);
												}

											var currentCell = currentRow.insertCell(-1);
											currentCell.appendChild(authorBox);

											currentCell = currentRow.insertCell(-1);
											currentCell.appendChild(roleBox);

											currentCell = currentRow.insertCell(-1);
											currentCell.appendChild(delButton);
											
											 }
											
										</script>
										<br>
										<input type="<?php if(isset($_GET['edit'])){echo 'hidden';}else{echo 'submit';}?>" class="btn" name="nextorange" value="Next">
										<input type="<?php if(isset($_GET['edit'])){echo 'submit';}else{echo 'hidden';}?>" class="btn" name="update" value="Update">
									</div>
										

									

								
										


								</div>

							</div>
							</form>
							<br>
									
						</div>




					</div>

				</div>

			</div>
		
			


			</div>

		

			
		

		</div>


		
</body>
</html>


<!---->