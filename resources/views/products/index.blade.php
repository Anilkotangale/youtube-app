<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
  
    <h1 style="color:rgb(255, 0, 230);">product</h1>
    <div>
      @if(session()->has('success'))
       <div>
        {{session('success')}}
       </div>
      @endif
    </div>
    <div>
      <div style="text-align:right;">
      <div>
        <a href="{{route('product.create')}}">Create a Product</a>
      </div>
      </div>
        <table border="2">
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Qty</th>
            <th>Price</th>
            <th>Description</th>
            <th>Edit</th>
            <th>Delete</th>
          </tr>
          @foreach($products as $product )
             <tr>
              <td>{{$product->id}}</td>
              <td>{{$product->name}}</td>
              <td>{{$product->qty}}</td>
              <td>{{$product->price}}</td>
              <td>{{$product->description}}</td>
              <td>
                <a href="{{route('product.edit',['product' => $product])}}" style="color:rgb(43, 150, 57);">Edit</a>
              </td>
              <td>
                <form method="post" action="{{route('product.destroy', ['product' => $product])}}">
                  @csrf
                  @method('delete')
                  <input style="color:rgb(210, 33, 33);" type="submit" value="Delete" />
                </form>
              </td>
             </tr>
          @endforeach
       </table>
       {{$products->onEachSide(1)->links()}}
    </div>
  
</body>
</html>