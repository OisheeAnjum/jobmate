<footer class="py-5">
          
  <div class="footer-main">
    <div class="container">
        <div class= "row">
        <div class="col-sm-3 col-md-3 col-lg-3">
              <a class="navbar-brand" id="foot" href="index.php">job<span>mate</span></a>
        </div>
        <div class="col-sm-2 col-md-2 col-lg-2">
        <a class="navbar-brand" id="foot" href="index.php">JOB SEEKER</a>
        </div>
        <div class="col-sm-2 col-md-2 col-lg-2">
        <a class="navbar-brand" id="foot" href="index.php">EMPLOYEER</a>
        </div>
        <div class="col-sm-2 col-md-2 col-lg-2">
        <a class="navbar-brand" id="foot" href="index.php">HELP CENTER</a>
        </div>
        <div class="col-sm-3 col-md-3 col-lg-3">
        <a class="navbar-brand" id="foot" href="index.php">GET IN TOUCH</a>
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