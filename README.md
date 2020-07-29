# Checkout-Field-Editor-Dynamic-Mailing-
This gives the user the ability to send orders to dynamic emails


All needed is a custom smart php snippet added to functions.php as an add-on to this plugin's functionality: https://wordpress.org/plugins/woo-checkout-field-editor-pro/


So the logic behind this process is to:

1. create a new custom SELECT field with the plugin mentioned above with the name or meta key to this field as "dwom_dynamic_mailing_val_after_order"

2. Input your label and placeholder for the field, then for each option under select field, the plugin allows you to also input a custom value, as you can see in the image attached there are different emails as my custom value for each option. (Not to worry, the value part of the field won't show up in the front-end of the checkout field). These values of the options that users select will play a critical role in our snippet.
