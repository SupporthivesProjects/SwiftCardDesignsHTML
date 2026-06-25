<?php include 'includes/header.php'; ?>

<section class="dr_product_detail">

    <div class="dr_product_detail_card">

        <div class="dr_product_left">

            <div class="dr_product_image">

                <img src="./img/image.png" alt="Book Image">

            </div>

        </div>

        <div class="dr_product_right">

            <span class="dr_product_badge dr_mobile_badge">
                E-BOOK
            </span>

            <h1 class="dr_product_heading">
                Book Title Goes Here In Two Lines Or Less
            </h1>

            <p class="dr_product_description">
                Lorem ipsum dolor sit amet consectetur. Lorem in volutpat imperdiet sem risus.
                Pharetra tellus nulla montes lorem massa facilisis molestie senectus.
                Lorem enim quam facilisi egestas proin non nam molestie sollicitudin.
            </p>

            <p class="dr_product_description">
                Porttitor odio at felis sagittis dignissim nec. Sit morbi leo dictum eget in et.
                Duis in proin rhoncus netus risus. Fermentum eget pulvinar aliquam risus.
            </p>

            <div class="dr_product_bottom">

                <div class="dr_product_price">
                    $48.89
                </div>

                <div class="dr_quantity_wrap">

                    <span class="dr_qty_label">
                        Quantity:
                    </span>

                    <div class="dr_quantity_box">

                        <button type="button" class="dr_qty_btn dr_minus">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
                                <path d="M3.75 11.25V12.75H20.25V11.25H3.75Z" fill="#0E0E0E" />
                            </svg> </button>

                        <input type="text" value="2" class="dr_qty_input">

                        <button type="button" class="dr_qty_btn dr_plus">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
                                <path
                                    d="M11.25 3.75V11.25H3.75V12.75H11.25V20.25H12.75V12.75H20.25V11.25H12.75V3.75H11.25Z"
                                    fill="#0E0E0E" />
                            </svg> </button>

                    </div>

                </div>


                <button class="dr_add_cart_btn" type="button" class="dr_add_cart_btn" data-bs-toggle="modal"
                    data-bs-target="#drCartModal">
                    Add To Cart
                </button>

            </div>

        </div>

    </div>

</section>

