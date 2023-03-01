<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="robots" content="index, follow">

        <title>@yield('meta_title', dsld_get_setting('site_title'))</title>
        <meta name="description" content="@yield('meta_description', dsld_get_setting('site_meta_description') )" />
        <meta name="keywords" content="@yield('meta_keywords', dsld_get_setting('site_meta_keyword') )">


        @include('frontend.inc.header')
        @yield('header')
    </head>
    <body>
        <div class="site-wrapper">
                @include('frontend.inc.nav')
        
                @yield('content')

                @include('frontend.inc.footer-section')
                @include('frontend.inc.footer')

                <div id="flash_msg" style="position: fixed; right: 42px; bottom: 15px; z-index: 99999; display: none">

                    <style type="text/css">
                    #flash_msg .alert-danger {background-color: #ff6f6f; border-color: #f78686; color: #fff; } #flash_msg .alert-success {background-color: #2c7a0a; border-color: #2f7211; color: #fff; } #flash_msg .alert-info {background-color: #1d6d95; border-color: #1b89c1d1; color: #fff; } #flash_msg .alert-warning {background-color: #bb9d06; border-color: #d9b605; color: #fff; }
                    </style>
                    <div id="flash_js_msg"></div>
                    @include('frontend.alert-msg')

                </div>
            @include('frontend.inc.custom_js')    
            @yield('footer')

        </div>
    </body>
</html>