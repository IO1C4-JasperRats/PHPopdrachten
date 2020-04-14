<?php
include("../../../includes/header.php");
include("../../../includes/menu.php");
include("../../../includes/footer.php");
?>
<main>
    <form action="form_data.php" method="get">
        <label>Bedrijfsnaam</label>
        <input type="text" name="company"> <br>
        <label>Voornaam</label>
        <input type="text" name="firstname"> <br>
        <label>Achternaam</label>
        <input type="text" name="lastname"> <br>
        <label>Telefoon</label>
        <input type="text" name="phone"> <br>
        <label>E-mail</label>
        <input type="email" name="email"> <br>
        <label>bericht</label>
        <input type="text" name="message"> <br>

        <input type="submit" name="send" value="versturen">
    </form>
</main>
