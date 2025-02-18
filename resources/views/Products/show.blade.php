 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Laravel LaraDeCrud </title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
 </head>

 <body>
     <div class="container my-5">
        <h1 class="text-center p-5 bg-info rounded text-light">Product Details</h1>
         <table class="table table-striped" border="1">
             <thead>
                 <tr>
                     <th>Id</th>
                     <th>Name</th>
                     <th>Description</th>
                     <th>Price</th>

                 </tr>
             </thead>
             <tbody>
                 <tr>
                     <td>{{ $product->id }}</td>
                     <td>{{ $product->name }}</td>
                     <td>{{ $product->description }}</td>
                     <td>{{ $product->price }}</td>
                 </tr>
             </tbody>

         </table>
         <a class="btn btn-primary float-end me-2" href="{{ route('products.index') }}">Back</a>
     </div>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
 </body>

 </html>
