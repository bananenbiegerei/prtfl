<!-- Modal -->
<div x-show="open" style="display: none" x-on:keydown.escape.prevent.stop="open = false" role="dialog" aria-modal="true"
    x-id="['modal-title']" :aria-labelledby="$id('modal-title')" class="fixed inset-0 z-50 overflow-y-auto">
    <!-- Overlay -->
    <div x-show="open" x-transition.opacity class="fixed inset-0 bg-primary-100/50 backdrop-blur-sm"></div>

    <!-- Panel -->
    <div x-show="open" x-transition x-on:click="open = false"
        class="relative flex min-h-screen items-center justify-center p-4">
        <div x-on:click.stop x-trap.noscroll.inert="open"
            class="relative w-full max-w-5xl overflow-y-auto rounded-xl bg-white p-8 shadow-xl">
            <!-- Title -->
            <h3 class="text-lg mb-6" :id="$id('modal-title')"><?php _e('Andere Projekte für: ', BB_TEXT_DOMAIN) ?> <?= $client_title ?></h3>

            <!-- Content -->
            <ul class="grid grid-cols-2 gap-4">
                <?php while ($related_projects->have_posts()) : $related_projects->the_post(); ?>
                <li>
                    <?php get_template_part('template-parts/card-mini'); ?>
                </li>
                <?php endwhile; ?>
            </ul>

            <!-- Buttons -->
            <div class="mt-8 flex space-x-2">
                <button class="sr-only" type="button" x-on:click="open = false">
                    Cancel
                </button>
            </div>
        </div>
    </div>
</div>