<?php 
    require "header.php";
?>

<main class="container art">

    <div>
        <h2>Créer votre article</h2>

        <h4> <?php echo $_GET["msg"] ?? "" ?></h4>

        <form action="/article-controller/article" method="post" class="add" enctype="multipart/form-data">
            <div>
                <input type="text" name="lname" id="lname" placeholder="Nom" >
            </div>
            <hr>
            <div>
                <input type="text" name="fname" id="fname" placeholder="Prénoms" >
            </div>
            <hr>
            <div>
                <input type="email" name="email" id="email" placeholder="Addresse email" >
            </div>
            <hr>
            <div>
                <input type="text" name="artname" id="artname" placeholder="Nom de l'article">
            </div>
            <hr>
            <div>
                <textarea name="descript" id="descript" cols="30" rows="10" placeholder ="Description de l'article"></textarea>
            </div>
            <div>
                <input type="file" name="file" id="file">
            </div>
            <div>
                <button type="submit" name="submit">Envoyer le message</button>
            </div>
        </form>

    </div>
    <br>
    <!-- <div>
        <h2>Gestion des articles</h2>    
        <div>
        </div>
    </div> -->
    <br>
    <div>
        <h2>Gestion des requêtes</h2> 
        <br>
        <div class="req">
            <?php foreach($dt as $el) : ?>
                <p> <?php echo "Ecrit par: " . $el["req_fname"] . " " . $el["req_lname"] . " le " . $el["created_at"] ?></p>
                <p><?php echo $el["req_messages"] ?></p>
            <?php endforeach; ?>
        </div>  
    </div>

</main>

<?php 
    require "footer.php";
?>