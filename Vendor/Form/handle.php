<?php

namespace Vendor\form;

use Vendor\Config\dbh;

class handle extends dbh{

    public function makeBook(){

        $description = "Weight: ".$_POST['weight']."KG";
        
        return $description;
    }

    public function makeDVD(){
        
        $description = "Size: ".$_POST['size']."MB";

        return $description;
    }

    public function makeFurniture(){
        
        $description = "Dimensions: ".$_POST['height']."X".$_POST['width']."X".$_POST['length'];

        return $description;

    }

    public function makeDescription($description){
        
        $productType = "make";

        $productType=$productType.$description;

        return $this->$productType();

    }

    public function makeItem($productType){
        $description = $this->makeDescription($productType);
        $sku = $_POST['sku'];
        $itemName = $_POST['name'];
        $price = $_POST['price'];
        $sql = "INSERT INTO items(sku, Name, Price, Description) VALUES('$sku', '$itemName', '$price', '$description')";

        $result = $this->connect()->query($sql);

    }

    public function deleteItem($items){

        foreach($items as $item){
            $sql = "DELETE FROM items WHERE sku = '$item'";
            $result = $this->connect()->query($sql);
        }

    }

}

?>