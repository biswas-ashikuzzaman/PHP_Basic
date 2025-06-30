<?php
class student {
    public $name="Ashik";
    public function greet() {
        echo "Hello,".$this->name."";
    }
}
$std=new student;
echo $std->name;
echo "<br>";
$std->greet();
?>