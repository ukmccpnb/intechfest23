@vite('resources/js/app.js')
<script src="https://kit.fontawesome.com/7eaa0f0932.js" crossorigin="anonymous"></script>
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
<script>
    AOS.init({
        'once': true
    });
</script>
<script>
document.addEventListener( 'DOMContentLoaded', function () {
  new Splide('.splide', {
    type: 'loop',
    perPage: 5,
    focus: 'center',
    autoplay: true,
    interval: 3000,
    updateOnMove: true,
    pagination: false,
    breakpoints: {
      640: {
        perPage: 2
      },
      768: {
        perPage: 3
      }
    }
  }).mount();
});
</script>