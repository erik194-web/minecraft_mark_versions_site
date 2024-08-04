<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beta Test Registration - Minecraft Mark Versions</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div class="container">
        <header>
            <h1>Beta Test Registration</h1>
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
            <h2>Register for Beta Testing</h2>
            <p>Interested in testing new versions of Minecraft Mark? Register below:</p>
            <form action="register.php" method="post">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required><br><br>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required><br><br>
                <input type="submit" value="Register">
            </form>
        </main>
        <footer>
            <p>&copy; 2012 Minecraft Mark. All rights reserved.</p>
        </footer>
    </div>
</body>
</html>
