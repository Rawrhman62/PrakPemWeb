<!DOCTYPE html>
<html>
<head>
    <title>Daftar Barang</title>
    <style>
        table { width: 50%; border-collapse: collapse; margin-top: 20px; font-family: sans-serif; }
        th, td { border: 1px solid #ddd; padding: 10px; text-align: left; }
        th { background-color: #f4f4f4; }
        .btn { padding: 5px 10px; text-decoration: none; background: #eee; border: 1px solid #ccc; color: black; }
    </style>
</head>
<body>
    <h1>List Barang</h1>
    <p>Halo, {{ session('user_name') }}! Berikut daftar stok kita:</p>
    
    <a href="/dashboard" class="btn">⬅ Kembali ke Dashboard</a>
    
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Barang</th>
                <th>Stok</th>
                <th>Harga</th>
            </tr>
        </thead>
        <tbody>
            @foreach($items as $item)
            <tr>
                <td>{{ $item['id'] }}</td>
                <td>{{ $item['nama'] }}</td>
                <td>{{ $item['stok'] }}</td>
                <td>{{ $item['harga'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <br>
    <hr>
    <a href="/logout" style="color:red">Logout</a>
</body>
</html>