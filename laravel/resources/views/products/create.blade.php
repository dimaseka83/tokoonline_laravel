<form action="{{ route('products.store') }}" method="post">
    @csrf
    Name:<input type="text" name="name"><br>
    Description:<input type="text" name="description"><br>
    Price:<input type="text" name="price"><br>
    Image: <input type="text" name="image_url" id="" ><br>
    <input type="submit" value="save">
</form>