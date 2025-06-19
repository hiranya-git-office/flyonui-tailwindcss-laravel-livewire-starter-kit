<html>
<head>
  <title>{{ $title ?? config('app.name') }}</title>
  @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="bg-base-100">
  <div class="drawer drawer-mobile min-h-screen">
    <div class="drawer-side">
      <label for="sidebar-toggle" class="drawer-overlay"></label>
      <ul class="menu p-4 w-64 bg-base-200">
        <li><a href="/">Home</a></li>
        <li><a href="/about">About</a></li>
      </ul>
    </div>
    <div class="drawer-content p-6">
      <input id="sidebar-toggle" type="checkbox" class="hidden" />
      {{ $slot }}
    </div>
  </div>
</body>
</html>
