<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<?php settings_fields('ns_cuscheckout_options_group'); ?>



<h4><?php _e('Check to hide an element', $ns_ccp_text_domain)?></h4>
<table class="form-table adjTblNs">
 <tbody>
  <tr>
   <th scope="row"><b><?php _e('Element', $ns_ccp_text_domain)?></b></th>
   <td><b><?php _e('Hide', $ns_ccp_text_domain)?></b></td>
  </tr>
  <tr>
   <th scope="row"><label for="ns-code-checkout-name"><?php _e('First Name', $ns_ccp_text_domain)?></label></th>
   <td><input  <?php if(get_option('ns-code-checkout-name', '') == 'on') echo'checked'; ?> type="checkbox" id="ns-code-checkout-name" name="ns-code-checkout-name"></td>
  </tr>
  <tr>
   <th scope="row"><label for="ns-code-checkout-last-name"><?php _e('Last  Name', $ns_ccp_text_domain)?></label></th>
   <td><input  <?php if(get_option('ns-code-checkout-last-name', '') == 'on') echo'checked'; ?> type="checkbox" id="ns-code-checkout-last-name" name="ns-code-checkout-last-name"></td>
  </tr>  
  <tr>
   <th scope="row"><label for="ns-code-checkout-company-name"><?php _e('Company Name', $ns_ccp_text_domain)?></label></th>
   <td><input  <?php if(get_option('ns-code-checkout-company-name', '') == 'on') echo'checked'; ?> type="checkbox" id="ns-code-checkout-company-name" name="ns-code-checkout-company-name"></td>
  </tr>
  <tr>
   <th scope="row"><label for="ns-code-checkout-email"><?php _e('Email Address', $ns_ccp_text_domain)?></label></th>
   <td><input  <?php if(get_option('ns-code-checkout-email', '') == 'on') echo'checked'; ?> type="checkbox" id="ns-code-checkout-email" name="ns-code-checkout-email"></td>
  </tr>   
  <tr>
   <th scope="row"><label for="ns-code-checkout-phone"><?php _e('Phone', $ns_ccp_text_domain)?></label></th>
   <td><input  <?php if(get_option('ns-code-checkout-phone', '') == 'on') echo'checked'; ?> type="checkbox" id="ns-code-checkout-phone" name="ns-code-checkout-phone"></td>
  </tr>
  <tr>
   <th scope="row"><label for="ns-code-checkout-country"><?php _e('Country', $ns_ccp_text_domain)?></label></th>
   <td><input  <?php if(get_option('ns-code-checkout-country', '') == 'on') echo'checked'; ?> type="checkbox" id="ns-code-checkout-country" name="ns-code-checkout-country"></td>
  </tr>
  <tr>
   <th scope="row"><label for="ns-code-checkout-address"><?php _e('Address', $ns_ccp_text_domain)?></label></th>
   <td><input  <?php if(get_option('ns-code-checkout-address', '') == 'on') echo'checked'; ?> type="checkbox" id="ns-code-checkout-address" name="ns-code-checkout-address"></td>
  </tr>
  <tr>
   <th scope="row"><label for="ns-code-checkout-postcode"><?php _e('Postcode / ZIP', $ns_ccp_text_domain)?></label></th>
   <td><input  <?php if(get_option('ns-code-checkout-postcode', '') == 'on') echo'checked'; ?> type="checkbox" id="ns-code-checkout-postcode" name="ns-code-checkout-postcode"></td>
  </tr>
  <tr>
   <th scope="row"><label for="ns-code-checkout-town"><?php _e('own / City', $ns_ccp_text_domain)?>T</label></th>
   <td><input  <?php if(get_option('ns-code-checkout-town', '') == 'on') echo'checked'; ?> type="checkbox" id="ns-code-checkout-town" name="ns-code-checkout-town"></td>
  </tr>
  <tr>
   <th scope="row"><label for="ns-code-checkout-prov"><?php _e('Province', $ns_ccp_text_domain)?></label></th>
   <td><input  <?php if(get_option('ns-code-checkout-prov', '') == 'on') echo'checked'; ?> type="checkbox" id="ns-code-checkout-prov" name="ns-code-checkout-prov"></td>
  </tr>           
 </tbody>
</table>
