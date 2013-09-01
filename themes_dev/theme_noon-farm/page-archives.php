<?php /*
Template Name: Archives
*/ ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Script-Type" content="text/javascript" />
<title><?php wp_title('-',true,'right'); ?><?php bloginfo('name'); ?></title>
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

<ul class="archive-list">
<?php wp_get_archives('limit=9999'); ?>
</ul>



<!--mainCol--></div>

<!--container--></div>

<?php get_footer(); ?>