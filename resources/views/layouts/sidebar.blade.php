{{-- Partial sidebar, dipanggil dari layouts.admin --}}
@php
  $menu = $activeMenu ?? '';
@endphp

<div id="overlay" class="fixed inset-0 bg-stone-950/60 hidden z-30 lg:hidden"></div>

<aside id="sidebar" class="fixed lg:sticky top-0 z-40 inset-y-0 left-0 w-64 h-screen -translate-x-full lg:translate-x-0 transition-transform duration-200 flex flex-col bg-stone-900 text-stone-200 shrink-0">

  <div class="flex items-center gap-3 px-5 h-16 border-b border-stone-800 shrink-0">
    <div class="w-10 h-10 rounded-xl bg-amber-400 text-stone-900 grid place-items-center font-black text-lg">P</div>
    <div class="leading-tight">
      <p class="font-bold text-white text-[15px]">Piket Sekolah</p>
      <p class="text-xs text-stone-400">SMAN 1 Contoh</p>
    </div>
  </div>

  <nav class="flex-1 overflow-y-auto px-3 py-4 space-y-1 text-sm">
    <p class="px-3 pb-2 text-[11px] uppercase tracking-widest text-stone-500">Menu Utama</p>

    <a href="#"
       class="flex items-center gap-3 px-3 py-2.5 rounded-lg transition {{ $menu === 'dashboard' ? 'bg-amber-400 text-stone-900 font-semibold' : 'hover:bg-stone-800 hover:text-white' }}">
      <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/></svg>
      Dashboard
    </a>

    <a href="#"
       class="flex items-center gap-3 px-3 py-2.5 rounded-lg transition {{ $menu === 'presensi' ? 'bg-amber-400 text-stone-900 font-semibold' : 'hover:bg-stone-800 hover:text-white' }}">
      <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"/></svg>
      Presensi Piket
    </a>

    <div>
      <button type="button" onclick="toggleSubmenu('submenu-master','arrow-master')" class="w-full flex items-center justify-between px-3 py-2.5 rounded-lg hover:bg-stone-800 hover:text-white transition">
        <span class="flex items-center gap-3">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/></svg>
          Data Master
        </span>
        <svg id="arrow-master" xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg>
      </button>
      <div id="submenu-master" class="ml-11 mt-1 space-y-1 border-l border-stone-800 pl-3">
        <a href="#" class="block px-3 py-2 rounded-md hover:bg-stone-800 hover:text-amber-300 transition">Data Guru</a>
        <a href="#" class="block px-3 py-2 rounded-md hover:bg-stone-800 hover:text-amber-300 transition">Data Siswa</a>
        <a href="#" class="block px-3 py-2 rounded-md hover:bg-stone-800 hover:text-amber-300 transition">Jadwal Piket</a>
      </div>
    </div>

    <div>
      <button type="button" onclick="toggleSubmenu('submenu-rekap','arrow-rekap')" class="w-full flex items-center justify-between px-3 py-2.5 rounded-lg hover:bg-stone-800 hover:text-white transition">
        <span class="flex items-center gap-3">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
          Rekap
        </span>
        <svg id="arrow-rekap" xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg>
      </button>
      <div id="submenu-rekap" class="hidden ml-11 mt-1 space-y-1 border-l border-stone-800 pl-3">
        <a href="#" class="block px-3 py-2 rounded-md hover:bg-stone-800 hover:text-amber-300 transition">Kehadiran</a>
        <a href="#" class="block px-3 py-2 rounded-md hover:bg-stone-800 hover:text-amber-300 transition">Keterlambatan</a>
      </div>
    </div>

    <a href="#" class="flex items-center gap-3 px-3 py-2.5 rounded-lg hover:bg-stone-800 hover:text-white transition">
      <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
      Pengaturan
    </a>
  </nav>

  <div class="p-4 border-t border-stone-800 shrink-0">
    <div class="rounded-xl bg-stone-800 p-3 flex items-center gap-3">
      <div class="w-9 h-9 rounded-full bg-amber-400 text-stone-900 grid place-items-center font-bold text-sm">AS</div>
      <div class="leading-tight">
        <p class="text-sm text-white font-semibold">Petugas Piket</p>
        <p class="text-xs text-stone-400">Shift Pagi</p>
      </div>
    </div>
  </div>
</aside>
