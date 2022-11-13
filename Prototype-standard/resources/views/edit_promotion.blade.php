<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="app.css">
    <title>Promotions</title>
</head>
<body>
    <div class="container">
        <header>
            <div>
                <h1>Edit Promotions and add Students</h1>
                <a href="{{url('promotions')}}"><button class="btn btn-light">Home Page</button></a>
            </div>

            <div>
                <h3>Edit Promotion</h3>
                @foreach ($data as $row)
                <form action="{{url('update')}}/{{$row->id}}" method="post">
                    @csrf
                    <input type="text" value="{{$row->name}}" name="name">
                    <button class="btn btn-secondary btn-sm">Update</button>
                </form>
                <a href="{{url("studentadd")}}/{{$row->id}}"/><button class="btn btn-secondary" style="margin-top: 50px">add student</button></a>
                @endforeach
            </div>
        </header>



                <table id="student">
                    <thead>
                        <tr>
                            <th>Student first name</th>
                            <th>Student last name</th>
                            <th>email</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($student as $row)

                            <tr>
                                <td>{{$row->first_name}}</td>
                                <td>{{$row->last_name}}</td>
                                <td>{{$row->email}}</td>
                                <td>
                                    <a href="{{url("student")}}/{{$row->id}}/{{"edit"}}" class="control-btn">Edit</a>
                                    <a href="{{url("student")}}/{{$row->id}}/{{"delete"}}" class="control-btn">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                    </tbody>
                </table>
    </div>
</body>
</html>
