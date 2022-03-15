<section aria-labelledby="details-heading" class="mt-6 lg:mt-12">
	<h2 id="details-heading" class="mb-4"><?php _e('Weitere Details') ?></h2>

	<ul>
	
		<li class="relative py-2 px-4 mb-4 border-2 border-blue rounded-xl" data-controller="reveal">
	
			<button type="button" class="w-full py-2 text-left font-bold text-blue" data-action="click->reveal#toggle">
				<div class="flex items-center justify-between">
					<span><?php _e('Motor und Akku') ?></span>
					<svg xmlns="http://www.w3.org/2000/svg" class="icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
						  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
						</svg>
				</div>
			</button>
	
			<div class="relative hidden transition-all duration-700" data-reveal-target="item">
					<dl class="styled-dl small">
						<?php get_template_part('template-parts/model/engine'); ?>
						<?php get_template_part('template-parts/model/battery'); ?>
					</dl>
			</div>
	
		</li>
	
	
		<li class="relative py-2 px-4 mb-4 border-2 border-blue rounded-xl" data-controller="reveal">
	
			<button type="button" class="w-full py-2 text-left font-bold text-blue" data-action="click->reveal#toggle">
				<div class="flex items-center justify-between">
					<span><?php _e('Ladung und Sitze') ?></span>
					<svg xmlns="http://www.w3.org/2000/svg" class="icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
						  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
						</svg>
				</div>
			</button>
	
			<div class="relative hidden transition-all duration-700" data-reveal-target="item">
				
				<dl class="styled-dl small">
					<?php get_template_part('template-parts/model/charge'); ?>
					<?php get_template_part('template-parts/model/seats-adults'); ?>
					<?php get_template_part('template-parts/model/kids'); ?>
					<?php get_template_part('template-parts/model/stuff'); ?>
				</dl>
			</div>
	
		</li>
	
	
		<li class="relative py-2 px-4 mb-4 border-2 border-blue rounded-xl" data-controller="reveal">
	
			<button type="button" class="w-full py-2 text-left font-bold text-blue" data-action="click->reveal#toggle">
				<div class="flex items-center justify-between">
					<span>
						<?php _e('Maße und Gewicht'); ?>
					</span>
					<svg xmlns="http://www.w3.org/2000/svg" class="icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
						  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
						</svg>
				</div>
			</button>
	
			<div class="relative hidden transition-all duration-700" data-reveal-target="item">
				
				<dl class="styled-dl small">
					<?php //get_template_part('template-parts/model/wheels'); ?>
					<?php get_template_part('template-parts/model/width'); ?>
					<?php get_template_part('template-parts/model/length'); ?>
					<?php get_template_part('template-parts/model/weight'); ?>
					<?php get_template_part('template-parts/model/entry-height'); ?>
				</dl>
			</div>
	
		</li>

		<li class="relative py-2 px-4 mb-4 border-2 border-blue rounded-xl" data-controller="reveal">
	
			<button type="button" class="w-full py-2 text-left font-bold text-blue" data-action="click->reveal#toggle">
				<div class="flex items-center justify-between">
					<span>
						<?php _e('Specials'); ?>
					</span>
					<svg xmlns="http://www.w3.org/2000/svg" class="icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
						  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
						</svg>
				</div>
			</button>
	
			<div class="relative hidden transition-all duration-700" data-reveal-target="item">
				
				<dl class="styled-dl small">
					<?php get_template_part('template-parts/model/specials'); ?>
				</dl>
			</div>
	
		</li>	
	</ul>
  </section>
