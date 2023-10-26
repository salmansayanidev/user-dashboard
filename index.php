<?php
    include 'side-bar.php';  
?>
<?php
    include 'header.php';  
?>


    <section class="welcome-dashbrd-sec">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="sec-title-area">
                        <h1 class="sec-title">Hello User<span> (not User?<a href="#"> Log out</a>)</span></h1>
                        <p class="welcome-para">Welcome to your Garrett Jay Creative Dashboards</p> 
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-6 col-xl-4">
                    <div class="total-ordrinvoice-product-area">
                        <div class="">
                            <h2 class="total-order-title">Total Orders</h2>
                            <h3 class="total-order-qua">246K</h3>
                            <i class="fa-solid fa-arrow-down"></i>
                            <span class="total-order-percen">13.8%</span>
                        </div>
                        <div class="">
                            <img src="./assets/images/bar-chart.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-6 col-xl-4">
                    <div class="total-ordrinvoice-product-area bg-black">
                        <div class="">
                            <h2 class="total-order-title">Total Invocies</h2>
                            <h3 class="total-order-qua">$39K</h3>
                            <i class="fa-solid fa-arrow-up"></i>
                            <span class="total-order-percen">13.8%</span>
                        </div>
                        <div class="">
                            <img src="./assets/images/bar-chart.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-12 col-xl-4">
                    <div class="total-ordrinvoice-product-area">
                        <div class="">
                            <h2 class="total-order-title">Products</h2>
                            <h3 class="total-order-qua">$39K</h3>
                            <i class="fa-solid fa-arrow-down"></i>
                            <span class="total-order-percen">13.8%</span>
                        </div>
                        <div class="">
                            <img src="./assets/images/bar-chart.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="user-dashboard-table dashboard-table">
                        <h1 class=cart-title>Carts <span>(Listings)</span></h1>
                        <div class="table-parent">
                            <div class="">
                            <table class="datatables-ajax table-responsive table-stripe table" id="orders-table">
                                <thead>
                                    <tr>
                                        <th>Sr. #</th>
                                        <th>Product</th>
                                        <th>Product Desc</th>
                                        <th>Color</th>
                                        <th>Order #</th>
                                        <th>Price</th>
                                        <th>Items</th>
                                        <th>Total</th>
                                        <th class="after-before-none"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>01</td>
                                        <td><img class="img-fluid table-product-img" src="./assets/images/table-product-img.png" alt="" srcset=""></td>
                                        <td>Lorem Ipsum Dummy Text</td>
                                        <td>Maroon</td>
                                        <td>123456</td>
                                        <td>$400.00</td>
                                        <td>3 items</td>
                                        <td data-order="1000">$400.00</td>
                                        <td><i class="fa-solid fa-eye"></i></td>
                                    </tr>
                                    <tr>
                                        <td>02</td>
                                        <td><img class="img-fluid table-product-img" src="./assets/images/table-product-img.png" alt="" srcset=""></td>
                                        <td>Lorem Ipsum Dummy Text</td>
                                        <td>Maroon</td>
                                        <td>123456</td>
                                        <td>$400.00</td>
                                        <td>3 items</td>
                                        <td data-order="1000">$400.00</td>
                                        <td><i class="fa-solid fa-eye"></i></td>
                                    </tr>
                                    <tr>
                                        <td>03</td>
                                        <td><img class="img-fluid table-product-img" src="./assets/images/table-product-img.png" alt="" srcset=""></td>
                                        <td>Lorem Ipsum Dummy Text</td>
                                        <td>Maroon</td>
                                        <td>123456</td>
                                        <td>$400.00</td>
                                        <td>3 items</td>
                                        <td data-order="1000">$400.00</td>
                                        <td><i class="fa-solid fa-eye"></i></td>
                                    </tr>
                                    <tr>
                                        <td>04</td>
                                        <td><img class="img-fluid table-product-img" src="./assets/images/table-product-img.png" alt="" srcset=""></td>
                                        <td>Lorem Ipsum Dummy Text</td>
                                        <td>Maroon</td>
                                        <td>123456</td>
                                        <td>$400.00</td>
                                        <td>3 items</td>
                                        <td data-order="1000">$400.00</td>
                                        <td><i class="fa-solid fa-eye"></i></td>
                                    </tr>
                                    <tr>
                                        <td>05</td>
                                        <td><img class="img-fluid table-product-img" src="./assets/images/table-product-img.png" alt="" srcset=""></td>
                                        <td>Lorem Ipsum Dummy Text</td>
                                        <td>Maroon</td>
                                        <td>123456</td>
                                        <td>$400.00</td>
                                        <td>3 items</td>
                                        <td data-order="1000">$400.00</td>
                                        <td><i class="fa-solid fa-eye"></i></td>
                                    </tr>
                                </tbody>
                            </table>
                            </div>
                        </div>
                        <div class="bottom-area">
                            <a class="cont-shop-a" href="#">Continue Shopping</a>
                            <a class="checkout" href="#">Checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


<?php
    include 'footer.php';  
?>          



    
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
<script>
    $(function() {

        $(document).on("click", ".popup-cls-btn", function() {
            $('.popup-wrap').removeClass('active')
        });

        $('#orders-table').DataTable({
            processing: true,
            language: {
                paginate: {
                    previous: '&nbsp;',
                    next: '&nbsp;'
                }
            },
            columns: [{
                    data: 'Sr'
                },
                {
                    data: 'Product'
                },
                {
                    data: 'Product_Desc'
                },
                {
                    data: 'Color'
                },
                {
                    data: 'Order'
                },
                {
                    data: 'Price'
                },
                {
                    data: 'Items'
                },
                {
                    data: 'Total'
                },
                {
                    data: ''
                },
            ],
        });
    });
</script>

