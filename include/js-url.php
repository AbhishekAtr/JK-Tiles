<!--jQuery-->
<script src="js/jquery-3.4.1.min.js"></script>
<!--Popper js-->
<script src="js/popper.min.js"></script>
<!--Bootstrap js-->
<script src="js/bootstrap.min.js"></script>
<!--Magnific popup js-->
<script src="js/jquery.magnific-popup.min.js"></script>
<!--jquery easing js-->
<script src="js/jquery.easing.min.js"></script>
<!--jquery ytplayer js-->
<script src="js/jquery.mb.YTPlayer.min.js"></script>
<!--Isotope filter js-->
<script src="js/mixitup.min.js"></script>
<!--wow js-->
<script src="js/wow.min.js"></script>
<!--owl carousel js-->
<script src="js/owl.carousel.min.js"></script>
<!--countdown js-->
<script src="js/jquery.countdown.min.js"></script>
<!--custom js-->
<script src="js/scripts.js"></script>
<script src="js/lity.js"></script>

<script type="text/javascript" src="js/camera.min.js"></script>
<script type="text/javascript" src="js/easing.min.js"></script>
<link rel="text/javascript" href="../slick-1.8.1/slick/slick.min.js">

<script>
    jQuery('#camera_wrap').camera({

        // topLeft, topCenter, topRight, centerLeft, center, centerRight, bottomLeft, bottomCenter, bottomRight
        alignment: 'center',

        // true, false
        autoAdvance: true,

        // true, false. Auto-advancing for mobile devices
        mobileAutoAdvance: true,

        // 'leftToRight', 'rightToLeft', 'topToBottom', 'bottomToTop'
        barDirection: 'leftToRight',

        // 'bottom', 'left', 'top', 'right'
        barPosition: 'bottom',

        // the number of columns
        cols: 6,

        //for the complete list http://jqueryui.com/demos/effect/easing.html
        easing: 'easeInOutExpo',

        //leave empty if you want to display the same easing on mobile devices and on desktop etc.
        mobileEasing: '',

        // 'random','simpleFade', 'curtainTopLeft', 'curtainTopRight', 'curtainBottomLeft', 'curtainBottomRight', 'curtainSliceLeft', 'curtainSliceRight', 'blindCurtainTopLeft', 'blindCurtainTopRight', 'blindCurtainBottomLeft', 'blindCurtainBottomRight', 'blindCurtainSliceBottom', 'blindCurtainSliceTop', 'stampede', 'mosaic', 'mosaicReverse', 'mosaicRandom', 'mosaicSpiral', 'mosaicSpiralReverse', 'topLeftBottomRight', 'bottomRightTopLeft', 'bottomLeftTopRight', 'bottomLeftTopRight'
        //you can also use more than one effect, just separate them with commas: 'simpleFade, scrollRight, scrollBottom'
        fx: 'random',

        // leave empty if you want to display the same effect on mobile devices and on desktop etc.
        mobileFx: '',

        // to make the <a href="https://www.jqueryscript.net/tags?/grid/">grid</a> blocks slower than the slices, this value must be smaller than transPeriod
        gridDifference: 250,

        // here you can type pixels (for instance '300px'), a percentage (relative to the width of the slideshow, for instance '50%') or 'auto'
        height: '50%',

        // the path to the image folder (it serves for the blank.gif, when you want to display <a href="https://www.jqueryscript.net/tags?/video/">video</a>s)
        imagePath: 'images/',

        // true, false. Puase on state hover. Not available for mobile devices
        hover: false,

        // pie, bar, none (even if you choose "pie", old browsers like IE8- can't display it... they will display always a loading bar)
        loader: 'pie',
        loaderColor: '#eeeeee',
        loaderBgColor: '#222222',
        loaderOpacity: .8, //0, .1, .2, .3, .4, .5, .6, .7, .8, .9, 1
        loaderPadding: 2,
        loaderStroke: 7,
        pieDiameter: 38,
        piePosition: 'rightTop', //'rightTop', 'leftTop', 'leftBottom', 'rightBottom'

        // you can also leave it blank
        minHeight: '200px',

        // true or false, to display or not the navigation buttons
        navigation: true,

        // if true the navigation button (prev, next and play/stop buttons) will be visible on hover state only, if false they will be visible always
        navigationHover: true,

        // same as above, but only for mobile devices
        mobileNavHover: true,

        // true, false. Decide to apply a fade effect to blocks and slices: if your slideshow is fullscreen or simply big, I recommend to set it false to have a smoother effect 
        opacityOnGrid: false,

        // a layer on the images to prevent the users grab them simply by clicking the right button of their mouse (.camera_overlayer)
        overlayer: true,

        // enable pagination
        pagination: true,

        // true or false, to display or not the play/pause buttons
        playPause: true,

        // true, false. It stops the slideshow when you click the sliders.
        pauseOnClick: true,

        // true, false. Select true if you don't want that your images are cropped
        portrait: false,

        // the number of rows
        rows: 4,

        // if 0 the same value of cols
        slicedCols: 12,

        // if 0 the same value of rows
        slicedRows: 8,

        // next, prev, random: decide if the transition effect will be applied to the current (prev) or the next slide
        slideOn: 'random',

        // shows thumbnails
        thumbnails: false,

        // milliseconds between the end of the sliding effect and the start of the nex one
        time: 2000,

        // lenght of the sliding effect in milliseconds
        transPeriod: 1500

    });
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="//code.tidio.co/xlnzklafmsgeufhjx8h2o4ktgn4jjjkm.js" async></script>

<script>
    $('.responsive').slick({
  dots: true,
  infinite: false,
  speed: 300,
  slidesToShow: 4,
  slidesToScroll: 4,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});
</script>

