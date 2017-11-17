<aside class="aside text-center">
	<?php
	$recentPostsEven= new WP_Query( array(
		'category_name' => "evenements",
		'showposts' => 4
	));
	?>
	<div class="col-md-12 col-sm-6">
		<h4><a href="<?php 	bloginfo('url');?>/index.php/evenements/">Événements</a></h4>

			<?php dynamic_sidebar( 'derniers_evenments' ); ?>
	</div>
	<?php
		$recentPosts = new WP_Query( array(
	        'category_name' => "formation&Atelier",
	        'showposts' => 4
	    ));
	?>
	<div class="col-md-12 col-sm-6">
		<h4><a href="<?php 	bloginfo('url');?>/index.php/formation-atelier/">Formation & Atelier</a></h4>
		<ul>
			<?php while ($recentPosts->have_posts()): $recentPosts->the_post();?>
	            <a href="<?php the_permalink(); ?>"><li><?php the_title(); ?></li></a>
			<?php endwhile; ?>
		</ul>
	</div>

	<div class="col-md-12 col-sm-6">
		<h4><a href="<?php bloginfo('url');?>/index.php/agenda/">Agenda</a></h4>
		<div class="agenda">
			<?php dynamic_sidebar( 'agenda' ); ?>
		</div>
	</div>
</aside>
