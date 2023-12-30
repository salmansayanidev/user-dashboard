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
                        <h1 class="sec-title">Profile Details</h1>
                        <p class="welcome-para">Welcome to your Garrett Jay Creative Dashboards</p> 
                    </div>
                </div>
                <div class="profile-area">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-12">
                                <h1 class=cart-title>Profile Details <span>(Personal Information)</span></h1>
                            </div>
                            <div class="col-12">
                                <div class="profile-inner-area">
                                    <div class="row justify-content-between">
                                        <div class="col-lg-6 col-xl-6 col-12">
                                            <form class="profile-form">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-fields">
                                                            <label class="form-labels" for="">first name</label>
                                                            <input class="form-input" placeholder="first name" type="text">
                                                        </div> 
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-fields">
                                                            <label class="form-labels" for="">last name</label>
                                                            <input class="form-input" placeholder="last name" type="text">
                                                        </div> 
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-fields">
                                                            <label class="form-labels" for="">email</label>
                                                            <input class="form-input" placeholder="email" type="email">
                                                        </div> 
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-fields">
                                                            <label class="form-labels" for="">phone number</label>
                                                            <input class="form-input" placeholder="phone number" type="text">
                                                        </div> 
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-fields">
                                                            <label class="form-labels" for="">Billing Address</label>
                                                            <input class="form-input" placeholder="Billing Address" type="text">
                                                        </div> 
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-fields">
                                                            <label class="form-labels" for="">Shipping Address</label>
                                                            <input class="form-input" placeholder="Shipping Address" type="text">
                                                        </div>
                                                        <div class="form-fields">
                                                            <label class="form-labels" for=""></label>
                                                            <input class="form-input" placeholder="Shipping Address" type="text">
                                                        </div> 
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="check-box-fields">
                                                            <input type="checkbox" name="" id="">
                                                            <label class="form-labels" for="">Alternative Shipping Address</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-fields">
                                                            <label class="form-labels" for="">Alternative</label>
                                                            <input class="form-input" placeholder="Alternative" type="text">
                                                        </div>
                                                        <div class="form-fields">
                                                            <label class="form-labels" for=""></label>
                                                            <input class="form-input" placeholder="Shipping Address" type="text">
                                                        </div> 
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="profile-btn-area">
                                                            <button class="profile-detail-btn checkout">update now</button>
                                                        </div>
                                                    </div>
                                                </div>  
                                            </form>
                                        </div>
                                        <div class="col-lg-6 col-xl-5 col-12">
                                            <form class="profile-update-form">
                                                <div class="profile-img-area">
                                                    <img id="img-preview" class="img-fluid" src="./assets/images/update-profile.png" alt="">
                                                </div>
                                                <input id="upload-profile" class="d-none" type="file" accept="image/*" onchange="readURL(this)" />
                                                <label for="upload-profile" class="profile-update-btn">Update Picture</label>
                                                <!-- <button class="profile-update-btn">Update Picture</button> -->
                                                <div class="update-password-area">
                                                    <h2 class="update-pas-title">Update Password</h2>
                                                    <div class="update-pasword-fields">
                                                        <div class="update-pasword-icon">
                                                            <i class="fa-solid fa-lock"></i>
                                                        </div>
                                                        <div class="form-floating w-100">
                                                            <input type="password" class="form-control" placeholder="example">
                                                            <label class="signup-lable" for="floatingInput">PASSWORD</label>
                                                        </div>
                                                    </div>
                                                    <div class="update-pasword-fields">
                                                        <div class="update-pasword-icon">
                                                            <i class="fa-solid fa-lock"></i>
                                                        </div>
                                                        <div class="form-floating w-100">
                                                            <input type="password" class="form-control" placeholder="example">
                                                            <label class="signup-lable" for="floatingInput">CONFIRM PASSWORD</label>
                                                        </div>
                                                    </div>
                                                    <button class="profile-update-btn mb-0">Update Password</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
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

<script>
let noimage =
    "./assets/images/update-profile.png";

function readURL(input) {
  console.log(input.files);
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function (e) {
      $("#img-preview").attr("src", e.target.result);
    };

    reader.readAsDataURL(input.files[0]);
  } else {
    $("#img-preview").attr("src", noimage);
  }
}
</script>
