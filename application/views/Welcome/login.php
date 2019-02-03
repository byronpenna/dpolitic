<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php
		$this->load->view("parts/head.php");
	?>
	<link rel="stylesheet" type="text/css" href=<?php echo base_url("Content/css/paginas/welcome/login/style.css") ?> >
</head>
<body>
	<div class = "container">
		<div class="wrapper">
			<form action=<?php echo site_url("welcome/AccesoLogin") ?> method="post" name="Login_Form" class="form-signin">       
			    <h3 class="form-signin-heading">Ajedrez politico</h3>
				  <hr class="colorgraph"><br>
				  
				  <input type="text" class="form-control" name="Username" placeholder="Username" required="" autofocus="" />
				  <input type="password" class="form-control" name="Password" placeholder="Password" required=""/>     		  
				 
				  <button class="btn btn-lg btn-primary btn-block"  name="Submit" value="Login" type="Submit">Login</button>  			
			</form>			
		</div>
	</div>
</body>
</html>