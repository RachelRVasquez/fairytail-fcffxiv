<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *
 * @package WordPress
 * @subpackage blankSlate
 * @since blankSlate 3.5
 */
?>
		</div><!--middle-content-->
		
	</div><!-- #main .wrapper -->
    </div><!--char wrapper-->
    <div class="push"></div>
</div><!-- #page -->
<div class="footer-wrap">
<div class="footer margin-auto overflow">
	<!--<div class="footer-links float-left">
    <?php wp_nav_menu( array( 'theme_location' => 'Footer Links', 'menu_class' => 'footer-menu' ) ); ?>
    </div>-->
    <div class="logo-links margin-auto">
    <a href="http://www.finalfantasyxiv.com/" target="_blank">
    	<img src="<?php echo get_template_directory_uri();?>/images/img_ffLogo.png" alt="Final Fantasy XIV: A Realm Reborn"/>
    </a>
    <a href="http://www.tv-tokyo.co.jp/anime/fairytail/index2.html" target="_blank">
    	<img src="<?php echo get_template_directory_uri();?>/images/img_ftLogo.png" alt="Fairy Tail on TV Tokyo"/>
    </a>
    </div><!--logo-links-->
    <div class="clear"></div>
	<div class="copyrights">
    <p>Copyright &copy;Hiro Mashima - KODANSHA/Fairy Tail Guild -TV TOKYO. 
    Copyright &copy; 2010 - 2013 SQUARE ENIX CO., LTD. All Rights Reserved.</p>
    <p>All company, product, system names and/or company logos and marks are the registered trademarks or trademarks of their respective owners.</p>
	</div>
</div>
</div>
</div><!-- sticky-wrapper-->
<?php wp_footer(); ?>
</body>
</html>