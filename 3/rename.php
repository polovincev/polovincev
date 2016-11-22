<?php
session_start();
if(empty($_SESSION['name'])){
    header('HTTP/1.1 307 Temporary Redirect');
    header('Location: index.php');
    exit;
}
?>

<html>
    <head>
        <title>Изменение файла</title>
    </head>
    <style type="text/css">
    div{
        margin-bottom: 10px;
    }
    </style>
    <body>
    <form action="renamefile.php" method="post">
        <input type="hidden" name="oldname" value="<?php echo $_GET['name']; ?>">
        <div>
            <label for="name">Новое имя файла</label>
            <input type="text" name="name" id="name">
        </div>
            <input type="submit" value="Преименовать">
            <input type="button" value="Отменить" onClick="window.location.href='filelist.php';">
        </div>
    </form>
    </body>
</html>