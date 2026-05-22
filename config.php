<?php

return [
    'database' => [
        'name' => 'our_ghibli_db',
        'username' => 'root',
        'password' => 'root',
        'connection' => 'mysql:host=db',
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]
    ]
];