<section class="dr_services">

    <div class="container px-0">

        <div class="dr_services_top">

            <div class="dr_services_content">

                <span class="dr_services_label">
                    <svg xmlns="http://www.w3.org/2000/svg" width="7" height="7" viewBox="0 0 6 6" fill="none">
                        <circle cx="3" cy="3" r="3" fill="#05676A" />
                    </svg> OUR BESPOKE SERVICES
                </span>

                <h2 class="dr_services_title">
                    <span>Web Design</span> That Gives Your Brand More Room To Stand Out
                </h2>

            </div>

            <div class="dr_services_right">

                <p>
                    Lorem ipsum dolor sit amet consectetur. Pharetra quis potenti arcu scelerisque orci sed. Odio enim
                    mi morbi enim orci. Mollis dictum ultrices erat diam ultrices diam sed. Id accumsan lectus felis
                    egestas integer mauris. </p>

                <a href="#" class="dr_services_btn">
                    <span>Request Bespoke Design Services</span>
                </a>

            </div>

        </div>

        <!-- Desktop Cards -->

        <div class="dr_services_grid">

            <div class="dr_service_card">
                <div class="dr_service_icon">
                    <img src="./img/ico_1.svg">
                </div>

                <h4>User Interface</h4>

                <p>Lorem ipsum dolor sit amet consectetur. Hac imperdiet aliquet nulla elementum vel. Interdum nisi mi
                    ornare consequat. Ut lacus mollis.</p>
            </div>

            <div class="dr_service_card">
                <div class="dr_service_icon">
                    <img src="./img/ico_2.svg">
                </div>

                <h4>User Experience</h4>

                <p>Lorem ipsum dolor sit amet consectetur.</p>
            </div>

            <div class="dr_service_card">
                <div class="dr_service_icon">
                    <img src="./img/ico_3.svg">
                </div>

                <h4>Illustration</h4>

                <p>Lorem ipsum dolor sit amet consectetur.</p>
            </div>

            <div class="dr_service_card">
                <div class="dr_service_icon">
                    <img src="./img/ico_4.svg">
                </div>

                <h4>E-Commerce</h4>

                <p>Lorem ipsum dolor sit amet consectetur.</p>
            </div>

            <div class="dr_service_card">
                <div class="dr_service_icon">
                    <img src="./img/ico_5.svg">
                </div>

                <h4>A/B Testing</h4>

                <p>Lorem ipsum dolor sit amet consectetur.</p>
            </div>

        </div>


        <!-- Swipe -->
        <div class="d-lg-none d-md-none d-block w-100 mb-4">
            <span class="dr_services_label">
                <svg xmlns="http://www.w3.org/2000/svg" width="7" height="7" viewBox="0 0 7 7" fill="none">
                    <circle cx="3" cy="3" r="3" fill="#05676A" />
                </svg> Swipe to view our services
            </span>
        </div>


        <!-- Mobile Slider -->
        <div class="d-lg-none d-md-none d-block w-100">
            <div class="dr_services_slider owl-carousel owl-theme">

                <div class="swiper_silder_file">
                    <div class="dr_service_card">
                        <div class="dr_service_icon">
                            <img src="./img/ico_1.svg" alt="">
                        </div>

                        <h4>User Interface</h4>

                        <p>Lorem ipsum dolor sit amet consectetur. Hac imperdiet aliquet nulla elementum vel. Interdum
                            nisi
                            mi ornare consequat. Ut lacus mollis.</p>
                    </div>
                </div>

                <div class="swiper_silder_file">
                    <div class="dr_service_card">
                        <div class="dr_service_icon">
                            <img src="./img/ico_2.svg" alt="">
                        </div>

                        <h4>User Experience</h4>

                        <p>Lorem ipsum dolor sit amet consectetur.</p>
                    </div>
                </div>

                <div class="swiper_silder_file">
                    <div class="dr_service_card">
                        <div class="dr_service_icon">
                            <img src="./img/ico_3.svg" alt="">
                        </div>

                        <h4>Illustration</h4>

                        <p>Lorem ipsum dolor sit amet consectetur.</p>
                    </div>
                </div>

                <div class="swiper_silder_file">
                    <div class="dr_service_card">
                        <div class="dr_service_icon">
                            <img src="./img/ico_4.svg" alt="">
                        </div>

                        <h4>E-Commerce</h4>

                        <p>Lorem ipsum dolor sit amet consectetur.</p>
                    </div>
                </div>

                <div class="swiper_silder_file">
                    <div class="dr_service_card">
                        <div class="dr_service_icon">
                            <img src="./img/ico_5.svg" alt="">
                        </div>

                        <h4>A/B Testing</h4>

                        <p>Lorem ipsum dolor sit amet consectetur.</p>
                    </div>
                </div>

            </div>
        </div>


    </div>

</section>

