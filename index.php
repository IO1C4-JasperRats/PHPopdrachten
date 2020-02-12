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
<div id="header">
    <h1>Inlever Opdrachten PHP</h1>
</div>
<aside id="menu">
    <h1>Mijn opdrachten:</h1>
    <ul>
        <li>
            Hoofdstuk 2
            <ul>
                <li>
                    <a href="Periode 3/hoofdstuk 2/opdracht 2.1/helloworld.php">Opdracht 2.1</a>
                </li>
                <li>
                    <a href="Periode 3/hoofdstuk 2/opdracht 2.2/opdracht 2.2.php">Opdracht 2.2</a>
                </li>
            </ul>
        </li>
        <li>
            Hoofdstuk 3
            <ul>
                <li>
                    <a href="">Opdracht 3.1</a>
                </li>
            </ul>
        </li>
        <li>
            Hoofdstuk 4
            <ul>
                <li>
                    <a href="">Opdracht 4.1</a>
                </li>
            </ul>
        </li>
        <li>
            Hoofdstuk 5
            <ul>
                <li>
                    <a href="">Opdracht 5.1</a>
                </li>
            </ul>
        </li>

    </ul>
</aside>


</body>
</html>
<?php

header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
?>