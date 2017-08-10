<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        @include("partials._head")
    </head>
    <body>
        @include("partials._header")
        @include("partials._topnav")

        @yield("content")

        @include("partials._footer")
        @yield("script")
    </body>
</html>