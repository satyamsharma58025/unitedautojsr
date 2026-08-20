@php
    use App\Models\CompanySetting;
    $company = CompanySetting::first();
    $logo_image = "";
@endphp
@if ($company)
    @php
        $favicon_icon = $company->favicon_icon;
    @endphp
@endif
<!DOCTYPE html>
<html lang="zxx">
    <head>
        <!-- Meta Tags -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
        <meta name="description" content="Auto JSR">
        <meta name="author" content="">

        <!-- Favicon and touch Icons -->
        <link href="{{ asset('assets/images/company/'.$favicon_icon) }}" rel="shortcut icon" type="image/png">
        <link href="{{ asset('assets/images/company/'.$favicon_icon) }}" rel="apple-touch-icon">
        <link href="{{ asset('assets/images/company/'.$favicon_icon) }}" rel="apple-touch-icon" sizes="72x72">
        <link href="{{ asset('assets/images/company/'.$favicon_icon) }}" rel="apple-touch-icon" sizes="114x114">
        <link href="{{ asset('assets/images/company/'.$favicon_icon) }}" rel="apple-touch-icon" sizes="144x144">

        <!-- Page Title -->
        <title>@yield('title', 'United Auto')</title>    
        
        <!-- Styles Include -->
        <link rel="stylesheet" href="{{ asset('front/assets/css/main.css') }}">
        
    </head>
    <body>

        @include('frontend.partials.header')

        <main class="wrapper">
            @yield('content')
        </main>

        @include('frontend.partials.footer')

    <!-- Core JS -->
        <script src="{{ asset('front/assets/js/jquery-3.6.0.min.js') }}"></script>

        <!-- Framework -->
        <script src="{{ asset('front/assets/js/bootstrap.min.js') }}"></script>
        
        <!-- WOW Scroll Effect -->
        <script src="{{ asset('front/plugins/wow/wow.min.js') }}"></script>

        <!-- Swiper Slider -->
        <script src="{{ asset('front/plugins/swiper/swiper-bundle.min.js') }}"></script>

        <!-- Odometer Counter -->
        <script src="{{ asset('front/plugins/odometer/appear.js') }}"></script>
        <script src="{{ asset('front/plugins/odometer/odometer.js') }}"></script>

        <!-- Fancybox -->
        <script src="{{ asset('front/plugins/fancybox/jquery.fancybox.min.js') }}"></script>

        <!-- Flatpickr -->
        <script src="{{ asset('front/plugins/flatpickr/flatpickr.min.js') }}"></script>

        <!-- Nice Select -->
        <script src="{{ asset('front/plugins/nice-select/jquery.nice-select.min.js') }}"></script>

        <!-- Theme Custom JS -->
        <script src="{{ asset('front/assets/js/theme.js') }}"></script>
        <script src="{{ asset('front/assets/js/pricetable-toggler.js') }}"></script>
    </body>
</html>