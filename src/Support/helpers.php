<?php

if (! function_exists("callpay"))
{
    function callpay() {

        return app()->make('laravel-callpay');
    }
}