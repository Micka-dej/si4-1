<?php

require_once '../app/config/system.php';

require_once INCLUDES . '/default/header.php';

require_once DIR_MODELS . '/default/home.php';

?>

<div class="container">
   <div class="inscriptionPage">
    <div>
        <h2 class='orgaticTitle'>Orga<span class='ticGreen'>'tic</span></h2>
        <p class='mainParagraph'>Le réseaux des Heticiens pour les Heticiens</p>
        <p class='mainParagraph'>Connectez vous pour suivre les actualités et les devoirs</p>
    </div>
    <div class="connexion">
        <h2 class='connexionTitle'>Connexion</h2>
        
        <?php
            if (!empty($_SESSION['advert'])) {
                echo '<p class="msg '.$_SESSION['advert']['type'].'">'.$_SESSION['advert']['message'].'</p>';
                $_SESSION['advert'] = [];
            }
        ?>
        
        <form action="do/login.php" method="post">
            <input type="email" name="email" placeholder="Adresse email HETIC.net">
            <input type="password" name="password" placeholder="Mot de passe">
            <button class="button" type="submit">Connexion</button>
        </form>
    </div>
    </div>
</div>

<?php

require_once INCLUDES . '/default/footer.php';

?>
