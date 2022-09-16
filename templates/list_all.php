<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Список заявок</title>
    <link href="/css/my.css" rel="stylesheet" type="text/css">
    <meta name="viewport" content="width=device-width">
</head>
<body>
<div class="container">
    <div class="row" style="align-items: center">
        <h2 class="col">Список заявок</h2>
        <h4>Показать:
            <select id="filter" onchange="filtered()">
                <option value=""></option>
                <option value="">все</option>
                <option value="1">новые</option>
                <option value="2">в работе</option>
                <option value="3">выполненные</option>
                <option value="4">отклоненные</option>
            </select>
        </h4>
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
<script>

function filtered() {
    const el = document.getElementById('filter');
    switch (el.value) {

        case '1':
            window.location.href = '/admin/filter/1';
            break;

        case '2':
            window.location.href = '/admin/filter/2';
            break;

        case '3':
            window.location.href = '/admin/filter/3';
            break;

        case '4':
            window.location.href = '/admin/filter/4';
            break;

        default:
            window.location.href = '/admin';
            break;
    }
}

</script>
</body>
</html>

