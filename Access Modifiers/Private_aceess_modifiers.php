<?php
class Person {
    private $id=1288603;
    private $name= "Ashikuzzaman";
    public function ShowName() {
        echo"Name:".$this->name;
    }
}
$person1 = new Person();
echo $person1->ShowName();
echo "<br>";
?>
