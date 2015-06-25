<?php 
/* SideBar Partials for sidebar.php and sidebar-front.php */
?>

	<iframe  class="server-status" style="margin-top:-5px; margin-bottom:-5px;" width="100%" height="44" src="http://www.arrstatus.com/embed/pages/embed_32.html" frameborder="0" scrolling="no"></iframe>

	<aside class="widget member-tools">
		<h3 class="widget-title">Member Tools</h3>
		<ul class="widget-content">
			<li <?php if ( is_user_logged_in() ) { echo 'class="logged-in-sidebar"'; }?> ><a href="<?php echo esc_url( home_url( '/apply' ) ); ?>" class="btn-class text-indent btn-apply">Apply Here</a>
			<li <?php if ( is_user_logged_in() ) { echo 'class="logged-in-sidebar"'; }?> ><a href="<?php echo esc_url( home_url( '/register' ) ); ?>" class="btn-class text-indent btn-login">Register Here</a>
			<li><a href="<?php echo esc_url( home_url( '/member-search' ) ); ?>" class="btn-class text-indent btn-memsearch">Member Search</a>
			<li><a href="<?php echo esc_url( home_url( '/groups' ) ); ?>" class="btn-class text-indent btn-groups">Group Chat</a>
			<li><a href="<?php echo esc_url( home_url( '/achievements' ) ); ?>" class="btn-class text-indent btn-achievements">Achievement List</a>
			<li><a href="<?php echo esc_url( home_url( '/member-of-the-month' ) ); ?>" class="btn-class text-indent btn-mom">Member of the Month</a>
			<li><a href="<?php echo esc_url( home_url( '/twitch_page/fairy-tail-twitch-tv/' ) ); ?>" class="btn-class text-indent btn-twitch">Fairy Tail Twitch</a>
			<li <?php if ( !is_user_logged_in() ) { echo 'class="logged-out-sidebar"'; }?>><a href="<?php echo esc_url( home_url( '/srank/' ) ); ?>" class="btn-class text-indent btn-srank">S-Rank Exam</a>
		</ul>
	</aside>

	<aside class="widget quick-links">
		<h3 class="widget-title">Quick Links</h3>
		<ul class="overflow widget-content">
			<li class="left"><a href="https://secure.square-enix.com/account/app/svc/Login?cont=account&request=mogstation" class="btn-class text-indent btn-square" target="_blank" title="Mog Station">Mog Station</a></li>
			<li class="right"><a href="http://na.finalfantasyxiv.com/lodestone/" class="btn-class text-indent btn-lodestone" target="_blank" title="FFXIV Lodestone">Lodestone</a></li>
			<li class="left"><a href="http://ffxiv.gamerescape.com/" class="btn-class text-indent btn-gamer" target="_blank" title="Gamer Escape">Gamer Escape</a></li>
			<li class="right"><a href="http://www.ffxivpro.com/" class="btn-class text-indent btn-pro" target="_blank" title="FFXIV Pro">FFXIV Pro</a></li>
			<li class="left"><a href="http://xivpads.com/" class="btn-class text-indent btn-pads" target="_blank" title="XIV Pads">XIV Pads</a></li>
			<li class="right"><a href="http://xivdb.com/" class="btn-class text-indent btn-db" target="_blank" title="XIV DB">XIV DB</a></li>
			<li class="left"><a href="http://ffxiv.zam.com/" class="btn-class text-indent btn-zam" target="_blank" title="FFXIV ZAM">FFXIV ZAM</a></li>
			<li class="right"><a href="http://www.disciplesoftheland.com/Default.aspx" class="btn-class text-indent btn-disciple" target="_blank" title="Disciples of Land">Disciples of Land</a></li>
			<li class="left"><a href="https://twitter.com/FFXIV_NEWS_EN" class="btn-class text-indent btn-twitter" target="_blank" title="FFXIV Twitter">FFXIV Twitter</a></li>

		<ul>
	</aside>