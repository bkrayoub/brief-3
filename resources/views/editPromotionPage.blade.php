
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ URL::asset('style.css') }}">
    <title>Document</title>
</head>
<body>
    <div id="action">
        <h2>Edit promotion</h2>
        <form action="{{url('updatePromotion/'.$promotion->id)}}" method="post">
            @csrf
            @method('PUT')
            <input type="text" value="{{$promotion->Promo_name}}" name="name">
            <a href="{{url('deletePromotion/'.$promotion->id)}}" id="deleteBtn">Delete</a>
            <button>Update</button>
        </form>
    </div>
</body>
</html>

