<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<link rel="alternate" type="application/rss+xml" title="RSSフィード" href="<?php bloginfo('rss2_url'); ?>" />
<?php if(is_home()): ?>
<title><?php bloginfo('name'); ?></title>
<?php else: ?>
<title><?php wp_title(''); ?> | <?php bloginfo('name'); ?></title>
<?php endif; ?>
<meta name="description" content="サイトの説明文が入ります。">
<meta name="keywords" content="WordPressテーマ,シンプル">
<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" type="text/css" media="all" />
<?php wp_head(); ?>
</head>
<body>
<div id="header">
<div id="head_area">
<?php if(is_home()): ?>
<h1 id="logo"><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
<?php else: ?>
<p id="logo"><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></p>
<?php endif; ?>
<div id="search_form">
<?php get_search_form(); ?>
</div>
<p id="description"><?php bloginfo('description'); ?></p>
</div>
</div>
<div id="gnavi">
<?php wp_nav_menu(); ?>
</div>