 <?php

http_response_code(200);

if(isset($_GET['challenge_code']))

{

$verificationToken = 'ae09fa0f9a0ef9aef0aeg8g8ea98ga89eg8ae9e988ee9e9e9';

$endpointURL = 'ENTER ENDPOINT URL HERE';

header('Content-Type: application/json'); $d=$_GET['challenge_code'].$verificationToken.$endpointURL; $hd=array("challengeResponse"=>hash("sha256", $d));

echo(json_encode($hd));

} elseif(isset($_POST['challenge_code']))

?> 
