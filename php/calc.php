<?php

$datepicker = $_POST['vklad-date'];

$current_time = time(); // Текущее время
$client_date = strtotime($datepicker);
$vklad_date = $current_time - $client_date; // Разница между текущим временем, и тем - что выбрал клиент (в секундах).
$vklad_summa = $_POST['summ-vklad']; // sumn-1
$vklad_popolnenie = $_POST['popolnenie-vklad'];
$vklad_popolnenie_summ = $_POST['summ-popolnenie-vklad']; // summadd
$percent = 10;
$daysy = 365;
$vklad_days = (int) ($vklad_date / (60 * 60 * 24)); // Кол-во месяцев между датами


$type = 1;
$pos = $type > 0 ? '+' . $type : '-' . abs($type);
$begin = strtotime($pos . ' month');
$currentDate_Month = date('m');
$currentDate_plusOneMonth = date('m', $begin);
$currentDate_Year = date('Y', $begin);

$days_in_month_current = cal_days_in_month(CAL_GREGORIAN, $currentDate_Month, $currentDate_Year);
$result = 0;
for ($i=0; $i < $vklad_days; $i++) {
    $type = $i;
    $pos = $type > 0 ? '+' . $type : '-' . abs($type);
    $begin = strtotime($pos . ' month');
    $currentDate_plusOneMonth = date('m', $begin);
    $days_in_month_PlusOne = cal_days_in_month(CAL_GREGORIAN, $currentDate_plusOneMonth, $currentDate_Year);
    if ($vklad_popolnenie == "net") 
    {
        if ($result == 0) {
            $result = (int) ($vklad_summa + ($vklad_summa)*$days_in_month_current*($percent / $daysy));
            $type++;
            continue;
        }
        $result = (int) ($result + ($result)*$days_in_month_PlusOne*($percent / $daysy));
    } else 
    {
        if ($result == 0) {
        $result = (int) ($vklad_summa + ($vklad_summa + $vklad_popolnenie_summ)*$days_in_month_current*($percent / $daysy));
        continue;
        }
        $result = (int) ($result + ($result + $vklad_popolnenie_summ)*$days_in_month_PlusOne*($percent / $daysy));
    }
    
}
echo($result);
/*
    Формула с капитализаций процентов по вкладу:
 summn = summn-1 + (summn-1 + summadd)daysn(percent / daysy)
 1. где summn – сумма на счете на месяц n (руб),
 2. summn-1 – сумма на счете на конец прошлого месяца 
 3. summadd – сумма ежемесячного пополнения 
 4.  daysn – количество дней в данном месяце, на которые приходился вклад
 5. percent – процентная ставка банка - 10%
 6. daysy – количество дней в году.
 7. Если в поле «Пополнение вклада» стоит «нет», данные «summadd» не используются.
*/
