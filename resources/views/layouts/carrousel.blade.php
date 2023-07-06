<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/estilacho.css') }}">
</head>
<body>

@section()
    <div class="container__slider">
        <div class="containerC">
            <input type="radio" name="slider" id="item-1" checked>
            <input type="radio" name="slider" id="item-2">
            <input type="radio" name="slider" id="item-3">

            <div class="cards">
                <label class="card" for="item-1" id="selector-1">
                    <img src="{{ asset('images/noticia del dia.png') }}">
                </label>
                <label class="card" for="item-2" id="selector-2">
                    <img src="{{ asset('images/LogoUPB.jpg') }}">
                </label>
                <label class="card" for="item-3" id="selector-3">
                    <img src="{{ asset('images/uqrooLogo.gif') }}">
                </label>
            </div>
        </div>
    </div>
@end
@yield('carrousel')

</body>
</html>