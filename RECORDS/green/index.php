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
	<?php 

		include_once './../../php/session.php';
    	include_once './../../php/connect.php';

    ?>
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
														<a href="/Records/Red"><div class="rad-button" style=" background-color:white; border-color:#df3737;"></div></a>
													</div>
													<div class="col-lg-9 h-100">
														<h4 class="mont-fon-reg" style=" font-size:16px;margin-top:1px">title & abstract</h4>
													</div>
												</div>

												<div class="row h-15 " style="margin-top:.5em;">
													<div class="col-lg-1  h-100" align="center">
														<a href="/Records/Orange"><div class="rad-button" style=" background-color:white; border-color:#f78200"></div></a>
													</div>
													<div class="col-lg-9 h-100">
														<h4 class="mont-fon-reg" style="font-size:16px;margin-top:1px">authors & categories</h4>
													</div>
												</div>

												<div class="row h-15 " style="margin-top:.5em;">
													<div class="col-lg-1  h-100" align="center">
														<a href="/Records/Green"><div class="rad-button" style="background-color:white; border-color:#009cdf"></div></a>
						</div>
													<div class="col-lg-9 h-100">
														<h4 class="mont-fon-reg" style="font-size:16px;margin-top:8px">conference</h4>
													</div>
												</div>
												<div class="row h-15 " style="margin-top:.5em;">
													<div class="col-lg-1  h-100" align="center">
														<a href="/Records/Yellow"><div class="rad-button" style=" background-color:white; border-color:#ffb900"></div></a>
													</div>
													<div class="col-lg-9 h-100">
														<h4 class="mont-fon-reg" style="font-size:16px;margin-top:8px">publication</h4>
													</div>
												</div>


												<div class="row h-15 " style="margin-top:.5em;">
													<div class="col-lg-1  h-100" align="center">
														<div class="rad-button" style=" background-color:#5ebd3e; border-color:#5ebd3e"></div>
													</div>
													<div class="col-lg-9 h-100">
														<h4 class="mont-fon-reg" style="font-size:16px;margin-top:8px">budget</h4>
													</div>
												</div>
												<div class="row h-15 " style="margin-top:.5em;">
													<div class="col-lg-1  h-100" align="center">
														<a href="/Records/Purple"><div class="rad-button" style=" background-color:white; border-color:#973999"></div></a>
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
											<div class="col-lg-4 test h-100" style="background-color:#5ebd3e"></div>
										</div>
									</div>
									<div class="col-lg-11 test h-100" style="background-color:#5ebd3e">
										<h1 class="record-header">BUDGET</h1>
									</div>
								</div>
								<!-- end header -->
								<!-- content -->

								<div class="row " style="height:80%">
									<div class="col-lg-1 pale h-100"></div>
									<div class="col-lg-11 pale h-15">

										<table class="table table-striped" style="background-color:#ecece9; margin-top:5em;">
											<tr style="background-color: #5ebd3e;color:white;">
												<th>TYPE</th>
												<th>BUDGET ALLOCATION</th>
												<th>FUNDING SOURCE</th>
											</tr>
											<tr>
												<td><?php include_once "./../../php/get_budget.php"; echo $type_name;?></td>
												<td>P <?php echo $budget_allocation?></td>
												<td><?php echo $budget_source?></td>
											</tr>
										

										
											<tr>
												<th colspan="2" style="background-color: #5ebd3e;color:white;">TOTAL</th>
												<td style="background-color:#c2edb4">P<?php echo $total?></td>
												
											</tr>


										</table>
									






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