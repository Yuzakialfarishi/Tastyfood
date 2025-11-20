<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background: #f4f4f4;
        }
        .sidebar {
            width: 230px;
            background: #222;
            color: #fff;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            padding: 20px;
        }
        .sidebar h2 {
            margin-top: 0;
            margin-bottom: 20px;
        }
        .sidebar a {
            display: block;
            padding: 10px;
            color: #ddd;
            text-decoration: none;
        }
        .sidebar a:hover {
            background: #444;
        }
        .content {
            margin-left: 250px;
            padding: 20px;
        }
        .card {
            background: white;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 0 5px rgba(0,0,0,0.1);
            border-radius: 5px;
        }
        .card h3 { margin-top: 0; }
    </style>
</head>
<body>

    <div class="sidebar">
        <h2>Admin Panel</h2>
        <a href="#">Dashboard</a>
        <a href="#">Kelola Berita</a>
        <a href="#">Kelola Galeri</a>
        <a href="#">Pesan Kontak</a>
        <a href="#">Logout</a>
    </div>

    <div class="content">
        <h1>Selamat Datang di Dashboard Admin</h1>

        <div class="card">
            <h3>Total Berita</h3>
            <p>12</p>
        </div>

        <div class="card">
            <h3>Total Foto Galeri</h3>
            <p>34</p>
        </div>

        <div class="card">
            <h3>Pesan Masuk</h3>
            <p>8</p>
        </div>
    </div>

</body>
</html>