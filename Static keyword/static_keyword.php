<?php
class MyClass {
  public static $str = "Hello World!";

  public static function hello() {
    echo MyClass::$str;
  }
}

echo MyClass::$str;
echo "<br>";
echo MyClass::hello();
?>