<section class="dr_related_resources">

    <div class="container relate_container px-0">

        <span class="dr_section_label">
            • RECOMMENDED PRODUCTS
        </span>

        <h2 class="dr_section_title">
            Related Resources
        </h2>

        <!-- Desktop -->

        <div class="dr_related_grid">

            <!-- Use your existing card -->
            <div class="dm_product_card">

                <div class="dm_product_image">
                    <span class="dm_product_badge">
                        E-BOOK
                    </span>

                    <img src=./img/image.png>
                </div>

                <h4 class="dm_product_title">
                    Book Title Goes Here In Two Lines Or Less
                </h4>

                <p class="dm_product_desc">
                    Lorem ipsum dolor sit amet consectetur. Nunc vitae libero... </p>

                <div class="dm_product_price">
                    $48.89
                </div>

                <div class="dm_product_footer">

                    <a href="#" class="dm_btn">
                        Learn More
                    </a>

                    <button class="dm_cart_btn">
                        <img src="./img/cart_btn.svg" alt="" class="white_icon">
                        <img src="./img/green_icon.svg" alt="" class="green_icon">
                    </button>

                </div>

            </div>
            <div class="dm_product_card">

                <div class="dm_product_image">
                    <span class="dm_product_badge">
                        E-BOOK
                    </span>

                    <img src=./img/image.png>
                </div>

                <h4 class="dm_product_title">
                    Book Title Goes Here In Two Lines Or Less
                </h4>

                <p class="dm_product_desc">
                    Lorem ipsum dolor sit amet consectetur. Nunc vitae libero... </p>

                <div class="dm_product_price">
                    $48.89
                </div>

                <div class="dm_product_footer">

                    <a href="#" class="dm_btn">
                        Learn More
                    </a>

                    <button class="dm_cart_btn">
                        <img src="./img/cart_btn.svg" alt="" class="white_icon">
                        <img src="./img/green_icon.svg" alt="" class="green_icon">
                    </button>

                </div>

            </div>
            <div class="dm_product_card">

                <div class="dm_product_image">
                    <span class="dm_product_badge">
                        E-BOOK
                    </span>

                    <img src=./img/image.png>
                </div>

                <h4 class="dm_product_title">
                    Book Title Goes Here In Two Lines Or Less
                </h4>

                <p class="dm_product_desc">
                    Lorem ipsum dolor sit amet consectetur. Nunc vitae libero... </p>

                <div class="dm_product_price">
                    $48.89
                </div>

                <div class="dm_product_footer">

                    <a href="#" class="dm_btn">
                        Learn More
                    </a>

                    <button class="dm_cart_btn">
                        <img src="./img/cart_btn.svg" alt="" class="white_icon">
                        <img src="./img/green_icon.svg" alt="" class="green_icon">
                    </button>

                </div>

            </div>
            <div class="dm_product_card">

                <div class="dm_product_image">
                    <span class="dm_product_badge">
                        E-BOOK
                    </span>

                    <img src=./img/image.png>
                </div>

                <h4 class="dm_product_title">
                    Book Title Goes Here In Two Lines Or Less
                </h4>

                <p class="dm_product_desc">
                    Lorem ipsum dolor sit amet consectetur. Nunc vitae libero... </p>

                <div class="dm_product_price">
                    $48.89
                </div>

                <div class="dm_product_footer">

                    <a href="#" class="dm_btn">
                        Learn More
                    </a>

                    <button class="dm_cart_btn">
                        <img src="./img/cart_btn.svg" alt="" class="white_icon">
                        <img src="./img/green_icon.svg" alt="" class="green_icon">
                    </button>

                </div>

            </div>
            <div class="dm_product_card">

                <div class="dm_product_image">
                    <span class="dm_product_badge">
                        E-BOOK
                    </span>

                    <img src=./img/image.png>
                </div>

                <h4 class="dm_product_title">
                    Book Title Goes Here In Two Lines Or Less
                </h4>

                <p class="dm_product_desc">
                    Lorem ipsum dolor sit amet consectetur. Nunc vitae libero... </p>

                <div class="dm_product_price">
                    $48.89
                </div>

                <div class="dm_product_footer">

                    <a href="#" class="dm_btn">
                        Learn More
                    </a>

                    <button class="dm_cart_btn">
                        <img src="./img/cart_btn.svg" alt="" class="white_icon">
                        <img src="./img/green_icon.svg" alt="" class="green_icon">
                    </button>

                </div>

            </div>

        </div>

        <!-- Mobile Slider -->
        <div class="d-lg-none d-md-none d-block w-100">

            <div class="dr_related_slider owl-carousel owl-theme">

                <div class="dr_related_item">
                    <div class="dm_product_card">

                        <div class="dm_product_image">
                            <span class="dm_product_badge">
                                E-BOOK
                            </span>

                            <img src=./img/image.png>
                        </div>

                        <h4 class="dm_product_title">
                            Book Title Goes Here In Two Lines Or Less
                        </h4>

                        <p class="dm_product_desc">
                            Lorem ipsum dolor sit amet consectetur. Nunc vitae libero... </p>

                        <div class="dm_product_price">
                            $48.89
                        </div>

                        <div class="dm_product_footer">

                            <a href="#" class="dm_btn">
                                Learn More
                            </a>

                            <button class="dm_cart_btn">
                                <img src="./img/cart_btn.svg" alt="" class="white_icon">
                                <img src="./img/green_icon.svg" alt="" class="green_icon">
                            </button>

                        </div>

                    </div>
                </div>

                <div class="dr_related_item">
                    <div class="dm_product_card">

                        <div class="dm_product_image">
                            <span class="dm_product_badge">
                                E-BOOK
                            </span>

                            <img src=./img/image.png>
                        </div>

                        <h4 class="dm_product_title">
                            Book Title Goes Here In Two Lines Or Less
                        </h4>

                        <p class="dm_product_desc">
                            Lorem ipsum dolor sit amet consectetur. Nunc vitae libero... </p>

                        <div class="dm_product_price">
                            $48.89
                        </div>

                        <div class="dm_product_footer">

                            <a href="#" class="dm_btn">
                                Learn More
                            </a>

                            <button class="dm_cart_btn">
                                <img src="./img/cart_btn.svg" alt="" class="white_icon">
                                <img src="./img/green_icon.svg" alt="" class="green_icon">
                            </button>

                        </div>

                    </div>
                </div>

                <div class="dr_related_item">
                    <div class="dm_product_card">

                        <div class="dm_product_image">
                            <span class="dm_product_badge">
                                E-BOOK
                            </span>

                            <img src=./img/image.png>
                        </div>

                        <h4 class="dm_product_title">
                            Book Title Goes Here In Two Lines Or Less
                        </h4>

                        <p class="dm_product_desc">
                            Lorem ipsum dolor sit amet consectetur. Nunc vitae libero... </p>

                        <div class="dm_product_price">
                            $48.89
                        </div>

                        <div class="dm_product_footer">

                            <a href="#" class="dm_btn">
                                Learn More
                            </a>

                            <button class="dm_cart_btn">
                                <img src="./img/cart_btn.svg" alt="" class="white_icon">
                                <img src="./img/green_icon.svg" alt="" class="green_icon">
                            </button>

                        </div>

                    </div>
                </div>

                <div class="dr_related_item">
                    <div class="dm_product_card">

                        <div class="dm_product_image">
                            <span class="dm_product_badge">
                                E-BOOK
                            </span>

                            <img src=./img/image.png>
                        </div>

                        <h4 class="dm_product_title">
                            Book Title Goes Here In Two Lines Or Less
                        </h4>

                        <p class="dm_product_desc">
                            Lorem ipsum dolor sit amet consectetur. Nunc vitae libero... </p>

                        <div class="dm_product_price">
                            $48.89
                        </div>

                        <div class="dm_product_footer">

                            <a href="#" class="dm_btn">
                                Learn More
                            </a>

                            <button class="dm_cart_btn">
                                <img src="./img/cart_btn.svg" alt="" class="white_icon">
                                <img src="./img/green_icon.svg" alt="" class="green_icon">
                            </button>

                        </div>

                    </div>
                </div>

                <div class="dr_related_item">
                    <div class="dm_product_card">

                        <div class="dm_product_image">
                            <span class="dm_product_badge">
                                E-BOOK
                            </span>

                            <img src=./img/image.png>
                        </div>

                        <h4 class="dm_product_title">
                            Book Title Goes Here In Two Lines Or Less
                        </h4>

                        <p class="dm_product_desc">
                            Lorem ipsum dolor sit amet consectetur. Nunc vitae libero... </p>

                        <div class="dm_product_price">
                            $48.89
                        </div>

                        <div class="dm_product_footer">

                            <a href="#" class="dm_btn">
                                Learn More
                            </a>

                            <button class="dm_cart_btn">
                                <img src="./img/cart_btn.svg" alt="" class="white_icon">
                                <img src="./img/green_icon.svg" alt="" class="green_icon">
                            </button>

                        </div>

                    </div>
                </div>

            </div>
        </div>


        <div class="dr_related_btn_wrap">

            <a href="#" class="dr_related_btn">
                <span>View All Products</span>
            </a>

        </div>

    </div>

