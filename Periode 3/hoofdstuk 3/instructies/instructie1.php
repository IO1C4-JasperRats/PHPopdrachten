<!--
Opdracht:       (opdracht 2.1)
Auteur:         Jasper Rats
aanmaakdatum:   5-2-2020
Bestandsnaam:   (index.php)
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title><?php print "Index"; ?></title>
    <link href="css/index.css" type="text/css" rel="stylesheet">
</head>
<body>
<?php
    //string
    $name = "Polo";

    //bool
    $teacher = true;

    //integer
    $age = 32;

    //float
    $lenght = 1.84;

    //object
    /*$computer = */

    //array
    /*$list2 = */


    echo '<h1>' . $name . " is " . $age . " jaar oud en " . $lenght . " meter lang." . '</h1>'

?>

</body>
</html>
<?php

header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

?>