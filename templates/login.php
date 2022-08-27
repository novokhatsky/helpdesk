<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Авторизация</title>
    <link href="css/my.css" rel="stylesheet" type="text/css">
    <meta name="viewport" content="width=device-width">
</head>
<body>

<div class="container">
    <div class="row">
        <h2 class="col">Авторизация</h2>
    </div>
    <div class="row">
        <div class="col">
            <form method="post">
                <div class="form-group">
                    <label for="login">Логин:</label>
                    <div><input type="text" name="login" id="login" class="form-control" required></div>
                </div>
                <div class="form-group">
                    <label for="pass">Пароль:</label>
                    <div><input type="text" name="pass" id="pass" class="form-control" required></div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Отправить</button>
                </div>
            </form>
        </div>
        <div class="col">
        </div>
    </div>
</div>
</body>
</html>
