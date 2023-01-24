<?php
    require "header.php";
?>

<main class="container center">
    <div class="profil">
        <h2>Votre Profil</h2>
            <?php if(isset($_SESSION["uname"])) : ?>
                <img class="profil_pic" src="../assets/<?php echo $_SESSION["user_file"]?>" alt="img">
                <br>
                <p>Nom : <strong><?php echo $_SESSION["lname"]; ?></strong></p>
                <p>Prénoms : <strong><?php echo $_SESSION["fname"]; ?></strong></p>
                <p>Nom d'utilisateur : <strong><?php echo $_SESSION["uname"]; ?></strong></p>
                <p class="mb">Addresse email: <strong><?php echo $_SESSION["email"]; ?></strong></p>
            <?php else :?>
                <p><strong>Vous n'avez pas de compte. Pour en avoir un vous devez vous inscrire</strong></p>
                <p>Nom :  </p>
                <p>Prénoms : </p>
                <p>Nom d'utilisateur : </p>
                <p class="mb">Addresse email: </p>
            <?php endif; ?>
    </div>
</main>

<?php
    require "footer.php";
?>