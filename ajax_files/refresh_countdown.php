<?
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

$auction_id = intval($_REQUEST['auction_id']);

$end_time = $db->get_sql_field("SELECT end_time FROM " . DB_PREFIX . "auctions WHERE auction_id='" . $auction_id . "'", 'end_time');

echo $end_time . '|' . time_left($end_time, time(), false, true);

?>
