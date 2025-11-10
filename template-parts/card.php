<span>•
<?php if (has_post_thumbnail()) { ?>
<?php echo get_the_post_thumbnail(get_the_ID(), 'two-columns', array('class' => 'rounded-lg shadow-abcd inline h-24 w-auto border')); ?>
<?php } ?><a class="mx-2 link" href="<?php the_permalink();?>"><h3 class="inline"><?php the_title(); ?></h3></a></span>