<?php

namespace Vendor\Display;

use Vendor\Config\dbh as dbh;

class GetItems extends dbh{
    protected function getAllItems(){
        $sql = "SELECT * FROM items";
        $result = $this->connect()->query($sql);
        $num_rows = $result->num_rows;
        if($num_rows > 0){
            while($row = $result->fetch_assoc()){
                $data[] = $row;
                
            }
            return $data;
        }
        else{
            return;
        }
    }
}

?>