  <!-- Footer Top Section Start -->
  <div class="footer-top-section section bg-theme-two-light section-padding">
      <div class="container">
          <div class="row mbn-40">

              <div class="footer-widget col-lg-3 col-md-6 col-12 mb-40">
                  <h4 class="title">CONTACT US</h4>
                  <p>You address will be here<br /> Lorem Ipsum text</p>
                  <p><a href="tel:01234567890">01234 567 890</a><a href="tel:01234567891">01234 567 891</a></p>
                  <p><a href="mailto:info@example.com">info@example.com</a><a href="#">www.example.com</a></p>
              </div>

              <div class="footer-widget col-lg-3 col-md-6 col-12 mb-40">
                  <h4 class="title">PRODUCTS</h4>
                  <ul>
                      <li><a href="#">New Arrivals</a></li>
                      <li><a href="#">Best Seller</a></li>
                      <li><a href="#">Trendy Items</a></li>
                      <li><a href="#">Best Deals</a></li>
                      <li><a href="#">On Sale Products</a></li>
                      <li><a href="#">Featured Products</a></li>
                  </ul>
              </div>

              <div class="footer-widget col-lg-3 col-md-6 col-12 mb-40">
                  <h4 class="title">INFORMATION</h4>
                  <ul>
                      <li><a href="#">About us</a></li>
                      <li><a href="#">Terms & Conditions</a></li>
                      <li><a href="#">Payment Method</a></li>
                      <li><a href="#">Product Warranty</a></li>
                      <li><a href="#">Return Process</a></li>
                      <li><a href="#">Payment Security</a></li>
                  </ul>
              </div>

              <div class="footer-widget col-lg-3 col-md-6 col-12 mb-40">
                  <h4 class="title">NEWSLETTER</h4>
                  <p>Subscribe our newsletter and get all update of our product</p>

                  <form id="mc-form" class="mc-form footer-subscribe-form">
                      <input id="mc-email" autocomplete="off" placeholder="Enter your email here" name="EMAIL"
                          type="email">
                      <button id="mc-submit"><i class="fa fa-paper-plane-o"></i></button>
                  </form>
                  <!-- mailchimp-alerts Start -->
                  <div class="mailchimp-alerts">
                      <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                      <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                      <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                  </div><!-- mailchimp-alerts end -->

                  <h5>FOLLOW US</h5>
                  <p class="footer-social"><a href="#">Facebook</a> - <a href="#">Twitter</a> - <a href="#">Google+</a>
                  </p>

              </div>

          </div>
      </div>
  </div><!-- Footer Top Section End -->

  <!-- Footer Bottom Section Start -->
  <div class="footer-bottom-section section bg-theme-two pt-15 pb-15">
      <div class="container">
          <div class="row">
              <div class="col text-center">
                  <p class="footer-copyright">© 2022 Jadusona. Made with <i class="fa fa-heart heart-icon"></i> By
                      <a target="_blank" href="https://hasthemes.com/">HasThemes</a>
                  </p>
              </div>
          </div>
      </div>
  </div><!-- Footer Bottom Section End -->

  </div>

  <!-- JS
============================================ -->

  <!-- jQuery JS -->
  <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
  <!-- Migrate JS -->
  <script src="assets/js/vendor/jquery-migrate-3.3.2.min.js"></script>
  <!-- Bootstrap JS -->
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <!-- Plugins JS -->
  <script src="assets/js/plugins.js"></script>
  <!-- Main JS -->
  <script src="assets/js/main.js"></script>

  <script>
      btnSearch = document.getElementById('btnSearch');
      keyword = document.getElementById('keyword');

      // Lắng nghe sự kiện click của nút tìm kiếm
      btnSearch.addEventListener('click', function(event) {
          event.preventDefault();
          // Định hướng trang đến URL tìm kiếm với từ khóa
          location.href = "<?= ROOT_URL . '?ctl=search&keyword=' ?>" + keyword.value;
      });

      // Lắng nghe sự kiện nhấn phím Enter trong ô tìm kiếm
      keyword.addEventListener('keydown', function(event) {
          if (event.key === 'Enter') { // Kiểm tra nếu phím Enter được nhấn
              event.preventDefault(); // Ngừng hành động mặc định (gửi form)
              location.href = "<?= ROOT_URL . '?ctl=search&keyword=' ?>" + encodeURIComponent(keyword
                  .value); // Chuyển hướng đến URL tìm kiếm
          }
      });
  </script>


  </body>


  <!-- Mirrored from htmldemo.net/jadusona/jadusona/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Nov 2023 08:02:34 GMT -->

  </html>