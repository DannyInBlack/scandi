<?php 

namespace Vendor\Display;

use Vendor\Display\GetItems as GetItems;

class ViewItems extends GetItems{

    public function viewAllItems(){
    
        $datas = $this->getAllItems();

        if($datas == 0){
            return;
        }

        echo "<div class='row justify-content-md-center gap-3 '>";

        $i = 0;
        foreach($datas as $data){
            $i++;
            
            echo "<div class='col col-md-3 border border-dark border-2 p-5'>";
            echo "<input type='checkbox' name='items[]' value='".$data['sku']."' class='delete-checkbox'>";
            echo "<br>".$data['sku']."<br>";
            echo $data['Name']."<br>";
            echo $data['Price']."<br>";
            echo $data['Description']."<br><br>";
            echo "</div>";
            // if ($i > 3){
            //     echo "</div><br>";
            //     echo "<div class='row justify-content-md-center gap-3'>";
            //     $i = 0;
            // }
        }
        echo "</div>";
    }

}






// abstract class Item{

//     public $sku = "key";   
//     public $name = "name";
//     public $price = "price";
    
// }

// class Disc extends Item{
//     public $size = "size";
    
//     // public function __construct()
//     // {
//     //     $this->name = $name;
//     // }

//     public function display_disc(){

//         // while($row = $link->fetch_assoc()) {
//         //     echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
//         // }
//         echo $this->price;
//         echo "</div>";
//     }
// }

// class Book extends Item{
//     public $weight = "weight";
// }

// class Furtniture extends Item{
//     public $height= "height";
//     public $width= "width";
//     public $length= "length";
// }
?>