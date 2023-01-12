<?php if ( have_rows('rows') ): ?>
  <table class="
  <?php if ( get_field('has_fullwidth') ) :
  echo 'fullwidth hover';
  else:
  echo 'scroll hover';
  endif; ?>
  ">
    <?php while ( have_rows('rows') ) : the_row(); ?>
      <?php
      $is_table_head = get_sub_field( "is_table_head" );
      if ( $is_table_head ) :
        if ( have_rows('columns') ): ?>
        <thead>
          <tr>
            <?php while ( have_rows('columns') ) : the_row(); ?>
              <th class="
              <?php if ( get_sub_field('right_align') ) :
              echo 'text-right';
              else:
              endif; ?>
              ">
                <?php // @TODO: Bereinigung
                // ist das formatierter Text mit <p> etc.? Dann mit diesem Code ersetzen:
                // $text = get_sub_field('column');
                // if ($text) :
                //   $output = apply_filters('the_content', $text);
                //   echo wp_kses_post($output);
                // endif;
                the_sub_field('column');
                ?>
              </th>
            <?php endwhile; ?>
          </tr>
          </thead>
        <?php endif;
      else :
        if ( have_rows('columns') ): ?>
        <tbody>
          <tr>
            <?php while ( have_rows('columns') ) : the_row(); ?>
              <td class="
              <?php if ( get_sub_field('right_align') ) :
              echo 'text-right';
              else:
              endif; ?>
              ">
                <?php // @TODO Bereinigung, siehe oben
                the_sub_field('column'); ?>
              </td>
            <?php endwhile; ?>
          </tr>
          </tbody>
        <?php endif;
      endif;
      ?>
    <?php endwhile; ?>
  </table>
<?php endif; ?>