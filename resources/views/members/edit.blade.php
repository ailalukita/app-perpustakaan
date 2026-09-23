@extends('layouts.app')

@section('title', 'Edit Anggota')

@section('content')
    <h2>Edit Data Anggota</h2>

    <form action="{{ route('members.update', $member->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div style="margin-bottom: 15px;">
            <label style="display: block; font-weight: bold; margin-bottom: 5px;">Nama:</label>
            <input type="text" name="nama" value="{{ old('nama', $member->nama) }}" required style="width: 100%; padding: 8px;">
        </div>

        <div style="margin-bottom: 15px;">
            <label style="display: block; font-weight: bold; margin-bottom: 5px;">NIM:</label>
            <input type="text" name="nim" value="{{ old('nim', $member->nim) }}" required style="width: 100%; padding: 8px;">
        </div>

        <div style="margin-bottom: 15px;">
            <label style="display: block; font-weight: bold; margin-bottom: 5px;">Email:</label>
            <input type="email" name="email" value="{{ old('email', $member->email) }}" required style="width: 100%; padding: 8px;">
        </div>

        <div style="margin-bottom: 15px;">
            <label style="display: block; font-weight: bold; margin-bottom: 5px;">Nomor Telepon:</label>
            <input type="text" name="nomor_telepon" value="{{ old('nomor_telepon', $member->nomor_telepon) }}" required style="width: 100%; padding: 8px;">
        </div>

        <div style="margin-bottom: 15px;">
            <label style="display: block; font-weight: bold; margin-bottom: 5px;">Alamat:</label>
            <textarea name="alamat" required style="width: 100%; padding: 8px; height: 80px;">{{ old('alamat', $member->alamat) }}</textarea>
        </div>

        <div style="margin-bottom: 15px;">
            <label style="display: block; font-weight: bold; margin-bottom: 5px;">Status:</label>
            <select name="status" style="width: 100%; padding: 8px;">
                <option value="aktif" {{ old('status', $member->status) == 'aktif' ? 'selected' : '' }}>Aktif</option>
                <option value="nonaktif" {{ old('status', $member->status) == 'nonaktif' ? 'selected' : '' }}>Nonaktif</option>
            </select>
        </div>

        <button type="submit" class="btn">Update</button>
        <a href="{{ route('members.index') }}" style="margin-left: 10px;">Batal</a>
    </form>
@endsection