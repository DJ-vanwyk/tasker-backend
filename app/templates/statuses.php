<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/tasker/public/app.css">
    <title>Statuses</title>
</head>
<body>
    <table class="table">
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Created At</td>
            <td>Updated At</td>
        </tr>
        <?php foreach ($data['statuses'] as $status): ?>
            <tr>
                <td><?= $status['status_id'] ?></td>
                <td><?= $status['name'] ?></td>
                <td><?= $status['created_at'] ?></td>
                <td><?= $status['updated_at'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>