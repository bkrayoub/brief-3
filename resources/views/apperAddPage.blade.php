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
        <h1 id="promotionH1">Add student in <br> <span style="color: #5A98F5">{{$promotion_name}}</span></h1>
        <form action="/addApper" method="GET" id="promotion" style="
        height: 316px;
    ">
            @csrf
            <label>First name:
                <input type="text" name="firstName">
            </label>
            <label>Last name:
                <input type="text" name="lastName">
            </label>
            <label>Email:
                <input type="text" name="email">
            </label>
            <input type="hidden" name="promo_id" value="{{$promotion_id}}">
            <button id="submit" style="height: 150px">Submit</button>
        </form>
    </div>
</body>
</html>