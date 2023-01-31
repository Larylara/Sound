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
                <button type="submit" name="submit">Envoyer l'article</button>
            </div>
        </form>
    </div>
    <br>
    <div>
        <h2>Gestion des requêtes</h2> 
        <br>
        <div class="req">
            <?php foreach($dt as $el) : ?>
                <p> <?php echo "Ecrit par: " . $el["req_fname"] . " " . $el["req_lname"] . " le " . $el["created_at"] ?></p>
                <p><?php echo $el["req_messages"] ?></p>
                <br>
            <?php endforeach; ?>
        </div>  
        <!-- <br>
        <h2>Gestion des images</h2>    
        <div>
            <br>
            <form action="" method="post" enctype="multipart/form-data">
            <input type="file" name="file" id="file">
            </form>
        </div> -->
        <br>
        <h2>Gestion des articles</h2>
        <div>
            <table class="table">
                <tr>
                    <th>Titre de l'article</th>
                    <th>Auteur de l'article</th>
                    <th>Interventions</th>
                </tr>
                <?php foreach($data as $ele) : ?>
                    <tr>
                        <td><?php echo $ele["art_artname"] ?></td>
                        <td><?php echo $ele["art_lname"] . " " . $ele["art_fname"] ?></td>
                        <td>
                            <form action="/article-controller/delarticle" method="post">
                                <input type="hidden" name="id" value="<?php echo $ele["art_id"] ?>"><a href="">
                                <button type="submit" name="delete" class="delete"><i style='font-size:1rem; padding-right:.3rem' class='fas'>&#xf2ed;</i>Retirer</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>      
        </div>
    </div>
</main>

<?php 
    require "footer.php";
?>