<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventori E-Book</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }
        h1 {
            margin: 0;
        }
        main {
            padding: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 8px;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
            color: #333;
        }
        tr:hover {
            background-color: #f5f5f5;
        }
        .button {
            background-color: #008CBA;
            border: none;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 4px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Inventori E-Book</h1>
    </header>
    <main>
        <table>
            <thead>
                <tr>
                    <th>Judul</th>
                    <th>Penulis</th>
                    <th>Tahun Terbit</th>
                    <th>Stok</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <!-- Data E-Book akan ditampilkan di sini -->
                <tr>
                    <td>Harry Potter and the Philosopher's Stone</td>
                    <td>J.K. Rowling</td>
                    <td>1997</td>
                    <td>10</td>
                    <td><button class="button">Edit</button> <button class="button">Hapus</button></td>
                </tr>
                <tr>
                    <td>The Great Gatsby</td>
                    <td>F. Scott Fitzgerald</td>
                    <td>1925</td>
                    <td>5</td>
                    <td><button class="button">Edit</button> <button class="button">Hapus</button></td>
                </tr>
                <!-- Contoh data, bisa disesuaikan dengan data inventori sesungguhnya -->
            </tbody>
        </table>
        <button class="button">Tambah E-Book</button>
    </main>
</body>
</html>