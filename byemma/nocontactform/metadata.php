<?php
/**
* Metadata version
*/
$sMetadataVersion = '1.1';

/**
* Module path
*/
$sModulePath = 'byemma/nocontactform/';

/**
* Module information
*/
$aModule = array(
  'id'          => 'nocontactform',
  'title'       => 'Kontaktformular deaktivieren',
  'description' => 'Verhindert den Versand des Kontaktformulars im Onlineshop',
  'thumbnail'   => '',
  'version'     => '1.0.0',
  'author'      => 'bYemma',
  'url'         => 'https://byemma.de/',
  'email'       => '',

  'extend'      => array(
    'contact' => $sModulePath . 'Controller/NoContactFormContactController',
  ),
  
);