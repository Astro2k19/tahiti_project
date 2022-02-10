<?php
/*
    Template Name: Home page
*/
?>
<?php get_header();?>
    <main class="main">
        <section class="welcome">
			<?php 
			  $images = get_field('main_slider');
			  $main_title_bolt = get_field('main_title_bold');
			  $main_title_thin = get_field('main_title_thin');
			  $main_subtitle = get_field('main_subtitle');
			?>
            <div class="welcome__inner">
                <div class="welcome__slider swiper">
                    <div class="welcome__slider-wrapper swiper-wrapper">   
                        <?php if ($images) :?>
                            <?php foreach($images as $image): ?>
                                <div class="welcome__slide swiper-slide" style="background-image: url(<?php echo wp_get_attachment_image_url($image, array(1440, 630))?>)"></div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="welcome__content">
                    <h1 class="welcome__title title">
						<?php if($main_title_bolt) : ?>
                        	<span><?php echo $main_title_bolt ?></span> 
						<?php endif; ?>
						
						<?php if($main_title_thin) : 
                        	echo $main_title_thin;
						 endif; ?>
                    </h1>
					<?php if($main_subtitle) : ?>
                        	<div class="welcome__subtitle"><?php echo $main_subtitle ?></div>
					<?php endif; ?>
                </div>
            </div>
        </section>
		<?php 
			$featured_posts = get_field('discover_posts');
		    $discover_background = get_field('discover_background');
		    $discover_bold_title = get_field('discover_bold_title');
       	    $discover_thin_part = get_field('discover_thin_part');
			$discover_subtitle = get_field('discover_subtitle');
			$background_posts = get_field('discover_background');
		    $titles = array();
		?>
		<?php if($featured_posts) : ?>
			<section class="posts section" style="background-color:<?php echo $background_posts ? $background_posts : '#fff' ?> ">
				<div class="posts__inner">
					<div class="container">
						 <?php echo section_title('posts__title', $discover_bold_title, $discover_thin_part) ?>
						<?php if($discover_subtitle) : ?>
							<p class="posts__subtitle subtext">
								<?php echo $discover_subtitle ?>
							</p>
						<?php endif; ?>
						<div class="post__items">
							<?php foreach( $featured_posts as $post ): 
							setup_postdata($post);
							$post_link = get_field('island_button_link');
							$title = get_the_title();
							$content = get_the_content();
							$price = get_field('price_starts');
							?>
							 <article class="post__item">
								 <?php if(get_the_post_thumbnail()) : ?>
									<div class="post__item-img">
										<?php the_post_thumbnail(array(285, 170));?>
									</div>
								 <?php endif; ?>
								<div class="post__item-content">
									<?php if($post_link && $title) : ?>
										<a href="<?php echo $post_link ?>">
											<h4 class="post__item-title"><?php echo $title?></h4>
										</a>
									<?php endif; ?>

									<?php if($content) : ?>
										<p class="post__item-about subtext">
											<?php echo $content?>
										</p>
									<?php endif; ?>

									<?php if($post_link && $price) : ?>
										<a href="<?php echo $post_link ?>" class="post__item-link">
											From <span class="post__item-price">$<?php echo $price?></span>
										</a>
									<?php endif; ?>
								</div>
							 </article>
							<?php
								$title = get_the_title();
								$link = get_field('island_button_link');
								$titles[$title] = $link;
							?>
							<?php endforeach; ?>
							<?php wp_reset_postdata(); ?>
							<script>
								const list = JSON.parse('<?php echo json_encode($titles) ?>') || {};
								const button = <?php echo json_encode(get_field('discover_dropdown_button'))?> || '';
							</script>
						</div>
						<p class="posts__undertext">
							<?php the_field('discover_text_under_posts')?>
						</p>
						<div class="post-dropdown dropdown" data-type="dropdown" data-state="closed">
						</div>
					</div>
				</div>
			</section>
		<?php endif; ?>
		<?php
			$experience_bold_title = get_field('experience_bold_title');
			$experience_thin_part = get_field('experience_thin_part');
			$experience_subtitle = get_field('experience_subtitle');
			$experience_text = get_field('experience_text');
			$experience_button = get_field('experience_button');
			$experience_background = wp_get_attachment_image_url(get_field('experience_background'), array(1440, 640));
		?>
		<?php if($experience_background) : ?>
			<section class="experience section" style="background-image: url(<?php echo $experience_background ?>)";>
				<div class="experience__inner container">
					<div class="experience__top-content">
						 <?php echo section_title('experience__title', $experience_bold_title, $experience_thin_part) ?>
						<?php if($experience_subtitle) : ?>
							<p class="experience__subtitle subtext">
								<?php echo $experience_subtitle?>
							</p>
						<?php endif ?>
					</div>
					<div class="experience__bottom-content">
						<?php if($experience_text) : ?>
							<p class="experience__text">
								<?php echo $experience_text?>
							</p>
						<?php endif; ?>
						<?php if($experience_button) : ?>
							<a href="<?php echo esc_url( $experience_button['url'] );?>" class="experience__btn btn btn--pink">
								<?php echo esc_html( $experience_button['title'] ); ?>
							</a>
						<?php endif ?>
					</div>
				</div>
			</section>
		<?php endif; ?>
		<?php
		 $why_bold_title = get_field('why_bold_title');
		 $why_thin_part = get_field('why_thin_part');
		?>
        <section class="why" style="background-color:<?php the_field('why_background')?>">
            <div class="container">
                <?php echo section_title('why__title', $why_bold_title, $why_thin_part ) ?>
                <div class="why__items">
                <?php if ( have_rows('why_items') ):
                    while ( have_rows('why_items') ) : the_row();  ?>
                    <div class="why__item">
                        <?php the_sub_field('why_item') ?>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
                </div>
            </div>
            </div>
        </section>
		<?php
			$bottom_cta_title = get_field('book_title');
			$bottom_cta_text = get_field('book_text');
			$bottom_cta_button = get_field('book_button');
			$background_bottom_cta = wp_get_attachment_image_url(get_field('book_background_image'), array(1440, 640));
		?>
		<?php if($background_bottom_cta) : ?>
			<section class="bottom-cta" style="background-image: url(<?php echo $background_bottom_cta?>)">
				<div class="bottom-cta__inner container">
					<div class="bottom-cta__content">
						<?php if($bottom_cta_title) : ?>
							<h3 class="bottom-cta__title"><?php echo $bottom_cta_title?></h3>
						<?php endif; ?>

						<?php if($bottom_cta_text) : ?>
							<p class="bottom-cta__text">
								<?php echo $bottom_cta_text?>
							 </p>
						<?php endif; ?>

						<?php if($bottom_cta_button) : ?>
							<a href="<?php echo esc_url( $bottom_cta_button['url'] );?>" class="bottom-cta__btn btn btn--blue">
								<?php echo esc_html( $bottom_cta_button['title'] ); ?>
							</a>
						<?php endif ?>
					</div>
				</div>
			</section>
		<?php endif; ?>
    </main>
<?php get_footer();?>