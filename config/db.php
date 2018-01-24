<?php

$db = parse_ini_file(__DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'settings.ini');

return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=' . $db['db_host'] . ';dbname=' . $db['db_name'],
    'username' => $db['db_user'],
    'password' => $db['db_password'],
    'charset' => 'utf8',

    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',
];
