<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Anil</title>
</head>
<body>
    <h1 style="background-color:rgba(255, 99, 71, 0.5);">
    <div  style="text-align:center;">
    <h1 style="color:green;"> Create a Product !</h1>
    </div>

    <div>
        @if($errors->any())
        <ul>

            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach

        </ul>
        @endif
    </div>
    <form method="post" action="{{route('product.store')}}">
        @csrf
        @method('post')
        <div style="text-align:center;">
        <div>
            <label> Name </label>
            <input  type="text" name="name" placeholder="type your name here " />
       </div>

       <div>
        <label>Qty</label>
        <input  type="text" name="qty" placeholder="Qty " />
   </div>

   <div>
    <label>Price</label>
    <input type="text" name="price" placeholder="Price" />
   </div>

   <div>
    <label>Description</label>
    <input type="text" name="description" placeholder="Description" />
   </div>
   <div>
    <input style="background-color:Tomato;" type="submit"  value="Submit" />
   </div>
        </div>
    </form>
    </h1>
</body>
</html>