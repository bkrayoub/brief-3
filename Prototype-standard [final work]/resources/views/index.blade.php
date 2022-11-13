<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="app.css">
    <title>Home | list</title>

</head>

<body>

    <div class="container">

        <header>
            <h1>Home</h1>
            <div>
                <div class="tools">
                    <a href="{{ URL('briefs_index') }}"><button class="btn btn-primary btn-sm">Manage Brief</button></a>
                    <a href="{{ URL('promotions/add') }}"><button id="add_promo">Add Promotion</button></a>
                    <input id="search_brief" name="search" type="text" placeholder="Search..">
                </div>
            </div>
        </header>


        <div>

            <form id="promo_form" action="{{ route('insert-promotion') }}" method="POST" style="display: none;">
                @csrf
                <div>
                    <label>Promotion name:<input type="text" name="name"></label>
                    <button type="submit" name="add_promotion">Submit</button>
                </div>
            </form>


            <table class="list" id="search_table">
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Controlle</th>
                </tr>
                @foreach ($data as $row)
                    <tr>
                        <td>{{ $row->id }}</td>
                        <td>{{ $row->name }}</td>
                        <td>
                            <a href="{{ route('edit-promotion', ['id' => $row->id]) }}" class="control-btn" style="background-color: rgb(71, 180, 230)">Edit</a>
                            <a href="{{ route('delete-promotion') }}?id={{ $row->id }}" class="control-btn" style="background-color: rgb(230, 71, 71)">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </table>


        </div>

    </div>
    <script src="/index.js"></script>
</body>

</html>
