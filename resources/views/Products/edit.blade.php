
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LaraDeCrud  Update</title>
</head>
<body>
    <form action="{{route('products.update', $product)}}" method="POST">
        <fieldset>
        @csrf
        @method('PUT')
        <input type="disable" name="id" value="{{$product->id}}"> <br>
        <input type="text" name="name" value="{{$product->name}}"> <br>
        <textarea name="description"  cols="30" rows="10">{{$product->description}}</textarea> <br>
        <input type="text" name="price" value="{{$product->price}}"> <br>
        <button type="submit">update</button>
    </fieldset>
    </form>
</body>
</html>
