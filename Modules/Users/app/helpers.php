<?php

if (!function_exists('count_notification')) {
    function count_notification()
    {
        return count(auth()->user()->notification_received);
    }
}
