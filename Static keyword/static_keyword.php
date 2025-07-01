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
<?php 
class S{
    public static $value = "34";
    public function staticValue(){
        return self::$value;
    }
}
$p=new S();
echo $p->staticValue();
?>