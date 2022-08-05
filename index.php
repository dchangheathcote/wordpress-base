<?php get_header(); ?>

<?php get_template_part('partials/logo') ?>

<?php
if ( have_posts() ) {

    while ( have_posts() ){ the_post();
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
			<?php the_title( '<h1>', '</h1>' ); ?>

	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
	</div><!-- .entry-content -->


</article><!-- #post-<?php the_ID(); ?> -->
<?php
    }
} else { ?>
    <div>
        <h2>no page</h2>
    </div><!-- .no-search-results -->
<?php
}
?>
<?php get_footer(); ?>