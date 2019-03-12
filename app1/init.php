<?php
	require "vendor\autoload.php";

	 $provider = new League\OAuth2\Client\Provider\GenericProvider([
    'clientId'                => 'demo',    // The client ID assigned to you by the provider
    'clientSecret'            => 'demo',   // The client password assigned to you by the provider
    'redirectUri'             => 'https://localhost/app1/callback.php',
    'urlAuthorize'            => 'http://localhost:8081/auth/oauth/authorize',
    'urlAccessToken'          => 'http://localhost:8081/auth/oauth/token',
    'urlResourceOwnerDetails' => 'http://localhost:8081/auth/oauth/check_token'
  ]);
?>