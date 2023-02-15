<!DOCTYPE html>
<html>
<head>
    <title>Praga</title>
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles

</head>
<body class="bg-gray-900 min-h">

<!--logo-->
<div class=" container flex  px-4 mx-auto mt-20 lg:mt-20 ">
    <img src="{{asset('img/logo/logo.png')}}" class="mx-auto h-60 md:h-48 lg:h-44">
</div>

<!--boton entrar-->
<div class="mt-24 px-4">
    <a href="resultados">
        <button class="text-sm text-white  w-full  px-8 py-4 rounded-lg bg-slate-800 hover:bg-slate-700 ">ENTRAR
        </button>
    </a>

</div>

<!--pie-->
<div class="fixed bottom-10 w-full">
    <div class="text-gray-700  text-center"><a href="https://www.juanramoncornejo.cl/" target="_blank">JR Developer 2023</a></div>
    <div class="text-gray-700 text-center">Catemu - Chile</div>
</div>

</body>
@livewireScripts
</html>
