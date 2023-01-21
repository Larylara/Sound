<?php
    require "header.php";
?>

<main class="container center">
    
    <div class="">
        <h2>Contact</h2>
        
        <p>Nous mettons tout à votre disposition pour rendre votre navigation sur notre page la plus fluide possible. Dans cette optique, nous souhaitons avoir vos avis, vos suggestions et même toutes préoccupations pouvant satisfaire vos attentes. N'hésitez pas à nous contacter</p>
        <p>Vous pouvez également nous contacter par téléphone <a href="">458267910255</a> ou par email <a href="">sound@gmail.com</a>, ou pouvez nous envoyer un message ici: </p>
        
        <div class="contact">

            <form action="/contact-controller/contact" method="post" class="c_form">
                
            <h4> <?php echo $_GET["msg"] ?? "" ?></h4>

                <div>
                    <input type="text" name="lname" id="lname" placeholder="Nom" >
                </div>
                <hr>
                <div>
                    <input type="text" name="fname" id="fname" placeholder="Prénoms" >
                </div>
                <hr>
                <div>
                    <input type="email" name="email" id="email" placeholder="Addresse email"  >
                </div>
                <hr>
                <div>
                    <textarea name="messages" id="messages" cols="30" rows="10" placeholder ="Messages \ Exigences particulières"></textarea>
                </div>
                <div>
                    <button type="submit" name="submit">Envoyer le message</button>
                </div>
            </form>
        </div>
    </div>
</main>

<?php
    require "footer.php";
?>
