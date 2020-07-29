add_filter( 'woocommerce_email_recipient_new_order', 'dwom_order_completed_email_add_cc_bcc', 9999, 3 );
function dwom_order_completed_email_add_cc_bcc( $recipient, $order ) {
    
	$customfield = get_post_meta( $order->get_id(), 'dwom_dynamic_mailing_val_after_order', true );
   
	$recipient .= ', '."$customfield";
	return $recipient;
}
