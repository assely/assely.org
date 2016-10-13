<!doctype html>
<html class="no-js" {{ language_attributes() }}>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        @wphead()
    </head>
    <body id="body" {{ body_class('is-close') }}>
        @include('offcanvas.offcanvas')

        <div id="stage" class="stage">
            <div class="container-fluid">
                <main class="stage__content">
                    <div class="row">
                        @yield('header')
                    </div>

                    <div class="row">
                        @yield('main')
                    </div>

                    <div class="row">
                        @section('footer')
                            @include('footer.footer')
                        @show
                    </div>
                </main>
            </div>

            <div id="stageOverlay" class="stage__overlay"></div>
        </div>

        @include('offcanvas.track')

        @wpfooter()

        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

            ga('create', '{{ env('GA') }}', 'auto');
            ga('send', 'pageview');
        </script>
    </body>
</html>
