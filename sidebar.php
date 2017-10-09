<aside class="aside text-center">
	<?php
	$recentPostsEven= new WP_Query( array(
		'category_name' => "evenements",
		'showposts' => 4
	));
	?>
	<div class="col-md-12 col-sm-6">
		<h4><a href="/project_tiers_lieu/tiers_lieu_solidaire_wordpress/index.php/evenements/">Evenements</a></h4>
		<ul class="">
			<?php while ($recentPostsEven->have_posts()): $recentPostsEven->the_post();?>
				<a href="<?php the_permalink(); ?>"><li><?php the_title(); ?></li></a>
			<?php endwhile; ?>
		</ul>
	</div>
	<?php
		$recentPosts= new WP_Query( array(
	        'category_name' => "formation&Atelier",
	        'showposts' => 4
	    ));
	?>
	<div class="col-md-12 col-sm-6">
		<h4>Formation & Atelier</h4>
		<ul class="">
				<?php while ($recentPosts->have_posts()): $recentPosts->the_post();?>
		            <a href="<?php the_permalink(); ?>"><li><?php the_title(); ?></li></a>
			<?php endwhile; ?>
		</ul>
	</div>


	<div class="text-center">
		<a href="/project_tiers_lieu/tiers_lieu_solidaire_wordpress/index.php/agenda/"><i class="fa fa-calendar-check-o" aria-hidden="true"></i></a>
	</div>
</aside>
