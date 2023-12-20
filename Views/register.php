<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>

<body>
    <h1>Register</h1>

    <form action="index.php?action=register" method="post">
        <label for="email">Email:</label>
        <input type="email" name="email" required><br>

        <!-- Remove the input for token to be generated automatically -->

        <label for="username">Username:</label>
        <input type="text" name="username" required><br>

        <label for="first_name">First Name:</label>
        <input type="text" name="first_name" required><br>

        <label for="last_name">Last Name:</label>
        <input type="text" name="last_name" required><br>

        <label for="password">Password:</label>
        <input type="password" name="password" required><br>



        <button type="submit">Register</button>
    </form>
</body>

</html>