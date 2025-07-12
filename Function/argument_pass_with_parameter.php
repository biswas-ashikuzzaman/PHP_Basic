<?php 
function details($name,$id,$batch,$course){
    echo "Name: $name" .' ' .$id ."<br>";
    
    echo "Batch: $batch<br>";
    echo "Course: $course<br>";
}
// Calling the function with arguments
details("John Doe", "12345", "2023", "PHP Programming");
details("Ashikuzzaman",1288603,65,"PHP");
?>