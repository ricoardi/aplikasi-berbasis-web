<!DOCTYPE html>
<html>
<head>
    <title>Formulir Kontak</title>
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
            width: 100%;
            font-weight: bold;
            cursor: pointer;
        }
        .submit-btn:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h3>Formulir Kontak</h3>
        <form method="POST" action="proses.php">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" required>

            <label for="website">Website:</label>
            <input type="text" id="website" name="website">

            <label for="comment">Comment:</label>
            <textarea id="comment" name="comment" rows="4"></textarea>

            <label>Gender:</label>
            <div class="radio-group">
                <label><input type="radio" name="gender" value="Female"> Female</label>
                <label><input type="radio" name="gender" value="Male" checked> Male</label>
            </div>

            <button type="submit" class="submit-btn">Submit</button>
        </form>
    </div>
</body>
</html>
