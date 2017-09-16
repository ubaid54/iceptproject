<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>@yield('title')Home-iCLAP</title>

    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
    <header>
      @include('inc.navbar')
      <section>
        @yield('content')
        <h1>Obi WEbPage $20 only</h1>
        

      </section>

    </header>
    <footer id="footer" class="text-center">&copy;2017 Pakistan Insider. All Rights reserved.
    </footer>
  </body>
</html>
