<?php
require_once('vendor/autoload.php');
use \Firebase\JWT\JWT;

$secret_key = "MY_SECRET_KEY";
$jwt = $_COOKIE["login_token"];

if($jwt) {
	try {
		$decoded = JWT::decode($jwt, $secret_key, array('HS256'));
		echo "Access Granted " . $jwt;
	} catch (Exception $e) {
		echo "Access Denied " . $jwt;	
	}
}
?>
