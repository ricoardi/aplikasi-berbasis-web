<?php
// Koneksi database
$conn = new mysqli("localhost", "root", "", "abw");

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil data dari tabel product
$result = $conn->query("SELECT * FROM product ORDER BY product_id DESC");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Produk</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f9f9f9;
            padding: 40px;
        }
        .form-container {
            background: #fff;
            padding: 30px;
            border-radius: 8px;
            width: 400px;
            margin: auto;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h3 {
            margin-top: 0;
            border-bottom: 2px solid #3498db;
            padding-bottom: 10px;
            color: #333;
        }
        label {
            display: block;
            margin-top: 15px;
            font-weight: bold;
            color: #333;
        }
        input[type="text"],
        input[type="email"],
        input[type="number"],
        textarea {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        textarea {
            resize: vertical;
        }
        .radio-group {
            margin-top: 10px;
        }
        .radio-group label {
            font-weight: normal;
            margin-right: 15px;
        }
        .submit-btn {
            margin-top: 20px;
            padding: 10px;
            background-color: #3498db;
            color: white;
            border: none;
            border-radius: 4px;
            width: 45%;
            font-weight: bold;
            cursor: pointer;
        }
        .submit-btn:hover {
            background-color: #2980b9;
        }

        .batal-btn {
            margin-top: 20px;
            padding: 10px;
            background-color:rgb(219, 52, 66);
            color: white;
            border: none;
            border-radius: 4px;
            width: 45%;
            font-weight: bold;
            cursor: pointer;
        }
        .batal-btn:hover {
            background-color:rgb(245, 46, 46);
        }
    </style>
    <style>
    table {
        border-collapse: collapse;
        width: 100%;
        margin-top: 20px;
        font-family: Arial, sans-serif;
    }
    th, td {
        border: 1px solid #444;
        padding: 10px;
        text-align: left;
    }
    th {
        background-color: #f2f2f2;
    }
    tr:nth-child(even) {
        background-color: #fafafa;
    }
    tr:hover {
        background-color: #f1f1f1;
    }
</style>
</head>
<body>
    <div class="form-container">
        <h3>Input Data Produk</h3>
        <form method="POST" action="koneksi.php">
            <label for="product_name">Product Name :</label>
            <input type="text" id="product_name" name="product_name" required>

            <label for="product_description">Comment:</label>
            <textarea id="product_description" name="product_description" rows="4"></textarea>

            <label for="jumlah">Jumlah :</label>
            <input type="number" id="jumlah" name="jumlah" required>

            <!-- <button type="submit" class="submit-btn">Submit</button> -->
            <input type="submit" class="submit-btn" value="Simpan Produk">
            <input type="reset" class="batal-btn"  value="Batal">
        </form>




        <h3 style="padding-top:20px;">Daftar Produk</h3>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Deskripsi</th>
                <th>Jumlah</th>
            </tr>
        </thead>
        <tbody>
            <?php if ($result && $result->num_rows > 0): ?>
                <?php while ($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?= $row['product_id'] ?></td>
                        <td><?= htmlspecialchars($row['product_name']) ?></td>
                        <td><?= htmlspecialchars($row['product_description']) ?></td>
                        <td><?= $row['jumlah'] ?></td>
                    </tr>
                <?php endwhile; ?>
            <?php else: ?>
                <tr><td colspan="4">Belum ada data.</td></tr>
            <?php endif; ?>
        </tbody>
    </table>
</body>
</html>

<?php $conn->close(); ?>