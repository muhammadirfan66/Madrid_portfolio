@extends('layouts.app')
@section('title', 'Edit Karyawan')

@section('content')
<div class="bg-white rounded-lg shadow p-6 max-w-xl mx-auto">
    <h2 class="text-lg font-semibold mb-4">✏️ Edit Karyawan</h2>

    <form action="{{ route('admin.karyawan.update', $karyawan->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label class="block text-sm font-medium mb-1">Nama</label>
            <input type="text" name="nama" value="{{ $karyawan->nama }}" 
                   class="w-full border rounded px-3 py-2" required>
        </div>
        <div class="mb-4">
            <label class="block text-sm font-medium mb-1">Jabatan</label>
            <input type="text" name="jabatan" value="{{ $karyawan->jabatan }}" 
                   class="w-full border rounded px-3 py-2" required>
        </div>
        <div class="mb-4">
            <label class="block text-sm font-medium mb-1">Departemen</label>
            <input type="text" name="departemen" value="{{ $karyawan->departemen }}" 
                   class="w-full border rounded px-3 py-2" required>
        </div>
        <div class="mb-4">
            <label class="block text-sm font-medium mb-1">No HP</label>
            <input type="text" name="no_hp" value="{{ $karyawan->no_hp }}" 
                   class="w-full border rounded px-3 py-2">
        </div>
        <div class="flex gap-2">
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                Update
            </button>
            <a href="{{ route('admin.karyawan.index') }}" 
               class="bg-gray-400 text-white px-4 py-2 rounded hover:bg-gray-500">
                Batal
            </a>
        </div>
    </form>
</div>
@endsection