<!--link-jquery-->
<script src="/js/front/jquery-3.2.1.min.js"></script>
<script src="/js/front/bootstrap.js"></script>
<script src="/js/front/owl.carousel.js"></script>
<script src="/js/front/scrollbar.min.js"></script>
<script src="/js/front/snap.svg-min.js"></script>
<script src="/js/front/kar.js"></script>
<script src="js/front/timelineweb.js"></script>
{{--<script src="js/front/modernizr.custom.js"></script>--}}
{{--<script src="js/front/classie.js"></script>--}}
{{--<script src="js/front/uiProgressButton.js"></script>--}}
{{--<script>--}}
    {{--[].slice.call( document.querySelectorAll( '.progress-button' ) ).forEach( function( bttn, pos ) {--}}
        {{--new UIProgressButton( bttn, {--}}
            {{--callback : function( instance ) {--}}
                {{--var progress = 0,--}}
                    {{--interval = setInterval( function() {--}}
                        {{--progress = Math.min( progress + Math.random() * 0.1, 1 );--}}
                        {{--instance.setProgress( progress );--}}

                        {{--if( progress === 1 ) {--}}
                            {{--instance.stop( pos === 1 || pos === 3 ? -1 : 1 );--}}
                            {{--clearInterval( interval );--}}
                        {{--}--}}
                    {{--}, 50 );--}}
            {{--}--}}
        {{--} );--}}
    {{--} );--}}
{{--</script>--}}

<!--jquery-->
<script>
    $(function(){
        $().timelinr({
            arrowKeys: 'true'
        })
    });
</script>
<script>
    $(document).ready(function () {
        $('.nav-pills li:first-child').addClass('active').show();
        $('.tab-content .tab-pane:first').addClass('active').show()
    });

    $(document).ready(function () {
        $('.nav-pills li:first-child').addClass('active').show();
        $('.tab-content .firest:first').addClass('active').show()
    });
</script>
<script>
    $(document).ready(function () {
        $("#owl").owlCarousel({
            autoPlay: 3000, //Set AutoPlay to 3 seconds
            items: 2,
            itemsDesktop: [1199, 3],
            itemsDesktopSmall: [979, 3],
            rtl:true
        });

        $("#owl2").owlCarousel({
            autoPlay: 6000, //Set AutoPlay to 3 seconds
            items: 1,
            itemsDesktop: [1199, 3],
            itemsDesktopSmall: [979, 3]
        });
        $("#owl3").owlCarousel({
            autoPlay: 3000, //Set AutoPlay to 3 seconds
            items: 1,
            itemsDesktop: [1199, 3],
            itemsDesktopSmall: [979, 3]
        });
        $("#owl4").owlCarousel({
            autoPlay: 5000, //Set AutoPlay to 3 seconds
            items: 2,
            itemsDesktop: [1199, 3],
            itemsDesktopSmall: [979, 3]
        });
        $("#owl5").owlCarousel({
            autoPlay: 5000, //Set AutoPlay to 3 seconds
            items: 1,
            itemsDesktop: [1199, 3],
            itemsDesktopSmall: [979, 3]
        });
        $(".owl6").owlCarousel({
            autoPlay: 6000, //Set AutoPlay to 3 seconds
            items: 1,
            itemsDesktop: [1199, 3],
            itemsDesktopSmall: [979, 3]
        });
        $("#owl7").owlCarousel({
            autoPlay: 5000, //Set AutoPlay to 3 seconds
            items: 2,
            itemsDesktop: [1199, 3],
            itemsDesktopSmall: [979, 3]
        });
        $("#owl8").owlCarousel({
            autoPlay: 5000, //Set AutoPlay to 3 seconds
            items: 2,
            itemsDesktop: [1199, 3],
            itemsDesktopSmall: [979, 3]
        });
        $("#owl9").owlCarousel({
            autoPlay: 3000, //Set AutoPlay to 3 seconds
            items: 3,
            itemsDesktop: [1199, 3],
            itemsDesktopSmall: [979, 3]
        });
    });
</script>

<script>
    new WOW().init();
</script>
<script>
    (function () {

        function SVGDDMenu(el, options) {
            this.el = el;
            this.init();
        }

        SVGDDMenu.prototype.init = function () {
            this.shapeEl = this.el.querySelector('div.morph-shape');

            var s = Snap(this.shapeEl.querySelector('svg'));
            this.pathEl = s.select('path');
            this.paths = {
                reset: this.pathEl.attr('d'),
                open: this.shapeEl.getAttribute('data-morph-open')
            };

            this.isOpen = false;

            this.initEvents();
        };

        SVGDDMenu.prototype.initEvents = function () {
            this.el.addEventListener('click', this.toggle.bind(this));

            // For Demo purposes only
            [].slice.call(this.el.querySelectorAll('a')).forEach(function (el) {
                el.onclick = function () {
                    return false;
                }
            });
        };

        SVGDDMenu.prototype.toggle = function () {
            var self = this;

            if (this.isOpen) {
                classie.remove(self.el, 'menu--open');
            }
            else {
                classie.add(self.el, 'menu--open');
            }

            this.pathEl.stop().animate({'path': this.paths.open}, 320, mina.easeinout, function () {
                self.pathEl.stop().animate({'path': self.paths.reset}, 1000, mina.elastic);
            });

            this.isOpen = !this.isOpen;
        };

        new SVGDDMenu(document.getElementById('menu3'));

    })();
</script>
<script>
    function chek(obj) {
        obj.setCustomValidity('لطفا این قسمت را پر کنید')
    }
    function chek2(obj) {
        obj.setCustomValidity('');
    }
</script>
<script>
    (function ($) {
        $(window).on("load", function () {
            $(".content-a").mCustomScrollbar({
                axis: "yx"
            });
        });
    })(jQuery);
    (function ($) {
        $(window).on("load", function () {
            $(".content-a2").mCustomScrollbar({
                axis: "yx"
            });
        });
    })(jQuery);
    (function ($) {
        $(window).on("load", function () {
            $(".content-a3").mCustomScrollbar({
                axis: "yx"
            });
        });
    })(jQuery);
    (function ($) {
        $(window).on("load", function () {
            $(".content-a4").mCustomScrollbar({
                axis: "yx"
            });
        });
    })(jQuery);
    (function ($) {
        $(window).on("load", function () {
            $(".content-a5").mCustomScrollbar({
                axis: "yx"
            });
        });
    })(jQuery);
</script>