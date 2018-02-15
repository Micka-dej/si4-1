<?php

require_once '../app/config/system.php';

require_once INCLUDES . '/default/header.php';

require_once DIR_MODELS . '/default/register.php';

?>

<div class="container">
    <div class="inscriptionPage">
        <div class="index-sideText">
            <h2 class='orgaticTitle'>Orga<span class='ticGreen'>'tic</span></h2>
            <p class='mainParagraph'>Le réseaux des Heticiens pour les Heticiens.</p>
            <p class='mainParagraph'>Connectez vous pour suivre les actualités et les devoirs.</p>
        </div>
        <div class="connexion">
            <h2 class='connexionTitle'>Inscription</h2>

            <?php
            if (!empty($_SESSION['advert'])) {
                echo '<p class="msg '.$_SESSION['advert']['type'].'">'.$_SESSION['advert']['message'].'</p>';
                $_SESSION['advert'] = [];
            }
            ?>

            <form action="do/register.php" method="post" class="form-connexion">
                <input type="text" name="name" placeholder="Nom">
                <input type="text" name="firstname" placeholder="Prénom">
                <input type="email" name="email" placeholder="Adresse email HETIC.net">
                <input type="password" name="password" placeholder="Mot de passe">
                <input type="password" name="repeatpassword" placeholder="Confirmer mot de passe">
                <div>
                    <label for="promo">Choisissez une filière</label>
                    <select name="promo" id="promo" class="form-control" style="width: 100%;border: none;padding: 10px;margin: 10px 0;">
                        <?php
                        foreach ($promos as $promo) {
                            echo '<option value="'.$promo['id'].'" ' . ($promo['id'] == $user['promoID'] ? 'selected' : '') . '>'.$promo['filiere'].' P'.$promo['year'].'</option>';
                        }
                        ?>
                    </select>
                </div>
                <button class="button" type="submit">Connexion</button>
                <p><a href="index.php">J'ai déjà un compte</a></p>
            </form>
        </div>
    </div>
</div>

<?php

require_once INCLUDES . '/default/footer.php';

?>