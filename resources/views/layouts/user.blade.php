
<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>SILAMAS | {{ $title }}</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/logo/SILAMAS.png') }}" />

    <!-- ========================= CSS here ========================= -->

    <link rel="stylesheet" href="{{  asset('assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{  asset('assets/css/LineIcons.3.0.css') }}" />
    <link rel="stylesheet" href="{{  asset('assets/css/animate.css')       }}" />
    <link rel="stylesheet" href="{{  asset('assets/css/tiny-slider.css')   }}" />
    <link rel="stylesheet" href="{{  asset('assets/css/glightbox.min.css') }}" />
    <link rel="stylesheet" href="{{  asset('assets/css/main.css')          }}" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/node_modules/bootstrap/dist/css/bootstrap.min.css">

    {{-- toastr --}}
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <link rel="stylesheet" href="{{ asset('vendor/toastr/toastr.min.css') }}">
    <script src="{{ asset('vendor/toastr/toastr.min.js') }}"></script>

</head>
<style>
    /* Preloader */
.preloader {
  position: fixed;
  top: 0;
  left: 0;
  z-index: 999999999;
  width: 100%;
  height: 100%;
  background-color: #fff;
  overflow: hidden;
}

.preloader-inner {
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}

.preloader-icon {
  width: 100px;
  height: 100px;
  display: inline-block;
  padding: 0px;
}

.preloader-icon span {
  position: absolute;
  display: inline-block;
  width: 100px;
  height: 100px;
  border-radius: 100%;
  background: #0069ff;
  -webkit-animation: preloader-fx 1.6s linear infinite;
  animation: preloader-fx 1.6s linear infinite;
}

.preloader-icon span:last-child {
  animation-delay: -0.8s;
  -webkit-animation-delay: -0.8s;
}

@keyframes preloader-fx {
  0% {
    -webkit-transform: scale(0, 0);
            transform: scale(0, 0);
    opacity: 0.5;
  }
  100% {
    -webkit-transform: scale(1, 1);
            transform: scale(1, 1);
    opacity: 0;
  }
}

@-webkit-keyframes preloader-fx {
  0% {
    -webkit-transform: scale(0, 0);
    opacity: 0.5;
  }
  100% {
    -webkit-transform: scale(1, 1);
    opacity: 0;
  }
}
</style>
<body>

    <div class="content">
        @yield('content')
    </div>


    <!-- ========================= scroll-top ========================= -->
    <a href="#" class="scroll-top">
        <i class="lni lni-arrow-up-circle"></i>
    </a>

    <!-- ========================= JS here ========================= -->
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/tiny-slider.js"></script>
    <script src="assets/js/glightbox.min.js"></script>
    <script src="assets/js/count-up.min.js"></script>
    <script src="../assets/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
    integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    </script>
    <script>
            (function () {
        //===== Prealoder

        window.onload = function () {
            window.setTimeout(fadeout, 500);
        }

        function fadeout() {
            document.querySelector('.preloader').style.opacity = '0';
            document.querySelector('.preloader').style.display = 'none';
        }


        // WOW active
        new WOW().init();


        /*=====================================
        Sticky
        ======================================= */
        window.onscroll = function () {
            var header_navbar = document.querySelector(".navbar-area");
            var sticky = header_navbar.offsetTop;

            var logo = document.querySelector('.navbar-brand img')
            if (window.pageYOffset > sticky) {
            header_navbar.classList.add("sticky");
            logo.src = 'assets/img/logo/logo.svg';
            } else {
            header_navbar.classList.remove("sticky");
            logo.src = 'assets/img/logo/white-logo.svg';
            }

            // show or hide the back-top-top button
            var backToTo = document.querySelector(".scroll-top");
            if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
                backToTo.style.display = "flex";
            } else {
                backToTo.style.display = "none";
            }
        };


        //===== mobile-menu-btn
        let navbarToggler = document.querySelector(".mobile-menu-btn");
        navbarToggler.addEventListener('click', function () {
            navbarToggler.classList.toggle("active");
        });


    })();
    </script>
        {{-- toastr js--}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
        <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
        <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
        <script>
            toastr.options = {
                "closeButton": true,
                "debug": false,
                "newestOnTop": true,
                "progressBar": true,
                "positionClass": "toast-top-right",
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            }
        </script>

    <!-- Bootstrap JavaScript -->
    <script src="/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
