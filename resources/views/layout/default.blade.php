<!DOCTYPE html>
<html lang="en">
<head>
   @include('layout.head')
</head>
<body>
    @include('layout.navigation')

    @yield('content')

    @include('layout.footer')
</body>
</html>