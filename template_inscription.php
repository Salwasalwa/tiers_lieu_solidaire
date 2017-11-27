<?php
/*template name: inscription*/
get_header();
?>
<div class="container">
    <main>
        <div class="row ">
            <div class="col-md-12 text-justify">
                <div class="espace_content">

                    <?php
                        if($_GET['verif']==1 && isset($_GET['Email'])){

                            $link = mysqli_connect("localhost", "tiers_lieu_solidaire",
                            "tiers_lieu_solidaire", "tiers_lieu_solidaire_wordpress");

                            $quer ="UPDATE Emails SET verification=1 WHERE Email='".$_GET['Email']."'";
                            // J’ai actualisé la BD emails ‘le champ verification=1’ (valeur pour défaut c’est 0)
                            mysqli_query($link, $quer);

                           echo "Vous avez bien été inscrit à la newsletter de Tiers Lieu Solidaire !";
                        }
                    ?>
                </div>
            </div>
        </div>
    </main>
</div>

<?php
    get_footer();
?>
