<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo XSS Sederhana</title>
    <style>
        body { font-family: Arial, sans-serif; max-width: 800px; margin: 0 auto; padding: 20px; }
        .container { background: #f5f5f5; padding: 20px; border-radius: 5px; }
        input[type="text"] { width: 100%; padding: 8px; margin: 10px 0; }
        button { background: #4CAF50; color: white; padding: 10px 15px; border: none; cursor: pointer; }
        .output { margin-top: 20px; padding: 15px; background: #eee; border-left: 4px solid #4CAF50; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Demo XSS Sederhana</h1>
        <p>Ini adalah contoh halaman dengan kerentanan XSS untuk tujuan pembelajaran.</p>

        <form method="GET" action="">
            <label for="input">Masukkan teks:</label>
            <input type="text" id="input" name="input" placeholder="Coba masukkan script...">
            <button type="submit">Submit</button>
        </form>

        <?php
        if (isset($_GET['input'])) {
            $userInput = $_GET['input'];
            echo '<div class="output">';
            echo '<h3>Output:</h3>';
            echo 'Anda menulis: ' . $userInput;
            echo '</div>';
        }
        ?>

        <div style="margin-top: 30px; padding: 15px; background: #ffe6e6; border-left: 4px solid #ff5252;">
            <h3>Catatan Keamanan:</h3>
            <p>Halaman ini <strong>sengaja dibuat rentan</strong> terhadap XSS untuk tujuan pembelajaran.</p>
            <p>Jangan gunakan kode seperti ini di lingkungan produksi.</p>
            <p>Untuk memperbaiki, gunakan <code>htmlspecialchars()</code> pada output:</p>
            <pre>echo 'Anda menulis: ' . htmlspecialchars($userInput, ENT_QUOTES, 'UTF-8');</pre>
        </div>
    </div>
</body>
</html>
