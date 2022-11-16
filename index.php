<?php

include "vendor/autoload.php";
use App\AuthClient;

$id = $_GET['id'];

$client = new AuthClient();

$user = $client->getUsers($id);
$user_information=json_decode($user);

$username = $user_information->username;
$email = $user_information->email;

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<title>Welcome!</title>
</head>
<style>
body {
    background: #f5f5f5;
}

#card {
  position: relative;
  top: 300px;
  width: 500px;
  display: block;
  margin: auto;
  text-align: center;
  font-family: 'Varela Round', sans-serif;
}

#upper-side {
  padding: 2em;
  background-color: #63738a;
  display: block;
  color: #fff;
  border-top-right-radius: 8px;
  border-top-left-radius: 8px;
}

#status {
  font-weight: lighter;
  text-transform: uppercase;
  letter-spacing: 2px;
  font-size: 25px;
  margin-top: -.2em;
  margin-bottom: 0;
}

#lower-side {
  padding: 4em 2em 2em 2em;
  background: #fff;
  display: block;
  border-bottom-right-radius: 8px;
  border-bottom-left-radius: 8px;
}

#message {
  margin-top: -.5em;
  color: #757575;
  letter-spacing: 1px;
  font-size: 17px;
}

#contBtn {
  position: relative;
  top: 7em;
  text-decoration: none;
  background-color: #63738a;
  color: #fff;
  margin: auto;
  padding: .7em 3em;
  -webkit-box-shadow: 0px 15px 30px rgba(50, 50, 50, 0.21);
  -moz-box-shadow: 0px 15px 30px rgba(50, 50, 50, 0.21);
  box-shadow: 0px 15px 30px rgba(50, 50, 50, 0.21);
  border-radius: 25px;
  -webkit-transition: all .4s ease;
  -moz-transition: all .4s ease;
  -o-transition: all .4s ease;
  transition: all .4s ease;
}

#contBtn:hover {
  -webkit-box-shadow: 0px 15px 30px rgba(50, 50, 50, 0.41);
  -moz-box-shadow: 0px 15px 30px rgba(50, 50, 50, 0.41);
  box-shadow: 0px 15px 30px rgba(50, 50, 50, 0.41);
  -webkit-transition: all .4s ease;
		-moz-transition: all .4s ease;
		-o-transition: all .4s ease;
		transition: all .4s ease;
}

    </style>
<body>
<div id='card' class="animated fadeIn">
  <div id='upper-side'>

      <h3 id='status'>
      WELCOME <?php echo $username ?>! 
    </h3>
  </div>
  <div id='lower-side'>
    <p id='message'>
    Your registered email is <b><?php echo $email ?></b>
    </p>
    <a href="login-form.php" id="contBtn">Sign Out</a>
  </div>
</div>
</body>
</html>


