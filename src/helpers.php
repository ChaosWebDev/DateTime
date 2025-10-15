<?php

if (!function_exists('now')) {
    function now(): Chaos\DT\DT
    {
        return Chaos\DT\DT::now();
    }
}

if (!function_exists('epoch')) {
    function epoch(): int
    {
        return time();
    }
}