</section>

<div class="modal fade dr_cart_modal" id="drCartModal" tabindex="-1" aria-hidden="true">

    <div class="modal-dialog modal-dialog-centered dr_cart_modal_dialog">

        <div class="modal-content dr_cart_modal_content_wrap">

            <button type="button" class="dr_cart_modal_close" data-bs-dismiss="modal" aria-label="Close">
                <svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" viewBox="0 0 11 11" fill="none">
                    <path
                        d="M10.0605 1.33984L6.19336 5.20703L10.0605 9.07422L9.07422 10.0605L5.20703 6.19336L1.33984 10.0605L0.353516 9.07422L4.2207 5.20703L0.353516 1.33984L1.33984 0.353516L5.20703 4.2207L9.07422 0.353516L10.0605 1.33984Z"
                        fill="#656565" stroke="#656565" stroke-width="0.5" />
                </svg>
            </button>

            <div class="dr_cart_modal_inner">

                <div class="dr_cart_modal_image">

                    <img src="./img/image.png" alt="">

                </div>

                <div class="dr_cart_modal_content">

                    <h3 class="dr_cart_modal_title">
                        Item Has Been Added To Your Cart!
                    </h3>

                    <div class="dr_cart_modal_price">

                        <span>Item Price:</span>

                        <strong>£379.00</strong>

                    </div>

                    <div class="dr_cart_modal_actions">

                        <a href="#" class="dr_continue_btn">
                            Continue Shopping
                        </a>

                        <a href="#" class="dr_checkout_btn">
                            Proceed To Checkout
                        </a>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

