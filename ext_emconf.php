<?php
$EM_CONF[$_EXTKEY] = [
   'title' => 'TYPO3 Sitepackage',
   'description' => 'TYPO3 Sitepackage',
   'category' => 'templates',
   'author' => 'John Pura',
   'author_email' => 'jepura@gmail.com',
   'author_company' => 'Pura, Inc.',
   'version' => '1.0.0',
   'state' => 'stable',
   'constraints' => [
      'depends' => [
         'typo3' => '10.4.0-10.4.99',
         'fluid_styled_content' => '10.4.0-10.4.99'
      ],
      'conflicts' => [
      ],
   ],
   'uploadfolder' => 0,
   'createDirs' => '',
   'clearCacheOnLoad' => 1
];