<?php 
	include('./../../PHP/logout.php');
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
						<a class="h-100 w-100 pale nav-button" href="user.php">
							<div class="col-lg-3 h-100 no-padding nav-button"><h3 style="margin-top:30%">home</h3></div>
						</a>
						<a class="h-100 w-100 pale nav-button" href="./../index/index.php">
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

							<div class="col-lg-5 h-100 pale">

								<div class="row h-40">
									<div class="col-lg-12 h-100">

										<div class="row h-50">
											<div class="col-lg-6 h-50 ">
												<h1 class="monts">IPAMS</h1>
											</div>
											<div class="col-lg-6 h-100 no-padding">
												<h4 class="pt-100">is a tool for managing </h4>
											</div>
										</div>

										<div class="row h-15 ">
											<div class="col-lg-12 h-100 ml-15 pt-5">
												<h4 class="">and organizing intellectual properties which are </h4>
											</div>
										</div>
										<div class="row h-15 ">
											<div class="col-lg-12 h-100 ml-15">
												<h4 class="">an essential part to the institution. </h4>
											</div>
										</div>

									</div>
								</div>


							</div>


							<div class="col-lg-7 h-100 ">
								<div class="row h-15">
									<div class="col-lg-2 ml-15" style="background-color:#bc8f2e;margin-top:-16%;height:15%;margin-left:1.1em; width:16.7%;"> </div>
								</div>
								<div class="row h-100 pale" style="margin-top:-15.4%">
									<div id="homepic" class="col-lg-12 test h-50"></div>

								</div>
								<div class="row h-50 " style="margin-top:-48%; ">

									<div class="col-lg-6 h-100">
										<div id="record-list" class="row h-100" style="width:108%">
											<div class="col-lg-12 h-100" align="center">
												<h1 class="home-button mt-15">RECORD LIST</h1>
											</div>
										</div>
									</div>

									<div id="graph-list" class="col-lg-6 h-100" style="margin-left:2%; width:48%">
										<div class=row test no-padding h-100">
											<div class="col-lg-12 h-100" align="center">
												<h1 class="home-button  mt-15" >GRAPHS</h1>
											</div>
										</div>
									</div>


									<!-- right side -->


									<div style="margin-left:100%; margin-top:-70%; width:32%; background-color:white">
										<div class="" style="width:5em; height:10em">
											<!-- pic -->
											<div style="width:90px; height:90px; margin-top: 5em; margin-left: 3em;">
												<img class="h-100 w-100" src="../../Content/res/pic/profile.jpg" style="border-radius:50%" />
											</div>
											<div style="width:10em; height:3em;margin-top:1em;margin-left:1em;text-align:center"><h4>Megumin</h4></div>
										</div>
										<form method="POST">
										<div class="row" style="margin-top:32.65em; margin-left:2em; width:8em; height:2em" align="center">
											<button type="submit" name="logout" class="btn_link"><h4>logout</h4></button>
										</div>
										</form>
									</div>


								</div>


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