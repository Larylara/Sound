<?php
    require "header.php";
?>

<main class="container">
    
    <h4> <?php echo $_GET["msg"] ?? "" ?></h4>
    
    <form action="/register-controller/login" method="post" class="login">
        <div>
            <label for="pwd">Nom d'utilisateur</label>
            <input type="pwd" name="uname" id="pwd">
        </div>
        <hr>
        <div>
            <label for="pwd">Mot de passe</label>
            <input type="password" name="pwd" id="pwd">
        </div>
        <div>
            <button type="submit" name="submit">Se connecter</button>
            <a href="register">Créer un compte</a>
        </div>
    </form>
  
</main>

<?php
    require "footer.php";
?>