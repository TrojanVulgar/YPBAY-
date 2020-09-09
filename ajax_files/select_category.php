<?php
#################################################################
## PHP Pro Bid v6.10YPBAY!															##
##-------------------------------------------------------------##
## Copyright ©YPBAY!2010 PHP Pro Software LTD. All rights reserved.	##
##-------------------------------------------------------------##
#################################################################

session_start();

define ('IN_SITE', 1);
define ('IN_AJAX', 1);

include_once('../includes/global.php');

if ($session->value('user_id') || $session->value('adminarea') == 'Active')
{
	$category_id = intval($_REQUEST['category_id']);
	$target_box_id = $db->rem_special_chars($_REQUEST['target_box_id']);
	$prefix = $db->rem_special_chars($_REQUEST['prefix']);
	$reverse_categories = intval($_REQUEST['reverse_categories']);
	$click_select = ($_REQUEST['click_select'] == 'true') ? true : false;
	$listing_type = (in_array($_REQUEST['listing_type'], array('auction', 'wanted'))) ? $_REQUEST['listing_type'] : 'auction';
	
	echo generate_category_boxes($category_id, $target_box_id, $prefix, $reverse_categories, $click_select, $session->value('user_id'), $listing_type);
}
else 
{
	echo null;
}

?>