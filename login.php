  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car parking</title>
    <link rel="stylesheet" href="admin.css">
</head>
<body style="height:100vh; background: linear-gradient(to bottom, #33ccff 0%, #ff99cc 100%);">
    <h1 style="color:purple;">Parking Lot Management System </h1>
    <div class="form">
        <div class="login-form">
            <h1>Login Admin Form</h1>
            <form action="validate.php" method="post">
                <label for="">Username:</label>
                <input type="text" name="username" placaholder="username"> <br><br>
                <label for="">Password:</label>
                <input type="password" name="password" placaholder="Password"> <br><br>
                <input type="submit" class="submit" value="Login" style="border-radius:30px 30px">
            </form>
        </div>
    </div>
</body>
</html>