<?php

return [

    'label_order_total' => 'Totale minimo',
    'label_order_status' => 'Stato ordine',

    'alert_min_total' => 'Il totale dell\'ordine è inferiore al totale minimo dell\'ordine per %s.',
    'alert_min_order_total' => 'Devi spendere almeno %s per pagare con %s.',

    'help_order_total' => 'L\'importo totale che l\'ordine deve raggiungere prima che questo gateway di pagamento diventi attivo',
    'help_order_status' => 'Stato predefinito dell\'ordine quando viene utilizzato questo metodo di pagamento.',

    'cod' => [
        '_text_title' => 'Contanti alla consegna',
        'text_tab_general' => 'Generale',
        'text_payment_title' => 'Contanti alla consegna',
        'text_payment_desc' => 'Accetta contanti alla consegna durante il checkout',

        'label_title' => 'Titolo',
        'label_status' => 'Stato',
        'label_priority' => 'Priorità',
    ],
   
    'stripe' => [
        '_text_title' => 'Stripe',
        'text_tab_general' => 'Generale',
        'text_payment_title' => 'Pagamento Stripe',
        'text_payment_desc' => 'Accetta pagamenti con carta di credito utilizzando Stripe',

        'text_description' => 'Paga con carta di credito usando Stripe',
        'text_live' => 'Live',
        'text_test' => 'Test',
        'text_stripe_charge_description' => '%s Addebito per %s',
        'text_payment_status' => 'Pagamento %s (%s)',

        'label_title' => 'Titolo',
        'label_description' => 'Descrizione',
        'label_transaction_mode' => 'Modalità di transazione',
        'label_test_secret_key' => 'Chiave segreta di prova',
        'label_test_publishable_key' => 'Chiave di prova pubblicabile',
        'label_live_secret_key' => 'Chiave segreta Live',
        'label_live_publishable_key' => 'Chiave pubblicabile live',
        'label_priority' => 'Priorità',
        'label_status' => 'Stato',
    ],   
];
