<?php
    include 'side-bar.php';  
?>
<?php
    include 'header.php';  
?>


    <section class="profile-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="sec-title-area">
                        <h1 class="sec-title">My Cart</h1>
                        <p class="welcome-para">Welcome to your Garrett Jay Creative Dashboards</p> 
                    </div>
                </div>
                <div class="col-12">
                    <div class="user-dashboard-table dashboard-table">
                        <h1 class=cart-title>Carts <span>(Listings)</span></h1>
                        <div class="table-parent">
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
                        <h1 class=cart-title>Order summary</h1>
                        <div class="order-summary-area">
                            <div class="order-summary">
                                <div class="order-summary-text">
                                    <span>Grand Total :</span>
                                </div>
                                <div class="order-summary-text">
                                    <span>$499.00</span>
                                </div>
                            </div>
                            <div class="order-summary">
                                <div class="order-summary-text">
                                    <span>Discount :</span>
                                </div>
                                <div class="order-summary-text">
                                    <span>$399.00</span>
                                </div>
                            </div>
                            <div class="order-summary">
                                <div class="order-summary-text">
                                    <span>Shipping Charge :</span>
                                </div>
                                <div class="order-summary-text">
                                    <span>$499.00</span>
                                </div>
                            </div>
                            <div class="order-summary">
                                <div class="order-summary-text">
                                    <span>Estimated Tax :</span>
                                </div>
                                <div class="order-summary-text">
                                    <span>$499.00</span>
                                </div>
                            </div>
                            <div class="order-summary">
                                <div class="order-summary-text">
                                    <span>Total :</span>
                                </div>
                                <div class="order-summary-text">
                                    <span>$ 1744.22</span>
                                </div>
                            </div>
                        </div>
                        <div class="checkout-btn-area">
                            <button class="checkout">Checkout</button>
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

