<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach ($bag as $data)
  Brand Tas :  {{ $data->brand }}
    <br>
Menggunakan Bahan :
    {{ $data->bahan }}
<br>
    <form action="{{ route ('bag.delete', $data->id)}}" method="POST">
        @csrf
        <button>Delete</button>
    </form>
    <br>
    <br>
    @endforeach
   
</body>
</html>
