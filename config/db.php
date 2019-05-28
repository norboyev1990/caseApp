<?php

return [
    'class'         => 'edgardmessias\db\ibm\db2\Connection',
    'dsn'           => 'odbc:QQBDB',
    'username'      => 'pltdwadm',
    'password'      => '123456',
    'defaultSchema' => 'PLTORG',
    'isISeries'     => false,

    //'class' => 'yii\db\Connection',
    //'dsn' => 'mysql:host=localhost;dbname=yii2advanced',
    //'username' => 'root',
    //'password' => '123456',
    //'charset' => 'utf8',

    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',
];
