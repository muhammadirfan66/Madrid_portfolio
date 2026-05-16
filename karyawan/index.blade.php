@extends('layouts.app')
@section('title', 'Data Karyawan')

@section('content')
<div class="bg-white rounded-lg shadow p-6">

    <div class="flex justify-between items-center mb-4">
        <h2 class="text-lg font-semibold">Data Karyawan</h2>
        <a href="{{ route('admin.karyawan.create') }}" 
           class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
            + Tambah Karyawan
        </a>
    </div>

    @if(session('success'))
        <div class="bg-green-100 text-green-800 px-4 py-3 rounded mb-4">
            ✅ {{ session('success') }}
        </div>
    @endif

    <table class="w-full text-sm">
        <thead class="bg-gray-100">
            <tr>
                <th class="p-3 text-left">No</th>
                <th class="p-3 text-left">Nama</th>
                <th class="p-3 text-left">Email</th>
                <th class="p-3 text-left">Jabatan</th>
                <th class="p-3 text-left">Departemen</th>
                <th class="p-3 text-left">No HP</th>
                <th class="p-3 text-left">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($karyawans as $index => $karyawan)
            <tr class="border-t hover:bg-gray-50">
                <td class="p-3">{{ $index + 1 }}</td>
                <td class="p-3">{{ $karyawan->nama }}</td>
                <td class="p-3">{{ $karyawan->user->email }}</td>
                <td class="p-3">{{ $karyawan->jabatan }}</td>
                <td class="p-3">{{ $karyawan->departemen }}</td>
                <td class="p-3">{{ $karyawan->no_hp ?? '-' }}</td>
                <td class="p-3">
                    <div class="flex gap-2">
                        <a href="{{ route('admin.karyawan.edit', $karyawan->id) }}" 
                        style="background-color: #f59e0b; color: white; padding: 4px 12px; border-radius: 4px; font-size: 14px; text-decoration: none;">
                            Edit
                        </a>
                        <form action="{{ route('admin.karyawan.destroy', $karyawan->id) }}" 
                            method="POST"
                            onsubmit="return confirm('Yakin hapus karyawan ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                    style="background-color: #ef4444; color: white; padding: 4px 12px; border-radius: 4px; font-size: 14px; border: none; cursor: pointer;">
                                Hapus
                            </button>
                        </form>
                    </div>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="7" class="p-3 text-center text-gray-400">
                    Belum ada data karyawan
                </td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection