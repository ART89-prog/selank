        <!-- BEGIN FOOTER -->
        <footer class="footer">
            <div class="footer__main wrapper">
                <div class="footer__cols">
                    <div class="footer__left">
                        <a class="footer-logo" href="<?php echo get_home_url(); ?>">
                            <img class="footer-logo__image" src="<?php the_field('footer_logo_image'); ?>" alt="">
                            <div class="footer-logo__row">
                                <div class="footer-logo__cell">
                                    <span class="footer-logo__title"><?php the_field('footer_logo_text'); ?></span>
                                </div>
                            </div>
                        </a>                     
                        <ul class="socials">
                            <li class="socials__item">
                                <a class="socials__link socials__link_icon-1" href="#"></a>
                            </li>
                            <li class="socials__item">
                                <a class="socials__link socials__link_icon-2" href="#"></a>
                            </li>
                            <li class="socials__item">
                                <a class="socials__link socials__link_icon-3" href="#"></a>
                            </li>
                            <li class="socials__item">
                                <a class="socials__link socials__link_icon-4" href="#"></a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer__center">
                        <div class="footer-nav">
                            <?php
                                wp_nav_menu( [
                                    'menu'            => 'footer-nav-1',
                                    'container'       => '',
                                    'menu_class'      => 'footer-nav__list',
                                    'echo'            => true,
                                    'fallback_cb'     => 'wp_page_menu',
                                    'items_wrap'      => '<ul class="footer-nav__list">%3$s</ul>',
                                    'depth'           => 1
                                ] );
                            ?>
                            <?php
                                wp_nav_menu( [
                                    'menu'            => 'footer-nav-2',
                                    'container'       => '',
                                    'menu_class'      => 'footer-nav__list',
                                    'echo'            => true,
                                    'fallback_cb'     => 'wp_page_menu',
                                    'items_wrap'      => '<ul class="footer-nav__list">%3$s</ul>',
                                    'depth'           => 1
                                ] );
                            ?>                          
                        </div>
                    </div>
                    <div class="footer__right">
                        <a class="small-video js-popup-open js-popup-video" data-frame="<?php the_field('footer_video_url'); ?>?autoplay=1" data-width="<?php the_field('footer_video_width'); ?>" data-height="<?php the_field('footer_video_height'); ?>" href="#video-popup" data-bg="<?php the_field('footer_video_preview'); ?>">
                            <span class="small-video__icon"></span>
                        </a>
                    </div>
                </div>
                <div class="copyrights"><?php the_field('footer_copyrights'); ?></div>
                <button class="footer__scroll-button scroll-button js-scroll-button">
                    <span class="scroll-button__icon"></span>
                </button>
            </div>
            <div class="footer__bg" style="background-image:url(<?php echo bloginfo('template_directory'); ?>/assets/img/footer__bg.png)"></div>
            <div class="footer__bg-mob" style="background-image:url(<?php echo bloginfo('template_directory'); ?>/assets/img/footer__bg-mob.png)"></div>
        </footer>
        <!-- FOOTER END -->       

    </div>   

    <!-- FIXED BOTTOM -->
    <div class="fixed-bottom js-fixed-bottom">
        <div class="fixed-bottom__text">ИМЕЮТСЯ ПРОТИВОПОКАЗАНИЯ. ПРОКОНСУЛЬТИРУЙТЕСЬ&nbsp;СО&nbsp;СПЕЦИАЛИСТОМ.</div>
        <button class="fixed-bottom__button close-window js-fixed-close">
            <span class="close-window__icon"></span>
        </button>
    </div>
    <!-- FIXED BOTTOM END -->
   
	<!-- BEGIN POPUP -->
	<div class="popup js-popup" id="popup">
		<div class="popup__row">
			<div class="popup__cell">
				<div class="popup__window js-popup-page-1">
                    <div class="popup__top">
                        <span class="popup__title"><?php the_field('popup_title_1'); ?></span>
                    </div>
                    <div class="popup__text-1"><?php the_field('popup_text_top'); ?></div>
                    <div class="popup__cols">
                        <div class="popup__col">
                            <button class="popup__button popup__button_yes button js-popup-open-page-2 js-popup-close" type="button">
                                <span class="button__text button__text_arrow"><?php the_field('popup_orange_button_text'); ?></span>
                            </button>
                        </div>
                        <div class="popup__col">
                            <button class="popup__button popup__button_no button button_transparent js-popup-close" type="button">
                                <span class="button__text"><?php the_field('popup_transparent_button_text'); ?></span>
                            </button>
                        </div>
                    </div>
                    <div class="popup__text-2"><?php the_field('popup_text_bottom'); ?></div>                    
				</div>
            </div>
            <div class="popup__mask js-popup-close"></div>
        </div>
	</div>
	<!-- POPUP END -->         

	<!-- BEGIN VIDEO POPUP -->
	<div class="popup popup_video js-popup" id="video-popup">
		<div class="popup__row">
			<div class="popup__cell">
				<div class="popup__window">
                    <div class="video-frame js-responsive-video js-video-frame"></div> 
                    <button class="popup__close close-button js-popup-close"></button>
				</div>
            </div>
            <div class="popup__mask js-popup-close"></div>
        </div>
	</div>
	<!-- VIDEO POPUP END -->   

	<?php
		wp_footer();
	?>



</body>
</html>