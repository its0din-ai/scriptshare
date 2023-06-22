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
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_SERVER['REQUEST_URI'] === $url) {
        $callback();
        exit();
    }
}