<?php
/**
 * @category Qordoba PHP SDK
 * @package Qordoba_Connector
 * @copyright Copyright (c) 2018
 * @license https://www.qordoba.com/terms
 */

use Faker\Factory;

require __DIR__ . '/../vendor/autoload.php';
define('API_URL', 'https://app.qordoba.com/api');
// Document mock will be sent to Qorodba Application via REST API
$documentToTranslate = [
    'content' => [
        Factory::create()->text(),
        Factory::create()->text(),
        Factory::create()->text(),
        Factory::create()->text(),
    ]
];
// Initiate connection to Qorodba Application via REST API
$translationDocument = new Qordoba\Document(
    API_URL, // Qordoba Application API url
    'devprograms@qordoba.com', // Qordoba Application user login
    'PHAR,TNDbooKG4', // Qordoba Application user password
    6021, // Qordoba Application Workspace ID
    3187// Qordoba Application Organization ID
);
// Set document name that will created on Qorodba Application via REST API
$translationDocument->setName('example');
// Set document version that will created on Qorodba Application via REST API
$translationDocument->setTag('example-1');
// Add sections to document that will created on Qorodba Application via REST API

$translationDocument->addTranslationContent('<p>Test html</p>');
$translationDocument->createTranslation();

exit(0);
