<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="ie=edge" http-equiv="X-UA-Compatible">
    <title>{{ env('APP_NAME')}} - @yield('title')</title>

    @vite('resources/js/app.js')
  </head>

  <body>
    <div class="wrapper">
      @include('partials.header')
    
      <main>
        @yield('main-content')
      </main>

      @include('partials.footer')
    </div> 
    
    @yield('js')
    
  </body>

</html>