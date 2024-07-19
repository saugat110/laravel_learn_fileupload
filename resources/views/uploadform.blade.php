<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{url('/uploadform')}}" method="POST" enctype="multipart/form-data">
        @csrf

        <input type="file" name="photo" accept="image/*" required>
        <input type="submit" value="Upload">
    </form>
</body>
</html>