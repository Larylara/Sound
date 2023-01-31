<?php
    require "header.php";
?>
  
<main>
    <div>
        <figure>
            <?php foreach($data as $el) : ?>
                <div class="center">
                    <img  class="art_img" src="../../assets/<?php echo $el["art_picture"]?>" alt="img">
                </div>
                <figcaption class="flex">
                        <div>
                            <?php echo $el["art_artname"] ?> 
                            <!-- <i style='font-size:15px' class='fas heart'>&#xf004;</i>
                            <i style='font-size:15px' class='fas comment'>&#xf4ad;</i>
                            <i style='font-size:15px' class='fas share'>&#xf1e0;</i> -->
                        </div>
                        <?php echo "Publié le: " . $el["created_at"] ?> 
                    </figcaption>
                    <br>
                    <?php echo "Ecrit par " . $el["art_lname"] . " " . $el["art_fname"] ?>
                    <p><?php echo $el["art_description"] ?> </p>
            <?php endforeach; ?> 
            <figcaption class="com "><hr>
            
            <h4><?php echo $_GET["msg"] ?? "" ?></h4>
                <h3>Les commentaires</h3>

                <div class="all_coms">
                    <?php foreach($coms_data as $el) : ?>
                        <div class="later_coms">
                            <?php echo "Publié le: " . $el["created_at"] ?>
                            <p><?php echo $el["com_comment"] ?></p>
                        </div>
                        <?php endforeach; ?>
                </div><br>
                    
                <h3>Laisser un commentaire</h3>
                <form action="/article-controller/comment" method="post">

                    <textarea name="comments" id="comments" cols="30" rows="10" placeholder="Laisser un commentaire"></textarea>
                    <input type="hidden" name="art_id" value="<?php echo $id ?>" id="art_id">
                    <a href="/pages-controller/home" class="parent"><i class='fas child'>&#xf30a;</i></button></a>
                    <button class="send_coms" type="submit" name="submit">Envoyer le commentaire</button>
                </form>
            </figcaption>
        </figure>
    </div>
</main>
  
<?php
    require "footer.php";
?>