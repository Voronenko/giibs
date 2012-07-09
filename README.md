giibs
=====

Twitter bootstrap aware gii generator for yii

1) put code into protected.extensions.giibs
2) modify gii section of your config file with 'generatorPaths' entry. Example:

'gii' => array(
  'class' => 'system.gii.GiiModule',
  'password' => 'CENSORED',
   // If removed, Gii defaults to localhost only. Edit carefully to taste.
  'ipFilters' => array('127.0.0.1', '::1'),
  'generatorPaths'=>array(
     'application.extensions.giibs',
   ),

)

