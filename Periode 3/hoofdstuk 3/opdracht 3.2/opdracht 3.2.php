<?php
    include "../../../includes/header.php";
    include "../../../includes/menu.php";
?>
<?php
$trafficLightColor = "groen";
$ambulanceComing  = false;
$driveOn = true;


if ($trafficLightColor == "groen" && $ambulanceComing  == false)
{
    $driveOn = true;
}
else
{
    $driveOn = false;
}

if($driveOn == true)
{
    echo "<p> u mag door rijden</p>";
}
else
{
    echo "<p>u moet stoppen</p>";
}

?>