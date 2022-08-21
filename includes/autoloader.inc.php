<?php

function autoload($class) {
  $path = '../classes/';
  $extention = '.class.php';
  $file = $path . $class . $extention;
  
  include $file;
}
 
spl_autoload_register('autoload');
