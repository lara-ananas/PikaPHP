<?php
return [
  'env' => 'dev',
  'debug' => true,
  'bypassSecurity' => true,
  'db' => [
    'type' => 'mariadb',
    'host' => 'localhost',
    'database' => 'my_database',
    'username' => 'my_username',
    'password' => 'my_password',
    'charset' => 'utf8mb4',
    'collation' => 'utf8mb4_general_ci',
    'port' => 3306,
  ],
  'jwt' => [
    'secret' => 'AB3NFosBe3FGFGHGH5uBeGg9YeV0ojxmV96RgPwoqmFgWPLsGH0Viy59fHiASqA8FyYsqLgTI0ML6qD1gbByo5VxnRsXZQIGBJc3bHZMwS2r0uHUIy9JgRWjFKhdCgeANP50pwAISAtLhuogP0uKdOvw99wwFLVyuc0wYPBgyBbFRlaMWNgwvYasXea2PdSLNQ',
    'algo' => 'HS512',
    'validity' => 18
  ],
  'localPasswords' => [
    'algo' => PASSWORD_BCRYPT,
    'opts' => [
      'cost' => 14,
    ],
  ],
  'fileCompression' => 'gzip',
  'responseCompression' => 'gzip',
];
