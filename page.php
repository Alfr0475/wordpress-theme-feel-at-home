<?php get_header(); ?>
<div id="contents" class="clearfix">
<div id="main" class="page">
<?php if(have_posts()):while(have_posts()):the_post(); ?>
<div class="post">
<h1><?php the_title(); ?></h1>
<div class="entry_content">
<?php the_content(); ?>
</div>
</div>
<?php endwhile;endif; ?>
<p class="pagenavi"><?php posts_nav_link(' ','<span class="previous_page">&laquo;前のページへ</span>','<span class="next_page">次のページへ&raquo;</span>'); ?></p>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>