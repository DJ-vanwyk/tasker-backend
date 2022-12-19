<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    
    <title>Statuses</title>
</head>
<body>
    <h1>Statuses</h1>
    <div class="btn-group" role="group" aria-label="Basic example">
        <button type="button" class="btn btn-primary">New</button>
        <button type="button" class="btn btn-dark">Edit</button>
        <button type="button" class="btn btn-danger">Delete</button>
    </div>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col" >ID</th>
                <th scope="col">Name</th>
                <th scope="col">Created At</th>
                <th scope="col">Updated At</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data['statuses'] as $status): ?>
                <tr>
                    <td><?= $status['status_id'] ?></td>
                    <td><?= $status['name'] ?></td>
                    <td><?= $status['created_at'] ?></td>
                    <td><?= $status['updated_at'] ?></td>
                </tr>
            <?php endforeach; ?>

        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>