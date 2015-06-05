<?php
session_start();
include_once 'inc/head.php';
?>
<section id="main">		
    <h1>Tempogym Jette</h1>
    <section id="galery">
        <article>
            <h2>Galerie</h2>
            <p>
                Vous êtes connecté 
            </p>
            <p class="adminmedia">
                <a href="deconnect.php">
                    <button class="adminmedia" type="button">Déconnexion</button>
                </a>
            </p>
            <figure>
                <img class="jo" src="img/jo.jpg" />
            </figure>
        </article>
        <?php
        include_once 'inc/footer.php';
        ?>
    </section> 
</body>
</html>
