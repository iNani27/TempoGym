<?php
session_start();
/* Si la session n'existe pas (encore) ou ne correspond plus au cookie */
if (!isset($_SESSION['id_session']) || $_SESSION['id_session'] != session_id()) {
    header("Location: deconnect.php");
}
include_once 'meta.php';
include_once 'fotorama.php';
include_once 'nav.php';
?>
<section id="main">		
    <h1>Tempogym Jette</h1>
    <section id="galery">
        <article>
            <h2>Galerie</h2>
            <p>
                Vous êtes connecté en tant que membre, bienvenue "<?= $_SESSION['lelogin']; ?>"
            </p>
            <p class="adminmedia">
                <a href="deconnect.php">
                    <button class="adminmedia" type="button">Déconnexion</button>
                </a>
            </p>
            <center>
                <div class="fotorama" data-autoplay="true">
                    <img src="img/slider1.jpg">
                    <img src="img/slider2.jpg">
                    <img src="img/slider3.jpg">
                    <img src="img/slider4.jpg">
                    <img src="img/slider5.jpg">
                </div>
            </center>
            <!--<figure>
                <img class="jo" src="img/jo.jpg" />
            </figure>-->
        </article>
        <?php
        include_once 'inc/footer.php';
        ?>
    </section> 
</body>
</html>
