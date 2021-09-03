<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        
    </head>
    <body>
        

        <div class="content">
            <div class="title m-b-md">
                Hello Word!!  by Laravel
            </div>

            <div class="links">
                <a href="{{ route('homepage')}}">Home</a>
                <a href="{{ route('su-di-noi')}}">Su di noi</a>
                <a href="{{ route('contatti')}}">Contatti</a>
                <a href="{{ route('partnership')}}">Partnership</a>
                    
            </div>
        </div>
       
    </body>
</html>
