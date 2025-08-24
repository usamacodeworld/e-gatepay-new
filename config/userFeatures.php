<?php

return [
    'features' => [
        [
            'feature'     => 'account_status',
            'description' => 'Controls user login access.',
            'status'      => false,
        ],
        [
            'feature'     => 'email_verification',
            'description' => 'Requires email verification to activate the account.',
            'status'      => true,
        ],
        [
            'feature'     => 'kyc_verification',
            'description' => 'Requires KYC verification before transactions.',
            'status'      => true,
        ],
        [
            'feature'     => 'deposit',
            'description' => 'Allows users to add funds to their wallet.',
            'status'      => true,
        ],
        [
            'feature'     => 'exchange_money',
            'description' => 'Allows currency conversion within the wallet.',
            'status'      => true,
        ],
        [
            'feature'     => 'send_money',
            'description' => 'Allows sending money to other users.',
            'status'      => true,
        ],
        [
            'feature'     => 'request_money',
            'description' => 'Allows users to request money from others.',
            'status'      => true,
        ],
        [
            'feature'     => 'withdraw',
            'description' => 'Allows withdrawal to linked bank accounts.',
            'status'      => true,
        ],
    ],
];
