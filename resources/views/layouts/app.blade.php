<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ env('APP_NAME', 'Laravel') }}</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
  

  <!-- Vite -->
  @vite(['resources/js/app.js'])
</head>

<body>
  @include('partials.header')
  <div class="main-cover">
  <main class="container">
    <div class="d-flex justify-content-between align-items-start my-3">
        <h1 class="my-5 text-white">@yield('title')</h1>
        
        @yield('actions')
    </div>

    @yield('content')
</main>
</div>
</body>

</html>
