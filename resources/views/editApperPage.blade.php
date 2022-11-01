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
    <div id="action" style="
    height: 495px;
    margin-top: 122px;
">
        <h1>Edit student</h1>
        <form action="{{url('updateApperPage/'.$apper->id)}}" method="post" style="
            height: 316px;
        ">
            @csrf
            @method('PUT')
            <input type="text" name="firstName" value="{{$apper->firstName}}">
            <input type="text" name="lastName" value="{{$apper->lastName}}">
            <input type="text" name="email" value="{{$apper->email}}">
            <input type="hidden" name="promo_id" value="{{$apper->promo_id}}">
            <button>Update</button>
        </form> 
    </div>
</body>
</html>