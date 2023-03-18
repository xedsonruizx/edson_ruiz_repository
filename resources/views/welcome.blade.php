<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Edson Ruiz Salinas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/body.css') }}">
    <link href="{{ asset('scss/style.css') }}" rel="stylesheet">
    <link rel="icon" type="image/png" sizes="32x32"
      href="{{asset('assets/imgfavicon-32x32.png')}}">
      
    <link href="{{ asset('assets/fontawesome-free-6.3.0-web/css/fontawesome.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/fontawesome-free-6.3.0-web/css/brands.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/fontawesome-free-6.3.0-web/css/solid.css') }}" rel="stylesheet">
    
    @vite(['resources//assets/sass/app.scss', 'resources/js/app.js'])
</head>

<body id="body-pd">

    @include('background')
    @include('bars')


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.0.5/gsap.min.js"></script>
    <script src="{{ asset('js/sidebar.js') }}"></script>
    <script src="{{ asset('js/background.js') }}"></script>
    @stack('scripts')
</body>

</html>