<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

$the_theme = wp_get_theme();
$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_sidebar( 'footerfull' ); ?>

<div class="wrapper black-box" id="wrapper-footer">

		<div class="row container-fluid--boxed">

				<footer class="site-footer" id="colophon">

					<div class="site-info">

						&copy;<a class="site-footer__logo"></a>
						<button class="site-footer__back-to-top">Back to top <span class="site-footer__back-to-top__arrow"></span>	 </button>
							
					</div><!-- .site-info -->

				</footer><!-- #colophon -->

		</div><!-- row end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-75124049-1');
</script>

<script type="text/javascript">
	_linkedin_partner_id = "564617";
	window._linkedin_data_partner_ids = window._linkedin_data_partner_ids || [];
	window._linkedin_data_partner_ids.push(_linkedin_partner_id);
</script>
<script type="text/javascript">
	(function(){var s = document.getElementsByTagName("script")[0];
	var b = document.createElement("script");
	b.type = "text/javascript";b.async = true;
	b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js";
	s.parentNode.insertBefore(b, s);})();
</script>
<noscript>
	<img height="1" width="1" style="display:none;" alt="" src="https://dc.ads.linkedin.com/collect/?pid=564617&fmt=gif" />
</noscript>

</body>

</html>

