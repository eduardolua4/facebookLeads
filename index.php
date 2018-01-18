<?php  
$challenge = $_REQUEST['hud_challenge'];
$verifay_token  = $_REQUEST['hub_verify_token'];

if($verifay_token === 'abc123'){
	echo $challenge;

}
?>