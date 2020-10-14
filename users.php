<!DOCTYPE html>
<html>
<head>
    <title>Title</title>
</head>
<body>
    <form action="addUsers.php" method="post">
        First name: <input type="text" name="forename"><br>
        Last name: <input type="text" name="surname"><br>
        Password: <input type="password" name="pwd"><br>
        House: <input type="text" name="house"><br>
        Year: <input type="text" name="year"><br>
        Gender: <select name="gender">
            <option value="M">Male</option>
            <option value="F">Female</option>
        </select><br>
        <input type="radio" name="role" value="Pupil" checked> Pupil<br>
        <input type="radio" name="role" value="Teacher"> Teacher<br>
        <input type="radio" name="role" value="Admin"> Admin<br>
        <input type="submit" value="Add user"><br>
</body>
</html>
