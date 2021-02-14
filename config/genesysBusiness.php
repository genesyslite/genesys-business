<?php

return [
    'storage' => [
        'disks' => 'local'
    ],
    'models' => [
        'country' => GenesysLite\GenesysUbigee\Models\Country::class,
        'department' => GenesysLite\GenesysUbigee\Models\Department::class,
        'province' => GenesysLite\GenesysUbigee\Models\Province::class,
        'district' => GenesysLite\GenesysUbigee\Models\District::class,
    ],
    'data' =>
        [
            'description' => 'Establecimiento Principal',
            'address' => 'Su dirección',
            'email' => 'empresa@empresa.com',
            'telephone' => '123456789',
            'code' => '25001',
        ],
    'configuration_default' => [
        [
            'field' => 'name',
            'value' => 'Genesys Lite',
            'type' => 'Business'
        ],
        [
            'field' => 'trade_name',
            'value' => 'Genesys Lite',
            'type' => 'Business'
        ],
        [
            'field' => 'number',
            'value' => '10714506370',
            'type' => 'Business'
        ],
        [
            'field' => 'identity_document_type_id',
            'value' => '6',
            'type' => 'Business'
        ],


        [
            'field' => 'soap_send_id',
            'value' => '01',
            'type' => 'SUNAT'
        ],
        [
            'field' => 'soap_type_id',
            'value' => '01',
            'type' => 'SUNAT'
        ],
        [
            'field' => 'soap_username',
            'value' => '',
            'type' => 'SUNAT'
        ],
        [
            'field' => 'soap_password',
            'value' => '',
            'type' => 'SUNAT'
        ],
        [
            'field' => 'soap_url',
            'value' => '',
            'type' => 'SUNAT'
        ],
        [
            'field' => 'certificate',
            'value' => '',
            'type' => 'SUNAT'
        ],
        [
            'field' => 'certificate_due',
            'value' => '',
            'type' => 'SUNAT'
        ],
        [
            'field' => 'logo',
            'value' => '',
            'type' => 'SUNAT'
        ],
        [
            'field' => 'logo_store',
            'value' => '',
            'type' => 'SUNAT'
        ],
        [
            'field' => 'operation_amazonia',
            'value' => '',
            'type' => 'SUNAT'
        ]

    ],
];
