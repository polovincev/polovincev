<html>
    <head>
        <title>Логин</title>
    </head>
    <style type="text/css">
    div{
        margin-bottom: 10px;
    }
    </style>
    <body>
    <form action="login.php" method="post">
        <div>
            <label for="name">Имя</label>
            <input type="text" name="name" id="name">
        </div>
        <div>
            <label for="password">Пароль</label>
            <input type="password" name="password" id="password">
        </div>
            <input type="submit" value="Войти">
            <input type="button" value="Зарегистрироваться" onClick="window.location.href='reg.php';">
        </div>
    </form>
    </body>
</html>