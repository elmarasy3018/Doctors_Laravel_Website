<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Doctors</title>
</head>

<body>
    <div>
        @foreach ($doctors as $doctor)
        <div>
            {{ $doctor }}
        </div>
        @endforeach
    </div>
</body>

</html>