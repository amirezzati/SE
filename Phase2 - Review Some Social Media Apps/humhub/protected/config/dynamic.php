<?php return array (
  'components' => 
  array (
    'db' => 
    array (
      'class' => 'yii\\db\\Connection',
      'dsn' => 'mysql:host=localhost;dbname=humhub_database',
      'username' => 'root',
      'password' => '',
    ),
    'user' => 
    array (
    ),
    'mailer' => 
    array (
      'transport' => 
      array (
        'dsn' => 'native://default',
      ),
    ),
  ),
  'params' => 
  array (
    'installer' => 
    array (
      'db' => 
      array (
        'installer_hostname' => 'localhost',
        'installer_database' => 'humhub_database',
      ),
    ),
    'config_created_at' => 1684078166,
    'horImageScrollOnMobile' => NULL,
    'databaseInstalled' => true,
  ),
  'name' => NULL,
  'language' => 'en-US',
); ?>