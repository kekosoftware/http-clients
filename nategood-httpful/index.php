<?php
/**
 * *  https://github.com/nategood/httpful
 */



require('vendor/autoload.php');


// Make a request to the GitHub API with a custom
// header of "X-Trvial-Header: Just as a demo".
// $url = "https://api.github.com/users/kekosoftware";
// $response = \Httpful\Request::get($url)
//     ->expectsJson()
//     ->withXTrivialHeader('Just as a demo')
//     ->send();

// echo "{$response->body->name} joined GitHub on " 
//     .  date('M jS', strtotime($response->body->created_at)) ."\n";



$url = "https://api.covidtracking.com/v1/us/daily.json";
$response = \Httpful\Request::get($url)
    ->expectsJson()
    ->withXTrivialHeader('Testing API')
    ->send();

echo json_encode($response->body);
