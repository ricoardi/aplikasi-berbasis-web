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
    <title>Tambah Tiket</title>
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
            width: 600px;
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

        .select-group {
            margin-top: 10px;
        }

        .select-group select {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        .tombol-atas {
            text-align: right;
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
    <div class="tombol-atas">
        <button class="tambah-btn" >
        <a class="tambah-btn" href="index.php">Kembali</a>
    </button>
    </div>
        <h3>Input Data Tiket</h3>
        <form method="POST" action="koneksi.php" onsubmit="return validateForm()">
            <label for="nama">Nama :</label>
            <input type="text" id="nama" name="nama" required>
            
            <label for="email">Email :</label>
            <input type="text" id="email" name="email" required>

            <label for="password">password :</label>
            <input type="text" id="password" name="password" required>

            <label for="telpn">Telepon :</label>
            <input type="text" id="telpn" name="telpn" required>

            <label>Jenis Tiket:</label>
            <div class="radio-group">
                <label><input type="radio" name="jenis" value="Reguler" checked> Reguler (Rp. 50.000)</label>
                <label><input type="radio" name="jenis" value="VIP" > VIP (Rp. 500.000)</label>
                <label><input type="radio" name="jenis" value="VVIP" > VVIP (Rp. 200.000)</label>
            </div>
            
            <label for="jumlah">jumlah :</label>
            <input type="text" id="jumlah" name="jumlah" required>

            <label for="metode">Metode Pembayaran:</label>
            <div class="select-group">
                <select name="metode" id="metode" required>
                    <option value="" >Pilih Metode</option>
                    <option value="QRIS">QRIS</option>
                    <option value="Transfer">Transfer</option>
                    <option value="Dana">Dana</option>
                </select>
            </div>

            <label>Fasilitas Tambahan:</label>
            <div class="radio-group">
                <label><input type="radio" name="fasilitas" value="Parkir Gratis" checked> Parkir Gratis (+Rp. 20.000)</label>
                <label><input type="radio" name="fasilitas" value="Paket Makan" > Paket Makan (+Rp. 30.000)</label>
                <label><input type="radio" name="fasilitas" value="Souvenir" > Souvenir (+Rp. 25.000)</label>
            </div>

            <label for="catatan">Catatan :</label>
            <textarea id="catatan" name="catatan" rows="4"></textarea>

            <label>
                <input type="checkbox" id="setuju"> Saya Menyetujui Syarat dan Ketentuan Yang Berlaku
            </label>

            <input type="submit" class="submit-btn" value="Simpan Tiket">
            <input type="reset" class="batal-btn"  value="Batal">
        </form>

<script>
function validateForm() {
    const checkbox = document.getElementById('setuju');
    if (!checkbox.checked) {
        alert("Silakan centang dulu: Saya Menyetujui Syarat dan Ketentuan Yang Berlaku.");
        return false; // batalkan submit
    }
    return true; // lanjutkan submit
}
</script>

</body>
</html>

<?php $conn->close(); ?>