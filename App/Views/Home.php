<?php
    require "header.php"; 
?>

<main class="container home">

    <?php if(isset($_SESSION["uname"])) : ?>
       <h2>Bienvenue <?php echo $_SESSION["lname"] . " ". $_SESSION["fname"] ?></h2>
    <?php endif; ?>

    <div class="flex">
        <div>
            <h2>Sound, un blog né d'une passion ennivrante pour la musique</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos atque ullam laboriosam odit corrupti nisi autem. Ipsum est quia deleniti ducimus asperiores quidem? Modi est beatae nulla, quaerat dolores minima!</p>
        </div>
        <img src="../Public/resources/images/orgi.jpg" alt="">
    </div>

    <div class="entête flex">
        
        <?php foreach($data as $el) : ?>

            <figure>

                <img class="art_pic" src="../assets/<?php echo $el["art_picture"] ?>" alt="img">

                <figcaption class="flex">
                    <div>
                    <?php echo $el["art_artname"] ?> 
                    <i style='font-size:15px' class='fas heart'>&#xf004;</i>
                    <i style='font-size:15px' class='fas comment'>&#xf4ad;</i>
                    <i style='font-size:15px' class='fas share'>&#xf1e0;</i>
                    </div>

                    <?php echo "Publié le: " . $el["created_at"] ?> 
                </figcaption>
                <figcaption class="flex">
                </figcaption>

                <br>
                <?php echo "Ecrit par " . $el["art_lname"] . " " . $el["art_fname"]  ?>
                <p class="elp"><?php echo $el["art_description"] ?> </p>

                <button><a href="/pages-controller/<?php echo $el["art_id"] ?>/article">Lire l'article</a></button>

            </figure>

        <?php endforeach; ?>

    </div>

    <div class="categories">
        <ul class="">
            <li><a href="">All</a></li>
            <li><a href="">Drill</a></li>
            <li><a href="">Rap_Us</a></li>
            <li><a href="">Afro_Rap</a></li>
            <li><a href="">Afrobeats</a></li>
            <li><a href="">Afro_Love</a></li>
            <li><a href="">French_Rap</a></li>
        </ul>
    </div>


</main>

<?php
    require "footer.php";
?>

<!-- Lorem ipsum dolor, sit amet consectetur adipisicing elit. Et assumenda, nulla, obcaecati dolore voluptatibus in nisi a amet minus voluptate minima corporis eveniet dolorum nihil qui, fugiat adipisci itaque dolores aperiam nostrum cumque sit! Asperiores odit deleniti itaque aliquam ab! -->