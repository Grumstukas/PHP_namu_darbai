<?php
$dates = [];

for ($i = 0; $i < 10000; $i++) {
    $years = rand(2018, 2020);
    $month = rand(1, 12);
    if ($years % 400 == 0 || ($years % 100 != 0 && $years % 4 == 0)) {
        if ($month == 2) {
            $day = rand(1, 29);
        } elseif ($month == 1 || $month == 3 || $month == 5 ||
            $month == 7 || $month == 8 || $month == 10 || $month == 12) {
            $day = rand(1, 31);
        } else {
            $day = rand(1, 30);
        }
    }else{
        if ($month == 2) {
            $day = rand(1, 28);
        } elseif ($month == 1 || $month == 3 || $month == 5 ||
            $month == 7 || $month == 8 || $month == 10 || $month == 12) {
            $day = rand(1, 31);
        } else {
            $day = rand(1, 30);
        }
    }

    $date = $years . '-' . ($month<10 ? '0'.$month : $month)  . '-' .($day<10 ? '0'.$day : $day);
    $dates[] = ['date'=> $date, 'money' =>rand(100,500)];
}

sort($dates);

//echo '<pre>';
//print_r($dates);
//echo '</pre>';

$result = [];
$monthNames=[
    '01' => 'January',
    '02' => 'February',
    '03' => 'March',
    '04' => 'April',
    '05' => 'May',
    '06' => 'June',
    '07' => 'July',
    '08' => 'August',
    '09' => 'September',
    '10' => 'October',
    '11' => 'November',
    '12' => 'December'
];

foreach ( $dates as $item) {
    $yyyy_mm = substr($item['date'],0,7);

    $yyyy = substr($item['date'],0,4);
    $mmmm = substr($item['date'],5,2);

    $mm = $monthNames[$mmmm];
    if (isset($result[$yyyy.' '.$mm])){
        $result[$yyyy.' '.$mm] += $item['money'];
    }else{
        $result[$yyyy.' '.$mm] = $item['money'];
    }

}

echo '<pre>';
print_r($result);
echo '</pre>';