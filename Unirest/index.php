<?php
/**
 * * https://github.com/Kong/unirest-php
 */

require('vendor/autoload.php');

$headers = array('Accept' => 'application/json');
$url = 'https://api.covidtracking.com/v1/us/daily.json';

$response = Unirest\Request::get($url, $headers = array(), $parameters = null);

echo json_encode($response->body, true);