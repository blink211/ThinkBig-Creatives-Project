<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <link rel="shortcut icon" href="{{asset('favicon.ico')}}" type="image/x-icon">
        <link rel="icon" href="{{asset('favicon.ico')}}" type="image/x-icon">

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
        <style>

            @font-face {
                font-family: digitalo;
                src: url({{asset('digitalo.otf')}});
            }

            .font-digitalo {
                font-family: digitalo !important;
            }

            .no-scrollbar::-webkit-scrollbar {
                display: none;
            }

            .no-scrollbar {
                -ms-overflow-style: none;  /* IE and Edge */
                scrollbar-width: none;  /* Firefox */
            }

            @media only screen 
            and (min-width: 1024px) 
            and (max-height: 1366px) 
            and (-webkit-min-device-pixel-ratio: 2) {
                .proshow {
                    display: block !important;
                }
                .prohide {
                    display: none !important;
                }
            }

            /* Portrait */
            @media only screen 
            and (min-width: 1024px) 
            and (max-height: 1366px) 
            and (orientation: portrait) 
            and (-webkit-min-device-pixel-ratio: 2) {
                .proshow-p {
                    display: block !important;
                }
                .prohide-p {
                    display: none !important;
                }
                .prop-py-32 {
                    padding-top: 8rem !important;
                    padding-bottom: 8rem !important;
                }
                .prop-py-64 {
                    padding-top: 16rem !important;
                    padding-bottom: 16rem !important;
                }
                .prop-pt-96 {
                    padding-top: 24rem !important;
                }
                .prop-py-96 {
                    padding-top: 24rem !important;
                    padding-bottom: 24rem !important;
                }
                .prop-my-96 {
                    margin-top: 24rem !important;
                    margin-bottom: 24rem !important;
                }
                .prop-mt-96 {
                    margin-top: 24rem !important;
                }
            }

            /* Landscape */
            @media only screen 
            and (min-width: 1024px) 
            and (max-height: 1366px) 
            and (orientation: landscape) 
            and (-webkit-min-device-pixel-ratio: 2) {
                .proshow-l {
                    display: block!important;
                }
                .prohide-l {
                    display: none!important;
                }
                .prol-py-32 {
                    padding-top: 8rem !important;
                    padding-bottom: 8rem !important;
                }
                .prol-mt-32 {
                    margin-top: 8rem !important;
                }
            }
        </style>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body>
        <div class="font-sans antialiased text-gray-900">
            {{ $slot }}
        </div>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
        <script>
            function toggleElement(collapseID) {
                document.getElementById(collapseID).classList.toggle("hidden");
                document.getElementById(collapseID).classList.toggle("block");
            }

            $('.lazy').slick({
                lazyLoad: 'ondemand',
                slidesToShow: 4,
                slidesToScroll: 1,
                infinite: true,
                responsive: [
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 4,
                            slidesToScroll: 1,
                            infinite: true
                        }
                    },
                        {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1,
                            infinite: true
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            infinite: true
                        }
                    }
                    // You can unslick at a given breakpoint now by adding:
                    // settings: "unslick"
                    // instead of a settings object
                ]
            });

            // document.addEventListener('contextmenu', function(e) {
            //     e.preventDefault();
            // });
        </script>
        <!-- Load Facebook SDK for JavaScript -->
      <div id="fb-root"></div>
      <script>
        window.fbAsyncInit = function() {
          FB.init({
            xfbml            : true,
            version          : 'v10.0'
          });
        };

        (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>

      <!-- Your Chat Plugin code -->
      <div class="fb-customerchat"
        attribution="setup_tool"
        page_id="110695007778643">
      </div>
    </body>
</html>
