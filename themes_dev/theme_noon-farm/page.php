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

<?php if(have_posts()):while(have_posts()):the_post(); ?>

<div class="entryBox">

<div class="entryBoxHead">
<h2 class="entryTitle"><?php the_title(); ?></h2>
<!--<p class="entryDate"><a href="<?php the_permaLink(); ?>"><?php the_title(); ?></a></p>-->
<!--entryBoxHead--></div>

<div class="entryPhotoArea">
<?php the_post_thumbnail(array(700,9999)); ?>
<!--entryPhotoArea--></div>

<div class="entryText">
<?php the_content(); ?>
<!--entryText--></div>

<!--entryBox--></div>

<?php endwhile;endif; ?>


<!--mainCol--></div>
<!--container--></div>

<?php get_footer(); ?>