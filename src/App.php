<?php
use Encase\Container;

class App
{
  static $app;
  
  static function a()
  {
    if(isset(self::$app)) return self::$app;
    return self::$app = new Container();
  }
  
  static function singleton($name, $class_string)
  {
    return self::a()->singleton($name, $class_string);
  }

  static function initializer($name, $callback)
  {
    return self::a()->initializer($name, $callback);
  }    

  static function lookup($name)
  {
    return self::a()->lookup($name);
  }

  static function service($name)
  {
    return self::a()->lookup($name);
  }

}
