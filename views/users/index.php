<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            width: 100%;
        }
    </style>
</head>
<body>
    <?php require_once BASE_PATH . "/views/_includes/menu.php"; ?>
    <h1>User List</h1>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>User 1</td>
                <td><a href="/users/show">Show</a></td>
            </tr>
            <tr>
                <td>2</td>
                <td>User 2</td>
                <td><a href="/users/show">Show</a></td>
            </tr>
            <tr>
                <td>3</td>
                <td>User 3</td>
                <td><a href="/users/show">Show</a></td>
            </tr>
        </tbody>
    </table>
</body>
</html>
