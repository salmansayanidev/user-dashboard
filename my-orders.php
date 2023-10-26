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
                        <h1 class="sec-title">My Orders</h1>
                        <p class="welcome-para">Welcome to your Garrett Jay Creative Dashboards</p> 
                    </div>
                </div>
                <div class="overflow-table">
                    <div class="col-12">
                        <div class="user-dashboard-table dashboard-table">
                            <h1 class=cart-title>Customer Orders (Listings)</h1>
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
                                            <td class="order-view">
                                                <div class="d-flex justify-content-around">
                                                    <button type="button" class="order-view-dropdown view-order-popup" onclick="orderPopup()">
                                                        <i class="fa-solid fa-eye"></i>
                                                    </button>
                                                    <button class="order-view-dropdown">
                                                        <i class="fa-solid fa-trash"></i>
                                                    </button>
                                                </div>
                                            </td>
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
                                            <td class="order-view">
                                                <div class="d-flex justify-content-around">
                                                    <button type="button" class="order-view-dropdown view-order-popup" onclick="orderPopup()">
                                                        <i class="fa-solid fa-eye"></i>
                                                    </button>
                                                    <button class="order-view-dropdown">
                                                        <i class="fa-solid fa-trash"></i>
                                                    </button>
                                                </div>
                                            </td>
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
                                            <td class="order-view">
                                                <div class="d-flex justify-content-around">
                                                    <button type="button" class="order-view-dropdown view-order-popup" onclick="orderPopup()">
                                                        <i class="fa-solid fa-eye"></i>
                                                    </button>
                                                    <button class="order-view-dropdown">
                                                        <i class="fa-solid fa-trash"></i>
                                                    </button>
                                                </div>
                                            </td>
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
                                            <td class="order-view">
                                                <div class="d-flex justify-content-around">
                                                    <button type="button" class="order-view-dropdown view-order-popup" onclick="orderPopup()">
                                                        <i class="fa-solid fa-eye"></i>
                                                    </button>
                                                    <button class="order-view-dropdown">
                                                        <i class="fa-solid fa-trash"></i>
                                                    </button>
                                                </div>
                                            </td>
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
                                            <td class="order-view">
                                                <div class="d-flex justify-content-around">
                                                    <button type="button" class="order-view-dropdown view-order-popup" onclick="orderPopup()">
                                                        <i class="fa-solid fa-eye"></i>
                                                    </button>
                                                    <button class="order-view-dropdown">
                                                        <i class="fa-solid fa-trash"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="order-popup-wrap">
                        <div class="order-popup">
                            <h2 class="order-popup-title">Order Details</h2>
                            <p class="order-popup-para">Product id: <span>#SK2540</span></p>
                            <p class="order-popup-para">Billing Name: <span>Neal Matthews</span></p>
                            <div class="order-popup-table-area">
                                <table class="table order-popup-table">
                                    <thead>
                                        <tr>
                                            <th>Product</th>
                                            <th>Product Name</th>
                                            <th>Price</th>
                                            <th>Collection</th>
                                            <th>Sub Collection</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><img src="./assets/images/table-product-img.png" alt=""></td>
                                            <td>Lorem Ipsum Dummy <span>(Maroon)</span> </td>
                                            <td>$ 255</td>
                                            <td>Lorem Ipsum Dummy</td>
                                            <td>Lorem Ipsum Dummy</td>
                                        </tr>
                                        <tr>
                                            <td><img src="./assets/images/table-product-img.png" alt=""></td>
                                            <td>Lorem Ipsum Dummy <span>(Blue)</span></td>
                                            <td>$ 255</td>
                                            <td>Lorem Ipsum Dummy</td>
                                            <td>Lorem Ipsum Dummy</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="total-calc-area">
                                <div class="total-calc-inner-area">
                                    <span>Sub Total:</span>
                                    <span>$ 255</span>
                                </div>
                                <div class="total-calc-inner-area">
                                    <span>Shipping:</span>
                                    <span>Free</span>
                                </div>
                                <div class="total-calc-inner-area">
                                    <span>Total:</span>
                                    <span>$ 400</span>
                                </div>
                            </div>
                            <div class="order-popup-close">
                                <button type="button" onclick="orderPopupClose()">close</button>
                            </div>
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




    
  

    const orderPopupWrap = document.querySelector('.order-popup-wrap')
    function orderPopup() {
        orderPopupWrap.classList.add('active')
    }

    function orderPopupClose() {
        orderPopupWrap.classList.remove('active')
    }





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

