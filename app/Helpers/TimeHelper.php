<?php

namespace App\Helpers;

class TimeHelper
{
    public static function convertToNumeric($time)
    {
        $pattern = '/(\d+) hours (\d+) minutes/';
        preg_match($pattern, $time, $matches);

        if (count($matches) === 3) {
            $hours = (int)$matches[1];
            $minutes = (int)$matches[2];
            return $hours + ($minutes / 60); // Convert to hours as a decimal
        }

        return 0; // Return 0 if the pattern doesn't match
    }
}

