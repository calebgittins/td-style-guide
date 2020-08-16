<div class="style-guide-section" data-scroll-index="3">

	<div class="wrap">
    
        <h2 class="style-guide-section-heading">Icons</h2>

        <div class="grid-icon">

	        <?php include( PLUGIN_PATH . '/inc/icons.php' ); ?>

        </div>

        <div class="grid-icon grid-icon--dark">

	        <?php 
		        $dir = plugin_dir_path( __FILE__ );
		        include($dir. '../inc/icons.php'); 
	        ?>

        </div>

	</div><!-- /wrap -->

</div><!-- /style-guide-section -->