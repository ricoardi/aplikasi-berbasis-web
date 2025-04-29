<!DOCTYPE html>
<html>
<head>
    <title>Data yang Diinputkan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f9f9f9;
            padding: 40px;
        }
        .result-container {
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
        .row {
            display: flex;
            margin-bottom: 15px;
        }
        .label {
            width: 100px;
            font-weight: bold;
            color: #333;
            flex-shrink: 0;
        }
        .separator {
            width: 10px;
            text-align: center;
            flex-shrink: 0;
        }
        .value {
            color: #555;
            flex-grow: 1;
        }
        .back-btn {
            display: inline-block;
            margin-top: 20px;
            background-color: #3498db;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 4px;
            font-weight: bold;
            text-align: center;
        }
        .back-btn:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>
    <div class="result-container">
        <h3>Data yang Diinputkan</h3>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Ambil data langsung dari POST tanpa filter
            $name    = $_POST["name"];
            $email   = $_POST["email"];
            $website = $_POST["website"];
            $comment = $_POST["comment"];
            $gender  = $_POST["gender"];

            // Tampilkan data
            echo "<div class='row'><div class='label'>Nama</div><div class='separator'>:</div><div class='value'>$name</div></div>";
            echo "<div class='row'><div class='label'>Email</div><div class='separator'>:</div><div class='value'>$email</div></div>";
            echo "<div class='row'><div class='label'>Website</div><div class='separator'>:</div><div class='value'>$website</div></div>";
            echo "<div class='row'><div class='label'>Komentar</div><div class='separator'>:</div><div class='value'>$comment</div></div>";
            echo "<div class='row'><div class='label'>Gender</div><div class='separator'>:</div><div class='value'>$gender</div></div>";
        } else {
            echo "<p>Data tidak ditemukan.</p>";
        }
        ?>

        <a href="formulir.php" class="back-btn">Kembali ke Formulir</a>
    </div>
</body>
</html>
