<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Document</title>
</head>

<body>
    <div class="row col-md-12 justify-content-center pb-4">
        <h2>Add New Product</h2>
    </div>
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <form method="POST" action="/myoop/product/add/submit">
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="pid">Product ID</label>
                        <input type="text" class="form-control" id="pid" placeholder="Product ID" name="pid">
                    </div>
                    <div class="form-group col-md-8">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Product Name" name="name">
                    </div>
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <input type="text" class="form-control" id="description" placeholder="Product details.." name="description">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="price">Price</label>
                        <input type="text" pattern="^\d*(\.\d{0,2})?$" class="form-control" id="priceprice" placeholder="0.00" name="price">
                    </div>
                    <div class="form-group col-md-8">
                        <label for="category">Category</label>
                        <select id="category" class="form-control" name="category">
                            <?php if (isset($categoryList)) {
                                foreach ($categoryList as $key => $value) {
                                    echo '<option value="' .
                                        $value["id"] . '">' .
                                        $value["name"] .
                                        '</option>';
                                }
                            } ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck">
                        <label class="form-check-label" for="gridCheck">
                            I agree with the Terms & Condition
                        </label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Add Product</button>
            </form>
        </div>
        <div class="col-md-3"></div>
    </div>


    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>

</html>