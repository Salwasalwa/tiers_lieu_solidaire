<?php
    /*template name:  Agenda*/
?>
<?php
get_header();
?>
<div class="container">
    <main>
        <div class="row">
            <div class="col-md-9 formation_atelier">
                <?php if (get_the_ID()== 15) : ?>
                    <h2>Agenda</h2>
                    <iframe src="https://calendar.google.com/calendar/embed?showPrint=0&amp;showTz=0&amp;height=600&amp;wkst=2&amp;hl=fr&amp;bgcolor=%23ff9900&amp;src=830s5s9eqmck6qd5lrjth55fd8%40group.calendar.google.com&amp;color=%235F6B02&amp;ctz=Africa%2FCeuta" style="border-width:0" width="90%" height="600" frameborder="0" scrolling="no"></iframe>


                    <div style="width:100%; text-align:left;" >
                        <iframe  src="https://www.eventbrite.fr/e/billets-even-3-38661062278?ref=eweb" frameborder="0" height="1000" width="100%" vspace="0" hspace="0" marginheight="5" marginwidth="5" scrolling="auto" allowtransparency="true">
                        </iframe>
                        <div style="font-family:Helvetica, Arial; font-size:12px; padding:10px 0 5px; margin:2px; width:100%; text-align:left;" ><a class="powered-by-eb" style="color: #ADB0B6; text-decoration: none;" target="_blank" href="http://www.eventbrite.fr/">Développé par Eventbrite</a>
                        </div>
                    </div>

                <?php endif ?>
            </div>
            <div class="col-md-3">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </main>
</div>
<?php
    get_footer();
?>
