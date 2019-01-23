<?php
/**
 * db conf
 */

return [
    'class'    => 'yii\db\Connection',
    'dsn'      => 'mysql:host=localhost;dbname=loan',
    'username' => 'root',
    'password' => 'root',
    'charset'  => 'utf8',
    
    // Schema cache options (for production environment)
    //    'enableSchemaCache' => true,
    //    'schemaCacheDuration' => 60,
    //    'schemaCache' => 'cache',
    'as db'    => [
        'class'    => \app\behaviors\Db::class,
        'waitTime' => 60
    ]
];