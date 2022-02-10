<?php 
$image = get_field('logo', 'option');
$logo_text = get_field('logo_text', 'option');
$footer_background = get_field('footer_background', 'option');
?>
<footer class="footer" style="background-color:<?php echo $footer_background ? $footer_background : '#fff' ?>">
    <div class="container">
        <div class="footer__inner">
					<?php if ($image && $logo_text) : ?>
						<a href="<?php echo home_url() ?>" class="footer__logo logo">
							<?php echo wp_get_attachment_image( $image, array(46, 46) ); ?>
							<div class="logo__text"><?php echo $logo_text?></div>
						</a>
					<?php endif; ?>	
            <div class="footer-nav">
                <?php if ( have_rows('footer_navigation', 'option') ):
                    while ( have_rows('footer_navigation', 'option') ) : the_row();  ?>
                        <div class="footer-nav__col">
                            <h3 class="footer-nav__title"><?php the_sub_field('footer_navigation_title', 'option')?></h3>
                            <ul class="footer-nav__list">
                                <?php if (have_rows('footer_navigation_items', 'option')) : 
                                    while ( have_rows('footer_navigation_items', 'option') ) : the_row(); ?>
                                        <li class="footer-nav__list-item">
                                            <a href="<?php the_sub_field('footer_navigation_item_link', 'option')?>">
                                                <?php the_sub_field('footer_navigation_item', 'option')?>
                                            </a>
                                        </li>
                                    <?php endwhile;?>
                                <?php endif;?>
                            </ul>
                        </div>
                    <?php endwhile;?>
                <?php endif;?>
            </div>
            <div class="footer__social">
                <?php dynamic_sidebar('footer_icons');?>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>

