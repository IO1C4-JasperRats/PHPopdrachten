<?php
// taak 2
$task2 = "Lancering in: ";

$counter1 = 19;

while ($counter1 >= 0)
{
    $task2 = $task2 . $counter1 . ",";
    $counter1--;
}

$task3 = "Lancering in: ";

for ($counter2 = 19; $counter2 >= 0; $counter2--)
{
    $task3 = $task3 . $counter2 . ",";
};

$task4 = "";

$counter3 = 1;
while ($counter3 <= 6)
{
    $task4 = $task4."<h". $counter3 . "> dit is de ". $counter3 ."e iteratie"."<br>";
    $counter3++;
};

$task5 = "";

for ($counter4 = 1; $counter4 <= 6; $counter4++)
{
    $task5 = $task5 . "<h". $counter4 . "> dit is de ". $counter4 . "e interatie";
}

$task6 = "";

$counter5 = 17;
while($counter5 >= 0)
{
    $year = 2003;
    $year = $year + $counter5;
    $task6 = $task6 . "<p> in " . $year ." was ik ". $counter5 . " jaar oud </p>";
    $counter5--;
}

$task7 = "";

for ($counter6 = 2003; $counter6 <= 2020; $counter6++)
{
    $age = 2003;

    switch ($counter6)
    {
        case 2003:
            $age = $counter6 - $age;
            $task7 = $task7 . "<p>in " . $counter6 . " was ik " . $age . " jaar oud en was ik een baby</p>";
            break;

        case 2005:
            $age = $counter6 - $age;
            $task7 = $task7 . "<p>in " . $counter6 . " was ik " . $age . " jaar oud en was ik een peuter</p>";
            break;

        case 2007:
            $age = $counter6 - $age;
            $task7 = $task7 . "<p>in " . $counter6 . " was ik " . $age . " jaar oud en was ik een kleuter</p>";
            break;

        case 2011:
            $age = $counter6 - $age;
            $task7 = $task7 . "<p>in " . $counter6 . " was ik " . $age . " jaar oud en was ik een tiener</p>";
            break;

        case 2015:
            $age = $counter6 - $age;
            $task7 = $task7 . "<p>in " . $counter6 . " was ik " . $age . " jaar oud en was ik een puber</p>";
            break;

        case 2020:
            $age = $counter6 - $age;
            $task7 = $task7 . "<p>in " . $counter6 . " word ik " . $age . " jaar oud</p>";
            break;

        case 2021:
            $age = $counter6 - $age;
            $task7 = $task7 . "<p>in " . $counter6 . " word ik " . $age . " jaar oud en word ik een adolescent</p>";
            break;

        case 2023:
            $age = $counter6 - $age;
            $task7 = $task7 . "<p>in " . $counter6 . " word ik " . $age . " jaar oud en word ik een volwassen</p>";
            break;

    }

}