<?php
add_filter( 'query_vars', function( $vars ) {
    $vars[] = 'nutzung';
    $vars[] = 'ladung';
    $vars[] = 'fahrweise';
    $vars[] = 'ra';
    $vars[] = 'mklasse';
    $vars[] = 'price_lower';
    $vars[] = 'price_upper';
    return $vars;
});

add_filter( 'pre_get_posts', function( $query ) {
    if ( $query->is_main_query() && (is_post_type_archive( 'modellvariante' ) || is_post_type_archive('modell')) ) {
        $query->set( 'posts_per_page', -1 );
        $meta_query = array(
            'relation' => 'AND'
        );

        $nutzungen = get_query_var( 'nutzung' ); 
        if ( !empty( $nutzungen ) ) {
          if ( is_array( $nutzungen ) ) {
            $meta_query['nutzung'] = array(
              'relation' => 'OR',
            );

            foreach ($nutzungen as $nutzung) {
              $meta_query['nutzung'][] = array(
                'key' => 'nutzungsart',
                'value' => $nutzung,
                'compare' => 'LIKE'
              );
            }
          } else { 
            $meta_query[] = array(
                'key' => 'nutzungsart',
                'value' => $nutzungen,
                'compare' => 'LIKE',
            );
          }
        }


        $ladung = get_query_var( 'ladung' );
        if ( !empty( $ladung ) ) {
          if ( is_array( $ladung ) ) {
            $meta_query['ladung'] = array(
              'relation' => 'OR',
            );

            foreach ($ladung as $art) {
              $meta_query['ladung'][] = array(
                'key' => 'ladung',
                'value' => $art,
                'compare' => 'LIKE'
              );
            }
          } else { 
            $meta_query[] = array(
                'key' => 'ladung',
                'value' => $ladung,
                'compare' => 'LIKE',
            );
          }
        }

        $fahrweise = get_query_var( 'fahrweise' );
        if ( !empty( $fahrweise ) ) {
          if ( is_array( $fahrweise ) ) {
            $meta_query['fahrweise'] = array(
              'relation' => 'OR',
            );

            foreach ($fahrweise as $art) {
              $meta_query['fahrweise'][] = array(
                'key' => 'fahrweise',
                'value' => $art,
                'compare' => 'LIKE'
              );
            }
          } else { 
            $meta_query[] = array(
                'key' => 'fahrweise',
                'value' => $fahrweise,
                'compare' => 'LIKE',
            );
          }
        }

        $raederanzahl = get_query_var( 'ra' );
        if ( !empty( $raederanzahl ) ) {
          $meta_query['ra'] = array(
              'key' => 'anzahl_der_raeder',
              'value' => $raederanzahl,
              'compare' => '=',
          );
        }

        $mklasse = get_query_var( 'mklasse' );
        if ( !empty( $mklasse ) ) {
          if ( is_array( $mklasse ) ) {
            $meta_query['mklasse'] = array(
              'relation' => 'OR',
            );

            foreach ($mklasse as $klasse) {
              $meta_query['mklasse'][] = array(
                'key' => 'motorisierungsklasse',
                'value' => $klasse,
                'compare' => 'LIKE'
              );
            }
          } else { 
            $meta_query[] = array(
                'key' => 'motorisierungsklasse',
                'value' => $klasse,
                'compare' => 'LIKE'
            );
          }
        }

        $price_lower = get_query_var( 'price_lower' );
        $price_upper = get_query_var( 'price_upper' );
        if ( !empty( $price_lower ) && !empty( $price_upper ) && !empty( $mklasse ) ) {

          in_array('Ohne E Antrieb', $mklasse);

          switch ($mklasse) {
            case in_array('Ohne E Antrieb', $mklasse):
              $price_meta_key = 'uvp_ab_uvp_ohne_e_ab';
              break;
            case in_array('Pedelec25', $mklasse):
              $price_meta_key = 'uvp_ab_uvp_pedelec25_ab';
              break;
            case in_array('Pedelec45', $mklasse):
              $price_meta_key = 'uvp_ab_uvp_pedelec45_ab';
              break;
            case in_array('anderer Pedelec-Antrieb', $mklasse):
              $price_meta_key = 'uvp_ab_uvp_andere_motorisierung_ab';
              break;
            
            default:
              $price_meta_key = 'uvp_ab_uvp_ohne_e_ab';
              break;
          }

          $meta_query['price'] = array(
              'key' => $price_meta_key,
              'value' => [$price_lower, $price_upper],
              'compare' => 'BETWEEN',
              'type' => 'NUMERIC',
          );
        }

        $query->set( 'meta_query', $meta_query);
    }
});
