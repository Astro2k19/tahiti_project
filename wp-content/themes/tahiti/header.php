    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <title>Tahiti</title>
</head>
<body>
    <header class="header" style="background-color:<?php the_field('header_background')?>">
        <div class="container">
            <div class="header__inner">
					<?php 
						$image = get_field('logo', 'option');
						$logo_text = get_field('logo_text', 'option');
					?>
					<?php if ($image && $logo_text) : ?>
						<a href="<?php echo home_url() ?>" class="footer__logo logo">
							<?php echo wp_get_attachment_image( $image, array(46, 46) ); ?>
							<div class="logo__text"><?php echo $logo_text?></div>
						</a>
					<?php endif; ?>	
					<?php
						wp_nav_menu([
							'theme_location'  => 'header_menu',
							'container'       => 'nav',
							'container_class' => 'header__nav',
							'menu_class'      => 'header__nav-list',
							'menu_id'         => false,
							'echo'            => true,
							'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
						]);
					?>       
                <div class="burger-menu">
                    <span></span>
                </div>
            </div>
        </div>
    </header>    

