<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
<title>Register</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<style>
	body {
		color: #999;
		background: #f5f5f5;
		font-family: 'Roboto', sans-serif;
	}
	.form-control, .form-control:focus, .input-group-addon {
		border-color: #e1e1e1;
        border-radius: 0;
	}
	.signup-form {
		width: 440px;
		margin: 0 auto;
		padding: 30px 0;
	}
	.signup-form h2 {
		color: #636363;
        margin: 0 0 15px;
		text-align: center;
    }
    .signup-form .lead {
        font-size: 20px;
		margin-bottom: 30px;
		text-align: center;
	}
    .signup-form form {		
		border-radius: 1px;
    	margin-bottom: 15px;
        background: #fff;
		border: 1px solid #f3f3f3;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
	.signup-form .form-group {
		margin-bottom: 20px;
	}
	.signup-form label {
		font-weight: normal;
		font-size: 20px;
	}
	.signup-form .form-control {
		min-height: 38px;
		box-shadow: none !important;
		border-width: 0 0 1px 0;
	}	
	.signup-form .input-group-addon {
		max-width: 42px;
		text-align: center;
		background: none;
		border-width: 0 0 1px 0;
		padding-left: 5px;
	}
    .signup-form .btn {        
        font-size: 16px;
        font-weight: bold;
        border-radius: 3px;
		border: none;
		min-width: 140px;
        outline: none !important;
    }
	.signup-form a {
		color: #ffffff;
		text-decoration: none;
	}	
	.signup-form a:hover {
		text-decoration: none;
	}
	.signup-form .fa {
		font-size: 21px;
	}
	.signup-form .fa-paper-plane {
		font-size: 17px;
	}
	.signup-form .fa-check {
		color: #fff;
		left: 9px;
		top: 18px;
		font-size: 7px;
		position: absolute;
	}
</style>
</head>
<body>
<br><br><br><br><br><br><br><br><br><br><br><br>
<div class="signup-form">	
    <form action="register.php" method="POST">
		<h2>Registration Form</h2>
        <div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-user"></i></span>
				<input type="text" class="form-control" name="username" placeholder="Username" required="required">
			</div>
        </div>
        <div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-paper-plane"></i></span>
				<input type="email" class="form-control" name="email" placeholder="Email Address" required="required">
			</div>
        </div>
		<div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-lock"></i></span>
				<input type="password" class="form-control" name="password" placeholder="Password" required="required">
			</div>
        </div>
		<div class="form-group">
			<div class="input-group">
				<span class="input-group-addon">
					<i class="fa fa-lock"></i>
					<i class="fa fa-check"></i>
				</span>
				<input type="password"class="form-control" name="confirm_password" placeholder="Confirm Password" required="required">
			</div>
        </div>        
		<div class="form-group">
            <button type="submit" name="submit" class="btn btn-primary btn-block btn-lg">Submit</button>
        </div>
		<div class="form-group">
        <button type="button" class="btn btn-primary btn-block"><a href="login-form.php">Go to Log In</a></button>
        </div>
    </form>
</div>
</body>
</html>