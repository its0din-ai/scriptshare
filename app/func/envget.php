<?php

$env = parse_ini_file('.env');
function envget($key)
{
    global $env;
    return $env[$key];
}

?>