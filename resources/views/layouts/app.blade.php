<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student</title>

    @include('libraries.styles')

</head>
<body>

    @include('component.nav')

    @yield('content')

    @include('libraries.script')
</body>
</html>