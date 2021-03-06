<!DOCTYPE html>
<html lang="fr">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link href="/css/bootstrap.min.css" rel="stylesheet">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
   <link rel="stylesheet" href="/css/animate.min.css">
   <link rel="stylesheet" href="/css/aos.css">
   <link rel="stylesheet" href="/css/style.css">
   @stack('style')
   <title>Kinesio</title>
</head>
<body class="bg-light">

   @include('components.nav')
   
   <main id="main">
      @yield('content')
   </main>

   {{-- Libraries --}}
   <script src="/js/bootstrap.bundle.min.js"></script>
   <script src="/js/aos.js"></script>

   {{-- Custom scripts --}}
   <script src="/js/main.js"></script>

   {{-- @stack bottomScript --}}
   @stack('bottomScript')
</body>
</html>