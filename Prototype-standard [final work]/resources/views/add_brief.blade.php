<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="app.css">
    <script src="https://kit.fontawesome.com/8b497b2419.js" crossorigin="anonymous"></script>
    <title>Add Brief</title>
</head>
<body>
    <div class="container">
        <h1>Brief Add </h1>
        <table class="table">
            <form action="{{url('briefs_insert')}}" method="POST">
            @csrf
            <thead>
                <tr>
                    <th scope="col">Brief Name: </th>
                    <th scope="col"><input type="text"name="brief_name"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">Creation date: </th>
                    <td><input type="date"name="creation_date"><br></td>

                </tr>
                <tr>
                    <th scope="row">Delivery date: </th>
                    <td><input type="date" name="livration_date"><br></td>

                </tr>

            </tbody>

        </table>
        <button type="submit" class="submit-btn"><i class="fa-solid fa-plus"></i> Add Brief</button>

    </div>
</body>
</html>
