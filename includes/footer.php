
<footer>
   <video src="./img/Footer.mp4" autoplay muted loop alt="" class="bg-image d-lg-block d-md-block d-none"></video>
   <video src="./img/footer-mo.mp4" autoplay muted loop alt="" class="bg-image d-lg-none d-md-none d-block"></video>
   <div class="container">
    <div class="col">
        <div class="row footer-top">
            <div class="col-lg-5 col-md-12 col-sm-12 col-12">
                <div class="footer-left">
                    <div class="footer-logo">
                        <img src="./img/logof.svg" alt="" class="img-fluid">
                    </div>
                    <p>
                        info@SwiftCartDesigns.Com <span>+111 234 567 890</span>
                    </p>
                    <p class="p-addres">
                        100 Edenbridge Road, Birmingham, United Kingdom, B28 8PR. 
                    </p>
                </div>
            </div>
            <div class="col-lg-7 col-md-12 col-sm-12 col-12">
                <div class="footer-right">
                    <div class="footer-menu">
                        <ul>
                            <li>
                                <a href="">Design Resources</a>
                            </li>
                            <li>
                                <a href="">Bespoke design packages</a>
                            </li>
                            <li>
                                <a href="story.php">Our Story</a>
                            </li>
                            <li>
                                <a href="contactus.php">Contact Us</a>
                            </li>
                            <li>
                                <a href="tc.php">Terms</a>
                            </li>
                            <li>
                                <a href="pp.php">Privacy</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
   </div>
   <div class="container">
    <div class="col">
        <div class="row footer-bottom">
            <div class="col-lg-4 col-md-12 col-sm-12 col-12 footer-bottom-mo">
                <div class="footer-addres">
                    <p>
                        info@SwiftCartDesigns.Com <br><span>+111 234 567 890</span>
                    </p>
                    <p class="p-addres">
                        100 Edenbridge Road, Birmingham, United Kingdom, B28 8PR. 
                    </p>
                </div>
                <img src="./img/mastercardvisa.svg" alt="" class="img-fluid">
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 col-12 footer-bottom-mo-right">
                <p>© 2026 SwiftCartDesigns.Com All rights reserved.</p>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                <div class="footer-last">
                    <img src="./img/f.svg" alt="" class="img-fluid">
                    <img src="./img/insta.svg" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
   </div>
       
</footer>
</div>
    <script src="uiframe/js/jquery.min.js"></script>
    <script src="uiframe/js/bootstrap.bundle.min.js"></script>
    <script src="uiframe/js/popper.min.js"></script>
    <script src="uiframe/js/slick.js"></script>
    <script src="uiframe/js/owl.carousel.js"></script>
    <script src="uiframe/js/swiper-bundle.min.js"></script>
    <script src="uiframe/js/flickity.pkgd.min.js"></script>   
    <script src="uiframe/js/aos.js"></script>
    <script src="./uiframe/js/home-js.js"></script>
    <script>
      $(document).ready(function () {
          $(".navbar-toggler").click(function () {
              $(this).toggleClass("is-active");
              $("header").toggleClass("header-is-active");

              let logo = $("#logo");
              if (logo.attr("src") === "./img/logo.svg") {
                  logo.attr("src", "./img/logo.svg");
              } else {
                  logo.attr("src", "./img/logo.svg");
              }
          });
      });
    </script>
    <script>
        const header = document.querySelector('header');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });
    </script>
   
    <script>
      AOS.init();
    </script>
</body>
</html>
  