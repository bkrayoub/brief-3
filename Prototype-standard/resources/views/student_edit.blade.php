<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="app.css">
    <title>Student Update</title>
</head>
<body>
    @foreach ($data as $row)
    <div class="container text-center border border-2 rounded">
        <br><h1 >Student Update </h1><br><br>
        <table class="table">
            <form action="{{url("student")}}/{{$row->id}}/{{"update"}}" method="POST">
                @csrf
            <thead>
                <tr>
                    <th scope="col">First Name:</th>
                    <th scope="col"><input type="text" value="{{$row->first_name}}" name="first_name"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">Last Name</th>
                    <td scope="col"><input type="text" value="{{$row->last_name}}" name="last_name"></td>

                </tr>
                <tr>
                    <th scope="row">Email:</th>
                    <td scope="col"><input type="text" value="{{$row->email}}" name="email"></td>

                </tr>
            </tbody>
        </table>
        <button type="submit" class="btn btn-primary">Edit</button>
    </form>
    @endforeach
</body>
</html>

