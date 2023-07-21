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
    $request = $_POST;
    $response = new stdClass();

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_SERVER['REQUEST_URI'] === $url) {
        $args = [$request, $response];
        call_user_func_array($callback, $args);
        exit();
    }
}