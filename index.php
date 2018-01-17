<?php
/**
 *
 * @author: 任广正
 * @date: 18-1-17
 */
require 'vendor/autoload.php';
$log = new Monolog\Logger('name');
$log->pushHandler(new Monolog\Handler\StreamHandler('app.log', Monolog\Logger::WARNING));

$log->addWarning('Foo');