<?php
return [
    'database'  =>  [
        'sqlite'    =>  [
            'type'  =>  'pdo_sqlite',
            'user'  =>  '',
            'password'  =>  '',
            'path'      =>  '',
            'memory'    =>  FALSE
        ],
        'mysql'    =>  [
            'dbname' => 'your_db',
            'user' => 'user',
            'password' => 'your_password',
            'host' => 'localhost',
            'driver' => 'pdo_mysql'
        ]
    ]
    //'default'   =>  'master',    //默认使用的数据库,读写不分离
    //'tb_prefix' =>  ''              //数据表前缀
    //'default'   =>  'master,master'    //默认使用的数据库,读写分离
];