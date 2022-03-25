<script>
    // carousel box-v1
    $('#carousel-1').owlCarousel({
        loop: true,
        margin: 0,
        nav: false,
        items: 1,
        dots: true,
        autoplaySpeed: 1000,

    })
    // carousel box-v2
    $('#carousel-2').owlCarousel({
        margin: 20,
        dots: true,
        loop: false,
        navText: ["<img src='https://cdn.spillmoment.id/img/arrow-left.png'>",
            "<img src='https://cdn.spillmoment.id/img/arrow-right.png'>"
        ],
        responsive: {
            0: {
                items: 1,
                nav: false
            },
            1440: {
                items: 3,
                nav: true
            },
            1024: {
                items: 3,
                nav: true
            },
            780: {
                items: 3,
                nav: true
            },
        }
    })
    // carousel box-v3
    $('#carousel-3').owlCarousel({
        itmes: 3,
        margin: 10,
        dots: true,
        navText: ["<img src='https://cdn.spillmoment.id/img/arrow-left.png'>",
            "<img src='https://cdn.spillmoment.id/img/arrow-right.png'>"
        ],
        responsive: {
            0: {
                items: 1,
                nav: false
            },
            1440: {
                items: 3,
                nav: true
            },
            1024: {
                items: 3,
                nav: true
            },
            780: {
                items: 3,
                nav: true
            },
        }
    })
    // carousel box-v3
    $('#carousel-6').owlCarousel({
        itmes: 3,
        margin: 10,
        dots: true,
        navText: ["<img src='https://cdn.spillmoment.id/img/arrow-left.png'>",
            "<img src='https://cdn.spillmoment.id/img/arrow-right.png'>"
        ],
        responsive: {
            0: {
                items: 1,
                nav: false
            },
            1440: {
                items: 3,
                nav: true
            },
            1024: {
                items: 3,
                nav: true
            },
            780: {
                items: 3,
                nav: true
            },
        }
    })
    // carousel box-v4
    $('#carousel-4').owlCarousel({
        itmes: 3,
        margin: 10,
        dots: true,
        navText: ['', ''],
        responsive: {
            0: {
                items: 1,
                nav: false
            },
            1440: {
                items: 3,
                nav: true
            },
            1024: {
                items: 3,
                nav: true
            },
            780: {
                items: 3,
                nav: true
            },
        }
    })
    $('#carousel-5').owlCarousel({
        items: 1,
        nav: false,
        autoplay: true,

    })

</script>
