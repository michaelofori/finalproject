<?php
session_start();
require("../controllers/cart_controller.php");


$c_id = $_SESSION['customer_id'];
$count = count_cart_ctr($c_id);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Kemdar Electronics - Cart</title>
    <link rel="icon" href="../images/k.png" type="image/gif">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

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
        <!-- <script src="https://js.paystack.co/v1/inline.js"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid">
            <div class="row bg-secondary py-1 px-xl-5">
                <div class="col-lg-6 d-none d-lg-block">
                    <div class="d-inline-flex align-items-center h-100">
                        <a class="text-body mr-3" href="all_product.php">Home</a>
                        <a class="text-body mr-3" href="contact.php">Contact</a>
                    </div>
                </div>
                <div class="col-lg-6 text-center text-lg-right">
                    <div class="d-inline-flex align-items-center">
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">My Account</button>
                            <div class="dropdown-menu dropdown-menu-right">
                            <?php echo "<li> <a href='../actions/logout.php' onclick='onsignout()' ><i class='dropdown-item'></i> Logout</a> </li>";?>
                            </div>
                        </div>
                    </div>
                    <div class="d-inline-flex align-items-center d-block d-lg-none">
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
                        <button  name="submit">search</button>
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
                            <a href="shop.php" class="nav-item nav-link">Shop</a>
                            <!-- <a href="detail.html" class="nav-item nav-link">Shop Detail</a> -->
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages <i class="fa fa-angle-down mt-1"></i></a>
                                <div class="dropdown-menu bg-primary rounded-0 border-0 m-0">
                                    <a href="cart.php" class="dropdown-item">Shopping Cart</a>
                                    <!-- <a href="checkout.php" class="dropdown-item">Checkout</a> -->
                                </div>
                            </div>
                            <a href="contact.php" class="nav-item nav-link">Contact</a>
                        </div>
                        <div class="navbar-nav ml-auto py-0 d-none d-lg-block">
                            <!-- <a href="" class="btn px-0">
                                <i class="fas fa-heart text-primary"></i>
                                <span class="badge text-secondary border border-secondary rounded-circle" style="padding-bottom: 2px;">0</span>
                            </a> -->
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

    <!-- Breadcrumb Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <a class="breadcrumb-item text-dark" href="#">Home</a>
                    <a class="breadcrumb-item text-dark" href="#">Shop</a>
                    <span class="breadcrumb-item active">Shopping Cart</span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->


    <!-- Cart Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <!-- cart -->
            <div class="col-lg-8 table-responsive mb-5">
                <table class="table table-light table-borderless table-hover text-center mb-0">
                    <thead class="thead-dark">
                        <h4>Your shopping cart contains: <span><?php echo $count[0]["SUM(qty)"]; ?> Products</span></h4>
                        <tr>
                            <th>Products</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Remove</th>
                        </tr>
                    </thead>
                    <tr>
                        <?php
                        $prod = get_from_cart_ctr($_SESSION['customer_id']);
                        foreach ($prod as $item) {
                        ?>
                            <tbody class="align-middle">
                                <td class="align-middle"><img src="../images/product/<?php echo $item['product_image']; ?>" alt="" style="width: 50px;"> <?php echo $item['product_title'] ?></td>
                                <td class="align-middle"> <?php echo ('Ghc');
                                                            echo $item['products.product_price*cart.qty']; ?></td>
                                <td class="align-middle">
                                    <div class="input-group quantity mx-auto" style="width: 100px;">
                                        <div class="input-group-btn">
                                            <button id="de" onclick="loadDoc2(<?php echo $item['product_id']; ?>)" class="btn btn-sm btn-primary btn-minus">
                                                <i class="fa fa-minus"></i>
                                            </button>
                                        </div>
                                        <button class="entry value"><span><?php echo $item['qty']; ?></span></button>
                                        <div class="input-group-btn">
                                            <button id="in" onclick="loadDoc(<?php echo $item['product_id']; ?>)" class="btn btn-sm btn-primary btn-plus">
                                                <i class="fa fa-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                </td>
                                <td class="align-middle">
                                    <form action="../functions/remove_from_cart.php" method="post">
                                        <input type="hidden" name="p_id" value=<?php echo $item['product_id'] ?>>
                                        <button name="delcart" class="btn btn-sm btn-danger"><i class="fa fa-times">
                                            </i>
                                        </button>
                                    </form>
                                </td>
                            <?php
                        }
                            ?>
                    </tr>
                    </tbody>
                </table>
            </div>
            <!-- cart -->
            <!-- check out -->
            <div class="col-lg-4">
                <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Cart Summary</span></h5>
                <div class="bg-light p-30 mb-5">
                    <div class="border-bottom pb-2">
                        <div class="d-flex justify-content-between mb-3">
                            <?php
                            $tt = get_from_cart_ctr($c_id);
                            $total = total_cart_price_ctr($c_id);
                            foreach ($tt as $get) {
                            ?>
                                <h6>Subtotal</h6>
                                <h6> <span><?php echo $get['products.product_price*cart.qty']; ?></span></h6>
                        </div>
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-medium">Shipping</h6>
                            <h6 class="font-weight-medium">Ghc 0.00</h6>
                        </div>
                    </div>
                    <div class="pt-2">
                        <div class="d-flex justify-content-between mt-2">
                        <?php } ?>
                        <h5>Total</h5>
                        <h5>GH¢ <?php echo $total["SUM(cart.qty*products.product_price)"] ?></h5>
                        </div>
                        <a class="btn btn-block btn-primary font-weight-bold my-3 py-3" href="payment.php" class="pay2">
                            Proceed To Checkout

                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Cart End -->


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

    <script>
        function delDoc(id) {
            dataString = 'info=' + id;
            $.ajax({
                type: "POST",
                url: "../actions/del_cart.php",
                data: dataString,
                cache: false,
                success: function(info) {
                    alert(info);
                    location.reload(true);
                }
            });
        }
    </script>
    <script>
        function loadDoc(id) {
            inputbx = document.getElementById("in").value;
            console.log(id);
            dataString = 'pid=' + id + '&inputbx=' + inputbx;

            $.ajax({
                type: "POST",
                url: "../actions/update_qty.php",
                data: dataString,
                cache: false,
                success: function(result) {
                    //alert(result);
                }
            });
        }
    </script>

    <script>
        function loadDoc2(id2) {

            inputbx2 = document.getElementById("de").value;
            dataString = 'pid2=' + id2 + '&inputbx2=' + inputbx2;
            console.log(id2);

            $.ajax({
                type: "POST",
                url: "../actions/update_qty.php",
                data: dataString,
                cache: false,
                success: function(result) {
                    //alert(result);
                }
            });
        }
    </script>


    <script>
        function loadDoc3(id) {

            dataString = 'inputbx=' + id;

            $.ajax({
                type: "GET",
                url: "../actions/single_view.php",
                data: dataString,
                cache: false,
                success: function(result) {
                    //alert(result);
                    window.log("../actions/single_view.php");
                }
            });
        }
    </script>

    <script type="text/javascript" src="../js/move-top.js"></script>
    <script type="text/javascript" src="../js/easing.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>


</body>

</html>