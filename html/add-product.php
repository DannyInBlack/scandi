<?php 
include '../includes/autoloader.inc.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link href="../styles/index.css" rel="stylesheet">
    <title>Add Product</title>
</head>
<body>
    <div class="container">
        <form name="myForm" id="product_form" action="./index.php" method="POST">
            <h2 id="index-header" style="display:inline">Product Add</h2>
            <a href="./index.php"><button type="button" class="btn btn-danger float-end">Cancel</button></a>
            <button type="submit" class="btn btn-primary float-end">Save</button>
            <hr />
            <div class="container ps-5">
                <div class="row mb-4 align-items-center">
                    <div class="col-sm-2">
                        <label for="sku" class="form-label">SKU</label>
                    </div>
                    <div class="col-sm-5">
                        <input required type="text" class="form-control" id="sku" name="sku">
                    </div>
                </div>
                <div class="row mb-4 align-items-center">
                    <div class="col-sm-2">
                        <label for="name" class="form-label">Name</label>
                    </div>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                </div>
                <div class="row mb-5 align-items-center">
                    <div class="col-sm-2">
                        <label for="price" class="form-label">Price ($)</label>
                    </div>
                    <div class="col-sm-5">
                        <input required type="number" class="form-control" id="price" name="price" min="0">
                    </div>
                </div>
                <div class="row mb-5 align-items-center">
                    <div class="col-auto">
                        <select required onchange="show(this.value)" name="productType" id="productType" class="form-select">
                            <option value="DVD">DVD</option>
                            <option value="Book">Book</option>
                            <option value="Furniture">Furniture</option>
                        </select>
                    </div>
                </div>
                <div hidden id="DVD" class="content">
                    <div class="row mb-4 align-items-center">
                        <div class="col-sm-2">
                            <label for="size" class="form-label">Size (MB)</label>
                        </div>
                        <div class="col-sm-5">
                            <input type="number" class="DVD form-input form-control" id="size" name="size" min="0">
                        </div>
                    </div>
                    <div class="row mb-5 align-items-center">
                        <div class="col-sm-4" style="text-align: center">
                            <label>Please provide size in MBs</label>
                        </div>
                    </div>
                </div>
                <div hidden id="Book" class="content">
                    <div class="row mb-4 align-items-center">
                        <div class="col-sm-2">
                            <label for="weight" class="form-label">Weight (KG)</label>
                        </div>
                        <div class="col-sm-5">
                            <input type="number" class="Book form-input form-control" id="weight" name="weight" min="0">
                        </div>
                    </div>
                    <div class="row mb-5 align-items-center">
                        <div class="col-sm-4" style="text-align: center">
                            <label>Please provide weight in KGs</label>
                        </div>
                    </div>
                </div>
                <div hidden id="Furniture" class="content">
                    <div class="row mb-4 align-items-center">
                        <div class="col-sm-2">
                            <label for="height" class="form-label">Height (CM)</label>
                        </div>
                        <div class="col-sm-5">
                            <input  type="number" class="Furniture form-input form-control" id="height" name="height" min="0">
                        </div>
                    </div>
                    <div class="row mb-4 align-items-center">
                        <div class="col-sm-2">
                            <label for="width" class="form-label">Width (CM)</label>
                        </div>
                        <div class="col-sm-5">
                            <input type="number" class="Furniture form-input form-control" id="width" name="width" min="0">
                        </div>
                    </div>
                    <div class="row mb-4 align-items-center">
                        <div class="col-sm-2">
                            <label for="length" class="form-label">Length (CM)</label>
                        </div>
                        <div class="col-sm-5">
                            <input type="number" class="Furniture form-input form-control" id="length" name="length" min="0">
                        </div>
                    </div>
                    <div class="row mb-5 align-items-center">
                        <div class="col-sm-4" style="text-align: center">
                            <label>Please fill in these dimensions in CMs</label>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <hr />
        <div class="position-relative">
            <span class="position-absolute start-50 translate-middle">Scandiweb Test assignment</span>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    
    <script src="../script/add-product.js">
    </script>
</body>
</html>