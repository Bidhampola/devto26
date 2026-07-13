<?php

return [
    'class' => \yii\db\Connection::class,
    'dsn' => 'pgsql:host=localhost;dbname=devto26',
    'username' => 'postgres',
    'password' => 'brian',
    'charset' => 'utf8',

    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',
];
