		<footer id="footer">
			<div class="row">
				<div class-"col-12">

					<div class="footer-content">
					   <?php echo apply_atomic_shortcode( 'footer_content', '<p class="credit">' . __( 'Copyright &copy; [the-year] [site-link]' ) . '</p>' ); ?>
					</div><!-- .footer-content -->
				</div>
			</div>
		</footer><!-- #footer -->

	<?php wp_footer(); // wp_footer ?>
	<script>

            // Prevent console.log from generating errors in IE for the purposes of the demo
            if ( ! window.console ) console = { log: function(){} };

            // The actual plugin
            $('#menu-primary').singlePageNav({
                offset: $('#menu-primary').outerHeight(),
                filter: ':not(.external)',
                beforeStart: function() {
                    console.log('begin scrolling');
                },
                onComplete: function() {
                    console.log('done scrolling');
                }
            });
    </script>
    <script>
        var nav = responsiveNav(".nav-collapse");
    </script>
</body>
</html>