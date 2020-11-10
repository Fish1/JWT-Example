<?php
require_once('vendor/autoload.php');
use \Firebase\JWT\JWT;

$username = "Bobby";
$password = "pass";

$enteredPassword = $_POST["password"];
$enteredUsername = $_POST["username"];

if($enteredPassword !== $password || $enteredUsername !== $username) {
	echo json_encode(array("status" => "bad", "jwt" => "0"));;
	return;
}

$secret_key = "MY_SECRET_KEY";

$issuer_claim = "localhost:8000";
$audience_claim = "THE_AUDIENCE";
$issuedat_claim = time();
$notbefore_claim = $issuedat_claim + 10;
$expire_claim = $issuedat_claim + 3600;

$token = array(
	"iss" => $issuer_claim,
	"aud" => $audience_claim,
	"iat" => $issuedat_claim,
	"nbf" => $notbefore_claim,
	"exp" => $expire_claim,
	"data" => array(
		"username" => $firstname,
	)
);

$jwt = JWT::encode($token, $secret_key);
setcookie("login_token", $jwt, array("expires" => time() + 3600, "httponly" => true));
echo json_encode(array("status" => "good", "jwt" => $jwt));;
?>
