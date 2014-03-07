<?php get_header(); ?>
<div id="contents" class="clearfix">
<div id="main" class="single">
<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
<div class="recent_entry">
<h1><?php the_title(); ?></h1>
<p class="entry_header"><?php the_time('Y年n月j日'); ?>&nbsp;/&nbsp;<?php the_category(', '); ?></p>
<div class="entry_content">
<?php the_content(); ?>
</div>
<p class="tag"><?php the_tags(); ?></p>
<div class="post_link">
<span class="previus"><?php previous_post_link('%link', '&laquo;前の記事へ'); ?></span>
<span class="next"><?php next_post_link('%link', '次の記事へ&raquo;'); ?></span>
</div>
<?php comments_template(); ?>
</div>
<?php endwhile; endif; ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>