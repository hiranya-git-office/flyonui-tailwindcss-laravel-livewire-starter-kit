<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>{{ $title ?? config('app.name') }}</title>

  @vite(['resources/css/app.css', 'resources/js/app.js'])
  @livewireStyles
</head>
<body class="min-h-screen bg-base-100">
  <div class="drawer drawer-mobile">
    <!-- Sidebar -->
    <div class="drawer-side">
      <label for="sidebar-toggle" class="drawer-overlay"></label>
      <ul class="menu p-4 w-80 bg-base-200 text-base-content">
        <li><a href="{{ route('home') }}" wire:navigate>Home</a></li>
        <li><a href="{{ route('about') }}" wire:navigate>About</a></li>
      </ul>
    </div>

    <!-- Main content -->
    <div class="drawer-content p-6">
      <input id="sidebar-toggle" type="checkbox" class="hidden" />
      <livewire:nav-bar />
      {{ $slot }}
    </div>
  </div>

  @livewireScripts
</body>
</html>
