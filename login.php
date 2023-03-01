<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="todo.css">
    <link rel="stylesheet" href="recursos/login.css">
    <title>Login</title>
</head>

<body>
    <form action="mirarLogin.php" method="post">
        <div class="login">
            <img src="recursos/camionLogo.png" alt="">
            <div class="form-floating mb-1">
                <input type="text" class="form-control" name="usuario" id="floatingInput"
                    placeholder="name@example.com">
                <label for="floatingInput">Usuario</label>
            </div>
            <div class="form-floating ">
                <input type="password" class="form-control" name="passw" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Contraseña</label>
            </div>
            <div class="d-grid gap-2 col-6 mx-auto">

                <input class="btn btn-success" type="submit" value="Login"></input>
            </div>


        </div>
    </form>
</body>

</html>