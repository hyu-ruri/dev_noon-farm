<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Script-Type" content="text/javascript" />
<meta http-equiv="Pragma" content="no-cache" />
<meta http-equiv="Cache-Control" content="no-cache" />

<title><?php wp_title('-',true,'right'); ?><?php bloginfo('name'); ?> | 佐藤省吾のBLOG</title>
<meta name="description" content="長野県にあるリンゴ農家 佐藤省吾のBLOG">

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?>-RSSフィード" href="<?php bloginfo('rss2_url'); ?>" />
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-2326961-6']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>

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