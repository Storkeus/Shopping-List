<?php
require_once('listItem.php');

require_once('connect.php');
            //code form php.net
            $query="SELECT `product`, `amount` FROM `listItems`";
            $mysqli=new mysqli($serverName, $user, $password, $database);
            
            if($mysqli->connect_errno)
            {
                printf("Connect failed: %s\n", $mysqli->connect_error);
                exit();
            }
            
            $result = $mysqli->query($query);
            while($product = $result->fetch_assoc())
                  {
                      $item=@ new listItem($product['product'],$product['amount']);
                      echo $item->getData();
                  }

?>