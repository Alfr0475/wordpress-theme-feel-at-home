<?php get_header(); ?>
<div id="contents" class="clearfix">
<div id="main" class="archive">
<?php if(is_year()): ?>
<h1>「<?php echo get_the_date('Y年'); ?>」の記事</h1>
<?php elseif (is_month()) : ?>
<h1>「<?php echo get_the_date('Y年m月'); ?>」の記事</h1>
<?php elseif (is_day()) : ?>
<h1>「<?php echo get_the_date('Y年m月j日'); ?>」の記事</h1>
<?php else: ?>
<?php endif; ?>
<?php if(have_posts()):while(have_posts()):the_post(); ?>
<div class="post">
<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
<p class="entry_header"><?php the_time('Y年n月j日'); ?>&nbsp;/&nbsp;<?php the_category(', '); ?></p>
<div class="entry_content">
<?php the_content('続きを読む&raquo;'); ?>
</div>
<p class="tag"><?php the_tags(); ?></p>
</div>
<?php endwhile;endif; ?>
<p class="pagenavi">
<span class="previous_page"><?php previous_posts_link('&laquo;前のページへ'); ?></span>
<span class="next_page"><?php next_posts_link('次のページへ&raquo;'); ?></span>
</p>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>