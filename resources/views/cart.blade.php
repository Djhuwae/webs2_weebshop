<?php
session_start();
$product_ids = array();
session_destroy();

if(filter_input(INPUT_POST, 'add_to_cart')){
    if(isset($_SESSION['shopping_cart'])){

    }
    else{ //if shopping cart doesn't exist, create first item.
        $_SESSION['shopping_cart'][0] = array
        (
          'id' => filter_input(INPUT_GET, 'id'),
            'name' => filter_input(INPUT_POST, 'name'),
            'price' => filter_input(INPUT_POST, 'price'),
            'quantity' => filter_input(INPUT_POST, 'quantity')
        );
    }
}
pre_r($_SESSION);

function pre_r($array){
    echo '<pre>';
    print_r($array);
    echo '</pre>';
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Cart</title>
        {{--<link rel="stylesheet" href="/public/css/bootstrap.min.css" />--}}
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
        <link href="{{ asset('css/cart.css') }}" rel="stylesheet" type="text/css" >
        {{--<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" >--}}
    </head>
    <body>
        <div class="container">

        <?php
        $connect = mysqli_connect('localhost', 'root', '', 'weebshop');
        $query = 'SELECT * FROM products ORDER by id ASC';
        $result = mysqli_query($connect, $query);

        if($result){
            if(mysqli_num_rows($result) > 0){
                while($product = mysqli_fetch_assoc($result)){
                ?>
                <div class="col-sm-4 col-md-3 col-lg-4">
                    <form method="post" action="home.blade.php?action=add&id=<?php echo $product['id']; ?>">
                        <div class="products">
                            <img src="<?php echo $product['imageurl'];?>" class="img-responsive"/>
                            <h4 class="text-info"><?php echo $product['name']; ?></h4>
                            <h4>€ <?php echo $product['price']; ?></h4>
                            <input type="text" name="quantity" class="form-control" value="1" />
                            <input type="hidden" name="name" value="<?php echo $product['name']; ?>"/>
                            <input type="hidden" name="price" value="<?php echo $product['price']; ?>"/>
                            <input type="submit" name="add_to_cart" style="margin-top: 5px;" class="btn-info" value="Add to Cart"/>
                        </div>
                    </form>
                </div>

                }
            }
        }

        </div>
    </body>
</html>