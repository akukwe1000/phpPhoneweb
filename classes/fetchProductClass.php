<?php  
    class product{
        public $db = null;

        // the dbcontroller is a class name specifying the class we want to use connectin from 
        // while the $db is a new variable created 
        public function __construct(dbcontroller $db){
            if(!isset($db->con)) return null;
            $this->db = $db;
        }

        // fetch product data using getdata method 
        public function getData($table = 'product'){
           $result =  $this->db->con->query("SELECT * FROM $table ");
           $resultArray = array();

        //    to fetch product data one by one 
           while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){

               $resultArray[] = $item;
           }

           return $resultArray;
        }

            // to fetch product using item_id 
            public function getproduct($item_id = null, $table = 'product'){
                if(isset($item_id)){
                    $result = $this->db->con->query("SELECT * FROM {$table} WHERE item_id = $item_id");

                    $resultArray = array();

                    //    to fetch product data one by one 
                       while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            
                           $resultArray[] = $item;
                       }
            
                       return $resultArray;
                }
            }

    }
?>