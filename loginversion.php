<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login for Versions - Minecraft Mark Versions</title>
    <link rel="stylesheet" href="index.css">
    <script>
        function playSoundIfTester(event) {
            var usernameField = document.getElementById('username');
            if (usernameField.value === 'tester') {
                event.preventDefault(); // Prevent form submission
                var audio = new Audio('666af73d0a6ba6482399935.ogg');
                audio.play();
            }
        }
    </script>
</head>
<body>
    <div class="container">
        <header>
            <h1>Login for Versions</h1>
        </header>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="loginversion.php">Versions</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="aboutme.php">About Me</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="betatest.php">Register</a></li>
            </ul>
        </nav>
        <main>
            <h2>To see versions, please log in</h2>
            <p>You need to log in to access the versions of Minecraft Mark. Please use the login form below:</p>
            <form onsubmit="playSoundIfTester(event)">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required><br><br>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required><br><br>
                <input type="submit" value="Login">
            </form>
        </main>
        <footer>
            <p>&copy; 2012 Minecraft Mark. All rights reserved.</p>
        </footer>
    </div>
</body>
</html>
