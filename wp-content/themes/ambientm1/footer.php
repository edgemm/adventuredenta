		<footer class="footer" role="contentinfo">	
			<div class="container">
				<div itemscope itemtype="http://schema.org/LocalBusiness" class="copyright-holder">
					<p class="copyright"><span itemprop="name">&copy; <?php echo date( 'Y' ); ?> Adventure Dental†</span></p>
					<div class="address" itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
						<p><a href="https://goo.gl/maps/Fd8lg" target="_blank"><span itemprop="streetAddress">900 NE 139th Street, Suite #106 </span><span itemprop="addressLocality">Vancouver</span>, <span itemprop="addressRegion">WA</span> <span itemprop="postalCode">98685</span></a></p></div><p class="phone"><span itemprop="telephone"><a href="tel:360.604.9000">(360) 604-9000</a></span></p><div itemprop="geo" itemscope itemtype="http://schema.org/GeoCoordinates"> <meta itemprop="latitude" content="45.7219063" /><meta itemprop="longitude" content="-122.663113" />
						<p class="disclaimer-privacy"><a href="/">Disclaimer</a> | <a href="/">Privacy Policy</a></p>
					</div>
				</div>
				<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('subfooter')) ?>
				<p class="reference">
					Web Design <span>+</span> Development by <a href="http://ambientm.com">Ambient</a>
				</p>
			

			</div>
	
	
		</footer>
		<!-- /footer -->
		
		<!-- jquery cdn and custom scripts -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/1.9.1/jquery.min.js"><\/script>');</script>

		<?php wp_footer(); ?>
		
		<!-- analytics -->
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		
		  ga('create', 'UA-6887883-1', 'adventuredental.com');
		  ga('send', 'pageview');
		
		</script>
	
	</body>
</html>