<?php include 'includes/footer.php'; ?>

<script>
    document.addEventListener('DOMContentLoaded', function () {

        const plusBtn = document.querySelector('.dr_plus');
        const minusBtn = document.querySelector('.dr_minus');
        const qtyInput = document.querySelector('.dr_qty_input');

        plusBtn.addEventListener('click', function () {
            qtyInput.value = parseInt(qtyInput.value) + 1;
        });

        minusBtn.addEventListener('click', function () {
            if (parseInt(qtyInput.value) > 1) {
                qtyInput.value = parseInt(qtyInput.value) - 1;
            }
        });

    });
</script>


<!-- Filw owl carousel mob -->
<script>
    $('.dr_services_slider').owlCarousel({
        items: 1,
        margin: 20,
        loop: false,
        nav: true,
        dots: true,
        navText: [
            '<img src="./img/arrow-left.svg" alt="">',
            '<img src="./img/arrow-right.svg" alt="">'
        ]
    });
</script>

<!-- CArd Owl CArusel Mob -->

<script>
    $('.dr_related_slider').owlCarousel({

        items: 1,

        margin: 20,

        loop: false,

        nav: true,

        dots: true,

        navText: [
            '<img src="./img/arrow-left.svg">',
            '<img src="./img/arrow-right.svg">'
        ],

        responsive: {

            0: {
                items: 1
            },

            768: {
                items: 2
            },

            992: {
                items: 3
            }

        }

    });
</script>