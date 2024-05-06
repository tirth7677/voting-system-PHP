<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voting System</title>
    <link rel="stylesheet" href="./css/stylesheet.css">
</head>

<body>
    <div id="headersection">
        <h1>Online Voting System</h1>
        <hr>
    </div>
    <div id="bodysection">
        <form action="./api/login.php" method="post">
            <input type="number" name="mobile" placeholder="Enter Mobile Number"><br><br>
            <input type="password" name="password" placeholder="Enter Password"><br><br>
            <select id="dropbox" name="role">
                <option value="1">Voter</option>
                <option value="2">Group</option>
            </select><br><br>
            <button id="loginbtn" type="submit">Login</button><br><br>
            New User? <a href="./routes/register.php">Register Here</a>
        </form>
    </div>
</body>

</html>