<?php

include "vendor/autoload.php";
use App\AuthClient;

$client = new AuthClient();

$identifier = $_POST['identifier'];
$password = $_POST['password'];

$result = $client->login($identifier, $password);
$body = json_decode($result->getBody()->getContents());
$id = $body->user->id;

//var_dump($body);

$username = $user_information->username;
$email = $user_information->email;

header('Location: index.php?id=' . $id);