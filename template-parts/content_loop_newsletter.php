<form method="post">
   <input type="email" name="Email" placeholder="Votre E-Mail" required>
   <?php
        $url = get_bloginfo('url');
        if (isset($_POST['Email']) && $_POST['Email']!="") {
            $wpdb->insert(
               'Emails',  array('Email' => $_POST['Email'])

            );
            // Ajouter l’e-mail dans la table emails.
            // Je vérifie c’est pas inscrire
            if ($_POST['verification']==0){
                $email = $_POST['Email'];

                $message = 'Pour valider votre inscription à la newsletter de Tiers Lieu Solidaire, <a href="'.$url.'/index.php/inscription/?verif=1&Email='.$email.'">cliquez ici</a>.';
                // 0 → pas vérifie.
                // 1 → vérifie.
                // la variable verif=1 pour change le valeur de champ de 0 a 1 -> ‘verification’  et la variable Email qui contiens l’e-mail pour faire l’inscription

                $destinataire = $email;
                $objet = "Inscription à la newsletter de Tiers Lieu Solidaire" ;

                $headers  = 'MIME-Version: 1.0' . "\r\n";

                $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

                $headers .= 'From: tierslieusolidaire@tierslieusolidaire.fr' . "\r\n";

                // On envoie l'e-mail.
                if ( mail($destinataire, $objet, $message, $headers)) {

                    echo "Pour valider votre inscription, veuillez cliquer sur le lien dans l'e-mail que nous venons de vous envoyer.";
                }
            }
        } ?>
   <button type="submit" name="button">OK</button>

</form>
