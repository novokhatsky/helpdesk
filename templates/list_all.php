<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Список заявок</title>
    <link href="css/my.css" rel="stylesheet" type="text/css">
    <meta name="viewport" content="width=device-width">
</head>
<body>
<div class="container">
    <div class="row">
        <h2 class="col">Список заявок</h2>
        <h2 class="col" style="text-align: right"><a href="/logout">Выход</a></h2>
    </div>
    <div class="row">
        <div class="col">
            <table class="table table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th>Номер</th>
                        <th>Cоздана</th>
                        <th>ФИО</th>
                        <th>Кабинет</th>
                        <th>Статус</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach ($bids as $bid) { ?>
                            <tr>
                                <td><a href="/admin/<?=$bid['id_bid']?>"><?=$bid['id_bid']?></a></td>
                                <td><?=$bid['dt_create']?></td>
                                <td><?=$bid['author']?></td>
                                <td><?=$bid['cabinet']?></td>
                                <td><?=$bid['sname']?></td>
                            </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>

