<?php
    require "header.php";
?>

<main class="container art">
    
    <div>
        <h2>A propos de nous</h2>

        <p>Chacun d'entre nous, qui que nous soyons avons nos échapatoires, ses petits trucs parfois insignifiants, qui nous font planés, voyagés bref, qui nous détendent. Certaines sont assez spéciales comme: les sensations fortes, l'aventure, les sports à haut risques et bien d'autres; tandis que d'autres sont assez répandues, communes: la cuisine, le dessin, l'art etc.Il en existe un qui fait beaucoup plus l'unanimité, quel que soit le genre, les croyances, les préférences... . Nous parlons ainsi de <span>La musique</span>.</p>
        <p><span>La musique</span>. Certains diront que son avènement fût le début d'une nouvelle ère, tandis que d'autres mettrons plus en avant l'évolution des mentalités dont il est l'auteur. Car en réalité, grâce à la musique nous avons cette facilité à aborder des sujets que nous n'aurions jamais le courage d'aborder en publique, vue que ce canal rend moins critique l'impact de ces sujets en question. De plus, elle augmente énormement (sans précédent) la portée de nos messages. Une musique peut à elle seule faire le tour du monde en quelques clics, en quelques minutes et parvient ainsi, en peu de temps à impacter un grand nombre de personnes. </p>
        <p>Mise à part cet aspect, elle demeure une grande source de distraction, de divertissement. C'est dans le but de perpétrer son oeuvre que j'ai décidé de créer ce blog. Il naît d'une passion quasi ennivrante que j'éprouve pour la musique; et c'est en ayant pour but de vous faire connaître mon univers que j'ai créée ceci. Donc <span>Sound</span> est un blog de musique (vous avez sûrement dû le remarquer) qui fera lieu des actualités, des nouvelles sorties, pour vous assurez que vous ne ratiez pas les scoops du moment.</p>
        <p>Alors je vous remercie d'accorder votre attention à mon blog. Et bonne découverte à vous.</p>

    </div>
    <div>
        <?php if(isset($_SESSION["users"]) && $_SESSION["users"] == "users") : ?>
            <h2>Créer votre article</h2>    
            <p>En tant que membre de notre blog, vous avez la possiblité de créer vos articles. </p>
            
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
        <?php endif; ?> 
    </div>

</main>

<?php
    require "footer.php";
?>