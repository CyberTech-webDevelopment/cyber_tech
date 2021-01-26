  // Testimonials carousel (uses the Owl Carousel library)
  $(".testimonials-carousel-services").owlCarousel({
    autoplay: true,
    dots: true,
    loop: true,
    responsive: {
      0: {
        items: 1
      },
      320:{
        items: 1
      },
      425: {
        items: 1
      },
      768: {
        items: 3
      },
      900:{
        items: 3
      },
      1024: {
        items: 4
      },
      1440: {
        items: 4
      }
    }
  });
  $('#testimonials-services .owl-nav button span').remove()
  let prev='<img src="../icons/prev-carousel-services.png">'
  let next='<img src="../icons/next-carousel-services.png">'

  $('#testimonials-services .owl-nav .owl-prev').html(prev)
  $('#testimonials-services .owl-nav .owl-next').html(next)


 

 
  



