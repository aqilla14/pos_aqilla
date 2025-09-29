<h3>Create Product</h3>
<form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
     {{csrf_field()}}
        <label>Name</label>
        <input type="text" name="name">
</br>
        <label>Description</label>
   <textarea name="description"></textarea>
</br>
        <label>Price</label><br>
        <input type="number" name="price">
</br>
        <label>Stock</label>
        <input type="number" name="stock">
</br>
        <label>Category</label>
        <select name="category_id" required>
        <option value="">-- Pilih Category --</option>
        @foreach ($categories as $category)
        <option value="{{ $category->id }}">{{ $category->name }}</option>
         @endforeach
        </select>
</br>
        <label>Status</label>
        <select name="status">
            <option value="available">Available</option>
            <option value="unavailable">Unavailable
            </option> 
</select>
</br>
        <label>Image</label>
        <input type="file" name="image">
</br>
        <button type="submit">Save</button>
</br>
</form>
