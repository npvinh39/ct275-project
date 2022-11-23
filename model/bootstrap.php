<?php

define('BASE_URL_PATH', '/');

require_once __DIR__ . '/library.php';
require_once __DIR__ . '/Psr4AutoloaderClass.php';
$loader = new Psr4AutoloaderClass;
$loader->register();
// Các lớp có không gian tên bắt đầu với CT275\Project nằm ở model
$loader->addNamespace('CT275\Project', __DIR__ .'/');

try {
  $PDO = (new CT275\Project\PDOFactory)->create([
  'dbhost' => 'localhost',
  'dbname' => 'ct275_locationtour',
  'dbuser' => 'root',
  'dbpass' => ''
  ]);
  } catch (Exception $ex) {
  echo 'Không thể kết nối đến MySQL,
  kiểm tra lại username/password đến MySQL.<br>';
  exit("<pre>${ex}</pre>");
  }