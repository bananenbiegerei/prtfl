<!-- Begin Mailchimp Signup Form -->
<link href="//cdn-images.mailchimp.com/embedcode/naked-10_7_dtp.css" rel="stylesheet" type="text/css">
<div id="mc_embed_signup">
	<form action="https://jetzt.us12.list-manage.com/subscribe/post?u=0fa33450650525117032e753a&amp;id=ada3ecce12" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
		<div id="mc_embed_signup_scroll">
			<?php if( get_field('newsletter_headline', 'option') ): ?>
			<h3 class="text-base">
				<?php the_field('newsletter_headline', 'option'); ?>
			</h3>
			<?php endif; ?>
			<?php if( get_field('newsletter_beschreibung', 'option') ): ?>
				<p class="my-4 text-base">
					<?php the_field('newsletter_beschreibung', 'option'); ?>
				</p>
			<?php endif; ?>
			
			<div class="mc-field-group">
				<label for="mce-EMAIL" class="sr-only"><?php _('Email-Adresse für den Newsletter-Empfang'); ?> <span class="asterisk">*</span>
				</label>
				<input type="email" value="" name="EMAIL" class="required email appearance-none min-w-0 w-full bg-white border border-gray-300 rounded-xl shadow-sm py-2 px-4 text-base text-gray-900 placeholder-gray-500 focus:outline-none focus:ring-blue-500 focus:border-blue-500 focus:placeholder-gray-400 mb-4" id="mce-EMAIL" placeholder="Email *">
			</div>
			<div id="mce-responses" class="clear foot">
				<div class="response" id="mce-error-response" style="display:none"></div>
				<div class="response" id="mce-success-response" style="display:none"></div>
			</div> <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
			<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_0fa33450650525117032e753a_ada3ecce12" tabindex="-1" value=""></div>
			<div class="optionalParent">
				<div class="clear foot">
					<input type="submit" value="Anmelden" name="subscribe" id="mc-embedded-subscribe" class="button">
				</div>
			</div>
		</div>
	</form>
</div>

<!--End mc_embed_signup-->