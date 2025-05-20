<?php
// Koneksi database
$conn = new mysqli("localhost", "root", "", "dbuas");

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil data dari tabel tbtikon
$result = $conn->query("SELECT * FROM tbtikon ORDER BY id_tikon DESC");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Tiket</title>
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
            /* width: 400px; */
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
        .tombol-atas {
            text-align: right;
            /* color: white; */
        }
        .tambah-btn {
            margin-top: 20px;
            padding: 10px;
            background-color: #3498db;
            color: white;
            border: none;
            border-radius: 4px;
            width: 15%;
            font-weight: bold;
            cursor: pointer;
            text-decoration: none;
        }
        .tambah-btn:hover {
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

    .edit-btn, .hapus-btn {
    padding: 6px 12px;
    border-radius: 4px;
    color: #fff;
    text-decoration: none;
    font-size: 13px;
}

.edit-btn {
    background-color: #f39c12;
}

.edit-btn:hover {
    background-color: #e67e22;
}

.hapus-btn {
    background-color: #e74c3c;
}

.hapus-btn:hover {
    background-color: #c0392b;
}
</style>
</head>
<body>
    <div class="form-container">
    <div class="tombol-atas">
        <button class="tambah-btn" >
        <a class="tambah-btn" href="tambah_tiket.php">Tambah</a>
    </button>
    </div>
    
        <h1 style="padding-top:20px;">Data Tiket</h1>
    <table>
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Password</th>
                <th>Telpn</th>
                <th>Jenis Tiket</th>
                <th>Jumlah</th>
                <th>Metode Bayar</th>
                <th>Fasilitas Tambahan</th>
                <th>Catatan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php if ($result && $result->num_rows > 0): ?>
                <?php while ($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?= $row['id_tikon'] ?></td>
                        <td><?= htmlspecialchars($row['nama']) ?></td>
                        <td><?= htmlspecialchars($row['email']) ?></td>
                        <td><?= htmlspecialchars($row['password']) ?></td>
                        <td><?= htmlspecialchars($row['telpn']) ?></td>
                        <td><?= htmlspecialchars($row['jenis']) ?></td>
                        <td><?= htmlspecialchars($row['jumlah']) ?></td>
                        <td><?= htmlspecialchars($row['metode']) ?></td>
                        <td><?= htmlspecialchars($row['fasilitas']) ?></td>
                        <td><?= htmlspecialchars($row['catatan']) ?></td>
                        <td>
                            <a href="edit_tiket.php?id=<?= $row['id_tikon'] ?>" class="edit-btn">Edit</a> |
                            <a href="hapus_tiket.php?id=<?= $row['id_tikon'] ?>" class="hapus-btn" onclick="return confirm('Yakin ingin menghapus data ini?');">Hapus</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            <?php else: ?>
                <tr><td colspan="11">Belum ada data.</td></tr>
            <?php endif; ?>
        </tbody>
    </table>
    </div>  
</body>
</html>

<?php $conn->close(); ?>