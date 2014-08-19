<?php get_header(); ?>

<?php if ( is_category() ) : ?>

	<h1 class="the-category"><?php single_cat_title( '', TRUE ); ?> </h1>

<?php endif ; ?>

<?php if ( have_posts() ) : ?> 
	<?php while ( have_posts() ) : the_post(); ?>
		<article class="clearfix">

			<time><?php the_time('F j, Y') ; ?></time>

			<?php if ( is_home() ) : ?>
				
				<h2><a href="<?php the_permalink(); ?>"><?php the_title() ; ?></a></h2>
				<?php the_excerpt() ; ?> 

		<?php else : ?>

			<?php if ( is_category() ) : ?>

					<h2><a href="<?php the_permalink(); ?>"><?php the_title() ; ?></a></h2>
					<?php the_excerpt() ; ?> 

			<?php else : ?>

				<h1><?php the_title() ; ?></h1>
				<?php the_content() ; ?>

				<div class="the-categories">
					<?php the_category(', ', 'single', get_the_ID()); ?> 
				</div>

				<div class="the-back">
					<a href="<?php echo home_url( '/' ) ; ?>">&larr; Go back</a>
				</div>

			<?php endif ; ?>

		<?php endif ; ?>

		</article>
	<?php endwhile; ?>
<?php endif ; ?>

<?php get_footer(); ?>