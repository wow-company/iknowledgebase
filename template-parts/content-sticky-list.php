<?php
/**
 * Template part for displaying sticky posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package iknowledgebase
 */

$post_icon = apply_filters( 'iknowledgebase_post_icon', 'icon-book' );
$sticky_icon_color = get_theme_mod( 'iknowledgebase_settings_sticky_icon_color', '' );
$sticky_icon_color = !empty($sticky_icon_color) ? ' '.$sticky_icon_color : $sticky_icon_color;
?>

<a class="panel-block is-borderless" href="<?php the_permalink(); ?>">
    <span class="panel-icon sticky<?php echo esc_attr($sticky_icon_color);?>">
        <span class="<?php echo esc_attr( $post_icon ); ?>"></span>
    </span>
	<h4><?php the_title(); ?></h4>
</a>
