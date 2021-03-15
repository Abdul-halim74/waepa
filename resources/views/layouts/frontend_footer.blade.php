 <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-6 col-md-6 footer-contact">
            <h3>WAEPA</h3>
            <p>
             Road no 4, House no. 11, Dhanmondi R/A, Dhaka. <br><br>
              <strong>Phone:</strong> (T): +8802 8316504. (M): +880 1711677741,<br>
              <strong>Email:</strong> selinaafroza@yahoo.com<br>
            </p>
          </div>

          <div class="col-lg-6 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="{{url('/')}}">Home</a></li>
             
              <li><i class="bx bx-chevron-right"></i> <a href="{{url('member_registration')}}">Apply For Membership</a></li>
             
              <li><i class="bx bx-chevron-right"></i> <a href="{{url('show_ec_member')}}">EC Member</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{url('show_life_member')}}">Life Member</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{url('show_general_member')}}">General Member</a></li>
            
            </ul>
          </div>

       

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
          &copy; Copyright <strong><span>WAEPA</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bethany-free-onepage-bootstrap-theme/ -->
          Designed & Developed by <a href="">Venture Solution Ltd</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('frontend_assets/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('frontend_assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('frontend_assets/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
  <script src="{{ asset('frontend_assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('frontend_assets/vendor/waypoints/jquery.waypoints.min.js') }}"></script>
  <script src="{{ asset('frontend_assets/vendor/counterup/counterup.min.js') }}"></script>
  <script src="{{ asset('frontend_assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('frontend_assets/vendor/venobox/venobox.min.js') }}"></script>
  <script src="{{ asset('frontend_assets/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('frontend_assets/vendor/aos/aos.js') }}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('frontend_assets/js/main.js') }}"></script>


<script type="text/javascript">
  (function($){function doAnimations(elems){var animEndEv="webkitAnimationEnd animationend";elems.each(function(){var $this=$(this),$animationType=$this.data("animation");$this.addClass($animationType).one(animEndEv,function(){$this.removeClass($animationType);});});}
var $myCarousel=$("#carouselExampleIndicators"),$firstAnimatingElems=$myCarousel.find(".carousel-item:first").find("[data-animation ^= 'animated']");$myCarousel.carousel();doAnimations($firstAnimatingElems);$myCarousel.on("slide.bs.carousel",function(e){var $animatingElems=$(e.relatedTarget).find("[data-animation ^= 'animated']");doAnimations($animatingElems);});})(jQuery);
</script>

  <script>

      $('.summernote').summernote({
        placeholder: '',
        
       
        height: 200
      });

  </script>






