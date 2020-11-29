<?php

if (isset($_REQUEST)) {

    // Sample Request Data
    // [DayOption] => 'sameday'
    // [FoodTime] => Lunch
    // [Location] => ATASCADERO

    $dayOption = $_REQUEST['DayOption'];
    $location = $_REQUEST['Location'];

    if ($dayOption == 'sameday' && $location == 'atascadero') {
        //'#SameDayAtascaderoBreakfast';
        #SameDayAtascaderoBreakfast = https://backporchbakery.square.site/prado
        echo '{"Option": "SameDayAtascaderoBreakfast"}';

    } else if ($dayOption == 'sameday'  && $location == 'atascadero') {
        //'#SameDayAtascaderoLunch';
        #SameDayAtascaderoLunch = https://backporchbakery.square.site/cafe
        echo '{"Option": "SameDayAtascaderoLunch"}';
    } else if ($dayOption == '2day'  && $location == 'atascadero') {
        //'#2DayAtascadero';
        #2DayAtascadero = https://backporchbakery.square.site/atown
        echo '{"Option": "2DayAtascadero"}';
    } else if ($dayOption == '2day'  && $location == 'sanluis') {
        //'#2DaySanLuisObispo';
        #2DaySanLuisObispo = https://backporchbakery.square.site/slo
        echo '{"Option": "2DaySanLuisObispo"}';
    } else if ($dayOption == 'future'  && $location == 'atascadero') {
        //'#FutureAtascaderot';
        #FutureAtascaderot = https://backporchbakery.square.site/atownpreorder
        echo '{"Option": "FutureAtascaderot"}';
    } else if ($dayOption == 'future'  && $location == 'sanluis') {
        //'#FutureSanLuisObispo';
        #FutureSanLuisObispo = https://backporchbakery.square.site/slopreorder
        echo '{"Option": "FutureSanLuisObispo"}';

    } else {

        echo '{"Error": "Error - Check Inputs"}';
    }

    // end future day conditions

    function Redirection($link)
    {

    }

}
