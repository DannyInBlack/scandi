<?php 
include '../includes/autoloader.inc.php';

if(isset($_POST['productType'])){

    $description = new \Vendor\Form\handle;
    $description->makeItem($_POST['productType']);
    
}
else if(isset($_POST['items'])){

    $deleteItem = new \Vendor\Form\handle;
    $deleteItem->deleteItem($_POST['items']);
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link href="../styles/index.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <form action="<?php $_PHP_SELF  ?>" method="POST" >
        <h2 id="index-header" style="display:inline">Product List</h2>
        <button type="submit" class="btn btn-danger float-end">MASS DELETE</button>
        <a href="./add-product.php"><button type="button" class="btn btn-primary float-end">ADD</button></a>
        <hr />
        <div class="text-center">
        <strong>  
        <?php 

        $items = new \Vendor\Display\ViewItems;
        $items->viewAllItems();
        ?>
        </strong>   
        </div>
        </form>
        <hr />
        
    </div>
    <div class="position-relative">
            <span class="position-absolute start-50 translate-middle">Scandiweb Test assignment</span>
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>