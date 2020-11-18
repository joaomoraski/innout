<?php

function getDayTemplateByOdd($regularRate, $extraRate, $lazyRate){
    $regularDayTempate = [
        'time1' => '08:00:00',
        'time2' => '12:00:00',
        'time3' => '13:00:00',
        'time4' => '17:00:00',
        'worked_time' => DAILY_TIME
    ];

    $extraHourDayTempate = [
        'time1' => '08:00:00',
        'time2' => '12:00:00',
        'time3' => '13:00:00',
        'time4' => '18:00:00',
        'worked_time' => DAILY_TIME + 3600
    ];

    $lazyDayTempate = [
        'time1' => '08:30:00',
        'time2' => '12:00:00',
        'time3' => '13:00:00',
        'time4' => '17:00:00',
        'worked_time' => DAILY_TIME - 1800
    ];

    $value = rand(0,100);
    if ($value <= $regularRate){
        return $regularDayTempate;
    } elseif ($value <= $regularRate + $extraRate){
        return $extraHourDayTempate;
    } else{
        return $lazyDayTempate;
    }
}

print_r(getDayTemplateByOdd(33,33,34));