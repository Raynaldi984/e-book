<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .login-container {
            max-width: 300px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-top: 50px;
        }
    </style>
</head>
<body>

<div class="login-container">
    <h2>Login</h2>
    <form id="loginForm">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <button type="button" onclick="submitForm()">Login</button>
    </form>
</div>

<script>
    function submitForm() {
        var username = document.getElementById("username").value;
        var password = document.getElementById("password").value;

        // Validasi sederhana, seharusnya dilakukan di sisi server
        if (username === "contohuser" && password === "contohpassword") {
            alert("Login berhasil!");
            // Redirect ke halaman selanjutnya atau lakukan tindakan lainnya setelah login
        } else {
            alert("Login gagal. Periksa kembali username dan password Anda.");
        }
    }
</script>

</body>
</html>
