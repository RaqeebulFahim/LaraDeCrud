
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LaraDeCrud  Create</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <form action="{{route('products.store')}}" method="POST">
        <fieldset>
        @csrf

        <input type="text" name="name" placeholder="Product Name"> <br>
        <textarea name="description" id="" placeholder="Product Description" cols="30" rows="10"></textarea> <br>
        <input type="text" name="price" placeholder="Product Price"> <br>
        <button type="submit">Save</button>
    </fieldset>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
