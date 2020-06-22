<!DOCTYPE html>
<html>


<head>
	
	<?php wp_head(); ?>


</head>
<body <?php body_class();  ?>>

<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height;?>" width="<?php
	echo get_custom_header()->width ?>" alt=""/>

<header class="sticky-top">

	<div class="container">

		<?php wp_nav_menu(

			array(

				'theme_location' => 'top-menu'
			)
		);?>
	</div>	
</header>