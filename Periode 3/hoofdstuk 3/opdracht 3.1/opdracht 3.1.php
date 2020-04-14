<!-- invoegen php includes -->
<?php
    include "../../../includes/header.php";
    include "../../../includes/menu.php";

    ?>
<main id="wrapper">
<!-- uitwerking opdracht 3.1 -->
<?php
/* origineel verhaal */
$verhaal =  "De Elfstedentocht (Fries: Alvestêdetocht) is een 200 kilometer
    lange schaatstocht over natuurijs die wordt georganiseerd door
    de Koninklijke Vereniging De Friesche Elf Steden. Leeuwarden,
        de hoofdstad van Friesland, is start- en aankomstplaats. De
        Elfstedentocht is inmiddels 15 maal verreden en werd voor het
        eerst in 1909 gereden en wordt maximaal 1 keer per winter
        gehouden.";


/* variabelen */
$event = "Elfstedentocht";
$event_friesch = "Alvestêdetocht";
$length = 200;
$type = "schaatstocht";
$organizer = "Koninklijke Vereniging De Friesche Elf Steden";
$province = "Friesland";
$start = "Leeuwarden";
$start_year = 1909;
$maximum_amount = 1;

/* verhaal met variabelen gebruikt */
$verhaal2 = "<p>" . "De ". $event ." (Fries: ".$event_friesch.") is een ". $length ." kilometer
            lange ". $type ." over natuurijs die wordt georganiseerd door
            de ". $organizer .". ". $start .",
            de hoofdstad van ". $province .", is start- en aankomstplaats. De
            Elfstedentocht is inmiddels 15 maal verreden en werd voor het
            eerst in ". $start_year ." gereden en wordt maximaal ". $maximum_amount ." keer per winter
            gehouden." . "<p>";

echo $verhaal;
echo "<br>";
echo "<br>";
echo $verhaal2;
?>
</main>
<footer>
    <?php
        include "../../../includes/footer.php"
    ?>
</footer>





