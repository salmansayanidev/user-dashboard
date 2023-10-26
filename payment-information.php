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
                    <h1 class="sec-title">Checkout</h1>
                    <p class="welcome-para">Welcome to your Garrett Jay Creative Dashboards</p> 
                </div>
            </div>
            <div class="col-12">
                <div class="billing-information-area">
                    <h1 class=cart-title>Payment Info</h1>
                    <div class="row">
                        <div class="col-12">
                            <div class="billing-inner-area">
                                <form>
                                    <div class="card-side">
                                        <div class="card-input">
                                            <input type="checkbox" name="" id="">
                                        </div>
                                        <i class="fa-brands fa-cc-mastercard"></i>
                                        <span>credit / debit card</span>
                                    </div>
                                    <h1 class=cart-title>Billing Address</h1>
                                    <div class="billing-address-area">
                                        <div class="">
                                            <label class="form-labels">Complete Address</label>
                                            <input class="form-input" type="text" placeholder="Write here...">
                                        </div>
                                    </div>
                                    <h1 class=cart-title>For card Payment</h1>
                                    <div class="billing-address-area">
                                        <div class="billing-address-inner">
                                            <label class="form-labels">Card Number</label>
                                            <input class="form-input" type="text" placeholder="000 000 000 000 000">
                                        </div>
                                        <div class="billig-address-btm">
                                            <div class="billing-address-inner">
                                                <label class="form-labels">Name on card</label>
                                                <input class="form-input" type="text" placeholder="Name on card">
                                            </div>
                                            <div class="billing-address-inner">
                                                <label class="form-labels">Expiration date</label>
                                                <input class="form-input" type="text" placeholder="000 000 000 000 000">
                                            </div>
                                            <div class="billing-address-inner">
                                                <label class="form-labels">CVV</label>
                                                <input class="form-input" type="text" placeholder="CVV">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="billing-info-btn-area">
                                        <button class="checkout">Update Now</button>
                                    </div>
                                </form>
                            </div>
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