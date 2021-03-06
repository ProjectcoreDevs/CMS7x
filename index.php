<?php session_start();
include_once 'core/functions.php';
$auth = new Auth;
$system = new System;
$system->db = $db;
?>
<!DOCTYPE html>
<html lang="en" class="full-height">

<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?=$websiteTitle?></title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>
	<div id="video-fond">
		<video autoplay loop>
			<source type="video/webm" src="assets/images/header-illidan.webm">
		</video>
	</div>
	<div class="modal fade loadingShow" >
		<div class="cssload-bell">
			<div class="cssload-circle">
				<div class="cssload-inner"></div>
			</div>
			<div class="cssload-circle">
				<div class="cssload-inner"></div>
			</div>
			<div class="cssload-circle">
				<div class="cssload-inner"></div>
			</div>
			<div class="cssload-circle">
				<div class="cssload-inner"></div>
			</div>
			<div class="cssload-circle">
				<div class="cssload-inner"></div>
			</div>
		</div>
    </div>
	<div class="bk-modal modal fade regErrorShow" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-md" role="document">
			<div class="modal-content">
				<div class="modal-body">
					<center>
						<h4><?=$site['registerError']?></h4>
						<img src="assets/images/regError.png" width="80px"/>
						<h5 class="regErrorInfo"></h5>
						<button class="btn btn-danger" data-dismiss="modal"><?=$site['registerErrorBtn']?></button>
					</center>
				</div>
			</div>
		</div>
	</div>
	<div class="bk-modal modal fade logCoError" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-md" role="document">
			<div class="modal-content">
				<div class="modal-body">
					<center>
						<h4><?=$site['connectError']?></h4>
						<img src="assets/images/regError.png" width="80px"/>
						<h5 class="logErrorDesc"></h5>
						<button class="btn btn-danger" data-dismiss="modal"><?=$site['connectErrorBtn']?></button>
					</center>
				</div>
			</div>
		</div>
	</div>
	<div class="bk-modal modal fade loginCo" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-body">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span class="glyphicon glyphicon-remove"  title="Close"></span>
					</button>
					<h3>Log in</h3>
					<form action="#">
						<div class="row vertical">
							<div class="col-sm-12 col-md-12">
								<div class="bk-gap"></div>
								<div class="col-sm-3 col-md-3">
									<h5>Email :</h5>
									<div class="bk-gap"></div>
									<h5>Password :</h5>
								</div>
								<div class="col-sm-9 col-md-9">
									<input type="email" class="form-control legion-style-input logEmail" placeholder="Email">
									<div class="bk-gap"></div>
									<input type="password" class="form-control legion-style-input logPassword" placeholder="Password">
								</div>
							</div>
							<div class="col-md-6">
								<div class="mnt5">
									<small><a href="#">Forgot your password ?</a></small>
								</div>
								<div class="mnt5">
									<small><a href="index.php">Not a member yet ? Register!</a></small>
								</div>
							</div>
							<div class="col-md-6">
								<div class="mnt5">
									<button class="btn btn-theme btn-block start-login">Log in</button>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
    <header>
		<nav class="navbar navbar-default navbar-doublerow navbar-trans navbar-fixed-top">
			<nav class="navbar navbar-top hidden-xs">
				<div class="container">
					<ul class="nav navbar-nav pull-left">
						<li><a href="#" class="icoRss" title="Rss"><i class="fa fa-rss"></i></a></li>
						<li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
						<li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
					</ul>
					<ul class="nav navbar-nav pull-right">
						<li><a href="#" class="text-white">Language</a></li> 
					</ul>
				</div>
				<div class="dividline light-grey"></div>
			</nav>
			<nav class="navbar navbar-down">
				<div class="container">
					<div class="flex-container">  
						<div class="navbar-header flex-item">
							<div class="navbar-brand" href="index.php"><?=$websiteTitle?></div>
						</div>
						<ul class="nav navbar-nav flex-item hidden-xs pull-right">
							<li><a href="index.php">Home</a></li>
							<li><a href="#">Download</a></li>
							<li><a href="#">Forum</a></li>
							<li><a href="#">Bugtracker</a></li>
							<?php if($auth->isLogged()){
								echo '<li><a href="account.php">Account</a></li>
								<li><a href="store.php">Store</a></li>';
							}
							else{
								echo '<li><a href="#" data-toggle="modal" data-target=".loginCo">Login</a></li>';
							} ?>							
							<li><a href="#">Help</a></li>
						</ul>
						<div class="dropdown visible-xs pull-right">
							<button class="btn btn-default dropdown-toggle " type="button" id="dropdownmenu" data-toggle="dropdown">
								<span class="glyphicon glyphicon-align-justify"></span> 
							</button>
							<ul class="dropdown-menu">
								<li><a href="index.php">Home</a></li>
								<li><a href="#">Forum</a></li> 
								<li><a href="#">Bugtracker</a></li> 
								<?php if($auth->isLogged()){
									echo '<li><a href="account.php">Account</a></li>
									<li><a href="store.php">Store</a></li>';
								}
								else{
									echo '<li><a href="#" data-toggle="modal" data-target=".loginCo">Login</a></li>';
								} ?>
								<li role="separator" class="divider"></li>
								<li><a href="#">Help</a></li>
							</ul>
						</div>
					</div>  
				</div>
			</nav>
		</nav>
	</header>
	</br>
	</br>
	<div class="container">
			<div class="row vertical-gap">
		<div class="col-md-6 index-box">
			<h2>Latest News</h2>
			<img src="assets/images/wow-legion.jpg" class="img-responsive"/>
			<h3>News Title</h3>
			<h5>Test Test Test Test</h5>
			<a href="#" class="pull-right">Read More</a>
		</div>
		<div class="col-md-6 index-box">
		<?php if($auth->isLogged()){
			echo '<div class="bk-widget-content">
				<div class="col-md-12">
					<h4>'.$site['loggedMessageTitle'].'</h4>
				</div>
				<div class="col-md-12">
					<h5><a href="account.php"><span class="glyphicon glyphicon-home"></span>'.$site['readAccount'].'</a></h5>
					<h5><a href="characters.php"><span class="glyphicon glyphicon-user"></span>'.$site['charsManagement'].'</a></h5>
					<h5><a href="store.php"><span class="glyphicon glyphicon-fire"></span>'.$site['goToStore'].'</a></h5>
					<h5><a href="#"><span class="glyphicon glyphicon-download"></span>'.$site['downloadLauncher'].'</a></h5>
				</div>
				<div class="nk-gap"></div>
				<div class="col-md-12">
					<button class="btn btn-theme send-disconnect">'.$site['loggedDisconnectBtn'].'</button>
				</div></div>';
		} else{
			echo '<h1>Join us !</h1>
				<form class="" method="" action="#" style="margin: 20px 60px 20px 60px;">
					<div class="form-group ">
						<label for="username" class="cols-sm-2 control-label">Username</label>
						<div class="cols-sm-10">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
								<input type="text" class="form-control legion-style-input regUsername"  placeholder="Enter your Username"/>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label for="email" class="cols-sm-2 control-label">Email</label>
						<div class="cols-sm-10">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
								<input type="text" class="form-control legion-style-input regEmail"  placeholder="Enter your Email"/>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label for="password" class="cols-sm-2 control-label">Password</label>
						<div class="cols-sm-10">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
								<input type="password" class="form-control legion-style-input regPassword"  placeholder="Enter your Password"/>
							</div>
						</div>
					</div>

					<div class="form-group">
						<label for="confirm" class="cols-sm-2 control-label">Confirm Password</label>
						<div class="cols-sm-10">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
								<input type="password" class="form-control legion-style-input regRepassword"  placeholder="Confirm your Password"/>
							</div>
						</div>
					</div>
					<div class="form-group ">
						<button class="btn btn-theme btn-lg btn-block sendRegister">Register</button>
					</div>
				</form>';
				} ?>
			</div>
		</div>
	</div>
	</br>
	</br>
	</br>
	<div class="col-md-12">
		<div class="footer-bottom">
			<div class="container">
				<span> © 2018 Copyright Website Title.All Rights Reserved</span>
				<span>|</span>
				<a href="#">Privacy Policy</a>
				<div class="pull-right">
				<a href="index.php">Home</a>
				<span>|</span>
				<a href="#">Download</a>
				<span>|</span>
				<a href="#">Forum</a>				
				<span>|</span>
				<a href="#">Bugtracker</a>
				<span>|</span>
				<?php if($auth->isLogged()){
					echo '<a href="account.php">Account</a>
					<span>|</span>
					<a href="store.php">Store</a>';
				}
				else{
					echo '<a href="#" data-toggle="modal" data-target=".loginCo">Login</a>';
				} ?>
				<span>|</span>
				<a href="#">Help</a>
				</div>
			</div>
		</div>
	</div>
    <!--Main Layout-->
    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/custom.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>
</html>