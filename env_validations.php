<?php


return [
        'NOT_EXISTS'  => [
            'required'  => true,
            'default'   => true,//will be used if not exists and will FAIL because the type is BOOLEAN not STRING
            'type'      => 'string',
            'min'       => 20,
        ],
        'APP_KEY'  => [
            'required'  => true,
            'type'      => 'string',
            'min'       => 20,
        ],
        'APP_NAME'  => [
            'required'  => true,
            'type'      => 'string',
            'min'       => 3,
            'max'       => 5,
        ],
        'APP_DEBUG' => [
            'type' => 'boolean',
        ],
];
