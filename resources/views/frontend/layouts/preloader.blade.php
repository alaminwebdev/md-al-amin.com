    <!-- PRELOADER -->
    <div class="md-preloader" id="md-preloader">
        <div class="preloader" id="preloader">
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
        window.addEventListener("load", function() {
            const preloaderContainer    = document.getElementById("md-preloader");
            const preloader             = document.getElementById("preloader");

            preloader.style.display             = "none";
            preloaderContainer.style.height     = 0;
    
            // setTimeout(function() {
            //     var preloader = document.getElementById("preloader");
            //     preloader.style.display = "none"; 
            // });
        });
    </script>