<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Vinicius Antonio da Silva | FullStack Developer And Game Designer</title>

        @vite('resources/css/app.css')

        <style>
            @import url('https://fonts.googleapis.com/css2?family=Inter:wght@200;400&display=swap');
            body{
                font-family: 'Inter', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased bg-gray-900 ">
        <div class="flex min-h-screen justify-center items-center flex-col">
            <h3 class="text-xl font-extrabold text-white">welcome</h3>
            <h1 class="text-6xl font-extrabold text-white">HI, I'M <span class="underline">VINICIUS ANTONIO</span></h1>
        </div>
    </body>
</html>
