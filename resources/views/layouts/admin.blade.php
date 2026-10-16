<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>@yield('title', 'Dashboard') — Piket Sekolah</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <style>
    ::-webkit-scrollbar { width: 6px; height: 6px; }
    ::-webkit-scrollbar-thumb { background: #d6d3d1; border-radius: 999px; }
  </style>
  @stack('styles')
</head>
<body class="bg-stone-100 text-stone-900 antialiased">

<div class="min-h-screen flex">

  @include('layouts.sidebar')

  <div class="flex-1 flex flex-col min-w-0 min-h-screen">

    @include('layouts.topbar')

    <main class="flex-1 p-4 lg:p-8">
      @yield('content')
    </main>

    <footer class="px-4 lg:px-8 pb-6 text-xs text-stone-400">
      Piket Sekolah SMAN 1 Contoh — Tahun ajaran 2026/2027
    </footer>

  </div>
</div>

<script>
  function toggleSubmenu(menuId, arrowId) {
    const menu = document.getElementById(menuId);
    const arrow = document.getElementById(arrowId);
    if (!menu) return;
    menu.classList.toggle('hidden');
    if (arrow) arrow.classList.toggle('rotate-180');
  }
  function toggleUser(e) {
    e.stopPropagation();
    document.getElementById('user-menu').classList.toggle('hidden');
  }
  document.addEventListener('click', function(e) {
    const um = document.getElementById('user-menu');
    if (um && !um.classList.contains('hidden') && !e.target.closest('#user-menu')) {
      um.classList.add('hidden');
    }
  });
  function toggleSidebar() {
    const sb = document.getElementById('sidebar');
    const ov = document.getElementById('overlay');
    const closed = sb.classList.contains('-translate-x-full');
    sb.classList.toggle('-translate-x-full', !closed);
    if (ov) ov.classList.toggle('hidden', !closed);
  }
  document.getElementById('overlay')?.addEventListener('click', toggleSidebar);
</script>
@stack('scripts')

</body>
</html>
