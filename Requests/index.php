<?php
/**
 * * https://github.com/WordPress/Requests
 * * https://github.com/WordPress/Requests/blob/stable/docs/usage.md
 */

 require('vendor/autoload.php');

 // GET Request 
 $url = 'https://pokeapi.co/api/v2/pokemon/ditto';
 $headers = array('Content-Type' => 'application/json');
 $response = WpOrg\Requests\Requests::get($url, $headers);
 var_dump($response->body);

 //Custom Header
//  $response = WpOrg\Requests\Requests::get('https://api.github.com/events', array('X-Requests' => 'Is Awesome!'));
//  var_dump($response->body);

// // POST Request
// $data = array('key1' => 'value1', 'key2' => 'value2');
// $response = WpOrg\Requests\Requests::post('https://httpbin.org/post', array('X-Requests' => 'Is Awesome!'), $data);
// var_dump($response->body);