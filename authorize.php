<?php
	//get authorisation bearer token - expires after 1 Hour? 
	//No update function on token currently
	//include url root for calls
	$urlroot = "https://<YOUR BB INSTANCE URI>/learn/api/public/v1/";
	//$urlroot = "http://localhost:9876/learn/api/public/v1/";

	$key = '<YOUR KEY>';
	$secret = '<YOUR SECRET>';

	// request token
	$basic_credentials = base64_encode($key.':'.$secret);

	$tokenurl = ($urlroot."oauth2/token");
	$tk = curl_init($tokenurl);
	
	curl_setopt($tk, CURLOPT_HTTPHEADER, array('Authorization: Basic '.$basic_credentials, 'Content-Type: application/x-www-form-urlencoded;charset=UTF-8'));
	curl_setopt($tk, CURLOPT_POSTFIELDS, 'grant_type=client_credentials');
	curl_setopt($tk, CURLOPT_RETURNTRANSFER, true);
	$token = json_decode(curl_exec($tk));
	curl_close($tk);

	$authorization = ('Authorization: Bearer '.$token->access_token);

?>