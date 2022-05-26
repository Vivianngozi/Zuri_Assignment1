<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <form action="user_data.php" method= "POST">
        <label for="name">Name: </label>
        <input type="text" name="name"> </br></br>

        <label for="email">Email: </label>
        <input type="email" name="email"> </br></br>

        <label for="Date">Date of birth: </label>
        <input type="date" name="date"> </br></br>

        <label for="name">Gender: </label>
        <input type="text" name="gender"> </br></br>

        <label for="name">Country: </label>
        <input type="text" name="country"> </br></br>

        <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>