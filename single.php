<?php include( PLUGIN_PATH . '/header.php' ); ?>

<div class="single-style-guide">

	<div class="container">

		<div class="style-guide-content">
		
			<div class="style-guide-heading">
				<h1 class="style-guide-content-heading"><?php the_title(); ?></h1>
			</div>
			
            <div class="content">
            
			<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
				
				<?php 
					$the_slug = ( basename(get_permalink()) );
					include( PLUGIN_PATH . '/content/'. $the_slug .'.php' );
				?>

			<?php endwhile; ?><?php endif; ?>
            
            </div><!-- /content -->

		</div><!-- /style-guide-content -->

	</div><!-- /container -->

</div><!-- /single-style-guide -->

<?php include( PLUGIN_PATH . '/footer.php' ); ?>