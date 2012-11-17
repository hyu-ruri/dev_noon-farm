<?php
/*
Plugin Name: EnglishDate
Plugin URI: http://www.feelwct.jp/staffblog/
Description: For Wordpress Japanese version only.
Author: FeelWCT
Version: 0.2
Author URI: http://www.feelwct.jp/
*/ 

function enDate_init(){
	global $wp_locale;

		$wp_locale->weekday[0] = ('Sunday');
		$wp_locale->weekday[1] = ('Monday');
		$wp_locale->weekday[2] = ('Tuesday');
		$wp_locale->weekday[3] = ('Wednesday');
		$wp_locale->weekday[4] = ('Thursday');
		$wp_locale->weekday[5] = ('Friday');
		$wp_locale->weekday[6] = ('Saturday');

		$wp_locale->weekday_initial[('Sunday')]    = ('Sun');
		$wp_locale->weekday_initial[('Monday')]    = ('Mon');
		$wp_locale->weekday_initial[('Tuesday')]   = ('Tue');
		$wp_locale->weekday_initial[('Wednesday')] = ('Wed');
		$wp_locale->weekday_initial[('Thursday')]  = ('Thu');
		$wp_locale->weekday_initial[('Friday')]    = ('Fri');
		$wp_locale->weekday_initial[('Saturday')]  = ('Sat');


		$wp_locale->weekday_abbrev[('Sunday')]    = ('Sun');
		$wp_locale->weekday_abbrev[('Monday')]    = ('Mon');
		$wp_locale->weekday_abbrev[('Tuesday')]   = ('Tue');
		$wp_locale->weekday_abbrev[('Wednesday')] = ('Wed');
		$wp_locale->weekday_abbrev[('Thursday')]  = ('Thu');
		$wp_locale->weekday_abbrev[('Friday')]    = ('Fri');
		$wp_locale->weekday_abbrev[('Saturday')]  = ('Sat');



		$wp_locale->month_abbrev[('January')] = ('Jan');
		$wp_locale->month_abbrev[('February')] = ('Feb');
		$wp_locale->month_abbrev[('March')] = ('Mar');
		$wp_locale->month_abbrev[('April')] = ('Apr');
		$wp_locale->month_abbrev[('May')] = ('May');
		$wp_locale->month_abbrev[('June')] = ('Jun');
		$wp_locale->month_abbrev[('July')] = ('Jul');
		$wp_locale->month_abbrev[('August')] = ('Aug');
		$wp_locale->month_abbrev[('September')] = ('Sep');
		$wp_locale->month_abbrev[('October')] = ('Oct');
		$wp_locale->month_abbrev[('November')] = ('Nov');
		$wp_locale->month_abbrev[('December')] = ('Dec');

}

add_action('init', 'enDate_init');

?>