<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet"  href="style.css">
</head>

<body>
  <h1>TESDA Registration</h1>
    <div><h2>Registration Form</h2></div>
    <form action='connect.php' method="POST">
        <label for="users">Name:</label><br>
        <input type='text' name='name' id="name" required> <br> <br>

        <label for="email">email: </label> <br>
        <input type='text' name='email' id="email" required> <br> <br>

        <label for="phone">phone: </label> <br>
        <input type='text' name='phone' id="phone" required> <br> <br>

        <label for="btype">blood type: </label> <br>
        <input type='text' name='btype' id="btype" required> <br> <br>

        <input type='submit' name='submit' id="submit" />
    </form>

</body>
</html>
