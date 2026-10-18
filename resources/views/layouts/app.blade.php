   <!DOCTYPE html>
   <html lang="id">

   <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>@yield('title', 'Beranda') | Toko Alat Musik Nada Prima</title>
       <link href="{{ asset('Bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
       <script src="{{ asset('Bootstrap/js/bootstrap.bundle.min.js') }}"></script>
   </head>

   <body class="bg-light d-flex flex-column min-vh-100">
       <header>
           @include('partials.header')
       </header>
       <div class="container flex-grow-1">
           @yield('content')
       </div>
       @include('partials.footer')
   </body>

   </html>