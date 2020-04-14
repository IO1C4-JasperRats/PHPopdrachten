<?php
// nederlands                   Pjotr Bos
// engels                       Sandra Mitrovic
// burgerschap                  Paula de Ruiter
// rekenen                      Martijn van Meer
// studieloopbaan begeleiding   Paula de Ruiter
// digitale vaardigheden        Larissa Pilage
// computertekenen              Pieter van den berg
// php                          Remco Evers
// javascript                   Martijn van de Wetering
// sql                          Martijn van de Wetering
// asp                          Martijn van Meer
// html/css                     Ralph gijsbrechts
// hardware ao                  Abu Saebu

$courseName = "PHP";
$teacherName = "";

switch ($courseName)
{
    case "Javascript":
        $teacherName = "Martijn van de Wetering";
        break;
    case "Database SQL":
        $teacherName = "Martijn van de Wetering";
        break;
    case "ASP":
        $teacherName = "Martijn van Meer";
        break;
    case "PHP":
        $teacherName = "Remco Evers";
        break;
    case "Modelleren":
        $teacherName = "Ralph Gijsbrechts";
        break;
    case "Loopbaan & Burgerschap":
        $teacherName = "Paula de Ruiter";
        break;
    case "Rekenen":
        $teacherName = "Martijn van Meer";
        break;
    case "Engels":
        $teacherName = "Sandra Mitrovic-Vejzovic";
        break;
    case "Computertekenen":
        $teacherName = "Pieter van der Berg";
        break;
    case "Nederlands":
        $teacherName = "Jan-Chris van den Ende";
        break;
    default:
        echo "apart je hebt geen vak of docent";
        break;
}