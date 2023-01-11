<?php
    require "header.php";
?>

<main class="container">
    
        <h4> <?php echo $_GET["msg"] ?? "" ?></h4>

    
    <form action="/register-controller/register" method="post">
        <div>
            <label for="lname">Nom</label>
            <input type="lname" name="lname" id="lname">
        </div>
        <hr>
        <div>
            <label for="fname">Prénoms</label>
            <input type="fname" name="fname" id="fname">
        </div>
        <hr>
        <div>
            <label for="uname">Nom d'utilisateur</label>
            <input type="text" name="uname" id="uname" >
        </div>
        <hr>
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" >
        </div>
        <hr>
        <div>
            <label for="pwd">Mot de passe</label>
            <input type="password" name="pwd" id="pwd" >
        </div>
        <hr>
        <div>
            <label for="c_pwd">Confirmer mot de passe</label>
            <input type="password" name="c_pwd" id="c_pwd" >
        </div>
        <div>
            <button type="submit" name="submit">S'inscrire</button>
            <a href="login">J'ai déjà un compte</a>
        </div>
    </form>
</main>

<?php
    require "footer.php";
?>