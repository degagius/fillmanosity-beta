<!doctype html>
<html lang="en">
@include('head')
    <body>
        <div class="wrapper-home">
            <div class="container">
<!--                <div class="c-logo">Fillmanosity</div>-->
                @include('header')
                @include('nav')
                @yield('content')
                @include('footer')
            </div>
        </div>
    </body>
</html>