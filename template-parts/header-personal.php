<?php /* must be outside of masthead for stickness */ ?>
	<div id="navbar-sticky-detector" class="header-personal"></div>
	<nav class="navbar navbar-main navbar-expand-lg navbar-light bg-white header-personal">
		<div class="container">
			<div class="d-flex w-100">
			<div class="container d-flex align-items-center bloginfo">
				<div class="img-container">
					<?php
					if ( function_exists( 'the_custom_logo' ) && has_custom_logo() ) {
						the_custom_logo();
					} else {
						echo '<a href="' . get_home_url() . '" rel="home" aria-current="page" title="' , get_bloginfo( 'name' ) . '">';
							printf( '<img src="%s" class="" alt="Logo">', sunflower_parent_or_child( 'assets/img/sunflower.svg' ) );
						echo '</a>';
					}
					?>
				</div>
				<div>
					<div class="h5 bloginfo-name">
						<p><?php printf ('<span>%s</span>', get_bloginfo( 'name' )); ?></p>
					</div>
					<div class="mb-0 bloginfo-description">
						<?php bloginfo( 'description' ); ?>
					</div>
				</div>
			</div>

			<button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#mainmenu-container" aria-controls="mainmenu" aria-expanded="false" aria-label="Toggle navigation">
				<i class="fas fa-times close"></i>
				<i class="fas fa-bars open"></i>
			</button>

			</div>

			<div class="collapse navbar-collapse" id="mainmenu-container">
			<?php
				wp_nav_menu(
					array(
						'theme_location' => 'mainmenu',
						'menu_id'        => 'mainmenu',
						'depth'          => 4, // 1 = no dropdowns, 2 = with dropdowns.
						'container'      => false,
						'menu_class'     => 'navbar-nav mr-auto',
						'fallback_cb'    => 'WP_Bootstrap_Navwalker::fallback',
						'walker'         => new WP_Bootstrap_Navwalker(),
					)
				);
				?>
			</div>

			<div class="social-media-profiles d-none d-md-flex">
				<?php
					echo get_sunflower_social_media_profiles();
				?>
			</div>
		</div>
	</nav>

	<script>
		jQuery(document).ready( function (){
			jQuery('.navbar-toggler').click(function(){
				if(jQuery('.navbar-toggler').hasClass('collapsed')) {
					window.setTimeout(() => {
                        jQuery('body').removeClass('navbar-open');
					}, 100);
				} else{
                    jQuery('body').addClass('navbar-open');
				}
			})
		})
  </script>
