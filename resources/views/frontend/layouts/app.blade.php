<!DOCTYPE html>
<html lang="en">
{{-- Head Include Here --}}
@include('frontend.layouts.partials._head')

<body>

    @include('frontend.layouts.partials._header_sticky')
    @yield('content')

    {{-- Footer Include Here --}}
    @include('frontend.layouts.partials._footer')

    @include('frontend.layouts.partials._script')
</body>

</html>
