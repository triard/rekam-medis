<script src="<?php echo base_url('assets/anchor/js/vendor/jquery.min.js') ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/anchor/js/vendor/popper.min.js') ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/anchor/js/vendor/bootstrap.min.js') ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/anchor/js/vendor/share.js') ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/anchor/js/functions.js') ?>" type="text/javascript"></script>

    
<!-- Animation -->
<script src="<?php echo base_url('assets/anchor/js/vendor/aos.js') ?>" type="text/javascript"></script>
<noscript>
    <style>
        *[data-aos] {
            display: block !important;
            opacity: 1 !important;
            visibility: visible !important;
        }
    </style>
</noscript>
<script>
    AOS.init({
        duration: 700
    });
</script>
 
<!-- Disable animation on less than 1200px, change value if you like -->
<script>
AOS.init({
  disable: function () {
    var maxWidth = 1200;
    return window.innerWidth < maxWidth;
  }
});
</script>
    
<!-- Carousel Height Smooth -->
<script>    
    $('.carousel').on('slide.bs.carousel', function (event) {
      var height = $(event.relatedTarget).height();
      var $innerCarousel = $(event.target).find('.carousel-inner');
      $innerCarousel.animate({
        height: height
      });
    });
    </script>
    
<!-- Popovers -->
<script>
    $(function () {
      $('[data-toggle="popover"]').popover()
    })
    $('.popover-dismiss').popover({
      trigger: 'focus'
    })
    </script>
    
<!-- Tooltips -->
<script>
    $(function () {
      $('[data-toggle="tooltip"]').tooltip()
    })
</script>
