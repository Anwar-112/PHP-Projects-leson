<?php

    class student{
        public $id;
        public $name;
        public $batch;
        public $result;
        public $file;

        function __construct($file){
            $this->file = $file;
        }

        function result($f_id){
            $data = file($this->file);
            foreach($data as $value){
                list($id, $name, $batch, $result) = explode(" ",$value);
                if($f_id == $id){
                    $this->id = $id;
                    $this->name = $name;
                    $this->batch = $batch;
                    $this->result = $result;
                    break;
                }
                
            }
            if(isset($this->id)){
                return $this->id . " " . $this->name . " " . $this->batch . " " . $this->result;
            }else{
                return "Not Found Any Data";
            }
        }
    }

?>