<?php

$curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => "https://latest-earthquakes.p.rapidapi.com/",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"x-rapidapi-host: latest-earthquakes.p.rapidapi.com",
		"x-rapidapi-key: 57a34da5bamsh069eb935ee946e8p145f33jsn254c79f21b60"
	],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
	echo $response;
}