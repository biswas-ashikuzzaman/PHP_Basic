<?php
class Student {
    private $id;
    private $name;

    private static $laltu="data.txt";

     function __construct($id, $name, $address) {
        $this->id = $id;
        $this->name = $name;
        $this->address = $address;
    }

    public function csv() {
        return $this->id . ", " . $this->name . " ," . $this-> address . PHP_EOL;
    }
    public function store() {
       file_put_contents(self::$laltu, $this->csv(), FILE_APPEND);
    }
}

?>