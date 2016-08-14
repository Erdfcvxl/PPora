<?php

//$this->registerJsFile("owl-carousel/owl.carousel.min.js");

?>

<div id="owl-demo" class="owl-carousel owl-theme">

    <div class="item"><img src="/img/b5.jpg" width="100%" alt="The Last of us"></div>
    <!--<div class="item"><img src="img/b.jpg" width="100%"alt="GTA V"></div>-->

</div>

<script type="text/javascript">
    /*$("#i1").backstretch("/img/b3.jpg");
    $("#i2").backstretch("/img/b4.jpg");*/

    $(document).ready(function() {

        $("#owl-demo").owlCarousel({

            //navigation : true, // Show next and prev buttons
            slideSpeed : 300,
            paginationSpeed : 400,
            singleItem:true

            // "singleItem:true" is a shortcut for:
            // items : 1,
            // itemsDesktop : false,
            // itemsDesktopSmall : false,
            // itemsTablet: false,
            // itemsMobile : false

        });

    });
</script>