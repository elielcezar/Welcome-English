jQuery(document).ready(function ($) {
  AOS.init({
    //offset: 100,
    duration: 500,
    once: true,
  });

  $('.carrossel').slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: true,
    arrows: true,
    autoplay: true,
    autoplaySpeed: 4000,
  });

  $('.carrossel-top').slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: false,
    arrows: false,
    autoplay: true,
    autoplaySpeed: 6000,
    fade: true,
  });

  const links = document.querySelectorAll('a.anchor');

  for (const link of links) {
    link.addEventListener('click', clickHandler);
  }

  function clickHandler(e) {
    e.preventDefault();
    const href = this.getAttribute('href');
    const offsetTop = document.querySelector(href).offsetTop;

    scroll({
      top: offsetTop - 150,
      behavior: 'smooth',
    });
  }

  if ($('body').hasClass('single-product')) {
    //$('#tab-description').appendTo('#principal .container');
    $('.related.products').appendTo('#principal .container');
  }
});
