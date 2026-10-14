@extends('layouts.admin', ['activeMenu' => 'dashboard'])

@section('title', 'Dashboard Admin')
@section('page-title', 'Dashboard Piket')

@section('content')
  {{-- Ringkasan --}}
  <div class="grid grid-cols-2 xl:grid-cols-4 gap-4">
    <div class="rounded-2xl bg-white border border-stone-200 p-5">
      <p class="text-xs text-stone-500">Petugas Hari Ini</p>
      <p class="mt-1 text-3xl font-black">4</p>
      <p class="mt-1 text-xs text-stone-500">2 pagi, 2 siang</p>
    </div>
    <div class="rounded-2xl bg-white border border-stone-200 p-5">
      <p class="text-xs text-stone-500">Hadir Tepat Waktu</p>
      <p class="mt-1 text-3xl font-black">312</p>
      <p class="mt-1 text-xs text-stone-500">Siswa tercatat masuk</p>
    </div>
    <div class="rounded-2xl bg-stone-900 text-white p-5">
      <p class="text-xs text-stone-400">Terlambat</p>
      <p class="mt-1 text-3xl font-black text-amber-400">18</p>
      <p class="mt-1 text-xs text-stone-400">Perlu catatan piket</p>
    </div>
    <div class="rounded-2xl bg-white border border-stone-200 p-5">
      <p class="text-xs text-stone-500">Izin Keluar</p>
      <p class="mt-1 text-3xl font-black">7</p>
      <p class="mt-1 text-xs text-stone-500">Surat disetujui piket</p>
    </div>
  </div>
@endsection
