<h3>Form Edit Customer</h3>

<form action="{{ route('customers.update',  $dataeditcustomer->customer_id) }}" method="POST">
    {{csrf_field()}}
    @method('PUT')
    <label>Nama:</label>
    <input type="text" name="name" value="{{ $dataeditcustomer->name}}" required>
    <br>
    <label>Phone:</label>
    <input type="text" name="phone">
    <br>
    <label>Address:</label>
    <textarea name="address">{{ $dataeditcustomer->address}}</textarea>
    <br>
    <button type="submit">Update</button>
</form>