
<footer class="main-footer">
	<div class="footer-icons">
		<a href="http://facebook.com/DecibelFestival" class="footer-icon icon-fb" target="_blank" alt="Facebook" title="Facebook"></a>
		<a href="http://twitter.com/dBFestival" class="footer-icon icon-tw" target="_blank" alt="Twitter" title="Twitter"></a>
		<a href="http://youtube.com/DecibelFestival" class="footer-icon icon-yt" target="_blank" alt="YouTube" title="YouTube"></a>
		<a href="http://soundcloud.com/decibelfestival" class="footer-icon icon-sc" target="_blank" alt="Soundcloud" title="Soundcloud"></a>
		<a href="http://open.spotify.com/user/decibelfestival/playlist/6sHwzjowBgYBuA7fhQrqbU" class="footer-icon icon-sp" target="_blank" alt="Spotify" title="Spotify"></a>
		<a href="http://www.crateplayer.com/decibelfestival" class="footer-icon icon-crate" target="_blank" alt="CratePlayer" title="CratePlayer"></a>
	</div>
</footer>

<!--
<div id="footer" class="container">

	<?php if (false) { // if (false !== strpos($_SERVER['REQUEST_URI'],'dbx')) { // yes festival page ?>
	
	<div class="row content-margin">
		<div class="span12">
			<div id="timer-countdown">
				<span id="timer-countdown-days"></span> DAYS <span id="timer-countdown-hours"></span> HOURS
			</div>
	
			<div id="bpm-countdown">
				<span id="bpm-countdown-beats"></span> BEATS @ <span id="bpm-countdown-bpm">120</span> BPM <a href="#" class="triangle-up bpm-up"></a><a href="#" class="triangle-down bpm-down"></a>
			</div>
		</div>
	</div>	

	<?php } ?>
	
	<div class="row footer-connect">
		<div class="span12">
		
			<div class="email-signup">

				<div class="footerwidget">
					<span class="widget_title">EMAIL SIGNUP</span>

			        <form action="http://dbfestival.us8.list-manage1.com/subscribe/post?u=a5d38ae3ed253183e978741b2&amp;id=cb967e1922" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
			        	<label for="mc_email">Email:</label>
			        	<div class="input-text-wrap">
			            	<input type="email" value="" name="EMAIL" class="email" id="mc_email" required>
			            </div>
			            <div>
			            	<input type="submit" value="JOIN" name="subscribe" id="mc-embedded-subscribe" class="button submit">
			            </div>
			        </form>
			    </div>
		        

				<!-- <?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar('ConstantContact') ) : else :
					endif;
				?> -->
				<!--
			</div>

			<div class="footericons">
				<a href="http://facebook.com/DecibelFestival" class="sm icon-fb" target="_blank" alt="Facebook" title="Facebook"></a>
				<a href="http://twitter.com/dBFestival" class="sm icon-tw" target="_blank" alt="Twitter" title="Twitter"></a>
				<a href="http://youtube.com/DecibelFestival" class="sm icon-yt" target="_blank" alt="YouTube" title="YouTube"></a>
				<a href="http://soundcloud.com/decibelfestival" class="sm icon-sc" target="_blank" alt="Soundcloud" title="Soundcloud"></a>
				<a href="http://open.spotify.com/user/decibelfestival/playlist/6sHwzjowBgYBuA7fhQrqbU" class="sm icon-sp" target="_blank" alt="Spotify" title="Spotify"></a>
				<a href="http://www.crateplayer.com/decibelfestival" class="sm icon-crate" target="_blank" alt="CratePlayer" title="CratePlayer"></a>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="span12 hosted">
			<a id="credit" href="http://mdressman.com/" target="_blank">website by mdressman</a>
			// <a id="pagely" href="http://page.ly" target="_blank">WordPress Hosting by Page.ly</a>
		</div>
	</div>
</div>

