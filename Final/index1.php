<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title></title>
</head>
<body>
    <div id="form">
        <form name="form" action="user.php">
                <input type="submit" id="btns" value="Back" name = "submit" action= "user.php"/>
            </form>
            <h1>Sign In</h1>
            <form name="form" action="welcom.php" onsubmit="return isvalid()" method="POST">
                <label>Username: </label>
                <input type="text" id="user1" name="user1"></br></br>
                <label>Password: </label>
                <input type="password" id="pass1" name="pass1"></br></br>
                <input type="submit" id="btn" value="Login" name = "submit" action= "welcom.php"/>
            </form>
        </div>

</body>
</html>