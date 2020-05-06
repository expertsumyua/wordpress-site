<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <div class="entry-content">
        <?php
            // $current_page = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $params = array(
                'post_type'       => 'galery', // тип постов
            );
            $querty = new WP_Query($params) ;

            if ( $querty->have_posts() ) :
             
            while( $querty->have_posts() ): $querty->the_post();
                ?>
                    <h2><?php the_title(); ?></h2>
                    <p><?php the_excerpt(); ?></p>
                    <p><?php the_content(); ?></p>
                    <p>Ссылка на автора:<br><a href="<?php the_field('link') ?>"><?php the_field('name');?></a></p>
                <?php
            endwhile;
             
             else :
            ?>
            <p><?php esc_html_e('Нет постов девушками.'); ?></p>
        <?php endif; ?>
    </div><!-- .entry-content -->
</article>