-->

    <!-- Le javascript
    ================================================== -->
   
    <script src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
    <script src="<?php bloginfo( 'template_url' ); ?>/bootstrap/js/bootstrap.js"></script>
    <script src="<?php bloginfo( 'template_url' ); ?>/js/jquery.cycle.all.js"></script>
    <script src="<?php bloginfo( 'template_url' ); ?>/js/jquery.nivo.slider.pack.js"></script>
    <script src="<?php bloginfo( 'template_url' ); ?>/js/twitlive-min.js"></script>
    <script src="<?php bloginfo( 'template_url' ); ?>/js/jquery.color-2.1.1.min.js"></script>
    <script src="<?php bloginfo( 'template_url' ); ?>/js/jquery.isotope.min.js"></script>
    <script src="<?php bloginfo( 'template_url' ); ?>/js/parallax.min.js"></script>

    <script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/functions.js"></script>
	
	<script type="text/javascript">
		function updateTimeCountdown(festStart) {
			var now = new Date();
			var dayRound = new Date(now.getFullYear(), now.getMonth(), now.getDate()+1);
			var hourRound = new Date(now.getFullYear(), now.getMonth(), now.getDate(), now.getHours());
			$('#timer-countdown-days').html((festStart.valueOf() - dayRound.valueOf())/(1000*60*60*24));
			$('#timer-countdown-hours').html(((festStart.valueOf() - hourRound.valueOf()) - (festStart.valueOf() - dayRound.valueOf()))/(1000*60*60));
		}
		function iniAndLoopTimer(festStart) {
			if (typeof festStart === 'undefined') festStart = new Date(2014, 8, 25, 0, 0, 0, 0);
			updateTimeCountdown(festStart);
			var now = new Date();
			var nextHour = new Date(now.getFullYear(), now.getMonth(), now.getDate(), now.getHours()+1);
			window.setTimeout("iniAndLoopTimer()", nextHour.valueOf() - now.valueOf());
		}
		function updateBPMCountdown(festStart) {
			var now = new Date();
			$('#bpm-countdown-beats').html(numberWithCommas(Math.round((festStart.valueOf() - now.valueOf())/(1000*60)*parseInt($('#bpm-countdown-bpm').text(), 10))));
		}
		function numberWithCommas(x) {
			return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
		}
		function iniAndLoopBPM(festStart) {
			if (typeof festStart === 'undefined') festStart = new Date(2014, 8, 25, 0, 0, 0, 0);
			updateBPMCountdown(festStart);
			window.clearTimeout(window['bpm-timout']);
			window['bpm-timout'] = window.setTimeout("iniAndLoopBPM()", 60/parseInt($('#bpm-countdown-bpm').text(), 10)*1000);
		}
		
		$(function() {
			iniAndLoopTimer();
			iniAndLoopBPM();
			
			$(document).on('click', '.bpm-up', function() {
				$('#bpm-countdown-bpm').html(parseInt($('#bpm-countdown-bpm').text(), 10)+1);
				iniAndLoopBPM();
				return false;
			}).on('click', '.bpm-down', function() {
				$('#bpm-countdown-bpm').html(parseInt($('#bpm-countdown-bpm').text(), 10)-1);
				iniAndLoopBPM();
				return false;
			});
			//if on a apge with the artist select box
			if ($('#artist-select').length>0) {
				$(document).on('change', '#artist-select select', function() {
					if ($(this).val() != '-1') window.location = $(this).val();
				});
			}
		});
	</script>

	<script type="text/javascript">
		setTimeout(function(){var a=document.createElement("script");
		var b=document.getElementsByTagName("script")[0];
		a.src=document.location.protocol+"//dnn506yrbagrg.cloudfront.net/pages/scripts/0017/0035.js?"+Math.floor(new Date().getTime()/3600000);
		a.async=true;a.type="text/javascript";b.parentNode.insertBefore(a,b)}, 1);
	</script>
	 
	<script type="text/javascript">
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-31811634-1']);
		_gaq.push(['_trackPageview']);
		(function() {
		  var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		  ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';
		  var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
	</script>

	<?php wp_footer(); ?>

    </body>
</html>