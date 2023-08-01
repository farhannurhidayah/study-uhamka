const multipleItemCarousel = document.querySelector('#carouselExampleControlsNoTouching');

if(window.matchMedia("(min-width:576px)").matches){
  const carousel = new boostrap.Carousel(multipleItemCarousel, {
    interval: false
  })
}
var carouselWidth = $('.carousel-inner')[0].scrollWidth;
var cardWidth = $('.carousel-item').width();

var scrollPosition = 0;
