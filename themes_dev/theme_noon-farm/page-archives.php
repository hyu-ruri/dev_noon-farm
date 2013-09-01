<?php /*
Template Name: Archives
*/ ?>

<?php get_header(); ?>
<body>
<div id="wrap">

<div id="header">
<div id="logo">
<h1 id="logoImage"><a href="<?php echo home_url('/'); ?>"><img src="<?php bloginfo('template_url'); ?>/img/noom-farm-logo.png" alt="noom farm" /></a></h1>
<!--logo--></div>
<!--header--></div>



<div id="container">
<div id="mainCol">

<ul class="archive-list">
<?php wp_get_archives('limit=9999'); ?>
</ul>

<!--mainCol--></div>
<!--container--></div>

<?php get_footer(); ?>