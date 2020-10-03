<?php
include('connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
<meta charset="utf-8" />
<link rel="apple-touch-icon" sizes="76x76" href="loginAssets/img/apple-icon.png">
<link rel="icon" type="image/png" href="loginAssets/img/favicon.png">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<title>
arslan Mill
</title>
<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
<link rel="stylesheet" href="../../../../maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
<link href="loginAssets/css/material-dashboard.min40a0.css?v=2.0.2" rel="stylesheet" />
<link href="loginAssets/demo/demo.css" rel="stylesheet" />
</head>
<body class="off-canvas-sidebar">
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top text-white" id="navigation-example">
	<div class="container">
    <div class="navbar-wrapper">
	<a class="navbar-brand" href="#pablo">Login Page</a>
	</div>	
	</div>
</nav>
<!-- End Navbar -->
<div class="wrapper wrapper-full-page">
<div class="page-header login-page header-filter" filter-color="black" style="background-image: url('loginAssets/img/login.jpg'); background-size: cover; background-position: top center;">
  <div class="container">
    <div class="col-lg-4 col-md-6 col-sm-6 ml-auto mr-auto">
	  <form method="POST" action="login.php">
        <div class="card card-login card-hidden">
          <div class="card-header card-header-rose text-center">
            <h4 class="card-title">Admin Login</h4>
            <div class="social-line">
              <a href="#pablo" class="btn btn-just-icon btn-link btn-white">
                <i class="fa fa-facebook-square"></i>
              </a>
              <a href="#pablo" class="btn btn-just-icon btn-link btn-white">
                <i class="fa fa-twitter"></i>
              </a>
              <a href="#pablo" class="btn btn-just-icon btn-link btn-white">
                <i class="fa fa-google-plus"></i>
              </a>
            </div>
          </div>
          <div class="card-body ">
            <p class="card-description text-center">WELCOME</p>
            
            <span class="bmd-form-group">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">email</i>
                  </span>
                </div>
                <input type="text" class="form-control" placeholder="Email..." name="username" id="username" required="true">
              </div>
            </span>
            
			
			<span class="bmd-form-group">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">lock_outline</i>
                  </span>
                </div>
                <input type="password" class="form-control" placeholder="Password..." name="password" id="password" required="true">
              </div>
            </span>
			
          </div>
          <div class="card-footer justify-content-center">
		  <button type="submit" class="btn green pull-right">Lets Go</button>
            <!--<a href="login.php" method="POST" class="btn btn-rose btn-link btn-lg">Lets Go</a>-->
          </div>
        </div>
      </form>
	  </div>
  </div>
  <footer class="footer" >
    <div class="container">
        <div class="copyright float-right">
            &copy;
            <script>
                document.write(new Date().getFullYear())
            </script>, made with <i class="material-icons">favorite</i> by
            <a target="_blank">AFTAB,ARSLAN AND HAMMAD</a>
        </div>
    </div>
</footer>
</div>
</div>

<!--   Core JS Files   -->
<script src="loginAssets/js/core/jquery.min.js" type="text/javascript"></script>
<script src="loginAssets/js/core/popper.min.js" type="text/javascript"></script>
<script src="loginAssets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
<script src="loginAssets/js/plugins/perfect-scrollbar.jquery.min.js" ></script>
<script async defer src="../../../../buttons.github.io/buttons.js"></script>
<script src="loginAssets/js/plugins/chartist.min.js"></script>
<script src="loginAssets/js/plugins/bootstrap-notify.js"></script>
<script src="loginAssets/js/material-dashboard.min40a0.js?v=2.0.2" type="text/javascript"></script>
<script src="loginAssets/demo/demo.js"></script>
<script src="loginAssets/demo/jquery.sharrre.js"></script>

<script>
  $(document).ready(function(){
    demo.checkFullPageBackgroundImage();setTimeout(function(){
        // after 1000 ms we add the class animated to the login/register card
        $('.card').removeClass('card-hidden');
      }, 700);});
</script>
  </body>
</html>