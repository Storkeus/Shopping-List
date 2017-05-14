<?php
    class ListItem
    {
        var $name;
        var $amount;
        public function __construct($productName, $productAmount)
        {
            $this->name=$productName;
            $this->amount=$productAmount;
        }
        
        private function deleteItem()
        {
            require_once('connect.php');
            //code form php.net
            $query="DELETE * FROM `listItems` WHERE `product`='$this->name'";
            $mysqli=new mysqli($serverName, $user, $password, $database);
            
            if($mysqli->connect_errno)
            {
                printf("Connect failed: %s\n", $mysqli->connect_error);
                exit();
            }
            
            $result = $mysqli->query($query);
            $result->close();
        }
        
        public function getData()
        {
            $dataDiv='<side class="row"><div class="col-xs-6 text-center">'.$this->name.'</div><div class=" text-center col-xs-4">'.$this->amount.'</div><div class="delete col-xs-2 text-danger text-center">[X]</div></side>';
            
            return $dataDiv;
        }

    }
?>