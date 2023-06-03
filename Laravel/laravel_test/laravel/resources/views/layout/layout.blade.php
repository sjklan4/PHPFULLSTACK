<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title','Home')</title> 
    {{-- 화면에 따라서 title이 조정되도록 하였다. --}}
</head>
<body>
    @yield('contents')
</body>
</html>