 <footer id="footer" class="footer">

      <div class="container">

      <div class="copyright">
        <strong><span>Venue Delight</span></strong>
        
      </div>

     
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script>
     

    var card=document.getElementById("card");
        function openRegister()
        {
            card.style.transform="rotateY(-180deg)";

        }

        function openLogin()
        {
            card.style.transform="rotateY(0deg)";
            
        }




        var modal = document.getElementById('id01');
 
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }

  /*contact page script */
  
  const inputs = document.querySelectorAll(".input");

function focusFunc() {
  let parent = this.parentNode;
  parent.classList.add("focus");
}

function blurFunc() {
  let parent = this.parentNode;
  if (this.value == "") {
    parent.classList.remove("focus");
  }
}

inputs.forEach((input) => {
  input.addEventListener("focus", focusFunc);
  input.addEventListener("blur", blurFunc);
});

</script>
  </script>

</body>

</html>