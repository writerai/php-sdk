<?php
/**
 * @category Qordoba PHP SDK
 * @package Qordoba_Connector
 * @copyright Copyright (c) 2018
 * @license https://www.qordoba.com/terms
 */

use Faker\Factory;
use Qordoba\Interfaces\DocumentInterface;

require __DIR__ . '/../vendor/autoload.php';
define('API_URL', 'https://app.writer.com/api');
define('TARGET_LANGUAGE_CODE', 'ar-sa');

// Initiate connection to Qorodba Application via REST API
$translationDocument = new Qordoba\Document(
    API_URL, // Qordoba Application API url
    'devprograms@qordoba.com', // Qordoba Application user login
    'PHAR,TNDbooKG4', // Qordoba Application user password
    6021, // Workspace ID
    3187 // Organizaiotn ID
);
// Set document name that will be downloaded from Qorodba Application via REST API
$translationDocument->setName('catalog-product-169845-cat-eye-women-sunglasses-havana');
// Set document version that will be downloaded from Qorodba Application via REST API
$translationDocument->setTag('1');
// Request document translation from Qorodba Application via REST API
var_dump($translationDocument->fetchTranslation(TARGET_LANGUAGE_CODE));
exit(0);
