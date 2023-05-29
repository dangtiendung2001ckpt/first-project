<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container">
    <h2>Basic Table</h2>
    <p>The .table class adds basic styling (light padding and horizontal dividers) to a table:</p>
    <table class="table">
        <thead>
        <tr>
            <th>Full Name</th>
            <th>Email</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
        <tr>
            <td>{{ data_get($user, 'name') }}</td>
            <td>{{ data_get($user, 'email') }}</td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>

</body>
</html>
