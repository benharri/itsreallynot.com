<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/itsreallynot.com/user/accounts/admin.yaml',
    'modified' => 1523730827,
    'data' => [
        'email' => 'admin@itsreallynot.com',
        'fullname' => 'Apex Admin',
        'title' => 'Admin',
        'state' => 'enabled',
        'access' => [
            'admin' => [
                'login' => true,
                'super' => true
            ],
            'site' => [
                'login' => true
            ]
        ],
        'hashed_password' => '$2y$10$OkhGgdrzAjCM5L3KXSCgruk9BDFmh1fqD1XdhldCA7UHotl9sIpiy'
    ]
];
