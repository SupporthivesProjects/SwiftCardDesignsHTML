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

<h1>Payment unsuccessful</h1>
<p style="color:#DF3F3F;">Something went wrong and the payment failed. Please try again.</p>
</div>

<div class="checkout-success">
    <div class="check-su container">
        <div class="swipe-text d-block d-lg-none">
            <img src="img/swipe-dot.png" alt="">
            <p>Swipe to view table</p>
        </div>
       <div class="overflow-box">
       <table width="750px" cellpadding="0" cellspacing="0">
           <tr class="pay-black-tr" style="border-bottom: 2px solid var(--Functional-Error-Red, #DF3F3F);">
              <td style="width:343px">
                <p class="pay-white-text">
                    Product
                </p>
              </td>
              <td style="width:179px">
                <p class="pay-white-text">
                    Type
                </p>
              </td>
              <td style="width:80px">
                <p class="pay-white-text">
                    QTY
                </p>
              </td>
              <td style="width:100px" align="right">
                <p class="pay-white-text">
                    Total
                </p>
              </td>
           </tr>
           <tr class="pay-white-tr">
              <td style="width:343px">
                <p class="pay-grey-text">
                    Blogging Traffic System
                </p>
              </td>
              <td style="width:179px">
                <p class="pay-grey-text">
                    Template
                </p>
              </td>
              <td style="width:80px">
                <p class="pay-grey-text">
                    2
                </p>
              </td>
              <td style="width:100px" align="right">
                <p class="pay-grey-text">
                    £100.00
                </p>
              </td>
           </tr>
           <tr class="pay-blue-tr">
              <td style="width:343px">
                <p class="pay-grey-text">
                    Blogging Traffic System
                </p>
              </td>
              <td style="width:179px">
                <p class="pay-grey-text">
                    Template
                </p>
              </td>
              <td style="width:80px">
                <p class="pay-grey-text">
                    2
                </p>
              </td>
              <td style="width:100px" align="right">
                <p class="pay-grey-text">
                    £100.00
                </p>
              </td>
           </tr>
           <tr class="pay-white-tr">
              <td style="width:343px">
                <p class="pay-grey-text">
                    Blogging Traffic System
                </p>
              </td>
              <td style="width:179px">
                <p class="pay-grey-text">
                    Template
                </p>
              </td>
              <td style="width:80px">
                <p class="pay-grey-text">
                    2
                </p>
              </td>
              <td style="width:100px" align="right">
                <p class="pay-grey-text">
                    £100.00
                </p>
              </td>
           </tr>
           <tr class="pay-blue-tr">
              <td style="width:343px">
                <p class="pay-grey-text">
                    Blogging Traffic System
                </p>
              </td>
              <td style="width:179px">
                <p class="pay-grey-text">
                    Template
                </p>
              </td>
              <td style="width:80px">
                <p class="pay-grey-text">
                    2
                </p>
              </td>
              <td style="width:100px" align="right">
                <p class="pay-grey-text">
                    £100.00
                </p>
              </td>
           </tr>
           <tr class="pay-white-tr">
              <td style="width:343px">
                <p class="pay-grey-text">
                    Blogging Traffic System
                </p>
              </td>
              <td style="width:179px">
                <p class="pay-grey-text">
                    Template
                </p>
              </td>
              <td style="width:80px">
                <p class="pay-grey-text">
                    2
                </p>
              </td>
              <td style="width:100px" align="right">
                <p class="pay-grey-text">
                    £100.00
                </p>
              </td>
           </tr>
           <tr class="pay-blue-tr">
              <td style="width:343px">
                <p class="pay-grey-text">
                    Blogging Traffic System
                </p>
              </td>
              <td style="width:179px">
                <p class="pay-grey-text">
                    Template
                </p>
              </td>
              <td style="width:80px">
                <p class="pay-grey-text">
                    2
                </p>
              </td>
              <td style="width:100px" align="right">
                <p class="pay-grey-text">
                    £100.00
                </p>
              </td>
           </tr>
           <tr class="pay-white-tr" style="border-radius:0px 0px 20px 20px">
              <td style="width:343px"></td>
              <td style="width:179px">
                <h1 class="total-pay" style="color:#DF3F3F;">
                 Total Paid:
                </h1>
              </td>
              <td style="width:180px" align="right">
                <h1 class="total-pay" style="color:#DF3F3F;">
                  £700.00
                 </h1>
              </td>
           </tr>
       </table>
       </div>
       <div class="pay-success-button-line">
        <button class="gb-btn btn">Return home</button>
        <button class="gbg-btn btn" style="background:#DF3F3F;border: 1px solid var(--Functional-Error-Red, #DF3F3F);">View Order details</button>
       </div>
    </div>
</div>
</section>

<?php include 'includes/footer.php'; ?>