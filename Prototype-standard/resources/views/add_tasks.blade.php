<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="app.css">
    <script src="https://kit.fontawesome.com/8b497b2419.js" crossorigin="anonymous"></script>
    <title>Add Task</title>
</head>
<body>


    <div class="container">
        <br><h1 >Task add </h1><br><br>
        <table class="table">
            <form action="{{url("insert_task")}}" method="POST">
            @csrf
            <thead>
                <tr>
                    <th scope="col">Task Name:</th>
                    <th scope="col"><input type="text" name="task_name"></th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <th scope="row">starting date:</th>
                    <td scope="col"><input type="date" name="start_date"></td>
                </tr>
                <tr>
                    <th scope="row">finishing date:</th>
                    <td scope="col"><input type="date" name="finish_date"></td>
                </tr>
                <tr>
                    <th scope="row">Description: </th>
                    <td scope="col"><input type="text" name="description"></td>
                </tr>

            </tbody>

        </table>
        <button type="submit" class="btn btn-primary"><i class="fa-solid fa-plus"></i>Add</button>

        <input type="hidden" value="{{$id}}"  name="id">
    </form>


</body>
</html>

