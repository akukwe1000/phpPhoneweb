<?php  

    class dbcontroller{
        // data base connection properties 
        protected $host = 'localhost:4306';
        protected $user = 'akukwe';
        protected $password = 'physics';
        protected $database = 'shopeeredo';

        // connection property 
        public $con = null;

        // call constructor 
        public function __construct(){
            $this->con = mysqli_connect($this->host,$this->user,$this->password, $this->database);
            if($this->con->connect_error){
                echo 'fail' . $this->con->connect_error;
            }
            // echo 'connection successful';
        }

        // logic for closing connection 
        protected function closeconnection(){
            if($this->con != null){
                $this->con->close();
                $this->con = null;
            }
        }

        // a destructor is called when an object is not in used 
        public function __destruct(){
            $this->closeconnection();
        }
    }

    //    after creating ur class u have to create ur class object after the class and require it in any general file u would use in this case function.php
    // $db = new dbcontroller();  


?>