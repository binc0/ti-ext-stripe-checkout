<?php

return [

    'label_order_total' => 'Minimum Total',
    'label_order_status' => 'Order Status',

    'alert_min_total' => 'Order total is below the minimum order total for %s.',
    'alert_min_order_total' => 'You need to spend %s or more to pay with %s.',

    'help_order_total' => 'The total amount the order must reach before this payment gateway becomes active',
    'help_order_status' => 'Default order status when this payment method is used.',

    'cod' => [
        '_text_title' => 'Cash On Delivery',
        'text_tab_general' => 'General',
        'text_payment_title' => 'Cash On Delivery',
        'text_payment_desc' => 'Accept cash on delivery during checkout',

        'label_title' => 'Title',
        'label_status' => 'Status',
        'label_priority' => 'Priority',
    ],


    'stripe' => [
        '_text_title' => 'Stripe',
        'text_tab_general' => 'General',
        'text_payment_title' => 'Stripe Payment',
        'text_payment_desc' => 'Accept credit card payments using Stripe',

        'text_description' => 'Pay by Credit Card using Stripe',
        'text_live' => 'Live',
        'text_test' => 'Test',
        'text_stripe_charge_description' => '%s Charge for %s',
        'text_payment_status' => 'Payment %s (%s)',

        'label_title' => 'Title',
        'label_description' => 'Description',
        'label_transaction_mode' => 'Transaction Mode',
        'label_test_secret_key' => 'Test Secret Key',
        'label_test_publishable_key' => 'Test Publishable Key',
        'label_live_secret_key' => 'Live Secret Key',
        'label_live_publishable_key' => 'Live Publishable Key',
        'label_priority' => 'Priority',
        'label_status' => 'Status',
    ],
];