<!DOCTYPE html>
<html lang="en">

{{-- head section  --}}
@include('comon.head')
<body>
    {{-- header area  start--}}
        @include('comon.header')
    {{-- header area end  --}}


    @yield('content')


    {{-- script area start  --}}
        @include('comon.script')
    {{-- script area end  --}}

    {{-- footer area start  --}}
        @include('comon.footer')
    {{-- footer area end  --}}
</body>
</html>