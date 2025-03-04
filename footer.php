
</main>
<!--end main site-->

<!--start footer-->
<footer id="footer" class="bg-dark text-white py-5">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-12">
        <h4 class="font-size-20">Mobile Shopee</h4>
        <p class="font-size-14 text-white-50">
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Optio, fugit.
        </p>
      </div>
      <div class="col-lg-4 col-12">
        <h4 class="font-size-20">Newsletter</h4>
        <form class="form-row">
          <div class="col">
            <input type="email" class="form-control" placeholder="Email" required>
          </div>
          <div class="col">
            <button type="submit" class="btn btn-primary mb-2">Subscribe</button>
          </div>
        </form>
      </div>
      <div class="col-lg-2 col-12">
        <h4 class="font-size-20">Information</h4>
        <div class="d-flex flex-column flex-wrap">
          <a href="#" class="font-size-14 text-white-50 pb-1">About Us</a>
          <a href="#" class="font-size-14 text-white-50 pb-1">Delivery Information</a>
          <a href="#" class="font-size-14 text-white-50 pb-1">Privacy Policy</a>
          <a href="#" class="font-size-14 text-white-50 pb-1">Terms & Conditions</a>

        </div>
      </div>
      <div class="col-lg-2 col-12">
        <h4 class="font-size-20">Account</h4>
        <div class="d-flex flex-column flex-wrap">
          <a href="#" class="font-size-14 text-white-50 pb-1">My Account</a>
          <a href="#" class="font-size-14 text-white-50 pb-1">Order History</a>
          <a href="#" class="font-size-14 text-white-50 pb-1">Wishlist</a>
          <a href="#" class="font-size-14 text-white-50 pb-1">Newsletters</a>
        </div>
      </div>
    </div>
  </div>
</footer>
<div class="copyright text-center bg-dark text-white py-2">
  <p class="font-size-14">&copy; Copyrights 2025. Design By S. S. Bandara</p>
</div>
<!--end footer-->

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js"></script>
<script src="index.js"></script>

<script>
  document.querySelectorAll(".navbar-nav .nav-item").forEach(item => {
    item.addEventListener("click", function () {
      document.querySelector(".nav-item.active")?.classList.remove("active");
      this.classList.add("active");
    });
  });
</script>
</body>

</html>
