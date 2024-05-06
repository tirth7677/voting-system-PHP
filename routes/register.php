<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="../css/stylesheet.css">
</head>

<body>
    <div id="headersection">

        <h1>Online Voting System</h1>
    </div>
    <hr>
    <div id="bodysection">
        <h3>Register</h3>
        <form action="../api/register.php" method="post" enctype="multipart/form-data">
            <input type="text" name="name" placeholder="Enter Name">
            <input type="number" name="mobile" placeholder="Enter Mobile Number"><br><br>
            <input type="password" name="password" placeholder="Enter Password">
            <input type="password" name="cpassword" placeholder="Confirm Enter Password"><br><br>
            <input type="text" id="address" name="address" placeholder="Enter Address"><br><br>
            <center>
                <div id="imagepart">
                    Upload Image: <input type="file" name="photo">
                </div>
                <br>
                <div id="role">
                    Select Your Role: <select name="role">
                        <option value="1">Voter</option>
                        <option value="2">Group</option>
                    </select>
                </div>
            </center>
            <br>
            <button id="loginbtn">Register</button><br><br>
            Already Registered? <a href="../index.php">Login Here</a>
        </form>
    </div>
</body>

</html>