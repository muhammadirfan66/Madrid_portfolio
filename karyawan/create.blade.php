@extends('layouts.app')
@section('title', 'Tambah Karyawan')

@section('content')
<div class="bg-white rounded-lg shadow p-6 max-w-xl mx-auto">
    <h2 class="text-lg font-semibold mb-4">Tambah Karyawan</h2>

    @if($errors->any())
        <div class="bg-red-100 text-red-700 px-4 py-3 rounded mb-4">
            <ul>@foreach($errors->all() as $e)<li>• {{ $e }}</li>@endforeach</ul>
        </div>
    @endif

    <form action="{{ route('admin.karyawan.store') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label class="block text-sm font-medium mb-1">Nama</label>
            <input type="text" name="name" class="w-full border rounded px-3 py-2" required>
        </div>
        <div class="mb-4">
            <label class="block text-sm font-medium mb-1">Email</label>
            <input type="email" name="email" class="w-full border rounded px-3 py-2" required>
        </div>
        <div class="mb-4">
            <label class="block text-sm font-medium mb-1">Password</label>
            <input type="password" name="password" class="w-full border rounded px-3 py-2" required>
        </div>
        <div class="mb-4">
            <label class="block text-sm font-medium mb-1">Jabatan</label>
            <input type="text" name="jabatan" class="w-full border rounded px-3 py-2" required>
        </div>
        <div class="mb-4">
            <label class="block text-sm font-medium mb-1">Departemen</label>
            <input type="text" name="departemen" class="w-full border rounded px-3 py-2" required>
        </div>
        <div class="mb-4">
            <label class="block text-sm font-medium mb-1">No HP</label>
            <input type="text" name="no_hp" class="w-full border rounded px-3 py-2">
        </div>
        <div class="flex gap-2">
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                Simpan
            </button>
            <a href="{{ route('admin.karyawan.index') }}" 
               class="bg-gray-400 text-white px-4 py-2 rounded hover:bg-gray-500">
                Batal
            </a>
        </div>
    </form>
</div>
@endsection