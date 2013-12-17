
<footer id="footer" role="contentinfo">
	<div class="wrapper">

		<div class="left">
			<div class="contact-info">
				<h3>Contact Us</h3>
				<ul>
					<li>Akron, OHIO</li>
					<li><i class="icon-mobile"></i> 330.310.8001</li>
					<li><i class="icon-mail"></i> <a href="mailto:jackie@southpawpetsit.com">jackie@southpawpetsit.com</a></li>
				</ul>
			</div>

			<div class="socials">
				<h3>Come Play With Us</h3>
				<ul>
					<li>
						<i class="icon-twitter"></i> 
						<a target="_blank" href="">Twitter</a>
					</li>
					<li>
						<i class="icon-facebook"></i> 
						<a target="_blank" href="https://www.facebook.com/pages/SouthPaw-Pet-Sitting/132692790451?ref=ts&fref=ts">Facebook</a>
					</li>
					<li>
						<i class="icon-instagram"></i> 
						<a target="_blank" href="http://instagram.com/southpawpetsitting">Instagram</a>
					</li>
				</ul>
			</div>

			<div class="advice-box">
				<h3><i class="icon-bone"></i>Saving Good Dogs From Bad Dog Food</h3>
				<p>Wanna know what you're feeding Fido? Visit to find out! <a target="_blank" href="http://dogfoodadvisor.com">www.dogfoodadvisor.com</a></p>
			</div>
		</div><!-- .left -->

		<div class="right">
			<div class="contact-form">
				<h3>Send In Your Bark</h3>
				<form method="post" action="/php/process-contact-form">
					<ul>
						<li class="spam">
							<input type="text" name="Spam" />
						</li>
						<li>
							<label>Name:</label>
							<input type="text" name="Name" id="Name" required />
						</li>
						<li>
							<label>Email:</label>
							<input type="email" name="Email" id="Email" required />
						</li>
						<li>
							<label>Speak!</label>
							<textarea name="Message" rows="5" cols="20" id="Message"></textarea>
						</li>
						<button type="submit">Submit</button>
					</ul>
				</form>
			</div>
		</div><!-- .right -->

		<div class="bottom">
			<div class="misc">
				<a id="back-to-top" href="#"><span>Back To Top</span></a>
			</div>
			<div class="legal left">
				<p>&copy; Copyright <?php echo $clientName; ?> <?php echo date("Y"); ?>. <br /> All Rights Reserved.</p>
			</div>
			<div class="site-info right">
				<p><span>Site Designed and Powered by</span> <a target="_blank" href="http://sniffdesign.com"></a></p>
			</div>
		</div><!-- .bottom -->
		
	</div><!-- .wrapper -->

</footer>
</div><!-- #wrapper -->

<!-- JS -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>window.jQuery || document.write("<script src='/js/jquery/1.10.2/jquery.min.js'>\x3C/script>")</script>
<script src="/js/client.js"></script>

  
</body>
</html>