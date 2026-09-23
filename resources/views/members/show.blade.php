@extends('layouts.app')

<h2>Detail Anggota</h2>
<p><strong>Nama:</strong> {{ $member->nama }}</p>
<p><strong>NIM:</strong> {{ $member->nim }}</p>
<p><strong>Email:</strong> {{ $member->email }}</p>
<p><strong>No HP:</strong> {{ $member->nomor_telepon }}</p>
<p><strong>Alamat:</strong> {{ $member->alamat }}</p>
<p><strong>Status:</strong> {{ $member->status }}</p>

<a href="{{ route('members.index') }}">Kembali</a>