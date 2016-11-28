<html>
<head>
	<meta charset="utf-8">
	<Title>Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel ="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="Styles_Project.css">
	<!--Optional Bootstrap theme -->
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">
</head>

<!-- Navigation Bar -->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">
		 <img alt="Brand" style="max-width:250px;"  src="logo1.png">
      </a>
	</div>
	
		
		<div class = "navbar-collapse collapse">
		
		<div class = "container-fluid">
			<ul class = "nav navbar-nav navbar-right">
				<li><a href="#"><button type = "button" class = "btn btn-success btn-xs" data-toggle="modal" data-target="#modal1">Login</button></a></li>
			</ul>
			<!--Modal-->
				<div class="modal fade" id="modal1" role="dialog">
					<div class="modal-dialog modal-lg">
					
					  <div class="modal-content">
						<div class="modal-header">
						  
						  <h4 class="modal-title">Login</h4>
						</div>
						
						<form action = "login_auth.php" method = "post">
						<div>
							<div class="modal-body">
							  <p>Please enter your ID and password.</p>
							  
								<div class="form-group">
									<label for="inputID" class="control-label">ID</label>
									<div>
										<input type="ID" name = "user_id" class="form-control" id="inputId" placeholder="Insert ID">
									</div>
								</div>
								
								<div class="form-group">
									<label for="inputPassword" class="control-label">Password</label>
									<div>
										<input type="Password" name = "password" class="form-control" id="inputPassword" placeholder="Insert Password">
									</div>
								</div>
							</div>
						<div class="modal-footer">
						
						  <button type="submit" name = "submit" class="btn btn-success">Let's Ride!</button>
						</div>
						
					  </div>
					  </div>
					  </form>
					</div>
				</div>
		</div>
		</div>		
		
   </div>
</nav>




<body>

<!--##############################################################################################################-->
<div class ="row">
<div class = "container-fluid col-md-6">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox" >
      <div class="item active">
        <img src="slide1.jpg" alt="cars" width="460" height="345">
		<div class = "carousel-caption">
		<h4>Welcome to myride.com!</h4>
		</div>
      </div>

      <div class="item">
        <img src="slide2.jpg" alt="cars" width="460" height="345">
		<div class = "carousel-caption">
		<h4>Upload your own car details!</h4>
		</div>
      </div>
    
      <div class="item">
        <img src="slide3.jpg" alt="cars" width="460" height="345">
		<div class = "carousel-caption">
		<h4>Compare your cars!</h4>
		</div>
      </div>

      <div class="item">
        <img src="slide4.jpg" alt="cars" width="460" height="345">
		<div class = "carousel-caption">
		<h4>Learn more about cars!</h4>
		</div>
      </div>
    </div>
  </div>
 </div>


<!-- Form -->
<div class = "container-fluid col-md-6">
	<form class="form-horizontal" action = "registerdata_Project.php" method = "post">
	<div class = "form-group">
	<div class = "col-md-offset-5 col-md-5">
		<h2>Register here!</h2>
	</div>
	</div>
	
	<div class="form-group">
		<label for="inputId" class="control-label col-md-5">ID</label>
		<div class="col-md-5">
			<input type="id" name = "user_id" class="form-control" id="inputId" placeholder="Insert ID">
			<span class = "help-block">Your username for your profile</span>
		</div>
	</div>
	<div class="form-group">
		<label for="inputEmail" class="control-label col-md-5">Email</label>
		<div class="col-md-5">
			<input type="email" name = "email" class="form-control" id="inputEmail" placeholder="Insert Email">
			<span class = "help-block">Please enter your email</span>
		</div>
	</div>
	<div class="form-group">
		<label for="inputPassword" class="control-label col-md-5">Password</label>
		<div class="col-md-5">
			<input type="password" name = "password" class="form-control" id="inputPassword" placeholder="Insert Password">
			<span class = "help-block">Please enter your desired password</span>
		</div>
	</div>

	<div class="form-group">
		<div class="col-md-offset-5 col-md-5">
			<button type="submit" name = "submit" class="btn btn-success">Register</button>
			
		</div>
	</div>
	</form>
</div>
</div>

<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>