<h1>Create produk</h1>

<form action="/products" method="post">
  @csrf
  <input type="text" name="name" placeholder="Nama Produk"><br>
  <input type="text" name="description" placeholder="Deskripsi Barang"><br>
  <input type="number" name="price" placeholder="Harga"><br>
  <input type="text" name="image_url"> <br>

  <input type="submit" value="save">
</form>