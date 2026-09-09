<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Buku</title>
    <style>
        body { font-family: sans-serif; margin: 40px; }
        .form-group { margin-bottom: 15px; }
        label { display: block; margin-bottom: 5px; }
        input, select { width: 100%; padding: 8px; box-sizing: border-box; }
        .btn { padding: 8px 16px; background: #2563eb; color: #fff; border: none; border-radius: 4px; cursor: pointer; }
        .error { color: red; font-size: 14px; }
    </style>
</head>
<body>
    <h1>Tambah Buku Baru</h1>

    <form action="{{ route('books.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label>Judul Buku</label>
            <input type="text" name="judul" value="{{ old('judul') }}">
            @error('judul') <span class="error">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label>Penulis</label>
            <input type="text" name="penulis" value="{{ old('penulis') }}">
            @error('penulis') <span class="error">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label>Penerbit</label>
            <input type="text" name="penerbit" value="{{ old('penerbit') }}">
            @error('penerbit') <span class="error">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label>Tahun Terbit</label>
            <input type="number" name="tahun_terbit" value="{{ old('tahun_terbit') }}">
            @error('tahun_terbit') <span class="error">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label>ISBN</label>
            <input type="text" name="isbn" value="{{ old('isbn') }}">
            @error('isbn') <span class="error">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label>Kategori</label>
            <select name="category_id">
                <option value="">-- Pilih Kategori --</option>
                @foreach ($categories as $cat)
                    <option value="{{ $cat['id'] }}" {{ old('category_id') == $cat['id'] ? 'selected' : '' }}>
                        {{ $cat['nama_kategori'] }}
                    </option>
                @endforeach
            </select>
            @error('category_id') <span class="error">{{ $message }}</span> @enderror
        </div>

        <button type="submit" class="btn">Simpan</button>
        <a href="{{ route('books.index') }}">Batal</a>
    </form>
</body>
</html>