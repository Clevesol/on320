<!-- <!doctype html>-->
<!-- <html lang="en"> -->
<!-- <head> -->
<!-- <title>ON320</title> -->
<!-- <script type="text/javascript" src="/res/scripts/jquery/jquery.js"></script> -->
<!-- <script type="text/javascript" src="/res/jui/jquery-ui.min.js"></script> -->
<!-- <script type="text/javascript" src="/res/scripts/domscript.js"></script> -->
<!-- <script type="text/javascript"></script> -->

<!-- <link rel="stylesheet" href="res/btstrp/css/bootstrap.min.css" /> -->
<!-- <link rel="stylesheet" href="res/btstrp/css/style.css" /> -->
<!-- <link rel="icon" type="favicon" href="/res/img/logo_day.png" /> -->

<!-- <meta name="viewport" -->
<!-- 	content="width=device-width,height=device-height, initial-scale=3, maximum-scale=1, user-scalable=no"> -->
<!-- </head> -->
<?php include 'mok.php';
	echo getHeader();
?>

<body onchange="documentChange()" class="container-fluid">
	<div class="mynavigation-bar  col-sm-12">

		<a class="col-sm-3" id="logo" href="http://www.on320.lk"></a>
		<div class="col-sm-5"></div>
		<div class="col-sm-3" id="right-pane">
			<div class="row-fluid" id="contact-pane">
				<p id="pnum">+94777590866</p>
				<p id="email">info@on320.lk</p>
			</div>
			<div class="row-fluid" id="info-pane">
				<p id="message" class="text-center">Reserve now, Pay while Checkin</p>
			</div>
		</div>
	</div>


	<div class="col-sm-12" id="content">
		<div class="col-sm-7"></div>
		<div id="reservation-details" class="col-sm-4">
			<form class="form-horizontal">

				<div class="form-group">
					<div class="col-sm-10 col-sm-offset-1">
						<h1>Reserve Now</h1>
					</div>
				</div>





				<div class="form-group">
					<div class="col-sm-10 col-sm-offset-1">
						<div class="input-group">

							<span style="padding-left: 50px"
								class="input-group-addon left-addon text-centered" id="name"> <i
								class="glyphicon glyphicon-user"></i>
							</span> <input type="text" class="form-control" id="inputEmail3"
								placeholder="Full Name">
						</div>
					</div>
				</div>


				<div class="form-group">
					<div class="col-sm-10 col-sm-offset-1">

						<div class="input-group">
							<span style="padding-left: 50px"
								class="input-group-addon left-addon text-centered" id="name"> <i
								class="glyphicon glyphicon-list"></i>
							</span> <input class="form-control" list="browsers">
						</div>
						<datalist id="browsers">
							<option value="One Bedroom">
							
							
							<option value="Two Bedroom">
						
						</datalist>

					</div>
				</div>


				<div class="form-group">
					<div class="col-sm-10 col-sm-offset-1">
						<div class="input-group">
							<span style="padding-left: 50px"
								class="input-group-addon left-addon text-centered" id="name"> <i
								class="glyphicon glyphicon-calendar"></i> <i
								class="glyphicon glyphicon-arrow-left"></i>
							</span> <input style="font-size: 13px;" type="date"
								class="form-control" id="datepicker">
						</div>
					</div>
				</div>


				<div class="form-group">
					<div class="col-sm-10 col-sm-offset-1">
						<div class="input-group">
							<span style="padding-left: 50px"
								class="input-group-addon left-addon text-centered" id="name"> <i
								class="glyphicon glyphicon-calendar"></i> <i
								class="glyphicon glyphicon-arrow-right"></i>
							</span> <input style="font-size: 13px;" type="date"
								class="form-control" id="datepicker">
						</div>
					</div>
				</div>

				<div class="form-group">
					<div class="col-sm-10 col-sm-offset-1">
						<div class="input-group">
							<span style="padding-left: 50px"
								class="input-group-addon left-addon text-centered" id="name"> <i
								class="glyphicon glyphicon-envelope	"></i>
							</span> <input type="email" class="form-control"
								id="inputPassword3" placeholder="email">
						</div>
					</div>
				</div>



				<div class="form-group">




					<div class="col-sm-10 col-sm-offset-1">
						<div class="input-group">
							<span style="padding-left: 50px"
								class="input-group-addon left-addon text-centered" id="name"> <i
								class="glyphicon glyphicon-earphone"></i>
							</span> <input type="tel" class="form-control"
								id="inputPassword3" placeholder="phone number">
						</div>
					</div>
				</div>



				<div class="form-group">
					<div class="col-sm-10 col-sm-offset-4">
						<button type="submit" class="btn btn-default">reserve now</button>
					</div>
				</div>
			</form>
		</div>
		<div class="col-md-1"></div>
	</div>



<!--  commented for template
	<div id="footer" class="mynavigation-bar  col-sm-12">
		<a class="col-sm-6 col-sm-offset-2" id="logo-d"
			href="http://www.on320.lk"></a>
		<div class="col-sm-4"></div>
		<div class="col-sm-3" id="right-pane">
			<a class="row span-12" href="#">+94734253245</a> 
			<a class="row span-12" href="#">infor@on320.lk</a> 
			<a class="row span-12" href="#">No:320,Union Place, Colombo-02</a>
		</div>
	</div>
	
-->	
	<!-- 		<div class="col-sm-12"> -->
	<!-- 			<div class="col-sm-5 col-sm-offset-2"> -->
	<!-- 					<a class="col-sm-3" id="logo-d" href="http://www.on320.lk"></a> -->
	<!-- 			</div> -->
	<!-- 			<div class="col-sm-3"> -->
	<!-- 				<a class="row span-12" href="#">+94734253245</a>  -->
	<!-- 				<a class="row span-12" href="#">infor@on320.lk</a>  -->
	<!-- 				<a class="row span-12" href="#">No:320,Union Place, Colombo-02</a> -->
	<!-- 			</div> -->
	<!-- 		</div> -->
	
	
	<?php echo getFooter();
	?>
	
</body>
</html>