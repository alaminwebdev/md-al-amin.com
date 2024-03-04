    <!-- PRELOADER -->
    <div class="md-preloader">
        <div class="preloader">
            <div class="wholesquare">
                <div class="square first"></div>
                <div class="square second"></div>
                <div class="square third"></div>
                <div class="square fourth"></div>
            </div>
        </div>
    </div>
    <!-- /PRELOADER -->

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var preloader = document.getElementById("preloader");
            preloader.style.display = "flex"; // Show the preloader
        });
    
        window.addEventListener("load", function() {
            var preloader = document.getElementById("preloader");
            preloader.style.display = "none"; // Hide the loader
    
            // setTimeout(function() {
            //     var preloader = document.getElementById("preloader");
            //     preloader.style.display = "none"; 
            // });
        });
    </script>