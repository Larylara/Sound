<?php
    require "header.php";
    var_dump($_SESSION);
    exit();
?>

<main>
    <h1>salut</h1>

    <?php if(isset($_SESSION["uname"])) : ?>
       <h2>Bienvenue <?php echo $_SESSION["lname"] . $_SESSION["fname"] ?></h2>
    <?php endif; ?>
</main>

<?php
    require "footer.php";
?>