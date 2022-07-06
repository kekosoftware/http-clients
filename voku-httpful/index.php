<?php
/**
 * * https://github.com/voku/httpful
 */

 require('vendor/autoload.php');

 // Make a request to the GitHub API with a custom
// header of "X-Foo-Header: Testing the GitHub API".

// Example 01
$uri = 'https://api.github.com/users/kekosoftware';
$response = \Httpful\Client::get_request($uri)
    ->withAddedHeader('X-Foo-Header', 'Testing the client')                                          
    ->expectsJson()
    ->send();

$result = $response->getRawBody();

//echo $result['name'] . ' joined GitHub on ' . \date('M jS Y', \strtotime($result['created_at'])) . "\n";


// Example 02
$uri = 'https://api.covidtracking.com/v1/us/daily.json';
$response = \Httpful\Client::get_request($uri)
    ->withAddedHeader('X-Foo-Header', 'API COVID Tracking')                                          
    ->expectsJson()
    ->send();

$result = $response->getRawBody();

echo json_encode($result);
