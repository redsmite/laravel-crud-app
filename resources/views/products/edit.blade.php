<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Edit a Product</h1>
    <div>
        @if($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif
    </div>
    <form method="POST" action="{{ route('products.update', ['product' => $product]) }}">
        @csrf
        @method('put')
        <div>
            <label>Name</label>
            <input type="text" name="name" value="{{$product->name}}">
        </div>

        <div>
            <label>Qty</label>
            <input type="text" name="qty" value="{{$product->qty}}">
        </div>

        <div>
            <label>Price</label>
            <input type="text" name="price" value="{{$product->price}}">
        </div>

        <div>
            <label>Description</label>
            <input type="text" name="description" value="{{$product->description}}">
        </div>

        <button type="submit">Update</button>
    </form>

</body>
</html>