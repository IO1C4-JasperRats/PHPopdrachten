<?php
date_default_timezone_set("Europe/Amsterdam");
$day = date("l");

switch($day)
{
    case "Monday":
        echo "het weekend is voorbij";
        break;
    case "Tuesday":
        echo "bijna halverwegen de week";
        break;
    case "Wednesday":
        echo "halverwege de week niet ver meer";
        break;
    case "Thursday":
        echo "mooie donderdag";
        break;
    case "Friday":
        echo "IT's FRIDAY FRIDAY EVERYONE GET DOWN ON FRIDAY";
        break;
    case "Saturday":
        echo "eindelijk weekend";
        break;
    case "Sunday":
        echo "het is maar zondag.... HET IS AL ZONDAG";
        break;
    default:
        echo "today is a day that wont go down in history";
        break;

}
