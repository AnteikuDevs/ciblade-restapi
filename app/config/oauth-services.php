<?php 

$config = [
	'providers' => [
		'Google' => [
			'enabled' => true,
			'keys' => [
				'id' => env('GOOGLE_CLIENT_ID'),
				'secret' => env('GOOGLE_CLIENT_SCRET')
			],
			'scope' => 'https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email https://www.googleapis.com/auth/userinfo.profile',
			'callback' => env("GOOGLE_CALLBACK")
		],
		'Facebook' => [
			'enabled' => true,
			'keys' => [
				'id' => env('FACEBOOK_CLIENT_ID'),
				'secret' => env('FACEBOOK_CLIENT_SCRET')
			],
			'scope' => 'email,public_profile',
			'callback' => env("FACEBOOK_CALLBACK")
		]
	]
];

return $config;