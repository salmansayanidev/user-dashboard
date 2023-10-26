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
                    <h1 class="sec-title">My Coupons</h1>
                    <p class="welcome-para">Welcome to your Garrett Jay Creative Dashboards</p> 
                </div>
            </div>
            <div class="overflow-table">
                <div class="col-12">
                    <div class="user-dashboard-table coupons-table">
                        <div class="table-parent">
                            <table class="datatables-ajax table-responsive table-stripe table" id="orders-table">
                                <thead>
                                    <tr>
                                        <th>Sr. #</th>
                                        <th>Coupon Code</th>
                                        <th>Type</th>
                                        <th>Discount</th>
                                        <th>Status</th>
                                        <th>Start Date</th>
                                        <th>End Date</th>
                                        <th class="after-before-none"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>01</td>
                                        <td>Lorem Ipsum Dummy Text</td>
                                        <td>Percentage</td>
                                        <td>25%</td>
                                        <td>Enable</td>
                                        <td>10/19/2023</td>
                                        <td>10/19/2023</td>
                                        <td>
                                            <button type="button" class="popup-btn" onclick="couponPopup()">
                                                <i class="fa-solid fa-eye"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>02</td>
                                        <td>Lorem Ipsum Dummy Text</td>
                                        <td>Percentage</td>
                                        <td>25%</td>
                                        <td>Enable</td>
                                        <td>10/19/2023</td>
                                        <td>10/19/2023</td>
                                        <td>
                                            <button type="button" class="popup-btn" onclick="couponPopup()">
                                                <i class="fa-solid fa-eye"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>03</td>
                                        <td>Lorem Ipsum Dummy Text</td>
                                        <td>Fixed Amount</td>
                                        <td>$250</td>
                                        <td>Disable</td>
                                        <td>10/19/2023</td>
                                        <td>10/19/2023</td>
                                        <td>
                                            <button type="button" class="popup-btn" onclick="couponPopup()">
                                                <i class="fa-solid fa-eye"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>04</td>
                                        <td>Lorem Ipsum Dummy Text</td>
                                        <td>Fixed Amount</td>
                                        <td>$25</td>
                                        <td>Disable</td>
                                        <td>10/19/2023</td>
                                        <td>10/19/2023</td>
                                        <td>
                                            <button type="button" class="popup-btn" onclick="couponPopup()">
                                                <i class="fa-solid fa-eye"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>05</td>
                                        <td>Lorem Ipsum Dummy Text</td>
                                        <td>Percentage</td>
                                        <td>25%</td>
                                        <td>Enable</td>
                                        <td>10/19/2023</td>
                                        <td>10/19/2023</td>
                                        <td>
                                            <button type="button" class="popup-btn" onclick="couponPopup()">
                                                <i class="fa-solid fa-eye"></i>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="coupon-popup-wrap">
                    <div class="coupon-popup-area">
                        <button type="button" onclick="couponPopupClose()" class="close-coupon-popup">
                            <i class="fa-solid fa-xmark"></i>
                        </button>
                        <h2 class="text-center sec-title">COUPON</h2>
                        <div class="row">
                           <form>
                                <div class="col-12">
                                    <div class="popup-field-area">
                                        <div class="popup-label-area">
                                            <label>Code</label>
                                        </div>
                                        <div class="popup-input-area">
                                            <input type="text" placeholder="ANNIVERSARY70">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="popup-field-area">
                                        <div class="popup-label-area">
                                            <label>Type</label>
                                        </div>
                                        <div class="popup-input-area type-area">
                                            <div class="type-radio">
                                                <input class="type-radio" type="radio" name="type" id="percen">
                                                <label class="type-label" for="percen">
                                                    Percentage
                                                </label>
                                            </div>
                                            <div class="type-radio">
                                                <input class="type-radio" type="radio" name="type" id="percen">
                                                <label class="type-label" for="percen">
                                                    Fixed Amount
                                                </label>
                                            </div>
                                            <div class="type-radio">
                                                <input class="type-radio" type="radio" name="type" id="percen">
                                                <label class="type-label" for="percen">
                                                    Free shipping
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="popup-third-child">
                                        <div class="popup-field-area discount-area">
                                            <div class="popup-label-area">
                                                <label>Discount</label>
                                            </div>
                                            <div class="popup-input-area">
                                                <input type="text" placeholder="ANNIVERSARY70">
                                            </div>
                                        </div>
                                        <div class="popup-field-area usage-area">
                                            <div class="popup-label-area">
                                                <label>Usage</label>
                                            </div>
                                            <div class="popup-input-area">
                                                <input type="text" placeholder="ANNIVERSARY70">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="popup-third-child">
                                        <div class="popup-field-area discount-area">
                                            <div class="popup-label-area">
                                                <label>Start Date</label>
                                            </div>
                                            <div class="popup-input-area">
                                                <input type="date" placeholder="10/17/2023">
                                            </div>
                                        </div>
                                        <div class="popup-field-area usage-area">
                                            <div class="popup-label-area">
                                                <label>End Date</label>
                                            </div>
                                            <div class="popup-input-area">
                                                <input type="date" placeholder="10/17/2023">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="avail-now-btn">
                                        <button>Avail Now</button>
                                    </div>
                                </div>
                           </form>
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

    const couponPopupWrap = document.querySelector('.coupon-popup-wrap')
    function couponPopup() {
        couponPopupWrap.classList.add('active')
    }

    function couponPopupClose() {
        couponPopupWrap.classList.remove('active')
    }




    $(function() {

        $(document).on("click", ".popup-cls-btn", function() {
            $('.popup-wrap').removeClass('active')
        });

        $('#orders-table').DataTable({
            processing: true,
            language: {
                paginate: {
                    previous: '<i class="fa-solid fa-angle-left"></i>',
                    next: '<i class="fa-solid fa-angle-right"></i>'
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
                    data: ''
                },
            ],
        });
    });
</script>