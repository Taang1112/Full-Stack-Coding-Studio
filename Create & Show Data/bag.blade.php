<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route ('bag.submit')}}" method="POST">
        @csrf
        <div>
            <label>brand :</label>
            <input type="text" name="brand">
        </div>
        <div>
            <label>bahan :</label>
            <input type="text" name="bahan">
        </div>
        <button>Submit</button>
    </form>
</body>
</html>
