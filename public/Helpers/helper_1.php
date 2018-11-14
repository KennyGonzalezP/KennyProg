<?php
    date_default_timezone_set('America/Mexico_City');
    function evento()
    {
        time();
        $today = strtotime('today 12:00');
        $tomorrow = strtotime('tomorrow 12:00');
        $time_now = time();
        $timeLeft = ($time_now > $today ? $tomorrow : $today) - $time_now;
        return strftime("%H Horas, %M minutos, %S segundos", $timeLeft);
    }   
?>