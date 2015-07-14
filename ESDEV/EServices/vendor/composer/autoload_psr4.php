<?php

// autoload_psr4.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'Symfony\\Component\\Routing\\' => array($vendorDir . '/symfony/routing'),
    'Symfony\\Component\\HttpKernel\\' => array($vendorDir . '/symfony/http-kernel'),
    'Symfony\\Component\\HttpFoundation\\' => array($vendorDir . '/symfony/http-foundation'),
    'Symfony\\Component\\EventDispatcher\\' => array($vendorDir . '/symfony/event-dispatcher'),
    'Symfony\\Component\\Debug\\' => array($vendorDir . '/symfony/debug'),
    'Silex\\' => array($vendorDir . '/silex/silex/src/Silex'),
    'Monolog\\' => array($vendorDir . '/monolog/monolog/src/Monolog'),
    'Html2Text\\' => array($vendorDir . '/html2text/html2text/src', $vendorDir . '/html2text/html2text/test'),
    'Faker\\' => array($vendorDir . '/fzaninotto/faker/src/Faker'),
    'App\\Services\\' => array($baseDir . '/api/App/Services'),
    'App\\Models\\' => array($baseDir . '/api/App/Models'),
    'App\\Controllers\\' => array($baseDir . '/api/App/Controllers'),
);
