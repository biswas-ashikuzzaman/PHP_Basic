<?php
class ParentClass {
    public static $name = "I am from Parent";
}

class ChildClass extends ParentClass {
    public function showName() {
        return self::$name; // Or ParentClass::$name;
    }
}

$obj = new ChildClass();
echo $obj->showName();  // Output: I am from Parent
?>
