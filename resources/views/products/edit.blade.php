<h1>Edit produk</h1>

<form action="/products/{{$product->id}}" method="post">
  @method('PUT')
  @csrf
  <input type="text" name="name" placeholder="Nama Produk" value="{{$product->name}}"><br>
  <input type="text" name="description" placeholder="Deskripsi Barang" value="{{$product->description}}"><br>
  <input type="number" name="price" placeholder="Harga" value="{{$product->price}}"><br>
  <input type="text" name="image_url" value="{{$product->image_url}}"> <br>

  <input type="submit" value="save">
</form>