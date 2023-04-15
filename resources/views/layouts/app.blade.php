<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ env('APP_NAME', 'Laravel') }}</title>

  <!-- Vite -->
  @vite(['resources/js/app.js'])
</head>

<body>
  @include('partials.header')
  <main>
    <div class="py-5 container">
      @yield('content')
    </div>
  </main>
</body>

</html>
