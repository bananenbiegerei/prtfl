<a class="relative inline-block h-16 px-2 overflow-hidden transition border border-black rounded-full hover:shadow-abcd" href="<?php the_permalink();?>">
<?php if (has_post_thumbnail()) { ?>
<?php echo get_the_post_thumbnail(get_the_ID(), 'two-columns', array('class' => 'relative top-0 left-0 inline h-16 w-auto border mr-2')); ?>
<?php } ?><h3 class="inline"><?php the_title(); ?></h3></a>