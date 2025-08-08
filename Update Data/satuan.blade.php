<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route ('bag.update', $bag->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label>brand :</label>
            <input type="text" name="brand" value="{{ $bag->brand }}">
        </div>
        <div>
            <label>bahan :</label>
            <input type="text" name="bahan"  value="{{ $bag->bahan }}">
        </div>
        <button>Submit</button>
    </form>
</body>
</html>
