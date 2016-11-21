<html>
    <head>
        <title>Добавление пользователя</title>
    </head>
    <style type="text/css">
        div{
            margin-bottom: 10px;
        }
    </style>
    <body>
    <form action="add-user.php" method="post" enctype="multipart/form-data">
        <div>
            <label for="name">Имя</label>
            <input type="text" name="name" id="name">
        </div>
        <div>
            <label for="password">Пароль</label>
            <input type="password" name="password" id="password">
        </div>
        <div>
            <label for="age">Возраст</label>
            <input type="text" name="age" id="age">
        </div>
        <div>
            <label for="description">О себе</label><br />
            <textarea name="description" id="description" cols="30" rows="10"></textarea>
        </div>
        <div>
            <input type="file" name="file" id="file">
        </div>
        <div>
            <input type="submit" value="Зарегистрироваться">
            <input type="button" value="Отменить" onClick="window.location.href='index.php';">
        </div>
    </form>
    </body>
</html>