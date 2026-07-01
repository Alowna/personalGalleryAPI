<?php

function env($key, $default = null)
{
   
    static $env = null;

    // load .env file only once
    if ($env === null) {
        $path = __DIR__ . '/.env';

        if (!file_exists($path)) {
            return $default;
        }

        //read .env file and parse it into an associative array
        $lines = file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

        $env = [];

        // parse each line and store key-value pairs in the $env array removing comments and empty lines
        foreach ($lines as $line) {
            if (str_starts_with(trim($line), '#')) continue;

            [$k, $v] = explode('=', $line, 2);

            $env[trim($k)] = trim($v);
        }
    }

    //return env or default value if not found
    return $env[$key] ?? $default;
}