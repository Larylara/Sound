<?php
    require "header.php";
?>
  
<main>
    <div>
        <?php foreach($data as $el) : ?>
            <figure>
                <img class="art_pic" src="../../assets/<?php echo $el["art_picture"]?>" alt="img">

                <figcaption class="flex">
                    <div>
                        <?php echo $el["art_artname"] ?> 
                        <i style='font-size:15px' class='fas heart'>&#xf004;</i>
                        <i style='font-size:15px' class='fas comment'>&#xf4ad;</i>
                        <i style='font-size:15px' class='fas share'>&#xf1e0;</i>
                    </div>

                        <?php echo "Publié le: " . $el["created_at"] ?> 
                </figcaption>
                <br>
                <?php echo "Ecrit par " . $el["art_lname"] . " " . $el["art_fname"] ?>
                <p><?php echo $el["art_description"] ?> </p>
                <figcaption class="com ">
                    <hr>
                    <h3>Les commentaires</h3>
                    <p><?php  ?></p>
                    <div class="flex">
                        <?php if(isset($_SESSION["pwd"])) : ?>
                            <?php foreach($pp as $el) : ?>
                                <img class="com_pic" src="../../assets/<?php echo $el["user_pic"]?>" alt="img">
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                    
                    <h3>Laisser un commentaire</h3>
                    <form action="/article-controller/comment" method="post">
                        <textarea name="comments" id="comments" cols="30" rows="10" placeholder="Laisser un commentaire"></textarea>
                        <input type="hidden" name="art_id" value="<?php echo $id ?>" id="art_id">
                        <button type="submit" name="submit">Envoyer le commentaire</button> 
                    </form>
                </figcaption>
            </figure>
        <?php endforeach; ?>     
    </div>
</main>
  
<?php
    require "footer.php";
?>