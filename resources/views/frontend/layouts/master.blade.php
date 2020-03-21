<!DOCTYPE html>
<html lang="en-US" class="no-js">
<head>
@include('frontend.includes.head')
</head>
<body class="home page-template-default page page-id-2039 gdlr-core-body woocommerce-no-js tribe-no-js ku-body ku-body-front ku-full  ku-with-sticky-navigation  ku-blockquote-style-1 gdlr-core-link-to-lightbox">
    @include('frontend.includes.mobile-header')
    <div class="ku-body-outer-wrapper ">
        <div class="ku-body-wrapper clearfix  ku-with-frame">
            @include('frontend.includes.top-bar')
            @include('frontend.includes.header')
            @yield('content')
            @include('frontend.includes.footer')
        </div>
    </div>
    @include('frontend.scriptsjs.js')
</body>
</html>
