<?php  
    class cart{
        // first we have to access the data base so create a variable db to do that 
        public $db = null;
        public function __construct(dbcontroller $db){
            if(!isset($db->con)) return null;
            $this->db = $db;
        }

        public function insertintoCart($params=null, $table= 'cart'){
            if ($this->db->con != null){
                if($params != null){
                    // get table columns 
                    $columns = implode(',', array_keys($params));
                    // print_r($columns);
                    $values = implode(',', array_values($params));
                    // print_r($values);

                    // sql query to insert into cart table 
                    $query_string = sprintf("INSERT INTO %s(%s) VALUES(%s)", $table,$columns,$values);
                    // echo $query_string;

                    // connecting query to the db connection 
                    $result = $this->db->con->query($query_string);
                    return $result;
                }
            }
        }

        // to get user_id and item_id and insert it into cart table 
        public function addtoCart($userid ,$itemid){
            if(isset($userid) && isset($itemid)){
                $params = array(
                    'user_id' => $userid,
                    'item_id' => $itemid
                );

                // insert data into cart
                $result = $this->insertintoCart($params);
                
            }
        }

        // calculate subtotal 
        public function getSum($arr){
            // this if isset means that if there is value in the $arr variable do something 
            if(isset($arr)){
                $sum = 0;
                foreach($arr as $item){
                    $sum += floatval($item[0]);
                }
                return sprintf('%2f', $sum);
            }
        }




    }



?>