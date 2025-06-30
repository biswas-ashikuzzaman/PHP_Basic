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
<?php
class student2 {
    public $name="Rafi";
    public function expert(){
      echo"I am expert on PHP".$this->name."";
    }
}
$boss=new student2;
echo $boss->name;
echo "<br>";  
echo $boss->expert();
?>