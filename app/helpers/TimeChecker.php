<?php

namespace App\helpers;

use DateTime;
use Carbon\Carbon;


class TimeChecker
{
    public static function InRange($time)
    {
        $timeConverted = Carbon::createFromFormat('H:i', $time)->format('h:i A');
        $appointmentTime = Carbon::parse($timeConverted);
        $startTime = Carbon::createFromFormat('g:i A', '12:00 PM');
        $endTime = Carbon::createFromFormat('g:i A', '8:30 PM');
        //Since There is Waiting Time Not logical to make the End Time 9 so it close before this
        if($appointmentTime->between($startTime,$endTime))
        {
            return true;
        }
        return false;
    }
}
