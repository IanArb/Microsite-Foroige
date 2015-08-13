$(document).ready(function() {

        var owl = $("#owl-demo");

        owl.owlCarousel({
            autoPlay: 12000, //set autoplay to 12 seconds
            navigation: false,
            singleItem: true,
            transitionStyle: "fadeUp",
            responsive: true,
            responsiveRefreshRate: 200,
            responsiveBaseWidth: window,
            autoHeight : true,
        });

    })