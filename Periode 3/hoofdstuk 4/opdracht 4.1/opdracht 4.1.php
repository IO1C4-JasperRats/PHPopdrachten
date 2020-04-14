<?php
date_default_timezone_set("Europe/Amsterdam");

$uur = date("H");

if ($uur < 5)
{
    echo "goedennacht";
}
elseif ($uur < 12)
{
    echo "goedenochtend";
}
elseif ($uur < 17)
{
    echo "goedenmiddag";
}
elseif ($uur < 24)
{
    echo "goedenavond";
}

