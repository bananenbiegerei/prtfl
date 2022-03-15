<form
	id="query"
	action=""
	method="get"
	data-controller="form"
	data-turbo-frame="bike-list"
	data-turbo-permanent
	data-action="
	  input:change->form#submit
	  rangeslider:change->form#submit
	  satelliteform@window->form#submit
	"
	class="select-none"
  >
		<ul
		class="filters divide-y divide-gray-200"
		data-controller="filters">

			<li
			class="filter-item"
			data-controller="filter-item"
	  data-filter-item-open-value="<?php echo $has_nutzung ? 'true' : 'false'; ?>">
			 <div
				class="filter-item__title"
				data-filter-item-target="title"
				data-action="click->filter-item#toggle">
					<?php  _e('Nutzung'); ?>
				</div>
				<div
				class="filter-item__content"
		data-filter-item-target="content">
					<label class="input input--checkbox" for="nutzung-privat">
						<input
						type="checkbox"
						name="nutzung[]"
						id="nutzung-privat"
						value="privat"
			<?php if ($has_nutzung && in_array('privat', $nutzung)) { echo "checked"; } ?>
						data-controller="input"
						data-action="input#toggle active-filter:deactivate@window->input#handleDeactivate"
						data-input-name-value="Privat"
						data-input-id-value="nutzung-privat">
						<?php  _e('Privat')?>
					</label>
					<label class="input input--checkbox" for="nutzung-geschaeftlich">
						<input
						type="checkbox"
						name="nutzung[]"
						id="nutzung-geschaeftlich"
						value="gewerblich"
			<?php if ($has_nutzung && in_array('gewerblich', $nutzung)) { echo "checked"; } ?>
						data-controller="input"
						data-action="input#toggle active-filter:deactivate@window->input#handleDeactivate"
						data-input-name-value="Gewerblich"
						data-input-id-value="nutzung-geschaeftlich">
						<?php  _e('Gewerblich')?>
					</label>
				</div>
			</li>

	  <li
	  class="filter-item"
	  data-controller="filter-item">
		<div
		class="filter-item__title"
		data-filter-item-target="title"
		data-action="click->filter-item#toggle">
		  <?php  _e('Anzahl der Räder')?>
		</div>
		<div
		class="filter-item__content"
		data-filter-item-target="content">
		  <select
		  class="select"
		  name="ra"
		  id="raederanzahl"
		  data-controller="select"
		  data-action="select#change active-filter:deactivate@window->select#handleDeactivate"
		  data-select-name="ra"
		  data-select-id="ra">
			<option value=""><?php  _e('Bitte auswählen')?></option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
			<option value="6">6</option>
		  </select>
		</div>
	  </li>

	  <li
	  class="filter-item"
	  data-controller="filter-item"
	  data-filter-item-open-value="<?php echo $has_mklasse ? 'true' : 'false'; ?>">
		<div
		class="filter-item__title"
		data-filter-item-target="title"
		data-action="click->filter-item#toggle">
		  <?php  _e('Motorisierung')?>
		</div>
		<div
		class="filter-item__content"
		data-filter-item-target="content"
		data-controller="input-group"
		data-input-group-id-value="price"
		data-action="input:change->input-group#handleChange">
		  <?php
		  $mklasseObj = (get_field_object('field_5f76f86194dea'));

		  foreach($mklasseObj['choices'] as $choice) : ?>
			<label
			class="input input--checkbox"
			for="mklasse-<?php echo esc_attr($choice); ?>">
			  <input
			  type="checkbox"
			  name="mklasse[]"
			  id="mklasse-<?php echo esc_attr($choice); ?>"
			  value="<?php echo $choice; ?>"
			  <?php if (!empty($mklasse) && in_array($choice, $mklasse)) { echo "checked"; } ?>
			  data-controller="input"
			  data-action="input#toggle active-filter:deactivate@window->input#handleDeactivate"
			  data-input-name-value="<?php echo esc_html($choice); ?>"
			  data-input-id-value="mklasse-<?php echo esc_attr($choice); ?>"
			  data-input-group-target="input">
			  <?php echo esc_html($choice); ?>
			</label>
		  <?php endforeach; ?>
		</div>
	  </li>

	  <li
		class="filter-item"
		data-controller="filter-item"
		data-filter-item-open-value="<?php echo $has_ladung ? 'true' : 'false'; ?>"
	  >
		<div
		  class="filter-item__title"
		  data-filter-item-target="title"
		  data-action="click->filter-item#toggle"
		>
		  <?php  _e('Ladung')?>
		</div>
		<div
		  class="filter-item__content"
		  data-filter-item-target="content"
		  data-controller="input-group"
		  data-input-group-id-value="ladung"
		  data-action="change->input-group#handleChange"
		>
		  <?php
		  $ladungObj = (get_field_object('field_5e622c6c836e6'));

		  foreach($ladungObj['choices'] as $choice) : ?>
			<label
			  class="input input--checkbox"
			  for="ladung-<?php echo esc_attr($choice); ?>"
			>
			  <input
				type="checkbox"
				name="ladung[]"
				id="ladung-<?php echo esc_attr($choice); ?>"
				value="<?php echo $choice; ?>"
				<?php if (!empty($ladung) && in_array($choice, $ladung)) { echo "checked"; } ?>
				data-controller="input"
				data-action="input#toggle active-filter:deactivate@window->input#handleDeactivate"
				data-input-name-value="<?php echo esc_html($choice); ?>"
				data-input-id-value="ladung-<?php echo esc_attr($choice); ?>"
				data-input-group-target="input"
			  >
			  <?php echo esc_html($choice); ?>
			</label>
		  <?php endforeach; ?>
		</div>
			</li>

			<li
		class="filter-item"
		data-controller="filter-item"
		data-filter-item-open-value="<?php echo $has_fahrweise ? 'true' : 'false'; ?>"
	  >
		<div
		  class="filter-item__title"
		  data-filter-item-target="title"
		  data-action="click->filter-item#toggle"
		>
		  <?php  _e('Fahrweise')?>
		</div>
		<div
		  class="filter-item__content"
		  data-filter-item-target="content"
		  data-controller="input-group"
		  data-input-group-id-value="fahrweise"
		  data-action="change->input-group#handleChange"
		>
		  <?php
		  $fahrweiseObj = (get_field_object('field_5f6c6bc5bbb04'));

		  foreach($fahrweiseObj['choices'] as $choice) : ?>
			<label
			  class="input input--checkbox"
			  for="fahrweise-<?php echo esc_attr($choice); ?>"
			>
			  <input
				type="checkbox"
				name="fahrweise[]"
				id="fahrweise-<?php echo esc_attr($choice); ?>"
				value="<?php echo $choice; ?>"
				<?php if (!empty($fahrweise) && in_array($choice, $fahrweise)) { echo "checked"; } ?>
				data-controller="input"
				data-action="input#toggle active-filter:deactivate@window->input#handleDeactivate"
				data-input-name-value="<?php echo esc_html($choice); ?>"
				data-input-id-value="fahrweise-<?php echo esc_attr($choice); ?>"
				data-input-group-target="input"
			  >
			  <?php echo esc_html($choice); ?>
			</label>
		  <?php endforeach; ?>
		</div>
			</li>

			<li
			class="filter-item"
			data-controller="filter-item">
				<div
				class="filter-item__title"
				data-filter-item-target="title"
				data-action="click->filter-item#toggle">
					<?php  _e('Preis')?>
				</div>
				<div
				class="filter-item__content filter-item__content--slider"
				data-filter-item-target="content">
					<div
					class="rangeslider"
					data-controller="rangeslider"
					data-rangeslider-id-value="price"
					data-rangeslider-name-value="Preis"
					data-rangeslider-start-value="[1000, 20000]"
					data-rangeslider-step-value="100"
					data-rangeslider-rangemin-value="1000"
					data-rangeslider-rangemax-value="20000"
					data-action="
					active-filter:deactivate@window->rangeslider#handleDeactivate
					input-group:usable@window->rangeslider#checkDisabled">
						<div
						class="rangeslider__slider"
						data-rangeslider-target="slider"
						disabled=""></div>

						<input
						class="rangeslider__input"
						type="number"
						name="price_lower"
						id="price_lower"
						disabled=""
						size="2"
						data-rangeslider-target="input">

						<input
						class="rangeslider__input"
						type="number"
						name="price_upper"
						id="price_upper"
						disabled=""
						size="2"
						data-rangeslider-target="input">

			<div class="rangeslider__display" data-rangeslider-target="display"></div>
			<div class="rangeslider__display" data-rangeslider-target="display"></div>
					</div>
				</div>
			</li>
		</ul>
	</form>
