<?php

function get($url, $callback)
{
    if ($_SERVER['REQUEST_METHOD'] === 'GET' && $_SERVER['REQUEST_URI'] === $url) {
        $callback();
        exit();
    }
}

function post($url, $callback)
{
    $request = $_POST; // Example: Retrieving POST data
    $response = new stdClass(); // Example: Creating a response object

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_SERVER['REQUEST_URI'] === $url) {
        $args = [$request, $response]; // Create an array with $request and $response
        call_user_func_array($callback, $args);
        exit();
    }
}