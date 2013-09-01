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

<?php 
$pageID = '1182';
$pagedata = get_page($pageID);
echo ('<div class="entryBox topicBox">');
echo ('<div class="entryBoxHead"><p class="entryTitle">お知らせ</p></div>');

echo ('<div class="entryText">');

echo ('<p>');
echo $pagedata->post_content;
echo ('</p>');
echo ('</div>');
echo ('</div>');
?>


<?php if(have_posts()):while(have_posts()):the_post(); ?>

<div class="entryBox">

	<div class="entryBoxHead">
	<p class="entryDate"><a href="<?php the_permaLink(); ?>"><?php echo get_the_date(); ?></a></p>
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


<div id="sideCol">

<div class="infoArea">
<div class="memoText">

<!--memoText--></div>
<!--infoArea--></div>

<!--sideCol--></div>




<!--container--></div>

<?php get_footer(); ?>