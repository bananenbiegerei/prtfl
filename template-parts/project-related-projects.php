<?php
    $related_projects = get_field('related_projects');
    if ($related_projects) : ?>
    <div class="col-span-12 ">
        <h3 class="mb-2">Related Projects:</h3>
    <ul class="grid grid-cols-6 gap-8 text-primary">
        <?php foreach ($related_projects as $related_project) : ?>
        <li>
            <a href="<?php echo get_permalink($related_project->ID); ?>"
                class="">
                <?php
                    if (has_post_thumbnail($related_project->ID)) {
                        echo get_the_post_thumbnail($related_project->ID, 'medium', array('class' => 'rounded shadow-md mb-2'));
                    }
                    ?>
                <span class="link"><?php echo get_the_title($related_project->ID); ?></span>
            </a>
        </li>
        <?php endforeach; ?>
    </ul>
    </div>
<?php endif; ?>