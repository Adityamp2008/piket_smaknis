{{-- Partial topbar, dipanggil dari layouts.admin --}}
<header class="h-16 bg-white border-b border-stone-200 flex items-center justify-between px-4 lg:px-8 sticky top-0 z-20 shrink-0">
  <div class="flex items-center gap-3 min-w-0">
    <button type="button" onclick="toggleSidebar()" class="lg:hidden p-2 rounded-lg hover:bg-stone-100" aria-label="Buka menu">
      <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/></svg>
    </button>
    <div class="min-w-0">
      <h1 class="font-bold text-[17px] leading-tight truncate">@yield('page-title', 'Dashboard Piket')</h1>
      <p class="text-xs text-stone-500">@yield('page-subtitle', \Carbon\Carbon::now()->translatedFormat('l, d F Y'))</p>
    </div>
  </div>

  <div class="relative">
    <button type="button" onclick="toggleUser(event)" class="flex items-center gap-3 p-1.5 pr-3 rounded-full hover:bg-stone-100 border border-stone-200 transition">
      <span class="w-9 h-9 rounded-full bg-stone-900 text-amber-400 grid place-items-center font-bold text-sm">B</span>
      <span class="hidden sm:block text-left leading-tight">
        <span class="block text-sm font-semibold">Budi Santoso</span>
        <span class="block text-xs text-stone-500">Admin Piket</span>
      </span>
      <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-stone-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg>
    </button>

    <div id="user-menu" class="hidden absolute right-0 mt-2 w-48 bg-white rounded-xl border border-stone-200 shadow-lg overflow-hidden z-30">
      <div class="px-4 py-3 border-b border-stone-100">
        <p class="text-sm font-semibold">Budi Santoso</p>
        <p class="text-xs text-stone-500">budi@sekolah.sch.id</p>
      </div>
      <a href="#" class="block px-4 py-2.5 text-sm hover:bg-stone-100 transition">Profil Saya</a>
      <a href="#" class="flex items-center gap-2 px-4 py-2.5 text-sm font-semibold text-red-700 bg-red-50 hover:bg-red-100 transition border-t border-stone-100">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/></svg>
        Logout
      </a>
    </div>
  </div>
</header>
