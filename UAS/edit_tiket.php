<?php
// Koneksi database
$conn = new mysqli("localhost", "root", "", "dbuas");

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil ID dari parameter
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

// Ambil data tiket berdasarkan ID
$sql = "SELECT * FROM tbtikon WHERE id_tikon = $id";
$result = $conn->query($sql);
$data = $result->fetch_assoc();

if (!$data) {
    echo "Data tidak ditemukan.";
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Tiket</title>
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
        label {
            display: block;
            margin-top: 15px;
            font-weight: bold;
        }
        input[type="text"], input[type="email"], textarea, select {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .radio-group {
            margin-top: 10px;
        }
        .radio-group label {
            margin-right: 15px;
        }
        .submit-btn, .batal-btn {
            margin-top: 20px;
            padding: 10px;
            border: none;
            border-radius: 4px;
            width: 48%;
            font-weight: bold;
            cursor: pointer;
            color: white;
        }
        .submit-btn { background-color: #3498db; }
        .submit-btn:hover { background-color: #2980b9; }
        .batal-btn { background-color: #e74c3c; }
        .batal-btn:hover { background-color: #c0392b; }
    </style>
</head>
<body>
    <div class="form-container">
        <h3>Edit Data Tiket</h3>
        <form method="POST" action="update_tiket.php" onsubmit="return validateForm()">
            <input type="hidden" name="id_tikon" value="<?= $data['id_tikon'] ?>">

            <label for="nama">Nama:</label>
            <input type="text" name="nama" value="<?= $data['nama'] ?>" required>

            <label for="email">Email:</label>
            <input type="email" name="email" value="<?= $data['email'] ?>" required>

            <label for="password">Password:</label>
            <input type="text" name="password" value="<?= $data['password'] ?>" required>

            <label for="telpn">Telepon:</label>
            <input type="text" name="telpn" value="<?= $data['telpn'] ?>" required>

            <label>Jenis Tiket:</label>
            <div class="radio-group">
                <label><input type="radio" name="jenis" value="Reguler" <?= ($data['jenis'] == 'Reguler') ? 'checked' : '' ?>> Reguler</label>
                <label><input type="radio" name="jenis" value="VIP" <?= ($data['jenis'] == 'VIP') ? 'checked' : '' ?>> VIP</label>
                <label><input type="radio" name="jenis" value="VVIP" <?= ($data['jenis'] == 'VVIP') ? 'checked' : '' ?>> VVIP</label>
            </div>

            <label for="jumlah">Jumlah:</label>
            <input type="text" name="jumlah" value="<?= $data['jumlah'] ?>" required>

            <label for="metode">Metode Pembayaran:</label>
            <select name="metode" required>
                <option value="">Pilih Metode</option>
                <option value="QRIS" <?= ($data['metode'] == 'QRIS') ? 'selected' : '' ?>>QRIS</option>
                <option value="Transfer" <?= ($data['metode'] == 'Transfer') ? 'selected' : '' ?>>Transfer</option>
                <option value="Dana" <?= ($data['metode'] == 'Dana') ? 'selected' : '' ?>>Dana</option>
            </select>

            <label>Fasilitas Tambahan:</label>
            <div class="radio-group">
                <label><input type="radio" name="fasilitas" value="Parkir Gratis" <?= ($data['fasilitas'] == 'Parkir Gratis') ? 'checked' : '' ?>> Parkir Gratis</label>
                <label><input type="radio" name="fasilitas" value="Paket Makan" <?= ($data['fasilitas'] == 'Paket Makan') ? 'checked' : '' ?>> Paket Makan</label>
                <label><input type="radio" name="fasilitas" value="Souvenir" <?= ($data['fasilitas'] == 'Souvenir') ? 'checked' : '' ?>> Souvenir</label>
            </div>

            <label for="catatan">Catatan:</label>
            <textarea name="catatan" rows="4"><?= $data['catatan'] ?></textarea>

            <label>
                <input type="checkbox" id="setuju"> Saya Menyetujui Syarat dan Ketentuan Yang Berlaku
            </label>

            <input type="submit" class="submit-btn" value="Update Tiket">
            <a href="index.php"><button type="button" class="batal-btn">Batal</button></a>
        </form>
    </div>
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
