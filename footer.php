<footer class="py-5">
          
  <div class="footer-main">
    <div class="container">
        <div class= "row">
        <div class=" col-md-2 col-lg-3">
              <a class="navbar-brand" id="foot" href="index.php">job<span>mate</span></a>
              <p>The choice is yours,<br>we’ve got you covered</p>
              <p><b>Corporate Office</b></p>
              <p></p>
              <p>New south point road, Block G,<br>Dhaka, Bangladesh.</p>
              <a class="f" id="f" href="index.php">Contact with us</a><img src="assets/ex.png">
        </div>
        <div class="col-md-2 col-lg-2">
        <a class="footer" id="footer" href="index.php"><b>JOB SEEKER</b></a><br>
        <a class="f1" id="f1" href="index.php">Browse Jobs</a><br>
        <a class="f1" id="f1" href="index.php">Salary Tools</a><br>
        <a class="f1" id="f1" href="index.php">Career Advice</a><br>
        <a class="f1" id="f1" href="index.php">Company Profile</a><br>
        <a class="f1" id="f1" href="index.php">Resume Builder</a><br>
        </div>
        <div class="col-md-2 col-lg-2">
        <a class="footer" id="footer" href="index.php"><b>EMPLOYEER</b></a><br>
        <a class="f1" id="f1" href="index.php">Post Jobs</a><br>
        <a class="f1" id="f1" href="index.php">Documents</a><br>
        <a class="f1" id="f1" href="index.php">Recruiting Solutions</a><br>
        <a class="f1" id="f1" href="index.php">Onboarding</a><br>
        <a class="f1" id="f1" href="index.php">Pricing</a><br>
        <a class="f1" id="f1" href="index.php">Resources</a><br>
        </div>
        <div class="col-md-3 col-lg-2">
        <a class="footer" id="footer" href="index.php"><b>HELP CENTER</b></a><br>
        <a class="f1" id="f1" href="index.php">About Us</a><br>
        <a class="f1" id="f1" href="index.php">Terms of Use</a><br>
        <a class="f1" id="f1" href="index.php">Customer Support</a><br>
        <a class="f1" id="f1" href="index.php">Privacy policy</a><br>
        <a class="f1" id="f1" href="index.php">Security & Services</a><br>
        </div>
        <div class=" col-md-3 col-lg-3">
        <a class="footer"  id="footer" href="index.php"><b>GET IN TOUCH</b></a>
        <p>Follow Auto Desk</p>
        <div class="row">
            <div class="col-1 col-md-2 col-lg-2">
            <img src="assets/fb.png">
            </div>
            <div class="col-1 col-md-2 col-lg-2">
            <img src="assets/tw.png">
            </div>
            <div class="col-1 col-md-2 col-lg-2">
            <img src="assets/ig.png">
            </div>
            <div class="col-1 col-md-2 col-lg-2">
            <img src="assets/yt.png">
            </div>
            <div class="col-1 col-md-2 col-lg-2">
            <img src="assets/in.png">
            </div>
          </div>
          <p>Download Apps</p>
          <div class="row">
            <div class="col-1 col-md-2 col-lg-2">
            <img src="assets/android.png">
            </div>
            <div class="col-1 col-md-2 col-lg-2">
            <img src="assets/apple.png">
            </div>
            </div>
      </div>

          <img src="assets/line.png">
            <div class="row">
              <div class="col-12 col-md-12 col-lg-7">
                <p id="cplyright">© 2021 JobMate. All copyrights are reserved ™</p>
              </div>

              <div class="col-12 col-md-12 col-lg-5" id="fl1">
              <a class="l1" id="l1" href="index.php">Terms & conditions  |  Site map  |  Privacy policy  |  Cookie policy</a><br>

              </div>
            </div>
    </div>
  </div>
</footer>


        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>

<script>
  window.onscroll = function() {myFunction()};

  var navbar = document.getElementById("navbar");
  var sticky = navbar.offsetTop;

  function myFunction() {
    if (window.pageYOffset >= sticky) {
      navbar.classList.add("sticky")
    } 
    else {
      navbar.classList.remove("sticky");
    }
  }
  var modal = document.getElementById('id01');
                        
                        // When the user clicks anywhere outside of the modal, close it
                        window.onclick = function(event) 
                        {
                            if (event.target == modal) 
                            {
                                modal.style.display = "none";
                            }
                        }
    // Get the modal
    var modal = document.getElementById('id02');
                        
                        // When the user clicks anywhere outside of the modal, close it
                        window.onclick = function(event) {
                            if (event.target == modal) {
                                modal.style.display = "none";
                            }
                        }
                  // Get the modal
                  var modal = document.getElementById('id03');
                
                // When the user clicks anywhere outside of the modal, close it
                window.onclick = function(event) {
                    if (event.target == modal) {
                        modal.style.display = "none";
                    }
                }
                        var slideIndex = 1;
                  showSlides(slideIndex);
                  
                  function plusSlides(n) {
                    showSlides(slideIndex += n);
                  }
                  
                  function currentSlide(n) {
                    showSlides(slideIndex = n);
                  }
                  
                  function showSlides(n) {
                    var i;
                    var slides = document.getElementsByClassName("mySlides");
                    var dots = document.getElementsByClassName("dot");
                    if (n > slides.length) {slideIndex = 1}    
                    if (n < 1) {slideIndex = slides.length}
                    for (i = 0; i < slides.length; i++) {
                        slides[i].style.display = "none";  
                    }
                    for (i = 0; i < dots.length; i++) {
                        dots[i].className = dots[i].className.replace(" active", "");
                    }
                    slides[slideIndex-1].style.display = "block";  
                    dots[slideIndex-1].className += " active";
                  }
</script>

</body>
</html>