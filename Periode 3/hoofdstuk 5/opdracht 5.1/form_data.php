<?php
include "../../../includes/header.php";
include "../../../includes/menu.php";

?>
<main id="wrapper">
    <h2>
        uitwerking:
    </h2>
    <table>
        <p>Ingevoerde gegevens</p>
        <tr>
            <td>Bedrijfsnaam:</td>
            <td><?php echo $_GET["company"];?></td>
        </tr>
        <tr>
            <td>Voornaam</td>
            <td><?php echo $_GET["firstname"];?></td>
        </tr>
        <tr>
            <td>Achternaam</td>
            <td><?php echo $_GET["lastname"];?></td>
        </tr>
        <tr>
            <td>Telefoon:</td>
            <td><?php echo $_GET["phone"];?></td>
        </tr>
        <tr>
            <td>E-mail</td>
            <td><?php echo $_GET["email"];?></td>
        </tr>
        <tr>
            <td>Bericht</td>
            <td><?php echo $_GET["message"];?></td>
        </tr>
    </table>
</main>
<?php
include "../../../includes/footer.php";
?>
</body>
</html>

