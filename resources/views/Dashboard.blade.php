<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <h1>Dashboard Utama</h1>
    <p>Selamat datang, <strong>{{ $name }}</strong>!</p>
    <p>Anda berhasil login.</p>
    <p>Menu: <a href="/items">Lihat Daftar Barang</a></p>

    <hr>
    
    <!-- Link ke route logout -->
    <form action="/logout" method="GET">
        <button type="submit">Logout dari Sistem</button>
    </form>
</body>
</html>