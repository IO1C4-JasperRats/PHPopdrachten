<?php

date_default_timezone_set("Europe/Amsterdam");


$date = strtotime("+10 days");

echo date("d-m-Y H:i", $date);