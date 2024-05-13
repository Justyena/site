<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
    <style>
        .container {
            width: 300px;
            margin-top: 300px;
        }
    </style>
</head>
<!-- <body>
    <form action="register.php" method="post">
        <input type="text" placeholder="login" name="login">
        <input type="text" placeholder="password" name="password">
        <input type="text" placeholder="repeat password" name="repeatpass">
        <button type="submit">Sign in</button>
    </form> -->

    <!-- <form action="login.php" method="post">
        <input type="text" placeholder="login" name="login">
        <input type="text" placeholder="password" name="password">
        <button type="submit">log in</button>
    </form> -->
    <div class="container">
        <form action="login.php" method="post">
        <div class="form-group">
            <label for="exampleInputEmail1">Enter login</label>
            <input type="login" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter login" name="login">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
        </div>
        <button type="submit" class="btn btn-primary">Log In </button>
        </form>
    </div>

</body>
</html>