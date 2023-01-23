<?php
spl_autoload_register('myautload');
  function myautload($classname){
      $path = '../script_PHP/classes/';
      $extention = '.class.php';
      $fullpath = $path . $classname . $extention;
      if(!file_exists($fullpath)){
          return false;
      }
      include_once $fullpath;
  }