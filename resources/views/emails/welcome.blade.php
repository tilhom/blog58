<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome</title>
</head>
<body>
    <h1>Welcome {{$user->name}} to our site!</h1>
    {{$user->created_at->format('d-m-Y h:i:s')}}
</body>
</html>