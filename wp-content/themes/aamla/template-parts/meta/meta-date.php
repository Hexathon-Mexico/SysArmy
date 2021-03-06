<?php
/**
 * The template part for displaying current post published / modified date.
 *
 * @package Aamla
 * @since 1.0.0
 */

?>

<span<?php aamla_attr( 'meta-date' ); ?>>
	<?php if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) : ?>
		<time datetime="<?php the_modified_date( DATE_W3C ); ?>"<?php aamla_attr( 'modified-entry-date' ); ?>>
			<?php the_modified_date(); ?>
		</time>
		<time datetime="<?php echo esc_attr( get_the_date( DATE_W3C ) ); ?>"<?php aamla_attr( 'entry-date' ); ?>>
			<?php echo esc_html( get_the_date() ); ?>
		</time>
	<?php else : ?>
		<time datetime="<?php echo esc_attr( get_the_date( DATE_W3C ) ); ?>"<?php aamla_attr( 'entry-date' ); ?>>
			<?php echo esc_html( get_the_date() ); ?>
		</time>
	<?php endif; ?>
</span><!-- .meta-date -->
