<form action="{{ route('products.update', $product->id) }}" method="post">
    @method('PUT')
    @csrf
    Name:<input type="text" name="name" value="{{ $product->name }}"><br>
    Description:<input type="text" name="description" value="{{ $product->description }}"><br>
    Price:<input type="text" name="price" value="{{ $product->price }}"><br>
    Image: <input type="text" name="image_url" id="" value="{{ $product->image_url }}"><br>
    <input type="submit" value="save">
</form>