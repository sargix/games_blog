<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Games World</title>

    @include('additives.styles')
</head>
<body>
    <div class="wrap-page">
        @include('elements.navbar')

        <div class="container">
            @yield('content')
        </div>
        
        <div class="container pt-5"></div>

    </div>
    @include('elements.footer')



    @include('additives.scripts')
</body>
</html>