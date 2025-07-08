<?php 
    class Form {
        private $id;
        private $name;
        private $contact;
        private $email;
        private $password;
        private $remarks;

        private static $file_path = "data_store.txt";

        function __construct($_id, $_name, $_contact,$_email, $_password, $_remarks) {
            $this->id = $_id;
            $this->name = $_name;
            $this->contact = $_contact;
            $this->email = $_email;
            $this->password = $_password;
            $this->remarks = $_remarks;
            }
        public function data_Show(){
            return $this->id .", " . $this->name .", ". $this->contact.", ".$this->email.", ".$this->password.", " .$this->remarks.PHP_EOL;
        }

        public function data_Save(){
            file_put_contents(self::$file_path, $this->data_Show(), FILE_APPEND);
        }
    }
?>