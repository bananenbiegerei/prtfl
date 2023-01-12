<?php

foreach (glob('./acf-blocks/*.php') as $block) {
	include_once $block;
}
