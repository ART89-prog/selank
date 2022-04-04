<?php
	get_header();
?>

<!-- BEGIN MAIN -->
<main class="main">      

	<!-- BEGIN FIRST SCREEN -->
	<div class="first-screen">
		<div class="first-screen__main wrapper">

			<section class="main-info">
				<div class="main-info__cols">
					<div class="main-info__left" data-aos="fade-up-right" data-aos-duration="1000" data-aos-delay="1200">
						<h2 class="main-info__title"><span class="main-info__mob-text-1"><?php the_field('first_screen_title_1'); ?></span> <span class="main-info__mob-text-2"><?php the_field('first_screen_title_2'); ?></span> <span class="main-info__green-text"><span class="main-info__mob-text-3"><?php the_field('first_screen_title_3'); ?></span> <span class="main-info__mob-text-4"><?php the_field('first_screen_title_4'); ?></span></span></h2>
						<div class="without-receipt">
							<!-- <span class="without-receipt__button">
								<span class="without-receipt__text"><?php the_field('first_screen_button'); ?></span>
							</span> -->
							<span class="without-receipt__line" data-aos="fade" data-aos-duration="800" data-aos-delay="2000"></span>
							<a class="header__button button js-scrolltoid btn_where_to_buy" href="<?php the_field('header_orange_button_url'); ?>">
								<span class="button__text"><?php the_field('header_orange_button_text'); ?></span>
							</a>   
							<div class="main-info__right-text-mob">Без рецепта</div>
							
							<!-- <div class="main-chars__item js-show-item main-info__right-text-mob">
								<div class="main-chars__inner">
									<span class="main-chars__text-wrap">
										<span class="main-chars__text"><a class="dashed-link js-show-button" href="javascript:void(0);"><?php the_field('advantage_link'); ?></a></span>
									</span>
									<span class="main-chars__bg" data-aos="fade" data-aos-duration="800" data-aos-delay="2000" data-aos-offset="-300"></span>
									<div class="main-chars__hidden js-show-hidden">
										<div class="main-chars__content">
											<?php the_field('advantage_hidden'); ?>
											<a class="main-chars__close js-show-button" href="javascript:void(0);">Свернуть</a>
										</div>
									</div>
								</div>
							</div> 	 -->
						
							
						</div>
					</div>
					<div class="main-info__center" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="1200">
						<div class="main-picture">
							<img class="main-picture__image" src="<?php echo bloginfo('template_directory'); ?>/assets/img/first-screen__picture.png" alt="">    
							<img class="main-picture__image-mob" src="<?php echo bloginfo('template_directory'); ?>/assets/img/first-screen__picture-mob.png" alt="">                                 
						</div>
					</div>
					<div class="main-info__right" data-aos="fade-up-left" data-aos-duration="1000" data-aos-delay="1200"  data-aos-offset="-300">
						<ol class="main-chars js-faq">
							<?php
							$posts = get_posts( array(
								'numberposts' => -1,
								'category_name'    => 'advantages',
								'orderby'     => 'date',
								'order'       => 'ASC',
								'include'     => array(),
								'exclude'     => array(),
								'meta_key'    => '',
								'meta_value'  =>'',
								'post_type'   => 'post',
								'suppress_filters' => true,
							) );

							foreach( $posts as $post ){
								setup_postdata($post);
								?>
									<?php if (get_field('advantage_type') == 'Обычный текст') { ?>
										<li class="main-chars__item">
											<span class="main-chars__text-wrap">
												<span class="main-chars__text"><?php the_field('advantage_text'); ?></span>
											</span>
											<span class="main-chars__bg" data-aos="fade" data-aos-duration="800" data-aos-delay="2000" data-aos-offset="-300"></span>
                                    	</li>
									<?php } elseif (get_field('advantage_type') == 'Ссылка со скрытым текстом') { ?>
										<li class="main-chars__item main-chars__item_max js-show-item">
											<div class="main-chars__inner">
												<span class="main-chars__text-wrap">
													<span class="main-chars__text"><a class="dashed-link js-show-button" href="javascript:void(0);"><?php the_field('advantage_link'); ?></a></span>
												</span>
												<span class="main-chars__bg" data-aos="fade" data-aos-duration="800" data-aos-delay="2000" data-aos-offset="-300"></span>
												<div class="main-chars__hidden js-show-hidden">
													<div class="main-chars__content">
														<?php the_field('advantage_hidden'); ?>
														<a class="main-chars__close js-show-button" href="javascript:void(0);">Свернуть</a>
													</div>
												</div>
											</div>
                                    	</li> 

										<li class="main-chars__item js-show-item main-info__right-text">
											<div class="main-chars__inner">
												<span class="main-chars__text-wrap">
													<span class="main-chars__text"><a class="dashed-link js-show-button" href="javascript:void(0);"><?php the_field('advantage_link'); ?></a></span>
												</span>
												<span class="main-chars__bg" data-aos="fade" data-aos-duration="800" data-aos-delay="2000" data-aos-offset="-300"></span>
												<div class="main-chars__hidden js-show-hidden">
													<div class="main-chars__content">
														<?php the_field('advantage_hidden'); ?>
														<a class="main-chars__close js-show-button" href="javascript:void(0);">Свернуть</a>
													</div>
												</div>
											</div>
                                    	</li> 

																																								
										<!-- <div class="main-info__right-text">Отпускается без рецепта</div> -->
										<div class="main-info__line"></div>
										
									
									<?php } elseif (get_field('advantage_type') == 'График') { ?>

									<?php } ?>															
								<?php
							}

							wp_reset_postdata();
						?>							
						</ol>
					</div>
					<div class="main-info__mob-cols" data-aos="fade-up" data-aos-duration="800">
						<div class="main-info__mob-col">
							<a class="main-info__button button button_green-border js-scrolltoid" href="<?php the_field('header_green_button_url'); ?>">
								<span class="button__text"><?php the_field('header_green_button_text'); ?></span>
							</a>
						</div>
						<div class="main-info__mob-col">
							<a class="main-info__button button js-scrolltoid" href="<?php the_field('header_orange_button_url'); ?>">
								<span class="button__text"><?php the_field('header_orange_button_text'); ?></span>
							</a>                      
						</div>
                    </div>
				</div>
			</section>

		</div>
		<div class="first-screen__bg-top" style="background-image:url(<?php echo bloginfo('template_directory'); ?>/assets/img/first-screen__top.png);" data-aos="fade" data-aos-duration="1000"></div>
		<div class="first-screen__bg" style="background-image:url(<?php echo bloginfo('template_directory'); ?>/assets/img/first-screen__bg.png);" data-aos="fade" data-aos-duration="1000"></div>
		<div class="first-screen__bg-top-mob" style="background-image:url(<?php echo bloginfo('template_directory'); ?>/assets/img/first-screen__bg-top-mob.png);" data-aos="fade" data-aos-duration="1000"></div>
		<div class="first-screen__bg-mob" data-aos="fade" data-aos-duration="1000" style="background-image:url(<?php echo bloginfo('template_directory'); ?>/assets/img/first-screen__bg-mob.png);"></div>               
	</div>
	<!-- FIRST SCREEN END -->

	<!-- BEGIN SECOND SCREEN -->
	<div class="second-screen">
		<div class="second-screen__main wrapper">
			<div class="second-screen__top" id="effects">
				<h3 class="second-screen__title" data-aos="fade" data-aos-duration="800" data-aos-delay="300"  data-aos-offset="100"><b><?php the_field('selank_protects_title'); ?></b> <?php the_field('selank_protects_subtitle'); ?></h3>
			</div>

			<div class="protection">
				<div class="protection__picture-wrap">
					<img class="protection__picture" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" data-lazy="<?php the_field('selank_protects_image'); ?>" alt="" data-aos="fade-right" data-aos-duration="800" data-aos-offset="100">
				</div>
				<ul class="protection__list" data-aos="fade-left" data-aos-duration="800" data-aos-offset="100">
					<?php
						$posts = get_posts( array(
							'numberposts' => -1,
							'category_name'    => 'protection',
							'orderby'     => 'date',
							'order'       => 'ASC',
							'include'     => array(),
							'exclude'     => array(),
							'meta_key'    => '',
							'meta_value'  =>'',
							'post_type'   => 'post',
							'suppress_filters' => true,
						) );

						foreach( $posts as $post ){
							setup_postdata($post);
							?>
							<li class="protection__item">
								<div class="protection__row">
									<div class="protection__icon-wrap">
										<img class="protection__icon" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" data-lazy="<?php the_field('protection_image'); ?>" alt="">
									</div>
									<h4 class="protection__title"><?php the_field('protection_title'); ?></h4>
								</div>
							</li>								
							<?php
						}

						wp_reset_postdata();
					?>					
				</ul>
			</div>
		</div>
		<div class="second-screen__bg" data-bg="<?php echo bloginfo('template_directory'); ?>/assets/img/second-screen__bg.png" data-aos="fade" data-aos-duration="800" data-delay="500" data-paroller-factor="-0.03"  data-paroller-type="foreground" data-paroller-direction="vertical" data-paroller-transition="transform 1s ease-out"></div>
	</div>
	<!-- SECOND SCREEN END -->
	
	<!-- BEGIN THIRD SCREEN -->
	<div class="third-screen">
		<div class="third-screen__main wrapper">

			<article class="why-us" id="efficiency">
				<div class="why-us__cols">
					<div class="why-us__left" data-aos="fade-up" data-aos-duration="800">
						<h3 class="why-us__title"><b><?php the_field('why_title'); ?></b> <?php the_field('why_subtitle'); ?></h3>
						<div class="why-us__text"><?php the_field('why_content', false, false); ?></div>
					</div>
					<div class="why-us__right" data-aos="fade" data-aos-duration="800" data-aos-delay="300">
						<img class="why-us__picture" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" data-lazy="<?php echo bloginfo('template_directory'); ?>/assets/img/svg/third-screen__picture.svg" alt="">
						<div class="why-us__remark"><?php the_field('why_remark', false, false); ?></div>
					</div>                            
				</div>
				<div class="why-us__bottom" data-aos="fade" data-aos-duration="800">
					<div class="why-us__important"><?php the_field('why_important', false, false); ?></div>
				</div>
				<div class="why-us__logo-wrap" data-paroller-factor="0.02" data-paroller-type="foreground" data-paroller-direction="vertical" data-paroller-transition="transform 1s ease-out">
					<img class="why-us__logo" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" data-lazy="<?php echo bloginfo('template_directory'); ?>/assets/img/svg/third-screen__logo.svg" alt="" data-aos="fade-up-right" data-aos-duration="800" data-aos-delay="700">
				</div>
			</article>    
			
			<article class="why-suffer" data-aos="fade-up" data-aos-duration="800">
				<h3 class="why-suffer__title"><?php the_field('suffer_title'); ?></h3>
				<div class="why-suffer__text"><?php the_field('suffer_text', false, false); ?></div>
			</article>

			<aside class="selank-research" data-aos="fade-up" data-aos-duration="800">
				<img class="selank-research__image" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" data-lazy="<?php echo bloginfo('template_directory'); ?>/assets/img/third-screen__selank.png" alt="">
				<img class="selank-research__image-mob" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" data-lazy="<?php echo bloginfo('template_directory'); ?>/assets/img/third-screen__selank-mob.png" alt="">
				<div class="selank-research__text"><?php the_field('suffer_remark', false, false); ?></div>
			</aside>

		</div>
	</div>
	<!-- THIRD SCREEN END -->

	<!-- BEGIN FOURTH SCREEN -->
	<div class="fourth-screen">
		<div class="doctors__bg" data-bg="<?php echo bloginfo('template_directory'); ?>/assets/img/fourth-screen__center.png" data-aos="fade" data-aos-duration="800" data-paroller-factor="0.02"  data-paroller-type="foreground" data-paroller-direction="vertical" data-paroller-transition="transform 1s ease-out"></div>

		<div class="fourth-screen__main wrapper">

			<div class="doctors">
				<div class="doctors__list js-mob-slider" data-aos="fade-up" data-aos-duration="800">
				<?php
						$posts = get_posts( array(
							'numberposts' => -1,
							'category_name'    => 'doctors',
							'orderby'     => 'date',
							'order'       => 'ASC',
							'include'     => array(),
							'exclude'     => array(),
							'meta_key'    => '',
							'meta_value'  =>'',
							'post_type'   => 'post',
							'suppress_filters' => true,
						) );

						foreach( $posts as $post ){
							setup_postdata($post);
							?>
								<article class="doctors__item" data-slide>
									<div class="doctors__content">
										<div class="doctors__row">
											<div class="doctors__cell">
												<img class="doctors__photo" src="<?php the_field('doctor_photo'); ?>" alt="">
											</div>
										</div>
										<?php 
     										$doctor_work = get_field("doctor_work"); 
										?>																							
										<h4 class="doctors__title"><?php the_field('doctor_fio'); ?> <?php if ($doctor_work) : ?><br> <span class="doctors__work"><?php the_field('doctor_work'); ?></span><?php endif; ?></h4>
										<div class="doctors__max-wrap js-max">
											<div class="doctors__max-content js-max-fix">
												<div class="doctors__text js-max-content"><?php the_field('doctor_description', false, false); ?></div>                                            
											</div>
											<a class="doctors__max-button js-max-open" href="javascript:void(0);">Показать еще</a>
										</div>
									</div>
								</article>								
							<?php
						}

						wp_reset_postdata();
					?>					
				</div>
				<!-- <div class="doctors__bg" data-bg="<?php echo bloginfo('template_directory'); ?>/assets/img/fourth-screen__center.png" data-aos="fade" data-aos-duration="800" data-paroller-factor="0.02"  data-paroller-type="foreground" data-paroller-direction="vertical" data-paroller-transition="transform 1s ease-out"></div> -->
				<div class="doctors__bg-mob" data-bg="<?php echo bloginfo('template_directory'); ?>/assets/img/fourth-screen__center-mob.png"></div>
			</div>
			
			<section class="about-selank" data-aos="fade" data-aos-duration="800">
				<div class="about-selank__cols">
					<div class="about-selank__left" data-aos="fade-up-right" data-aos-duration="800" data-aos-delay="400">
						<img class="about-selank__picture" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" data-lazy="<?php echo bloginfo('template_directory'); ?>/assets/img/selank__picture.png" alt="">
						<img class="about-selank__picture-mob" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" data-lazy="<?php echo bloginfo('template_directory'); ?>/assets/img/selank__picture-mob-new.png" alt="">
					</div>
					<div class="about-selank__right">
						<img class="about-selank__dna" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" data-lazy="<?php echo bloginfo('template_directory'); ?>/assets/img/selank__dna-new.png" alt="">						
						<h3 class="about-selank__title"><b><?php the_field('about_title'); ?></b> <?php the_field('about_subtitle'); ?></h3>
						<span class="about-selank__border-1"></span>
						<div class="about-selank__border-2"></div>
					</div>                            
				</div>
				<img class="about-selank__element-top" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" data-lazy="<?php echo bloginfo('template_directory'); ?>/assets/img/svg/selank__top.svg" alt="" data-paroller-factor="0.01"  data-paroller-type="foreground" data-paroller-direction="vertical" data-paroller-transition="transform 1s ease-out">
				<img class="about-selank__element-bottom" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" data-lazy="<?php echo bloginfo('template_directory'); ?>/assets/img/svg/selank__bottom.svg" alt="" data-paroller-factor="-0.01" data-paroller-type="foreground" data-paroller-direction="vertical" data-paroller-transition="transform 1s ease-out">
				<img class="about-selank__element-right" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" data-lazy="<?php echo bloginfo('template_directory'); ?>/assets/img/svg/selank__right.svg" alt="" data-paroller-factor="0.01" data-paroller-type="foreground" data-paroller-direction="vertical" data-paroller-transition="transform 1s ease-out">
			</section>

		</div>
		<div class="fourth-screen__bg-left" data-bg="<?php echo bloginfo('template_directory'); ?>/assets/img/fourth-screen__left.png" data-aos="fade" data-aos-duration="800" data-aos-delay="500" data-paroller-factor="-0.03"  data-paroller-type="foreground" data-paroller-direction="vertical" data-paroller-transition="transform 1s ease-out"></div>
		<div class="fourth-screen__logo-wrap" data-paroller-factor="0.01"  data-paroller-type="foreground" data-paroller-direction="vertical" data-paroller-transition="transform 1s ease-out">
			<img class="fourth-screen__logo" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" data-lazy="<?php echo bloginfo('template_directory'); ?>/assets/img/svg/fourth-screen__logo.svg" alt="" data-aos="fade-left" data-aos-duration="800" data-aos-delay="500" >    
		</div>
	</div>
	<!-- FOURTH SCREEN END -->

	<!-- BEGIN FIFTH SCREEN -->
	<div class="fifth-screen">
		<div class="fifth-screen__main wrapper">
		
			<article class="testing" id="testing" data-aos="fade-up" data-aos-duration="1000">
				<div class="testing__cols">
					<div class="testing__left">
						<h3 class="testing__title"><b><?php the_field('testing_title'); ?></b> <?php the_field('testing_subtitle'); ?></h3>
						<div class="testing__desktop js-from-2">
							<div class="testing__content js-content-2">
								<div class="testing__text"><?php the_field('testing_content_1', false, false); ?></div>
								<?php $testing_content = get_field("testing_content_2"); ?>	
								<?php if ($testing_content) : ?><div class="testing__text"><?php the_field('testing_content_2', false, false); ?></div><?php endif; ?>
							</div>
						</div>
					</div>
					<div class="testing__right">
						<div class="testing__images">
							<img class="testing__image testing__image_1" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" data-lazy="<?php echo bloginfo('template_directory'); ?>/assets/img/testing__image-1.png" alt="">
							<img class="testing__image testing__image_2" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" data-lazy="<?php echo bloginfo('template_directory'); ?>/assets/img/testing__image-2.png" alt="">
							<img class="testing__image testing__image_3" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" data-lazy="<?php echo bloginfo('template_directory'); ?>/assets/img/testing__image-3.png" alt="">
						</div>
					</div>
					<div class="testing__mob js-to-2"></div>
				</div>
				<div class="testing__bottom">
					<a class="testing__button button js-scrolltoid btn_order_online" href="<?php the_field('testing_button_url'); ?>">
						<span class="button__text"><?php the_field('testing_button_text'); ?></span>
					</a>
				</div>
			</article>

			<section class="situations-block" id="situations">
				<div class="situations-block__top" data-aos="fade" data-aos-duration="800" data-aos-delay="300">
					<h3 class="situations-block__title"><b><?php the_field('situations_title'); ?></b> <span class="situations-block__mob-text"><?php the_field('situations_subtitle'); ?></span></h3>
				</div>
				<div class="situations" data-aos="fade-right" data-aos-duration="800">
					<img class="situations__picture" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" data-lazy="<?php echo bloginfo('template_directory'); ?>/assets/img/fifth-screen__selank.png" alt="" data-aos="fade" data-aos-duration="800">
					<div class="situations__picture-mob-wrap">
						<img class="situations__picture-mob" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" data-lazy="<?php echo bloginfo('template_directory'); ?>/assets/img/fifth-screen__selank-mob.png" alt="">
					</div>
					<img class="situations__lines" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" data-lazy="<?php echo bloginfo('template_directory'); ?>/assets/img/fifth-screen__lines.png" alt="" data-aos="fade" data-aos-duration="800" data-aos-delay="500" data-aos-offset="300">
					<div class="situations__list js-faq">
					<?php
						$posts = get_posts( array(
							'numberposts' => -1,
							'category_name'    => 'situations',
							'orderby'     => 'date',
							'order'       => 'ASC',
							'include'     => array(),
							'exclude'     => array(),
							'meta_key'    => '',
							'meta_value'  =>'',
							'post_type'   => 'post',
							'suppress_filters' => true,
						) );

						foreach( $posts as $post ){
							setup_postdata($post);
							switch($post->ID){
								case '90':$situation_id='sit_1';break;
								case '92':$situation_id='sit_2';break;
								case '94':$situation_id='sit_3';break;
								case '96':$situation_id='sit_4';break;
								case '98':$situation_id='sit_5';break;
								case '100':$situation_id='sit_6';break;
								case '102':$situation_id='sit_7';break;
								case '104':$situation_id='sit_8';break;
								default: $situation_id='sit_none';break;
							}
							?>
								<article class="situation js-faq-item">
									<div class="situation__all">
										<div class="situation__bg">
											<img class="situation__photo" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" data-lazy="<?php the_field('situation_image'); ?>" alt="">
											<h4 class="situation__title">
												<a class="situation__button js-faq-button" id="<?php echo $situation_id; ?>" href="javascript:void(0);">
													<span class="situation__row">
														<?php 
     														$situation_short_title = get_field("situation_short_title"); 
														?>													
														<span class="situation__cell">
															<?php if ($situation_short_title) : ?>
																<span class="situation__alternative-title"><?php the_field('situation_short_title'); ?></span>
															<?php endif; ?>														
															<span class="situation__main-title"><?php the_field('situation_title'); ?></span>
														</span>
													</span>
												</a>
											</h4>
											<div class="situation__hidden js-faq-hidden">
												<div class="situation__content">
													<div class="situation__text"><?php the_field('situation_content', false, false); ?></div>
													<div class="situation__close-wrap">
														<a class="situation__close js-faq-pseudobutton" href="javascript:void(0);">Свернуть</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</article>								
							<?php
						}

						wp_reset_postdata();
					?>					                               
					</div>
				</div>
				<div class="situations-block__cols" data-aos="fade-up" data-aos-duration="800">
					<div class="situations-block__col">
						<a class="situations-block__button button button_green-border js-scrolltoid" href="<?php the_field('situations_green_button_url'); ?>">
							<span class="button__text"><?php the_field('situations_green_button_text'); ?></span>
						</a>
					</div>
					<div class="situations-block__col">
						<a class="situations-block__button button js-scrolltoid btn_choose_pharmacy" href="<?php the_field('situations_orange_button_url'); ?>">
							<span class="button__text"><?php the_field('situations_orange_button_text'); ?></span>
						</a>                      
					</div>
				</div>
			</section>

			<section class="results-block" id="results">
				<div class="results-block__top" data-aos="fade-up" data-aos-duration="800">
					<h3 class="results-block__title"><b><?php the_field('results_title'); ?></b> <?php the_field('results_subtitle'); ?></h3>
				</div>
				<div class="results" data-aos="fade-up" data-aos-duration="800">
				<?php
						$posts = get_posts( array(
							'numberposts' => -1,
							'category_name'    => 'results',
							'orderby'     => 'date',
							'order'       => 'ASC',
							'include'     => array(),
							'exclude'     => array(),
							'meta_key'    => '',
							'meta_value'  =>'',
							'post_type'   => 'post',
							'suppress_filters' => true,
						) );

						foreach( $posts as $post ){
							setup_postdata($post);
							?>
								<?php if (get_field('result_type') == 'Контент со скрытым текстом') { ?>
									<article class="result">
										<div class="result__cols">
											<div class="result__left">
												<img class="result__icon" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" data-lazy="<?php the_field('result_icon'); ?>" alt="">
											</div>
											<div class="result__right">
												<div class="result__row">
													<div class="result__cell">
														<h4 class="result__title"><?php the_field('result_title'); ?></h4>
														<div class="max-height js-max close-fix">
															<div class="max-height__bg">
																<div class="max-height__fix js-max-fix">
																	<div class="max-height__content js-max-content">
																		<div class="max-height__text"><?php the_field('result_content', false, false); ?></div>
																		<a class="max-height__button max-height__button_close js-max-pseudoopen" href="javascript:void(0);">Свернуть</a>
																	</div>                                                    
																</div>
															</div>
															<a class="max-height__button max-height__button_open js-max-open" href="javascript:void(0);">Показать<span> больше</span></a>
														</div>
													</div>
												</div>
											</div>                                    
										</div>
									</article>
 								<?php } elseif (get_field('result_type') == 'Контент без скрытого текста с дополнительным текстом снизу') { ?>
									<article class="result">
										<div class="result__cols">
											<div class="result__left">
												<img class="result__icon" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" data-lazy="<?php the_field('result_icon'); ?>" alt="">
											</div>
											<div class="result__right">
												<div class="result__row">
													<div class="result__cell">
														<div class="result__min">
															<h4 class="result__title"><?php the_field('result_title'); ?></h4>
															<div class="result__text"><?php the_field('result_content'); ?></div>
														</div>
														<div class="result__bottom">
															<?php the_field('result_bottom_content'); ?>
														</div>
													</div>
												</div>
											</div>                                    
										</div>
									</article>   
								<?php } elseif (get_field('result_type') == 'График') { ?>
									<div class="result result_chart">
										<div class="chart">
											<span class="chart__title">Баллы</span>
											<div class="chart__cols">
												<div class="chart__item">
													<span class="chart__number">5</span>
													<span class="chart__number">4</span>
													<span class="chart__number">3</span>
													<span class="chart__number">2</span>
													<span class="chart__number">1</span>
													<span class="chart__number">0</span>
												</div>
												<div class="chart__item">
													<div class="graph">
														<div class="graph__bar graph__bar_light" style="height:48.48%;"></div>
														<div class="graph__bar graph__bar_blue" style="height:31.06%;"></div>
														<div class="graph__bar graph__bar_dark" style="height:20.46%;"></div>
													</div>
													<span class="chart__text">Память</span>
												</div>
												<div class="chart__item">
													<div class="graph">
														<div class="graph__bar graph__bar_light" style="height:46.21%;"></div>
														<div class="graph__bar graph__bar_blue" style="height:31.06%;"></div>
														<div class="graph__bar graph__bar_dark" style="height:20.46%;"></div>
													</div>
													<span class="chart__text">
														<span class="chart__hide-mob">Внимание</span>
														<span class="chart__hide-desktop">Вним.</span>
													</span>
												</div>
												<div class="chart__item">
													<div class="graph">
														<div class="graph__bar graph__bar_light" style="height:59.09%;"></div>
														<div class="graph__bar graph__bar_blue" style="height:18.18%;"></div>
														<div class="graph__bar graph__bar_dark" style="height:16.67%;"></div>
													</div>
													<span class="chart__text">Реакция</span>
												</div>
												<div class="chart__item">
													<span class="chart__circle chart__circle_dark"></span>
													<span class="chart__legend">1-3 день</span>
													<span class="chart__circle chart__circle_blue"></span>
													<span class="chart__legend">3-5 день</span>
													<span class="chart__circle chart__circle_light"></span>
													<span class="chart__legend">5-10 день</span>
												</div>
											</div>
										</div>
									</div>  
 								<?php } ?>															
							<?php
						}

						wp_reset_postdata();
					?>	

                                         
				</div>
			</section>                    

		</div>
		<div class="fifth-screen__bg-top" data-bg="<?php echo bloginfo('template_directory'); ?>/assets/img/fifth-screen__top.png" data-aos="fade" data-aos-duration="1500" data-paroller-factor="-0.01" data-paroller-type="foreground" data-paroller-direction="vertical" data-paroller-transition="transform 1s ease-out"></div>
		<div class="fifth-screen__bg-bottom" data-bg="<?php echo bloginfo('template_directory'); ?>/assets/img/fifth-screen__bottom.png" data-aos="fade" data-aos-duration="1000" data-paroller-factor="-0.02" data-paroller-type="foreground" data-paroller-direction="vertical" data-paroller-transition="transform 1s ease-out"></div>
		<div class="fifth-screen__bg-right" data-bg="<?php echo bloginfo('template_directory'); ?>/assets/img/fifth-screen__right.png" data-aos="fade" data-aos-duration="1000" data-aos-delay="200" data-paroller-factor="-0.03"  data-paroller-type="foreground" data-paroller-direction="vertical" data-paroller-transition="transform 1s ease-out"></div>
		<div class="fifth-screen__bg-top-mob" data-bg="<?php echo bloginfo('template_directory'); ?>/assets/img/fifth-screen__bg-top-mob.png"></div>
		<div class="fifth-screen__bg-bottom-mob" data-bg="<?php echo bloginfo('template_directory'); ?>/assets/img/fifth-screen__bg-bottom-mob.png"></div>
		<div class="fifth-screen__logo-wrap" data-paroller-factor="0.03"  data-paroller-type="foreground" data-paroller-direction="vertical" data-paroller-transition="transform 1s ease-out">
			<img class="fifth-screen__logo" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" data-lazy="<?php echo bloginfo('template_directory'); ?>/assets/img/svg/fifth-screen__logo.svg" alt="" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
		</div>
	</div>
	<!-- FIFTH SCREEN END -->

	<!-- BEGIN SIXTH SCREEN -->
	<div class="sixth-screen">
		<div class="sixth-screen__main wrapper">

			<section class="about-us">
				<div class="about-us__cols">
					<div class="about-us__left">
						<h3 class="about-us__title" data-aos="fade-right" data-aos-duration="800"><?php the_field('opinions_title'); ?></h3>
						<div class="about-us__mob" data-aos="fade" data-aos-duration="800" data-aos-delay="300">
							<a class="about-us__button blue-button js-popup-open js-hidden-button" href="<?php the_field('opinions_button_url'); ?>">
								<span class="blue-button__text"><?php the_field('opinions_button_text'); ?></span>
							</a>             
						</div>                               
					</div>
					<div class="about-us__right" data-aos="fade-left" data-aos-duration="800">
						<img class="about-us__image js-popup-trigger" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" data-lazy="<?php echo bloginfo('template_directory'); ?>/assets/img/sixth-screen__picture.png" alt="">
						<img class="about-us__image-mob js-popup-trigger" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" data-lazy="<?php echo bloginfo('template_directory'); ?>/assets/img/sixth-screen__picture-mob.png" alt="">						
						<a class="small-video-2 js-popup-open js-popup-video" data-frame="https://www.youtube.com/embed/gNrBW95AVEQ?autoplay=1" data-width="560" data-height="315" href="#video-popup" data-bg="https://localhost/selank/wp-content/uploads/2021/09/footer__video.jpg.jpg" style="background-image: url(&quot;https://localhost/selank/wp-content/uploads/2021/09/footer__video.jpg.jpg&quot;);">
                            <span class="small-video__icon"></span>
                        </a>
					</div>
				</div>
				<div class="about-us__video js-hidden-video">
					<div class="main-video" data-aos="fade-top" data-aos-duration="800">
						<div class="main-video__list js-video-slider">
						<?php
							$posts = get_posts( array(
								'numberposts' => -1,
								'category_name'    => 'main-video',
								'orderby'     => 'date',
								'order'       => 'ASC',
								'include'     => array(),
								'exclude'     => array(),
								'meta_key'    => '',
								'meta_value'  =>'',
								'post_type'   => 'post',
								'suppress_filters' => true,
							) );

							foreach( $posts as $post ){
								setup_postdata($post);
								?>
								<article class="main-video__item js-video">
									<div class="video__in">
										<a class="video js-popup-open js-popup-video js-video-center" data-frame="<?php the_field('main_video_url'); ?>?autoplay=1" data-width="<?php the_field('main_video_width'); ?>" data-height="<?php the_field('main_video_height'); ?>" href="#video-popup" style="background-image:url(<?php the_field('main_video_preview'); ?>);">
											<img class="video__image" src="<?php echo bloginfo('template_directory'); ?>/assets/img/video-fix.png" alt="">
											<span class="video__icon"></span>
										</a>      
										<h4 class="main-video__title">
											<a class="main-video__open js-popup-open js-popup-video" data-frame="<?php the_field('main_video_url'); ?>?autoplay=1" data-width="<?php the_field('main_video_width'); ?>" data-height="<?php the_field('main_video_height'); ?>" href="#video-popup"><?php the_field('main_video_title'); ?></a>
										</h4>
										<?php 
											$main_video_description = get_field("main_video_description"); 
										?>																							
										<?php if ($main_video_description) : ?><div class="main-video__text"><?php the_field('main_video_description'); ?></div><?php endif; ?>										
									</div>						    
								</article> 														
								<?php
							}

							wp_reset_postdata();
						?>							
						</div>
					</div> 				
				</div>				 				
			</section>

			<section class="order-online js-order-block" id="where-to-buy">
	
				<div class="order-online__top" data-aos="fade" data-aos-duration="800" data-aos-delay="300">
					<h3 class="order-online__title"><?php the_field('order_title'); ?></h3>
					<h4 class="order-online__subtitle"><?php the_field('order_subtitle'); ?></h4>
				</div>
				<div class="order-online__text" data-aos="fade-up" data-aos-duration="800"><?php the_field('order_content'); ?></div>
				
				<script>
					window.uteka = window.uteka || {}
					window.uteka._host = 'widget.uteka.ru',
					window.uteka._queue = []
					window.uteka._loaded = false
					window.uteka.onReady = function (callback) {
						if (window.uteka._loaded) {
						return callback()
						}

						window.uteka._queue.push(callback)
					}

					var script = document.createElement('script')
					script.src = 'https://' + window.uteka._host + '/static/widgets/widget.compiled.js?l=' + Date.now()
					script.async = true
					script.addEventListener('load', function () {
						window.uteka._loaded = true
						window.uteka._queue.forEach(function (callback) {
						callback()
						})
					})

					document.head.appendChild(script)

					window.uteka.onReady(function () {
						var widget = document.querySelector('.uteka-widget')

						window.uteka.loadWidget(widget, {
							productId: '223177'
						})
					})					
				</script>			
				
				<div class="widget" data-aos="fade-up" data-aos-duration="800">
					<div class="uteka-widget">
						<!-- Шапка виджета -->
						<div class="uteka-widget-header">
							<div class="uteka-widget__container">
							<div class="uteka-widget-header__inner">
								<!-- Логотип -->
								<a
								class="uteka-widget-header__logo"
								href="https://uteka.ru/"
								target="_blank"
								>
								<img
									src="https://widget.uteka.ru/static/img/widgets/logo-light.svg"
									alt="Заказать в Ютеке"
									title="поиск в аптеках"
								/>
								</a>

								<!-- Заголовок -->
								<div class="uteka-widget-header__title"></div>

							</div>
							</div>
						</div>

						<iframe allow="geolocation"></iframe>
					</div>					
				</div>

				<div class="brands" data-aos="fade-up" data-aos-duration="800">
					<ul class="brands__list js-brands-slider">
						<?php
							$posts = get_posts( array(
								'numberposts' => -1,
								'category_name'    => 'stores',
								'orderby'     => 'date',
								'order'       => 'ASC',
								'include'     => array(),
								'exclude'     => array(),
								'meta_key'    => '',
								'meta_value'  =>'',
								'post_type'   => 'post',
								'suppress_filters' => true,
							) );

							foreach( $posts as $post ){
								setup_postdata($post);
								?>
									<li class="brands__item">
										<div class="brands__row">
											<div class="brands__cell">
												<a class="brands__link" href="<?php the_field('store_url'); ?>" target="_blank">
													<img class="brands__image" src="<?php the_field('store_logo'); ?>" alt="">
												</a>
											</div>
										</div>
									</li>								
								<?php
							}

							wp_reset_postdata();
						?>						
					</ul>
				</div>
			</section>                   
			<div class="sixth-screen__logo-wrap" data-paroller-factor="0.02" data-paroller-type="foreground" data-paroller-direction="vertical" data-paroller-transition="transform 1s ease-out">
				<img class="sixth-screen__logo" src="<?php echo bloginfo('template_directory'); ?>/assets/img/svg/sixth-screen__logo.svg" alt="" data-aos="fade-up-right" data-aos-duration="800">
			</div>
		</div>
	</div>
	<!-- SIXTH SCREEN END -->
	
	<!-- BEGIN SEVENTH SCREEN -->
	<div class="seventh-screen">
		<div class="seventh-screen__main wrapper">
			
			<div class="quality js-aos-container">
				<div class="seventh-screene__top" data-aos="fade" data-aos-duration="800" data-delay="300">
					<h3 class="seventh-screen__title">гарантии качества</h3>
				</div>
				<div class="quality_items">
					<div class="quality_item">
						<a class="quality_item-link" data-fancybox="" href="https://localhost/selank/wp-content/uploads/2021/07/Sertifikat-GMP.jpg">
							<img class="quality__image" src="https://localhost/selank/wp-content/uploads/2021/07/Sertifikat-GMP-small.jpg" data-lazy="https://localhost/selank/wp-content/uploads/2021/07/Sertifikat-GMP-small.jpg" alt="">
						</a>
						<div class="quality_item-text">
							Гарантия соответствия продукции мировым стандартам подтверждена сертификатом международного уровня качества GMP 
						</div>
					</div>
					<div class="quality_item">
						<div class="quality_item-link">
							<img class="quality__image" src="https://localhost/selank/wp-content/uploads/2021/06/seventh-screen__quality.png" data-lazy="https://localhost/selank/wp-content/uploads/2021/06/seventh-screen__quality.png" alt="">
						</div>
						<div class="quality_item-text">
							В составе Селанка  только естественные аминокислоты
						</div>
					</div>
					<div class="quality_item">
						<a class="quality_item-link" data-fancybox="" href="https://localhost/selank/wp-content/uploads/2021/07/Sertifikat-GMP.jpg">
							<img class="quality__image" src="https://localhost/selank/wp-content/uploads/2021/07/Sertifikat-GMP-small.jpg" data-lazy="https://localhost/selank/wp-content/uploads/2021/07/Sertifikat-GMP-small.jpg" alt="">
						</a>
						<div class="quality_item-text">
							Гарантия соответствия продукции мировым стандартам подтверждена сертификатом международного уровня качества GMP 
						</div>
					</div>
				</div>
				<div class="quality_items-mob">				
					<div class="quality_item">
						<div class="quality_item-link">
							<img class="quality__image" src="https://localhost/selank/wp-content/uploads/2021/06/seventh-screen__quality.png" data-lazy="https://localhost/selank/wp-content/uploads/2021/06/seventh-screen__quality.png" alt="">
						</div>
						<div class="quality_item-text">
							В составе Селанка  только естественные аминокислоты
						</div>
					</div>
					<div class="quality_item">
						<div class="quality_item-sert">
							<a class="quality_item-link" data-fancybox="" href="https://localhost/selank/wp-content/uploads/2021/07/Sertifikat-GMP.jpg">
								<img class="quality__image" src="https://localhost/selank/wp-content/uploads/2021/07/Sertifikat-GMP-small.jpg" data-lazy="https://localhost/selank/wp-content/uploads/2021/07/Sertifikat-GMP-small.jpg" alt="">
							</a>
							<a class="quality_item-link" data-fancybox="" href="https://localhost/selank/wp-content/uploads/2021/07/Sertifikat-GMP.jpg">
								<img class="quality__image" src="https://localhost/selank/wp-content/uploads/2021/07/Sertifikat-GMP-small.jpg" data-lazy="https://localhost/selank/wp-content/uploads/2021/07/Sertifikat-GMP-small.jpg" alt="">
							</a>	
						</div>						
						<div class="quality_item-text">
							Гарантия соответствия продукции мировым стандартам подтверждена сертификатом международного уровня качества GMP 
						</div>
					</div>
				</div>
				








				<!-- <?php
					$posts = get_posts( array(
						'numberposts' => -1,
						'category_name'    => 'warranty',
						'orderby'     => 'date',
						'order'       => 'ASC',
						'include'     => array(),
						'exclude'     => array(),
						'meta_key'    => '',
						'meta_value'  =>'',
						'post_type'   => 'post',
						'suppress_filters' => true,
					) );

					foreach( $posts as $post ){
						setup_postdata($post);
						?>
							
							<?php if (get_field('warranty_popup') == 'Нет') { ?>
								<div class="quality__item js-aos-item" data-aos-duration="800">
									
									<div class="quality__cols">					
										<div class="quality__col">
											<a class="quality__image-link" data-fancybox="" href="https://localhost/selank/wp-content/uploads/2021/07/Sertifikat-GMP.jpg">
												<img class="quality__image" src="https://localhost/selank/wp-content/uploads/2021/07/Sertifikat-GMP-small.jpg" data-lazy="https://localhost/selank/wp-content/uploads/2021/07/Sertifikat-GMP-small.jpg" alt="">
											</a>
										</div>
										<div class="quality__col aos-init aos-animate" data-aos="fade" data-aos-duration="800" data-aos-delay="200">
											<div class="quality__text"><p>Качество Селанка гарантировано производством по мировым стандартам GMP и подтверждено официальными документами</p></div>
										</div>
									</div>		
									<div class="quality__cols">	
										<div class="quality__col">
											<img class="quality__image" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" data-lazy="<?php the_field('warranty_image'); ?>" alt="">
										</div>
										<div class="quality__col" data-aos="fade" data-aos-duration="800" data-aos-delay="200">
											<div class="quality__text"><?php the_field('warranty_content', false, false); ?></div>
										</div>
									</div>

									<div class="quality__cols">					
										<div class="quality__col">
											<a class="quality__image-link" data-fancybox="" href="https://localhost/selank/wp-content/uploads/2021/07/Sertifikat-GMP.jpg">
												<img class="quality__image" src="https://localhost/selank/wp-content/uploads/2021/07/Sertifikat-GMP-small.jpg" data-lazy="https://localhost/selank/wp-content/uploads/2021/07/Sertifikat-GMP-small.jpg" alt="">
											</a>
										</div>
										<div class="quality__col aos-init aos-animate" data-aos="fade" data-aos-duration="800" data-aos-delay="200">
											<div class="quality__text"><p>Качество Селанка гарантировано производством по мировым стандартам GMP и подтверждено официальными документами</p></div>
										</div>
									</div>	

								

								</div>								
							

							<?php } ?>															 
						<?php
					}

					wp_reset_postdata();
				?>	 -->

			</div>

			<section class="how-to-use" id="how-to-use">				
				<div class="how-to-use__top" data-aos="fade" data-aos-duration="800" data-delay="300">
					<h3 class="how-to-use__title"><?php the_field('usage_main_title'); ?></h3>
				</div>
				<div class="usage" data-aos="fade-up" data-aos-duration="800">
				<?php
					$posts = get_posts( array(
						'numberposts' => -1,
						'category_name'    => 'usage',
						'orderby'     => 'date',
						'order'       => 'ASC',
						'include'     => array(),
						'exclude'     => array(),
						'meta_key'    => '',
						'meta_value'  =>'',
						'post_type'   => 'post',
						'suppress_filters' => true,
					) );

					foreach( $posts as $post ){
						setup_postdata($post);
						?>
							<article class="usage__item">
								<div class="usage__top">
									<img class="usage__image" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" data-lazy="<?php the_field('usage_icon'); ?>" alt="">
								</div>
								<h4 class="usage__title"><?php the_field('usage_title'); ?></h4>
							</article>						
						<?php
					}

					wp_reset_postdata();
				?>					
				</div>

			</section>

		</div>

		<div class="seventh-screen__bg-top" data-bg="<?php echo bloginfo('template_directory'); ?>/assets/img/seventh-screen__bg.png" data-aos="fade" data-aos-duration="1500"  data-paroller-factor="0.01"  data-paroller-type="foreground" data-paroller-direction="vertical" data-paroller-transition="transform 1s ease-out"></div>
		<div class="seventh-screen__bg-bottom" data-bg="<?php echo bloginfo('template_directory'); ?>/assets/img/seventh-screen__bg.png" data-aos="fade" data-aos-duration="1500"  data-paroller-factor="0.01"  data-paroller-type="foreground" data-paroller-direction="vertical" data-paroller-transition="transform 1s ease-out"></div>
		<div class="seventh-screen__bg-mob" data-bg="<?php echo bloginfo('template_directory'); ?>/assets/img/seventh-screen__bg-mob.png"></div>
		<img class="seventh-screen__logo" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" data-lazy="<?php echo bloginfo('template_directory'); ?>/assets/img/svg/seventh-screen__logo.svg" alt=""  data-aos="fade" data-aos-duration="800" data-aos-delay="800" data-paroller-factor="-0.01"  data-paroller-type="foreground" data-paroller-direction="vertical" data-paroller-transition="transform 1s ease-out">
	</div>
	<!-- SEVENTH SCREEN END -->
	
	<!-- BEGIN LAST SCREEN -->
	<div class="last-screen">
		<div class="last-screen__main wrapper">
			
			<article class="last-article" id="consequences">
				<div class="last-article__cols">
					<div class="last-article__left" data-aos="fade-right" data-aos-duration="800">
						<div class="last-article__top" data-aos="fade" data-aos-duration="800" data-aos-delay="300">
							<h3 class="last-article__title"><?php the_field('last_title'); ?></h3>
							<h4 class="last-article__subtitle"><?php the_field('last_subtitle'); ?></h4>
						</div>
						<?php 
     						$last_list = get_field("last_list"); 
						?>		
						<?php if ($last_list) : ?><div class="last-article__list-bg"><?php the_field('last_list'); ?></div><?php endif; ?>					
						<div class="last-article__mob-image js-to-1"></div>
						<div class="last-article__text"><?php the_field('last_content'); ?></div>
						<a class="button js-scrolltoid btn_cost" href="<?php the_field('last_button_url'); ?>">
							<span class="button__text"><?php the_field('last_button_text'); ?></span>
						</a>
					</div>
					<div class="last-article__right js-from-1" data-aos="fade-left" data-aos-duration="800">
						<div class="last-article__image-wrap js-content-1">
							<img class="last-article__image" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" data-lazy="<?php the_field('last_image'); ?>" alt="">
							<div class="last-article__element-1-wrap" data-paroller-factor="-0.01"  data-paroller-type="foreground" data-paroller-direction="vertical" data-paroller-transition="transform 1s ease-out">
								<img class="last-article__element" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" data-lazy="<?php echo bloginfo('template_directory'); ?>/assets/img/svg/last-screen__left.svg" alt="" data-paroller-factor="0.01" data-paroller-type="foreground" data-paroller-direction="horizontal" data-paroller-transition="transform 1s ease-out">
							</div>                                    
							<div class="last-article__element-2-wrap" data-paroller-factor="0.01"  data-paroller-type="foreground" data-paroller-direction="vertical" data-paroller-transition="transform 1s ease-out">
								<img class="last-article__element" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" data-lazy="<?php echo bloginfo('template_directory'); ?>/assets/img/svg/last-screen__right.svg" alt="" data-paroller-factor="-0.01" data-paroller-type="foreground" data-paroller-direction="horizontal" data-paroller-transition="transform 1s ease-out">
							</div>
						</div>
					</div>                            
				</div>
				<img class="last-article__logo" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" data-lazy="<?php echo bloginfo('template_directory'); ?>/assets/img/svg/last-screen__logo.svg" alt="" data-aos="fade" data-aos-duration="800" data-aos-delay="800">
			</article>

		</div>
	</div>
	<!-- LAST SCREEN END -->            

</main>
<!-- MAIN END -->

<?php
	get_footer();
?>