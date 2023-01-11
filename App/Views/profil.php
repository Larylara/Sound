<?php
    require "header.php";
?>

<h2>Votre Profil</h2>
<p>Nom : <strong><?php echo $_SESSION["lname"]; ?></strong></p>
<p>Prénoms : <strong><?php echo $_SESSION["fname"]; ?></strong></p>
<p>Nom d'utilisateur : <strong><?php echo $_SESSION["uname"]; ?></strong></p>
<p>Addresse email: <strong><?php echo $_SESSION["useremail"]; ?></strong></p>

<?php
    require "footer.php";
?>