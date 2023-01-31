<?php
    require "header.php"; 
?>

<main class="container home">

    <?php if(isset($_SESSION["uname"])) : ?>
       <h2>Bienvenue <?php echo $_SESSION["lname"] . " ". $_SESSION["fname"] ?></h2>
    <?php endif; ?>
    
    <div class="flex content">
        <div>
            <h2>Sound, un blog né d'une passion ennivrante pour la musique</h2>
            <p>Sur cette page vous pouvez retrouver les anciens articles et ceux publiés récemment. Amusez-vous bien!!</p>
        </div>
        <img src="../Public/resources/images/.jpg" alt="">
    </div>
    
    <div class="entête flex">
        
        <?php foreach($data as $el) : ?>
            <figure>
                <?php  ?>
                    <figcaption class="time">
                        
                    </figcaption>
                <?php  ?>
                <img class="art_pic" src="../assets/<?php echo $el["art_picture"] ?>" alt="img">
                <figcaption class="flex">
                    <div>
                        <p class="style"><?php echo $el["art_artname"]?></p>
                    </div>
                    <?php echo "Publié le: " . $el["created_at"] ?> 
                </figcaption>
                <br>
                <?php echo "Ecrit par " . $el["art_lname"] . " " . $el["art_fname"]?>
                <p class="elp"><?php echo $el["art_description"] ?></p>
                <button><a href="/pages-controller/article?id=<?php echo $el["art_id"] ?>">Lire l'article</a></button>
            </figure>
        <?php endforeach; ?>
    </div>
    <div class="categories">
        <!-- <ul>
            <li><a href="" class="all">All</a></li>
            <li><a href="" class="drill">Drill</a></li>
            <li><a href="" class="autres">Autres</a></li>
            <li><a href="" class="gospel">Gospel</a></li>
            <li><a href="" class="rap_us">Rap_Us</a></li>
            <li><a href="" class="afro_rap">Afro_Rap</a></li>
            <li><a href="" class="afrobeats">Afrobeats</a></li>
            <li><a href="" class="afrolove">Afro_Love</a></li>
            <li><a href="" class="french_rap">French_Rap</a></li>
        </ul> -->
        <div class="buttons">
            <button type="submit" name="all">All</button>
            <button type="submit" name="drill">Drill</button>
            <button type="submit" name="autres">Autres</button>
            <button type="submit" name="gospel">Gospel</button>
            <button type="submit" name="rap_us">Rap_Us</button>
            <button type="submit" name="afro_rap">Afro_Rap</button>
            <button type="submit" name="afrobeats">Afrobeats</button>
            <button type="submit" name="afrolove">Afro_Love</button>
            <button type="submit" name="french_rap">French_Rap</button>
        </div>
        <div>
            <div class="big_drill">
                <video class="all drill" src="https://www.youtube.com/watch?v=pEBFJI-g9AA"></video>
                <video class="all drill" src="https://www.youtube.com/watch?v=TGMJRnUxwwo"></video>
                <video class="all drill" src="https://www.youtube.com/watch?v=zNEU9VExoWE"></video>
                <video class="all drill" src="https://www.youtube.com/watch?v=2uM9ZIS-v0w"></video>
                <!-- <video class="all drill" src="https://www.youtube.com/watch?v=8QymRjbCJTY"></video>
                <video class="all drill" src="https://www.youtube.com/watch?v=F_mqShCzlAY"></video>
                <video class="all drill" src="https://www.youtube.com/watch?v=vRgOX5SdQp8"></video>
                <video class="all drill" src="https://www.youtube.com/watch?v=dVIX7DMTbcU"></video>
                <video class="all drill" src="https://www.youtube.com/watch?v=tOEGiHJPKmQ"></video>
                <video class="all drill" src="https://www.youtube.com/watch?v=pzpp4EehoPA"></video>
                <video class="all drill" src="https://www.youtube.com/watch?v=32GhHtIuXB0"></video>
                <video class="all drill" src="https://www.youtube.com/watch?v=n7oJtDQXVag"></video>
                <video class="all drill" src="https://www.youtube.com/watch?v=wWblPXLnv6k"></video> -->
            </div>  
            <!-- <video class="all drill" src="https://www.youtube.com/watch?v=yWLQdXBIK_0"></video>  
            <video class="all drill" src="https://www.youtube.com/watch?v=dXhUbIvk8qo"></video>  
            <video class="all drill" src="https://www.youtube.com/watch?v=AHAcwzQJS4M"></video>   -->
            
            <div class="big_gospel">
                <video class="all gospel" src="https://www.youtube.com/watch?v=m0N965nXmXY"></video>
                <video class="all gospel" src="https://www.youtube.com/watch?v=GlfKkDHKMQg"></video>
                <video class="all gospel" src="https://www.youtube.com/watch?v=yWJGursp_cE"></video>
                <video class="all gospel" src="https://www.youtube.com/watch?v=ghZZxvH1h3o"></video>
                <!-- <video class="all gospel" src=""></video> -->
            </div>  

            <div class="big_rap_us">
                <video class="all rap_us" src="https://www.youtube.com/watch?v=pok8H_KF1FA"></video>
                <video class="all rap_us" src="https://www.youtube.com/watch?v=UNZqm3dxd2w"></video>
                <video class="all rap_us" src="https://www.youtube.com/watch?v=xTlNMmZKwpA"></video>
                <video class="all rap_us" src="https://www.youtube.com/watch?v=yxW5yuzVi8w"></video>
                <!-- <video class="all rap_us" src="https://www.youtube.com/watch?v=QYh6mYIJG2Y"></video>
                <video class="all rap_us" src="https://www.youtube.com/watch?v=YS0h2-hy9rw"></video>
                <video class="all rap_us" src="https://www.youtube.com/watch?v=rCiBgLOcuKU"></video>
                <video class="all rap_us" src="https://www.youtube.com/watch?v=leJNDpm_G10"></video>
                <video class="all rap_us" src="https://www.youtube.com/watch?v=AnZcWgXZOKM"></video>
                <video class="all rap_us" src="https://www.youtube.com/watch?v=uxpDa-c-4Mc"></video> -->
            </div>  
            <!-- <video class="all rap_us" src=""></video>  
            <video class="all rap_us" src=""></video>  
            <video class="all rap_us" src=""></video>  
            <video class="all rap_us" src=""></video>  
            <video class="all rap_us" src=""></video>  
            <video class="all rap_us" src=""></video>  
            <video class="all rap_us" src=""></video>  
            <video class="all rap_us" src=""></video>  
            <video class="all rap_us" src=""></video>   -->

            <div class="big_afro_rap">
                <video class="all afro_rap" src="https://www.youtube.com/watch?v=e0K3OjNHTtA"></video>
                <video class="all afro_rap" src="https://www.youtube.com/watch?v=kVAsmuEk5lw<"></video>
                <video class="all afro_rap" src="https://www.youtube.com/watch?v=Bq7ixyvjUqE"></video>
                <video class="all afro_rap" src="https://www.youtube.com/watch?v=7WU__JQuB8g"></video>
                <!-- <video class="all afro_rap" src="https://www.youtube.com/watch?v=wNYl4ZCZDAI"></video>
                <video class="all afro_rap" src="https://www.youtube.com/watch?v=pGazU3J6ySw"></video>
                <video class="all afro_rap" src="https://www.youtube.com/watch?v=5A-CjKOQWvg"></video>
                <video class="all afro_rap" src="https://www.youtube.com/watch?v=KXmn-LWazy8"></video>
                <video class="all afro_rap" src="https://www.youtube.com/watch?v=DfzVN2aAfg0"></video>
                <video class="all afro_rap" src="https://www.youtube.com/watch?v=OqMEHwY8FUM"></video> -->
            </div>
                    
            <div class="big_afrobeats">
                <video class="all afrobeats" src="https://www.youtube.com/watch?v=eKv5CBr-kKo"></video>  
                <video class="all afrobeats" src="https://www.youtube.com/watch?v=fXl5dPuiJa0"></video>  
                <video class="all afrobeats" src="https://www.youtube.com/watch?v=Q7QiLceJSLQ"></video>  
                <video class="all afrobeats" src="https://www.youtube.com/watch?v=cLha1-NuPzA"></video>  
                <!-- <video class="all afrobeats" src="https://www.youtube.com/watch?v=nrTkERuwdCc"></video>  
                <video class="all afrobeats" src="https://www.youtube.com/watch?v=crtQSTYWtqE"></video>  
                <video class="all afrobeats" src="https://www.youtube.com/watch?v=2mkhevOXVNk"></video>  
                <video class="all afrobeats" src=""></video>  
                <video class="all afrobeats" src="https://m.youtube.com/watch?v=GgeTnpTkzI0"></video>  
                <video class="all afrobeats" src="https://www.youtube.com/watch?v=CQLsdm1ZYAw"></video>   -->
            </div>

            <div class="big_afrolove">
                <video class="all afro_love" src="https://www.youtube.com/watch?v=Ecl8Aod0Tl0"></video>
                <video class="all afro_love" src="https://www.youtube.com/watch?v=tVKaN_H35xs"></video>
                <video class="all afro_love" src="https://www.youtube.com/watch?v=o_oenl2Be-w<"></video>
                <video class="all afro_love" src="https://www.youtube.com/watch?v=3XuDvSUwvpo"></video>
                <!-- <video class="all afro_love" src="https://www.youtube.com/watch?v=-kG7RlDD7tg"></video>
                <video class="all afro_love" src="https://www.youtube.com/watch?v=J9cSDqHoJyI"></video>
                <video class="all afro_love" src="https://www.youtube.com/watch?v=KbitkvhE99w"></video>
                <video class="all afro_love" src="https://www.youtube.com/watch?v=gwcuiXTOnbY"></video>
                <video class="all afro_love" src="https://www.youtube.com/watch?v=mUTsvbridvM"></video>
                <video class="all afro_love" src="https://www.facebook.com/MeiitodSelleDream/videos/arret-de-bus-/483962412314356/"></video> -->
            </div> 

            <div class="big_french_rap">
                <video class="all french_rap" src="https://www.youtube.com/watch?v=zGWXNOEPdgI"></video>
                <video class="all french_rap" src="https://www.youtube.com/watch?v=zslF_HRjoGw"></video>
                <video class="all french_rap" src="https://www.youtube.com/watch?v=7MjmI7woo80"></video>
                <video class="all french_rap" src="https://www.youtube.com/watch?v=APbOJtRt__k"></video>
                <!-- <video class="all french_rap" src="https://www.youtube.com/watch?v=ZJBGqQ1RzZE"></video>
                <video class="all french_rap" src="https://www.youtube.com/watch?v=chRmvPG8qbU"></video>
                <video class="all french_rap" src="https://www.youtube.com/watch?v=1Jt9nLUA3KU"></video>
                <video class="all french_rap" src="https://www.youtube.com/watch?v=FWV-AH0NE8Y"></video>
                <video class="all french_rap" src="https://www.youtube.com/watch?v=UPnMFUsKm8w"></video>
                <video class="all french_rap" src="https://www.youtube.com/watch?v=6qDYXuxjRA0"></video> -->
            </div>
            <!-- <video class="all french_rap" src=""></video>
            <video class="all french_rap" src=""></video> -->

            <div class="big_autres">
                <video class="all autres" src="https://www.youtube.com/watch?v=jlrG7SOIHfU"></video>
                <video class="all autres" src="https://www.youtube.com/watch?v=3J_fhBCLiOA"></video>
                <video class="all autres" src="https://www.youtube.com/watch?v=pxjsZK_fkO4"></video>
                <video class="all autres" src="https://www.youtube.com/watch?v=leJNDpm_G10"></video>
                <!-- <video class="all autres" src="https://www.youtube.com/watch?v=QYh6mYIJG2Y"></video>
                <video class="all autres" src="https://www.youtube.com/watch?v=tcYodQoapMg"></video>
                <video class="all autres" src="https://www.youtube.com/watch?v=OqMEHwY8FUM"></video>
                <video class="all autres" src="https://www.youtube.com/watch?v=TQtwXWk3gJQ"></video>
                <video class="all autres" src="https://www.youtube.com/watch?v=PDP6IZuvRlI"></video>
                <video class="all autres" src="https://www.youtube.com/watch?v=QuSwJO2e0TM"></video> -->
            </div>


            <!-- <video class="all autres" src=""></video>
            <video class="all autres" src=""></video>
            <video class="all autres" src=""></video>
            <video class="all autres" src=""></video>
            <video class="all autres" src=""></video>
            <video class="all autres" src=""></video> -->
        </div>
    </div>
</main>

<?php
    require "footer.php";
?>
