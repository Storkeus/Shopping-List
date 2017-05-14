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
            $require_once('connect.php');
            //code form php.net
            $query="DELETE * FROM `listItems` WHERE `product`='$this->name'";
            $mysqli=new mysqli(serverName, user, password, database);
            
            if($mysqli->connect_errno)
            {
                printf("Connect failed: %s\n", $mysqli->connect_error);
                exit();
            }
            
            $result = $mysqli->query($query);
            $result->close();
        }
        /*private function getAmount()
        {
           $require_once('connect.php');
            //code form php.net
            $query="SELECT `amount` FROM `listItems` WHERE `product`='$this->name'";
            $mysqli=new mysqli(serverName, user, password, database);
            
            if($mysqli->connect_errno)
            {
                printf("Connect failed: %s\n", $mysqli->connect_error);
                exit();
            }
            
            $result = $mysqli->query($query);
            return $result;
            
        }*/
    }
?>