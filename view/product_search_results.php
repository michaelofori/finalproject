<?php
require("../controllers/product_controller.php");
$product_id = $_GET['product_id'];
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kemdar Electronics</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">
    <!-- CSS -->
    <link href="product/style.css" rel="stylesheet">
    <meta name="robots" content="noindex,follow" />

</head>

<body>
    <main class="container">

        <?php
        $prod = search_product_ctr($product_id);

        ?>

            <?php  
                 foreach($prod as $prod){
              ?>
        <!-- Product Image -->
        <div class="left-column">
            <img data-image="red" class="active" src="<?php echo ($prod['product_image']) ?>" alt="">
        </div>

        <!-- Right Column -->
        <div class="right-column">

            <!-- Product Cat -->
            <div class="product-description">
                <span><?php echo ("Category  ");
                        echo ($prod['product_cat']) ?>
                </span>
                <!-- Product ID -->
                <!-- <span><?php echo ("Id  ");
                            echo ($prod['product_id']) ?>
                    </span> -->

                <!-- Product Title -->
                <h1> <?php
                echo ("Title:  ");
                        echo ($prod['product_title']) ?>
                </h1>

                <!-- product Description -->
                <p><?php echo ("Description:  ");
                    echo ($prod['product_desc']) ?>
                </p>
            </div>

            <!-- Product Configuration -->
            <div class="product-configuration">

                <!-- Product brand -->
                <div class="product-color">
                    <span><?php echo ("Brand  ");
                            echo ($prod['product_brand']) ?>
                    </span>
                </div>

                <!-- Cable Configuration -->
                <div class="cable-config">
                    <!-- <span>Cable configuration</span> -->

                    <div class="cable-choose">
                        <!-- <button>Straight</button>
              <button>Coiled</button> -->
                         
                        <!-- <button type='submit' herf="all_product.php">Go back</button> -->
                    </div>

                    <a href="all_product.php">Go Back</a>
                </div>
            </div>

            <!-- Product Pricing -->
            <div class="product-price">
                <span><?php echo (" $  ");
                        echo ($prod['product_price']) ?></span>
                <a href="#" class="cart-btn">Add to cart</a>
            </div>
        </div>
        <?php
                }
                ?>
    </main>

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js" charset="utf-8"></script>
    <script src="product/script.js" charset="utf-8"></script>
</body>

</html>