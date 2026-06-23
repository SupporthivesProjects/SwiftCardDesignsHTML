<?php include 'includes/header.php'; ?>

<section class="checkout-page">
<div class="checkout-top">
    <!-- Desktop Video -->
<video class="w-100 d-none d-lg-block bg-image" autoplay muted loop playsinline>
    <source src="img/checkout-top.mp4" type="video/mp4">
</video>

<!-- Mobile Video -->
<video class="w-100 d-block d-lg-none bg-image" autoplay muted loop playsinline>
    <source src="img/checkout-top-mb.mp4" type="video/mp4">
</video>

<h1>Secure checkout</h1>
</div>

<div class="checkout-main">
    <!-- <img src="img/checkout-bg.png" alt="" class="bg-image"> -->
    <div class="content-boxx">
        <div class="billing-detail">
            <p class="bbld">Your billing Details</p>
            <div class="input-check w-100">
                <div class="inp-line">
                    <input type="text" class="inp-field w-100" placeholder="First Name">
                    <input type="text" class="inp-field w-100" placeholder="Last Name">
                </div>
                <div class="inp-line">
                    <input type="text" class="inp-field w-100" placeholder="Email Address">
                    <input type="text" class="inp-field w-100" placeholder="Phone Number">
                </div>
                <div class="inp-line">
                    <input type="text" class="inp-field w-100" placeholder="Address Line 1">
                    <input type="text" class="inp-field w-100" placeholder="Address Line 2">
                </div>
                <div class="inp-line">
                    <input type="text" class="inp-field w-100" placeholder="City">
                    <input type="text" class="inp-field w-100" placeholder="Post Code">
                </div>
                <div class="inp-line w-100">
                    <select class="form-select inp-field-count w-100" id="country" name="country">
                      <option selected disabled>Select Country</option>
                      <option value="IN">India</option>
                      <option value="US">United States</option>
                      <option value="GB">United Kingdom</option>
                      <option value="CA">Canada</option>
                      <option value="AU">Australia</option>
                      <option value="DE">Germany</option>
                      <option value="FR">France</option>
                      <option value="IT">Italy</option>
                      <option value="ES">Spain</option>
                    </select>
                    <input type="text" class="inp-field w-100" placeholder="Date">
                </div>
                <div class="checkout-tp d-none d-lg-block">
                 <input class="check-inp" type="checkbox" id="terms">
                 <label class="check-label" for="terms">
                     By ticking this box, you agree to the <a href="tc.php">Terms & Conditions</a> & <a href="pp.php">Privacy Policy</a> .
                 </label>
                </div>
                <div class="recap-line d-none d-lg-block">
                    <img src="img/recaptcha.png" alt="" class="recap">
                    <img src="img/mastercardvisa.svg" alt="" class="mcard">
                </div>
            </div>
        </div>
        <div class="order-sum">
            <p class="bbld">Order Summary</p>
            <table width="100%" cellpadding="0" cellspacing="0">
               <tr>
                <td width="225px">
                    <p class="os-prod">
                        Blogging Traffic System
                    </p>
                </td>
                <td width="4px"></td>
                <td>
                    <p class="os-prodd">
                        x1
                    </p>
                </td>
                <td width="24px"></td>
                <td>
                    <p class="os-prodd">
                        £189.50
                    </p>
                </td>
                <td width="8px"></td>
                <td>
                    <img src="img/trash-icon.png" alt="">
                </td>
               </tr>
               <tr style="height:16px"></tr>
               <tr>
                <td width="225px">
                    <p class="os-prod">
                        Your First Website Course
                    </p>
                </td>
                <td width="4px"></td>
                <td>
                    <p class="os-prodd">
                        x1
                    </p>
                </td>
                <td width="24px"></td>
                <td>
                    <p class="os-prodd">
                        £189.50
                    </p>
                </td>
                <td width="8px"></td>
                <td>
                    <img src="img/trash-icon.png" alt="">
                </td>
               </tr>
               <tr style="height:16px"></tr>
               <tr>
                <td width="225px">
                    <p class="os-prod">
                        Blogging Traffic System
                    </p>
                </td>
                <td width="4px"></td>
                <td>
                    <p class="os-prodd">
                        x1
                    </p>
                </td>
                <td width="24px"></td>
                <td>
                    <p class="os-prodd">
                        £189.50
                    </p>
                </td>
                <td width="8px"></td>
                <td>
                    <img src="img/trash-icon.png" alt="">
                </td>
               </tr>
            </table>
            <img src="img/os-line.png" alt="" class="os-line">
            <div class="sub-total">
                <h1>Subtotal</h1>
                <h1>£379.00</h1>
            </div>
            <div class="inp-line w-100">
                <input type="text" class="inp-field w-100" placeholder="Coupon Code">
                <button class="apply-btn btn">Apply</button>
            </div>
            <img src="img/os-line.png" alt="" class="os-line">
            <div class="sub-total">
                <h1><b>Total</b></h1>
                <h1><b>£379.00</b></h1>
            </div>
            <div class="checkout-tp d-block d-lg-none">
                 <input class="check-inp" type="checkbox" id="terms">
                 <label class="check-label" for="terms">
                     By ticking this box, you agree to the <a href="tc.php">Terms & Conditions</a> & <a href="pp.php">Privacy Policy</a> .
                 </label>
                </div>
                <div class="recap-line d-block d-lg-none">
                    <img src="img/recaptcha.png" alt="" class="recap">
                    <img src="img/mastercardvisa.svg" alt="" class="mcard">
                </div>
            <button class="green-btn btn">Continue to payment</button>
        </div>
    </div>
</div>
</section>

<?php include 'includes/footer.php'; ?>