<?php get_header(); ?>
<div id="contents" class="clearfix">
<div id="main" class="search">
<h1>「<?php the_search_query(); ?>」を含む記事<?php echo $wp_query->found_posts; ?>件</h1>
<?php if(have_posts()):while(have_posts()):the_post(); ?>
<div class="post">
<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
<div class="entry_content">
<?php the_content('続きを読む&raquo;'); ?>
</div>
</div>
<?php endwhile;endif; ?>
<p class="pagenavi">
<span class="previous_page"><?php previous_posts_link('&laquo;前のページへ'); ?></span>
<span class="next_page"><?php next_posts_link('次のページへ&raquo;'); ?></span>
</p>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>