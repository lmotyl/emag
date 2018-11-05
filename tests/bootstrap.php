<?php

use PHPUnit\Framework\Constraint\Exception;

if (is_file(__DIR__. '/../vendor/autoload.php')) {
    require_once(__DIR__. '/../vendor/autoload.php');
} else {
    throw new Exception('execute composer install');
}


