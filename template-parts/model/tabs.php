<div class="w-full max-w-2xl mx-auto mt-16 lg:max-w-none lg:mt-0 lg:col-span-4">
	<div>
	  <div class="border-b border-gray-200">
		<div class="-mb-px flex space-x-8" aria-orientation="horizontal" role="tablist">
		  <!-- Selected: "border-indigo-600 text-indigo-600", Not Selected: "border-transparent text-gray-700 hover:text-gray-800 hover:border-gray-300" -->
		  <button id="tab-reviews" class="border-transparent text-gray-700 hover:text-gray-800 hover:border-gray-300 whitespace-nowrap py-6 border-b-2 font-medium text-sm" aria-controls="tab-panel-reviews" role="tab" type="button">
			Motor und Akku
		  </button>
		  <button id="tab-faq" class="border-transparent text-gray-700 hover:text-gray-800 hover:border-gray-300 whitespace-nowrap py-6 border-b-2 font-medium text-sm" aria-controls="tab-panel-faq" role="tab" type="button">
			FAQ
		  </button>
		  <button id="tab-license" class="border-transparent text-gray-700 hover:text-gray-800 hover:border-gray-300 whitespace-nowrap py-6 border-b-2 font-medium text-sm" aria-controls="tab-panel-license" role="tab" type="button">
			License
		  </button>
		</div>
	  </div>

	  <!-- 'Customer Reviews' panel, show/hide based on tab state -->
	  <div id="tab-panel-reviews" class="-mb-10" aria-labelledby="tab-reviews" role="tabpanel" tabindex="0">
		<div class="border-t border-gray-200 mt-8 pt-8">
			<h2><?php _e('Motor und Akku') ?></h2>
			<dl class="styled-dl small">
				<?php get_template_part('template-parts/model/battery'); ?>
				<?php get_template_part('template-parts/model/engine'); ?>
			</dl>
		</div>
	  </div>

	  <!-- 'FAQ' panel, show/hide based on tab state -->
	  <dl id="tab-panel-faq" class="text-sm text-gray-500 hidden" aria-labelledby="tab-faq" role="tabpanel" tabindex="0">
		<h3 class="sr-only">Frequently Asked Questions</h3>

		<dt class="mt-10 font-medium text-gray-900">What format are these icons?</dt>
		<dd class="mt-2 prose prose-sm max-w-none text-gray-500">
		  <p>The icons are in SVG (Scalable Vector Graphic) format. They can be imported into your design tool of choice and used directly in code.</p>
		</dd>

		<dt class="mt-10 font-medium text-gray-900">Can I use the icons at different sizes?</dt>
		<dd class="mt-2 prose prose-sm max-w-none text-gray-500">
		  <p>Yes. The icons are drawn on a 24 x 24 pixel grid, but the icons can be scaled to different sizes as needed. We don&#039;t recommend going smaller than 20 x 20 or larger than 64 x 64 to retain legibility and visual balance.</p>
		</dd>

		<!-- More FAQs... -->
	  </dl>

	  <!-- 'License' panel, show/hide based on tab state -->
	  <div id="tab-panel-license" class="pt-10 hidden" aria-labelledby="tab-license" role="tabpanel" tabindex="0">
		<h3 class="sr-only">License</h3>

		<div class="prose prose-sm max-w-none text-gray-500">
		  <h4>Overview</h4>

		  <p>For personal and professional use. You cannot resell or redistribute these icons in their original or modified state.</p>

		  <ul role="list">
			<li>You're allowed to use the icons in unlimited projects.</li>
			<li>Attribution is not required to use the icons.</li>
		  </ul>

		  <h4>What you can do with it</h4>

		  <ul role="list">
			<li>Use them freely in your personal and professional work.</li>
			<li>Make them your own. Change the colors to suit your project or brand.</li>
		  </ul>

		  <h4>What you can't do with it</h4>

		  <ul role="list">
			<li>Don't be greedy. Selling or distributing these icons in their original or modified state is prohibited.</li>
			<li>Don't be evil. These icons cannot be used on websites or applications that promote illegal or immoral beliefs or activities.</li>
		  </ul>
		</div>
	  </div>
	</div>
  </div>