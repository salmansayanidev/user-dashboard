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
                    <h1 class=cart-title> Billing Information</h1>
                    <div class="row">
                        <div class="col-12">
                            <div class="billing-inner-area">
                                <form>
                                    <div class="billing-fields">
                                        <div class="billing-label">
                                            <label class="form-labels">Name</label>
                                        </div>
                                        <div class="billing-input">
                                            <input class="form-input" placeholder="Enter Your Name" type="text">
                                        </div>
                                    </div>
                                    <div class="billing-fields">
                                        <div class="billing-label">
                                            <label class="form-labels">Email Address</label>
                                        </div>
                                        <div class="billing-input">
                                            <input class="form-input" placeholder="Email Address" type="email">
                                        </div>
                                    </div>
                                    <div class="billing-fields">
                                        <div class="billing-label">
                                            <label class="form-labels">Phone</label>
                                        </div>
                                        <div class="billing-input">
                                            <input class="form-input" placeholder="Enter Your Phone No" type="email">
                                        </div>
                                    </div>
                                    <div class="billing-fields">
                                        <div class="billing-label">
                                            <label class="form-labels">Address</label>
                                        </div>
                                        <div class="billing-input">
                                            <textarea placeholder="Enter Full Address" class="form-input" name="" id="" cols="30" rows="10"></textarea>
                                        </div>
                                    </div>
                                    <div class="billing-fields">
                                        <div class="billing-label">
                                            <label class="form-labels">Country</label>
                                        </div>
                                        <div class="billing-input">
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>Select Country</option>
                                                <option value="1">Example</option>
                                                <option value="2">Example</option>
                                                <option value="3">Example</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="billing-fields">
                                        <div class="billing-label">
                                            <label class="form-labels">State</label>
                                        </div>
                                        <div class="billing-input">
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>Select State</option>
                                                <option value="1">Example</option>
                                                <option value="2">Example</option>
                                                <option value="3">Example</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="billing-fields">
                                        <div class="billing-label">
                                            <label class="form-labels">Order Notes:</label>
                                        </div>
                                        <div class="billing-input">
                                            <textarea placeholder="Write Some Note..." class="form-input height-105" name="" id="" cols="30" rows="10"></textarea>
                                        </div>
                                    </div>
                                    <h1 class=cart-title>Shipping Address</h1>
                                    <div class="shipping-address-checkbox">
                                        <input type="checkbox" name="" id="">
                                        <label class="form-labels mb-0 w-100">Same As Billing Address</label>
                                    </div>
                                    <div class="shipping-address">
                                        <div class="billing-fields">
                                            <div class="billing-label">
                                                <label class="form-labels">Name</label>
                                            </div>
                                            <div class="billing-input">
                                                <input class="form-input" placeholder="Enter Your Name" type="text">
                                            </div>
                                        </div>
                                        <div class="billing-fields">
                                            <div class="billing-label">
                                                <label class="form-labels">Email Address</label>
                                            </div>
                                            <div class="billing-input">
                                                <input class="form-input" placeholder="Email Address" type="email">
                                            </div>
                                        </div>
                                        <div class="billing-fields">
                                            <div class="billing-label">
                                                <label class="form-labels">Phone</label>
                                            </div>
                                            <div class="billing-input">
                                                <input class="form-input" placeholder="Enter Your Phone No" type="email">
                                            </div>
                                        </div>
                                        <div class="billing-fields">
                                            <div class="billing-label">
                                                <label class="form-labels">Address</label>
                                            </div>
                                            <div class="billing-input">
                                                <textarea placeholder="Enter Full Address" class="form-input" name="" id="" cols="30" rows="10"></textarea>
                                            </div>
                                        </div>
                                        <div class="billing-fields">
                                            <div class="billing-label">
                                                <label class="form-labels">Country</label>
                                            </div>
                                            <div class="billing-input">
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected>Select Country</option>
                                                    <option value="1">Example</option>
                                                    <option value="2">Example</option>
                                                    <option value="3">Example</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="billing-fields">
                                            <div class="billing-label">
                                                <label class="form-labels">State</label>
                                            </div>
                                            <div class="billing-input">
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected>Select State</option>
                                                    <option value="1">Example</option>
                                                    <option value="2">Example</option>
                                                    <option value="3">Example</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="billing-fields">
                                            <div class="billing-label">
                                                <label class="form-labels">Order Notes:</label>
                                            </div>
                                            <div class="billing-input">
                                                <textarea placeholder="Write Some Note..." class="form-input height-105" name="" id="" cols="30" rows="10"></textarea>
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