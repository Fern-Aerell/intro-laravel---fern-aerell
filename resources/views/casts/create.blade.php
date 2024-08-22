<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah cast baru</title>
</head>

<body>

    <h1>Tambah cast baru</h1>
    <form method="POST" action="/cast">
        @csrf
        <div>
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" required>
        </div>
        <div>
            <label for="umur">Umur:</label>
            <input type="number" id="umur" name="umur" required>
        </div>
        <div>
            <label for="bio">Bio:</label>
            <textarea id="bio" name="bio" required></textarea>
        </div>
        <button type="submit">Simpan</button>
    </form>
    
    <a href="/cast">Kembali</a>

</body>

</html>