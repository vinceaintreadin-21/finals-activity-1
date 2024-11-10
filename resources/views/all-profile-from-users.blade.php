<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach ($profiles as $profile)
        <h2>{{$profile->user->name}}</h2>
        <p>{{$profile->bio}}</p>
        <p>{{$profile->school}}</p>
        <p>{{$profile->address}}</p>
        <p>{{$profile->birthdate}}</p>
        <p>{{$profile->contact_number}}</p>
        <hr>
    @endforeach
</body>
</html>
