<?=headercat($shop_header_msg);?>

<table border="0" cellpadding="5" cellspacing="0" width="100%" class="store_main">
<tr>
   <td width="100%"><table border="0" cellpadding="0" cellspacing="0" width="100%">
			<? if (!empty($user_details['shop_logo_path'])) { ?>
         <tr>
            <td class="storestand1" align="center">
               <img src="<?=$user_details['shop_logo_path'];?>" border="0">
            </td>
         </tr>
         <tr>
            <td width="100%">&nbsp;</td>
         </tr>
         <? } ?>
         <tr>
            <td width="100%" class="storestand1">
            	<?=$db->add_special_chars($user_details['shop_mainpage']);?>
            </td>
         </tr>
         <tr>
            <td width="100%">&nbsp;</td>
         </tr>
      </table>
