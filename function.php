add_filter( 'woocommerce_email_recipient_new_order', 'dwom_order_completed_email_add_cc_bcc', 9999, 3 );
function dwom_order_completed_email_add_cc_bcc( $recipient, $order ) {
    
	// Bail on WC settings pages since the order object isn't yet set yet
	$page = $_GET['page'] = isset( $_GET['page'] ) ? $_GET['page'] : '';
	if ( 'wc-settings' === $page ) {
		return $recipient; 
	}
	
	// just in case
	if ( ! $order instanceof WC_Order ) {
		return $recipient; 
	}
	
	$customfield = get_post_meta( $order->get_id(), 'dwom_dynamic_mailing_val_after_order', true );
   
	$recipient .= ', '."$customfield";
	return $recipient;
}
