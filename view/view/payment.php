<?php
include "../settings/core.php";
include "../controllers/cart_controller.php";
$data = get_user_ctr($_SESSION['customer_id']);
$total = 0;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kemdar Electronics - Payment</title>
    <link rel="icon" href="../images/k.png" type="image/gif">
    <!-- Favicon -->
    

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <script src="https://js.paystack.co/v1/inline.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body>
    <!-- Topbar Start -->

    <div class="container-fluid">
        <div class="row bg-secondary py-1 px-xl-5">
            <div class="col-lg-6 d-none d-lg-block">
                <div class="d-inline-flex align-items-center h-100">
                    <a class="text-body mr-3" href="">About</a>
                    <a class="text-body mr-3" href="">Contact</a>
                    <a class="text-body mr-3" href="">Help</a>
                    <a class="text-body mr-3" href="">FAQs</a>
                </div>
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">My Account</button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <!-- <button class="dropdown-item" type="button">Sign in</button>
                            <button class="dropdown-item" type="button">Sign up</button> -->
                            <?php echo "<li> <a href='../actions/logout.php' onclick='onsignout()' ><i class='dropdown-item'></i> Logout</a> </li>"; ?>
                        </div>
                    </div>
                    <div class="btn-group mx-2">
                        <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">USD</button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <button class="dropdown-item" type="button">EUR</button>
                            <button class="dropdown-item" type="button">GBP</button>
                            <button class="dropdown-item" type="button">CAD</button>
                        </div>
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">EN</button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <button class="dropdown-item" type="button">FR</button>
                            <button class="dropdown-item" type="button">AR</button>
                            <button class="dropdown-item" type="button">RU</button>
                        </div>
                    </div>
                </div>
                <div class="d-inline-flex align-items-center d-block d-lg-none">
                    <a href="" class="btn px-0 ml-2">
                        <i class="fas fa-heart text-dark"></i>
                        <span class="badge text-dark border border-dark rounded-circle" style="padding-bottom: 2px;">0</span>
                    </a>
                    <a href="" class="btn px-0 ml-2">
                        <i class="fas fa-shopping-cart text-dark"></i>
                        <span class="badge text-dark border border-dark rounded-circle" style="padding-bottom: 2px;">0</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="row align-items-center bg-light py-3 px-xl-5 d-none d-lg-flex">
            <div class="col-lg-4">
                <a href="all_product.php" class="text-decoration-none">
                    <span class="h1 text-uppercase text-primary bg-dark px-2">Kemdar</span>
                    <span class="h1 text-uppercase text-dark bg-primary px-2 ml-n1">Electronics</span>
                </a>
            </div>
            <div class="col-lg-4 col-6 text-left">
                <form action="../functions/search_results.php" method="post">
                    <div class="input-group">
                        <input type="search" class="form-control" name="search" id="search" placeholder="Search for products">
                        <div class="input-group-append">
                            <span type="submit" class="input-group-text bg-transparent text-primary">
                                <i class="fa fa-search"></i>
                            </span>
                        </div>
                        <button name="submit">search</button>
                    </div>

                </form>
            </div>
            <div class="col-lg-4 col-6 text-right">
                <p class="m-0">Customer Service</p>
                <h5 class="m-0">+233 20 95 35 914</h5>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid bg-dark mb-30">
        <div class="row px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a class="btn d-flex align-items-center justify-content-between bg-primary w-100" data-toggle="collapse" href="#navbar-vertical" style="height: 65px; padding: 0 30px;">
                    <h6 class="text-dark m-0"><i class="fa fa-bars mr-2"></i>Categories</h6>
                    <i class="fa fa-angle-down text-dark"></i>
                </a>
                <nav class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 bg-light" id="navbar-vertical" style="width: calc(100% - 30px); z-index: 999;">
                    <div class="navbar-nav w-100">
                        <?php
                        $cat = select_all_categories_ctr();
                        $brand = select_all_brands_ctr();
                        foreach ($cat as $item) {
                        ?>
                            <div class="nav-item dropdown dropright">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"><?php echo ($item['cat_name']) ?><i class="fa fa-angle-right float-right mt-1"></i></a>
                                <div class="dropdown-menu position-absolute rounded-0 border-0 m-0">
                                    <a href="" class="dropdown-item">-</a>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </nav>
            </div>
            <div class="col-lg-9">
                <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-0">
                    <a href="all_product.php" class="text-decoration-none d-block d-lg-none">
                        <span class="h1 text-uppercase text-dark bg-light px-2">Kemdar</span>
                        <span class="h1 text-uppercase text-light bg-primary px-2 ml-n1">Electronics</span>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a href="all_product.php" class="nav-item nav-link active">Home</a>
                            <a href="shop.html" class="nav-item nav-link">Shop</a>
                            <a href="detail.html" class="nav-item nav-link">Shop Detail</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages <i class="fa fa-angle-down mt-1"></i></a>
                                <div class="dropdown-menu bg-primary rounded-0 border-0 m-0">
                                    <a href="cart.html" class="dropdown-item">Shopping Cart</a>
                                    <a href="checkout.html" class="dropdown-item">Checkout</a>
                                </div>
                            </div>
                            <a href="contact.html" class="nav-item nav-link">Contact</a>
                        </div>
                        <div class="navbar-nav ml-auto py-0 d-none d-lg-block">
                            <a href="" class="btn px-0">
                                <i class="fas fa-heart text-primary"></i>
                                <span class="badge text-secondary border border-secondary rounded-circle" style="padding-bottom: 2px;">0</span>
                            </a>
                            <a href="" class="btn px-0 ml-3">
                                <i class="fas fa-shopping-cart text-primary"></i>
                                <span class="badge text-secondary border border-secondary rounded-circle" style="padding-bottom: 2px;">0</span>
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Navbar End -->

    <main class="container">
        <?php
        $prod = select_user_cart($_SESSION['customer_id']);
        foreach ($prod as $item) {
        ?>
            <!-- Product Image -->
            <div class="left-column">
                <img data-image="red" width="300" height="300" class="active" src="../images/product/<?php echo $item['product_image'] ?>" alt="">
            </div>
          
            <!-- Right Column -->
            <div class="right-column">
                <!-- Product Cat -->
                <div class="product-description">
                    <h1> <?php
                            echo ("Title:  ");
                            echo ($item['product_title']) ?>
                    </h1>
                    <!-- product Description -->
                    <p><?php echo ("Description:  ");
                        echo ($item['product_desc']) ?>
                    </p>
                </div>
                <!-- Product Configuration -->
                <div class="product-configuration">
                <div>
                    <?php echo ('Ghc   ');
                    echo ($item['product_price']);
                    $total = $total + $item['product_price'];
                    ?>
                </div>
                </div>
            </div>
        <?php
        } ?>
        <h1>Total price</h1>
        <?php
        echo ("Ghc" . $total);
        ?>
        <form id="paymentForm" method='post'>
            <div class="form-group">

                <input type="email" id="email-address" hidden required value="<?php echo $data['customer_email'] ?>" />
            </div>
            <div class="form-group">
                <input type="number" id="amount" hidden required value="<?php echo $total ?>" />
            </div>
            <div class="form-group">
                <input type="text" id="first-name" hidden value="<?php echo $data['customer_name'] ?>" />
            </div>
            <div class="form-group">
                <input type="number" id="customer-Id" hidden value="<?php echo $data['customer_id'] ?>" />
            </div>


            <button type="submit" onclick="payWithPaystack()"> Pay </button>

        </form>
    </main>

    <!-- <div>
        <h1>Products</h1>
        <?php
        $prod = select_user_cart($_SESSION['customer_id']);
        foreach ($prod as $item) {
        ?>
            <div class='edit'>
                <div>
                    <?php echo ($item['product_title']) ?>
                </div>

                <div></div>
                <img id="img1" width="300" height="300" style='border-radius: 8px' src="../images/product/<?php echo $item['product_image']; ?>" alt="" srcset="">
                <div>
                    <?php echo ('$');
                    echo ($item['product_price']);
                    $total = $total + $item['product_price'];
                    ?>
                </div>

                <div><a href="single_product.php?bid=<?php echo ($item['product_id']); ?>">View Product</a></div>
            </div>


        <?php
        } ?>
        <h1>Total price</h1>
        <?php
        echo ("Ghc" . $total);
        ?>
        <form id="paymentForm" method='post'>
            <div class="form-group">

                <input type="email" id="email-address" hidden required value="<?php echo $data['customer_email'] ?>" />
            </div>
            <div class="form-group">
                <input type="number" id="amount" hidden required value="<?php echo $total ?>" />
            </div>
            <div class="form-group">
                <input type="text" id="first-name" hidden value="<?php echo $data['customer_name'] ?>" />
            </div>
            <div class="form-group">
                <input type="number" id="customer-Id" hidden value="<?php echo $data['customer_id'] ?>" />
            </div>


            <button type="submit" onclick="payWithPaystack()"> Pay </button>

        </form>
    </div> -->

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-secondary mt-5 pt-5">
        <div class="row px-xl-5 pt-5">
            <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
                <h5 class="text-secondary text-uppercase mb-4">Get In Touch</h5>
                <p class="mb-4">Best Electronic Supplier In Ghana</p>
                <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>Spintex Road, Accra</p>
                <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>michael.ofori@gmail.com</p>
                <p class="mb-0"><i class="fa fa-phone-alt text-primary mr-3"></i>+233 20 95 35 914</p>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="row">
                    <div class="col-md-4 mb-5">
                        <h5 class="text-secondary text-uppercase mb-4">Quick Shop</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-secondary mb-2" href="all_product.php"><i class="fa fa-angle-right mr-2"></i>Home</a>
                            <a class="text-secondary mb-2" href="shop.php"><i class="fa fa-angle-right mr-2"></i>Our Shop</a>
                            <a class="text-secondary mb-2" href="cart.php"><i class="fa fa-angle-right mr-2"></i>Shopping Cart</a>
                            <a class="text-secondary" href="contact.php"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <h5 class="text-secondary text-uppercase mb-4">More Offers</h5>
                        <p>Get in touch</p>
                        <form action="">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Your Email Address">
                                <div class="input-group-append">
                                    <button class="btn btn-primary">Sign Up</button>
                                </div>
                            </div>
                        </form>
                        <h6 class="text-secondary text-uppercase mt-4 mb-3">Follow Us</h6>
                        <div class="d-flex">
                            <a class="btn btn-primary btn-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-primary btn-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-primary btn-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-primary btn-square" href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row border-top mx-xl-5 py-4" style="border-color: rgba(256, 256, 256, .1) !important;">
            <div class="col-md-6 px-xl-0">
                <p class="mb-md-0 text-center text-md-left text-secondary">
                    &copy; <a class="text-primary" href="https://www.instagram.com/the_middlemen_/">Middlemen Garage</a>. All Rights Reserved. Developer
                    
                    <a class="text-primary" href="https://github.com/monk63">Michael Ofori</a>
                </p>
            </div>
            <div class="col-md-6 px-xl-0 text-center text-md-right">
                <img class="img-fluid" src="img/payments.png" alt="">
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>
    <script type="text/javascript">
        function payWithPaystack() {


            event.preventDefault();
            let handler = PaystackPop.setup({
                key: 'pk_live_bd5356607a881f3a0d6843b75d3172b74b9675cd',
                // key: 'pk_test_2f4f689442f4751d03e7f9d680a26a38bba21720', // Replace with your public key
                email: document.getElementById("email-address").value,
                amount: document.getElementById("amount").value * 100,
                ref: '' + Math.floor((Math.random() * 1000000000) + 1),
                currency: 'GHS',
                // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
                // label: "Optional string that replaces customer email"
                onClose: function() {
                    alert('Window closed.');
                },
                callback: function(response){

                    alert("payment have been made"+ response.reference);
                    $.ajax({
                    url:"../actions/process.php?reference="+ response.reference,
                    method:'GET',
                    success: function (response){
                        document.getElementById("stripe-login").submit();
                    }

            });
    }
  });
            handler.openIframe();
        }
    </script>


<script src="https://js.paystack.co/v1/inline.js"></script> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>